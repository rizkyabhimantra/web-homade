<?php

namespace App\Exports;

use App\Service\AchievementService;
use App\Service\CategoryService;
use App\Service\PartnerService;
use App\Service\PaymentMethodService;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithDefaultStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PartnerExport implements FromQuery, ShouldAutoSize, ShouldQueue, WithCustomStartCell, WithDefaultStyles, WithHeadings, WithMapping, WithStyles
{
    use Exportable;

    private string $title = 'List Partner Homade';

    private int $total_data = 0;

    public function __construct() {
        $this->total_data = (new PartnerService())->all(is_has_limit:false)->count();
        $this->title = $this->title . ' ('. $this->total_data .')';
    }

    public function query()
    {
        return (new PartnerService())->all(
            is_has_limit: false,
            is_query: true,
        );
    }

    public function headings(): array
    {

        $columns = [
            'No',
            'Nama Partner',
            'Bergabung Bersama Pada',
            'Dibuat Pada'
        ];

        return [
            // title
            [$this->title], // b4
            [], // blank space // b5
            $columns, // b6
        ];

    }

    public function map($partner): array
    {
        return [
            $partner->no,
            $partner->name,
            $partner->join_at ? Carbon::parse($partner->join_at)->toDateString() : 'Tidak Ada Keterangan',
            $partner->created_at,
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
                'wrapText' => true,
            ],
        ];
    }

    public function prepareRows($rows){
        return $rows->map(function($row, $index){
            $row->no = $index + 1;
            return $row;
        });
    }



}
