<?php

namespace App\Exports;

use App\Http\Resources\MenuScheduleResource;
use App\Service\MenuService;
use App\Service\PackageService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithDefaultStyles;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class MenuScheduleExport implements FromQuery, ShouldAutoSize, ShouldQueue, WithCustomStartCell, WithDefaultStyles, WithEvents, WithHeadings, WithMapping, WithStyles
{
    use Exportable;

    private string $title = 'Jadwal Menu Mingguan Homade';

    private string $subtitle = 'Batas Memesan Menu Mingguan Adalah H - 1 Di Jam 3 Sore WIB';

    private string $information = 'Kamu Bisa Melihat Mingguan Terkini Kami Pada Link Dibawah Ini';

    private string $schedulesPage = '';

    private string $start_of_week;

    private string $end_of_week;

    private string $column_product_to_link;
    private string|null $previous_date_at = null;

    private array $coordinateRowBlankSpaces  = [];

    private int $total_data = 0;
    private int $total_data_rows = 0;

    private Collection $packages;

    public function __construct(
        string $start_of_week,
        string $end_of_week,
    ) {
        $this->start_of_week = $start_of_week;
        $this->end_of_week = $end_of_week;
        $this->schedulesPage = route('user.schedules');

        $this->packages = (new PackageService)->all();
        $this->total_data = (new MenuService)->getByMultipleDay([$this->start_of_week, $this->end_of_week], true)->count();
    }

    public function query()
    {
        return (new MenuService)->getByMultipleDay(
            [
                $this->start_of_week,
                $this->end_of_week,
            ],
            true
        )->with([
                    'menu.prices',
                ]);
    }

    public function headings(): array
    {

        $columns = [
            'Tanggal Tersedia',
            'Tema',
            'Nama Menu',
            'Addon', // lauk sampingan
            '', // sayuran
            '', // saos
            '', // buah
            'Paket Menu',
        ];

        for ($index = 0; $index < ($this->packages->count() - 1); $index++) {
            array_push($columns, '');
        }

        $columns = [
            ...$columns,
            ...[
                'Link To Product',
            ],
        ];

        $second_columns = $columns;
        $second_columns[3] = 'Lauk Sampingan';
        $second_columns[4] = 'Sayuran';
        $second_columns[5] = 'Sambal';
        $second_columns[6] = 'Buah';

        foreach ($this->packages as $index => $package) {
            $second_columns[$index + 7] = $package->name;
        }

        return [
            // title
            [$this->title], // b4
            [], // blank space // b5
            [$this->subtitle], // b6
            [], // blank space // b7
            [$this->information], // b8,
            [$this->information], // b9,
            [], // blank space // b10
            $columns, // b11
            $second_columns, // b12
        ];

    }

    public function map($schedule): array
    {
        $prices = $schedule->menu->prices->toArray();
        $schedule = new MenuScheduleResource($schedule);
        $this->total_data_rows += 1;

        if ($schedule->is_blank_row) {
            array_push($this->coordinateRowBlankSpaces, $this->total_data_rows + 12);
            return [[]];
        }

        return [
            $schedule->date_at,
            $schedule->menu->theme->name,
            $schedule->menu->name,
            $schedule->menu->side_dish,
            $schedule->menu->vegetable,
            $schedule->menu->chili_sauce,
            $schedule->menu->fruit,
            ...$this->packages->map(function ($package) use ($prices) {
                if (in_array($package->id, array_column($prices, 'id_package'))) {
                    $price = array_find($prices, function ($price) use ($package) {
                        return $price['id_package'] == $package->id;
                    });

                    return $price['price'];
                }

                return 'Belum Ada Harga';
            }),
            route('user.detail-menu', ['id' => $schedule->menu->id]),
        ];
    }

    public function styles(Worksheet $sheet)
    {

        // customize cell title, custom color, tinggi, dll disini.
        $sheet->mergeCells('B4:L4');
        $sheet->getStyle('B4')->applyFromArray([
            'font' => [
                'size' => 16,
                'bold' => true,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                ]
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => 'FFFFBF00'
                ]
            ]
        ]);
        $sheet->getRowDimension(4)->setRowHeight(40);

        // customize subtitle cell

        $sheet->mergeCells('B6:L6');
        $sheet->getStyle('B6')->applyFromArray([
            'font' => [
                // 'size' => 11,
                'bold' => true,
            ],
        ]);

        // customize information cell 
        $sheet->mergeCells('B8:L8');
        $sheet->getStyle('B8')->applyFromArray([
            'font' => [
                'size' => 11,
            ],
        ]);

        // customize link to menu page cell
        $sheet->mergeCells('B9:L9');
        $sheet->getStyle('B9')->applyFromArray([
            'font' => [
                // 'size' => 11,
                'bold' => true,
            ],
        ]);
        $sheet->getHyperlink('B9')->setUrl($this->schedulesPage);


        // merge column - column in needed
        // merge three first column
        $sheet->mergeCells('B11:B12'); // tanggal
        $sheet->mergeCells('C11:C12'); // tema
        $sheet->mergeCells('D11:D12'); // name

        // merge addon
        $sheet->mergeCells('E11:H11');

        // processing merge call package cells
        // getting destination index cell
        $packageColumnIndex = Coordinate::columnIndexFromString('I') + ($this->packages->count() - 1);
        $packageColumnDestination = Coordinate::stringFromColumnIndex($packageColumnIndex);
        // merge the packages cell
        $sheet->mergeCells('I11:' . $packageColumnDestination . '11');

        // format the price number on packages cells
        $sheet->getStyle('I13' . ':' . $packageColumnDestination . ($this->total_data_rows + 12))->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);

        // getting product to link column name
        $this->column_product_to_link = Coordinate::stringFromColumnIndex($packageColumnIndex + 1);

        // merge product_to_link cell
        $sheet->mergeCells($this->column_product_to_link . '11' . ':' . $this->column_product_to_link . '12');

        // custom the column cells
        $sheet->getStyle('B11' . ':' . $this->column_product_to_link . '12')->applyFromArray([
            'fill' => [
                'fillType' => FILL::FILL_SOLID,
                'startColor' => [
                    'argb' => 'FFB4C7DC'
                ]
            ]
        ]);

        // custom the column row + data row 
        $sheet->getStyle('B11' . ':' . $this->column_product_to_link . $this->total_data_rows + 12)->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN
                ]
            ],
        ]);

        // custom default row Height
        $sheet->getDefaultRowDimension()->setRowHeight(20);
    }

    public function startCell(): string
    {
        return 'B4';
    }

    public function defaultStyles(\PhpOffice\PhpSpreadsheet\Style\Style $defaultStyle)
    {
        return [
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER,
                // 'wrapText' => true,
            ],
        ];
    }

    // events

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                // giving the link product cell to clickable
                for ($index = 0; $index < $this->total_data_rows; $index++) {
                    $cell_8 = $event->sheet->getCell($this->column_product_to_link . ($index + 13));
                    if ($cell_8->getValue()) {
                        $cell_8->getHyperlink()->setUrl($cell_8->getValue());
                        $cell_8->setValue('Lihat Produk');
                    }
                }

                // giving color into row blank space
                $ignoreCoordinateRows = [];
                for($index =0; $index < count($this->coordinateRowBlankSpaces); $index++){
                    $currentCoordinateIndex = $this->coordinateRowBlankSpaces[$index];
                    $event->sheet->getStyle('B' . $currentCoordinateIndex . ':' . $this->column_product_to_link . $currentCoordinateIndex)->applyFromArray([
                        'fill' => [
                            'fillType' => Fill::FILL_SOLID,
                            'startColor' => [
                                'argb' => 'FFFFBF00'
                            ]
                        ]
                    ]);
                }

            },
        ];
    }

    // prepare before mapping 
    public function prepareRows($rows)
    {
        return $rows->flatMap(function ($row) {
            $new_row = [$row];
            $blank = clone $row;
            $blank->is_blank_row = true;
            if ($this->previous_date_at && $this->previous_date_at != $row->date_at) {
                $new_row = array_merge([$blank, $blank], $new_row);
            }
            $this->previous_date_at = $row->date_at;
            return $new_row;
        });
    }
}
