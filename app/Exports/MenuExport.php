<?php

namespace App\Exports;

use App\Service\MenuService;
use App\Service\PackageService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Builder;
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

class MenuExport implements FromQuery, ShouldAutoSize, ShouldQueue, WithCustomStartCell, WithDefaultStyles, WithEvents, WithHeadings, WithMapping, WithStyles
{
    use Exportable;

    private $title = 'Menu - Menu Homade';

    private Collection $packages;

    private int $total_data = 0;

    private string $product_to_link_column, $status, $status_active;

    public function __construct(
        string $status,
        string $status_active,
    )
    {
        $packageService = new PackageService;
        $this->packages = $packageService->all();

        $this->total_data = (new MenuService)->all(is_has_limit: false, is_query: true)->count();

        $this->status = $status;
        $this->status_active = $status_active;
    }

    public function query()
    {
        return (new MenuService)->all(
            status_active: $this->status_active,
            status: $this->status,
            is_with_price: true,
            is_has_limit: false,
            is_query: true,
        );
    }

    public function headings(): array
    {

        $columns = [
            'Menu ID',
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
                'Menu Aktif',
                'Dibuat Pada',
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
            [$this->title],
            [], // blank space
            $columns,
            $second_columns,
        ];

    }

    public function map($menu): array
    {
        $prices = $menu->prices->toArray();

        return [
            $menu->id,
            $menu->theme->name,
            $menu->name,
            $menu->side_dish,
            $menu->vegetable,
            $menu->chili_sauce,
            $menu->fruit,
            ...$this->packages->map(function ($package) use ($prices) {
                if (in_array($package->id, array_column($prices, 'id_package'))) {
                    $price = array_find($prices, function ($price) use ($package) {
                        return $price['id_package'] == $package->id;
                    });

                    return $price['price'];
                }

                return 'Belum Ada Harga';
            }),
            $menu->is_active ? 'Ya' : 'Tidak',
            $menu->created_at,
            route('user.detail-menu', ['id' => $menu->id]),
        ];
    }

    public function styles(Worksheet $sheet)
    {

        // merge menu_id, name, tema
        $sheet->mergeCells('B6:B7');
        $sheet->mergeCells('C6:C7');
        $sheet->mergeCells('D6:D7');

        // merge addon
        $sheet->mergeCells('E6:H6');

        // proses melakukan merge cell pada paket menu...
        $packageColumnIndex = Coordinate::columnIndexFromString('I');
        // ini tambahkan biar dapetin columnnya ya
        $packageColumnIndex += $this->packages->count() - 1;
        $packageDestinationColumn = Coordinate::stringFromColumnIndex($packageColumnIndex);
        $packageDestinationColumnFinal = Coordinate::stringFromColumnIndex($packageColumnIndex).'6';
        // merge paket menu
        $sheet->mergeCells("I6:$packageDestinationColumnFinal");
        $columnStatusActive = Coordinate::stringFromColumnIndex($packageColumnIndex + 1);
        $columnCreatedAt = Coordinate::stringFromColumnIndex($packageColumnIndex + 2);
        $columnLinkToProduct = Coordinate::stringFromColumnIndex($packageColumnIndex + 3);

        $this->product_to_link_column = $columnLinkToProduct;

        // merge column
        $sheet->mergeCells(
            $columnStatusActive.'6:'.
            $columnStatusActive.'7'
        );

        $sheet->mergeCells(
            $columnCreatedAt.'6:'.
            $columnCreatedAt.'7'
        );

        $sheet->mergeCells(
            $columnLinkToProduct.'6:'.
            $columnLinkToProduct.'7'
        );

        $sheet->mergeCells('B4:'.$columnLinkToProduct.'4');

        $sheet->getDefaultRowDimension()
            ->setRowHeight(20);

        $sheet->getRowDimension(4)->setRowHeight(40);

        // set hyperlink
        // custom numberFormat
        $sheet->getStyle(
            'I8:'.$packageDestinationColumn. 7 + $this->total_data,
        )->getNumberFormat()
            ->setFormatCode(NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);

        // custom header disini...
        $sheet->getStyle(
            'B6:'.$columnLinkToProduct. 7 + $this->total_data
        )->getBorders()
            ->applyFromArray([
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                ],
            ]);
        $sheet->getStyle('B4')
            ->applyFromArray([
                'font' => [
                    'size' => 16,
                    // 'bold' => true,
                ],
                'fill' => [
                    'fillType' => Fill::FILL_SOLID,
                    'startColor' => [
                        'argb' => Color::COLOR_YELLOW,
                    ],
                ],
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => Border::BORDER_THIN,
                    ],
                ],
            ]);

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
                for ($index = 0; $index < $this->total_data; $index++) {
                    $cell_8 = $event->sheet->getCell($this->product_to_link_column.$index + 8);
                    $cell_8->getHyperlink()->setUrl($cell_8->getValue());
                    $cell_8->setValue('Lihat Produk');
                }
            },
        ];
    }
}
