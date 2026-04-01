<?php

namespace App\Exports;

use App\Http\Resources\MenuScheduleResource;
use App\Service\MenuService;
use App\Service\PackageService;
use App\Service\ThemeService;
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
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ThemeExport implements FromQuery, ShouldAutoSize, ShouldQueue, WithCustomStartCell, WithDefaultStyles, WithHeadings, WithMapping, WithStyles
{
    use Exportable;

    private string $title = 'Jadwal Menu Mingguan Homade';

    private int $total_data = 0;

    public function __construct() {
        $this->total_data = (new ThemeService())->all(is_has_limit:false)->count();
        $this->title = $this->title . ' ('. $this->total_data .')';
    }

    public function query()
    {
        return (new ThemeService())->all(
            is_has_limit: false,
            is_query: true,
        )->with('menus');
    }

    public function headings(): array
    {

        $columns = [
            'Tema ID',
            'Nama',
            'Total Menu Yang Menggunakan Tema',
            'Dibuat Pada'
        ];

        return [
            // title
            [$this->title], // b4
            [], // blank space // b5
            $columns, // b6
        ];

    }

    public function map($theme): array
    {
        return [
            $theme->id,
            $theme->name,
            count($theme->menus) . ' Menu',
            $theme->created_at,
        ];
    }

    public function styles(Worksheet $sheet)
    {

        // customize cell title, custom color, tinggi, dll disini.
        $sheet->mergeCells('B4:E4');
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

        // custom the column cells
        $sheet->getStyle('B6:E6')->applyFromArray([
            'fill' => [
                'fillType' => FILL::FILL_SOLID,
                'startColor' => [
                    'argb' => 'FFB4C7DC'
                ]
            ]
        ]);

        // custom the column row + data row 
        $sheet->getStyle('B6:' .'E' .($this->total_data + 6)  )->applyFromArray([
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



}
