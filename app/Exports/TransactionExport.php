<?php

namespace App\Exports;

use App\Service\TransactionService;
use App\Utils\TransactionHelper;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Builder;
use Log;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithDefaultStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Concerns\WithEvents;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TransactionExport implements FromQuery, ShouldAutoSize, ShouldQueue, WithCustomStartCell, WithDefaultStyles, WithHeadings, WithMapping, WithStyles, WithEvents
{
    use Exportable;

    private string $title = 'Data Pemesanan Homade Periode 6 Bulan';

    private Builder $transactionQuery;

    private array $columns = [
        'no' => [
            'label' => 'No',
            'column' => 'B',
        ],
        'order_id' => [
            'label' => 'Pemesanan ID',
            'column' => 'C',
        ],
        'customer_info' => [
            'label' => 'Informasi Pembeli',
            'column' => 'D',
        ],
        'ordered_menu' => [
            'label' => 'Menu Yang Di Pesan',
            'column' => 'E',
        ],
        'ordered_package' => [
            'label' => 'Paket Yang Dipesan',
            'column' => 'F',
        ],
        'total_servings_package' => [
            'label' => 'Konverensi Porsi',
            'column' => 'G',
        ],
        'ordered_menu_note' => [
            'label' => 'Catatan Menu',
            'column' => 'H',
        ],
        'received_info' => [
            'label' => 'Informasi Penerima',
            'column' => 'I',
        ],
        'received_address' => [
            'label' => 'Alamat Penerima',
            'column' => 'J',
        ],
        'received_address_note' => [
            'label' => 'Catatan Kurir',
            'column' => 'K',
        ],
        'estimate_delivery_hour' => [
            'label' => 'Estimasi Pengiriman',
            'column' => 'L',
        ],
        'transaction_note' => [
            'label' => 'Catatan Transaksi',
            'column' => 'M',
        ],
        'transaction_status' => [
            'label' => 'Status Transaksi',
            'column' => 'N',
        ],
    ];

    private array $rows = [

    ];

    private array $first_cell_start = [
        'column' => 'B',
        'row' => 4,
    ];

    private array $previous_data = [
        'row' => 0,
        'delivery_at' => null,
        'has_delivery_at' => false,
        'shift' => 'siang',
        'table_row_index' => 1,
        'order_id' => false,
    ];

    private int $total_data = 0;
    private int $total_data_row = 0;
    private int $current_data_row = 0;

    private int $total_servings = 0;

    public function __construct(
        string $status,
        array $final_date,
        string $title,
        bool $is_orders,
    ) {
        $this->transactionQuery = (new TransactionService)->all(
            null,
            null,
            $status,
            null,
            null,
            1,
            $final_date,
            is_query: true
        );
        $this->total_data = $this->transactionQuery->count();
        $this->title = $title;
        $this->previous_data['row'] = $this->first_cell_start['row'];
        Log::info('message-init-row: ' . $this->previous_data['row']);
    }

    public function query()
    {
        return $this->transactionQuery
            ->with(['address', 'orders'])
            ->orderBy('delivery_at'); // mendapatkan dari pengiriman terlama terlebih dahulu
    }

    public function headings(): array
    {
        return [
            $this->title
        ];
    }

    public function map($transaction): array
    {
        $shift = strtolower($transaction['delivery_info']['shift']);
        $is_different_day = $this->previous_data['delivery_at'] != $transaction['delivery_info']['delivery_at'];
        $is_different_shift = $this->previous_data['has_delivery_at'] && $this->previous_data['delivery_at'] == $transaction['delivery_info']['delivery_at'] && $shift != $this->previous_data['shift'];
        $cell = [
            [
                $is_different_day || $is_different_shift ? 1 : $this->previous_data['table_row_index'],
                $transaction['order_id'],
                $transaction['customer_info'],
                $transaction['ordered_menu'],
                $transaction['ordered_package'],
                $transaction['total_servings_package'],
                $transaction['ordered_menu_note'],
                $transaction['delivery_info']['received_name'],
                $transaction['delivery_info']['address'],
                $transaction['delivery_info']['note'],
                $transaction['delivery_info']['estimation_hour'],
                $transaction['note'],
                $transaction['status']
            ]
        ];

        // jika itu udh beda hari maka blank spacenya tiga, namun kalo beda shift blank spacenya cuman 2
        $total_blank_spaces = 0;
        if ($is_different_day) {
            $total_blank_spaces = $this->previous_data['has_delivery_at'] ? 3 : 1;

            $cell = $this->createColumn(
                $transaction,
                $cell,
                $total_blank_spaces,
            );
            $this->previous_data['table_row_index'] = $this->previous_data['has_delivery_at'] ? 0 : $this->previous_data['table_row_index'];
        }

        if ($is_different_shift) {
            $total_blank_spaces = 2;

            $cell = $this->createColumn(
                $transaction,
                $cell,
                $total_blank_spaces,
            );
            $this->previous_data['table_row_index'] = $this->previous_data['has_delivery_at'] ? 0 : $this->previous_data['table_row_index'];
        }


        $delivery_at = $transaction['delivery_info']['delivery_at'];

        if (!isset($this->rows[$delivery_at][$shift]['merge_column_rows'][$transaction['order_id']])) {
            $this->rows[$delivery_at][$shift]['merge_column_rows'][$transaction['order_id']] = [
                'start_row' => $this->previous_data['row'] + 1,
                'end_row' => $this->previous_data['row'] + 1,
            ];
        }

        $this->rows[$delivery_at][$shift]['merge_column_rows'][$transaction['order_id']]['end_row'] = $this->previous_data['row'] + 1;

        $this->previous_data['shift'] = $shift;
        $this->previous_data['delivery_at'] = $transaction['delivery_info']['delivery_at'];
        $this->previous_data['has_delivery_at'] = true;
        // berapa banyak blank psace dibuat + row tambahan dari title_kolom,sub_title_kolom dan kolom (3) 
        $this->total_servings += $transaction['total_servings_package'];
        $this->current_data_row += 1;
        $this->previous_data['row'] += 1;
        $this->previous_data['table_row_index'] += 1;
        $this->previous_data['order_id'] = $transaction['order_id'];

        // jika transaksi adlaah yang terakhir
        if ($this->current_data_row === $this->total_data_row) {
            $this->rows[$this->previous_data['delivery_at']][$this->previous_data['shift']]['total_column'] = $this->previous_data['row'] + 1;
            array_push($cell, ['Total Data  ', 'C', 'D', 'E', 'F', $this->total_servings]);
        }

        return $cell;
    }

    public function styles(Worksheet $sheet)
    {
        // customize cell title, custom color, tinggi, dll disini.
        $sheet->mergeCells('B4:N4');
        $sheet->getStyle('B4')->applyFromArray([
            'font' => [
                'size' => 16,
                'bold' => true,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                ],
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => 'FFFFBF00',
                ],
            ],
        ]);
        $sheet->getRowDimension(4)->setRowHeight(40);

        foreach ($this->rows as $row) {
            foreach ($row as $shift) {
                $this->styleTheInformationColumn($sheet, $shift['title'], $shift['is_weekend'] ?? false);
                $this->styleTheInformationColumn($sheet, $shift['sub_title'], $shift['is_weekend'] ?? false);

                $this->styleTheTableColumn($sheet, $shift['title'], $shift['total_column'] - 1);
                $this->styleTheTotalServingsCell($sheet, $shift['total_column']);

                foreach ($shift['merge_column_rows'] as $merge) {
                    $this->mergeDuplicateOrderID($sheet, $merge['start_row'], $merge['end_row']);
                }
            }
        }
        // custom default row Height
        $sheet->getDefaultRowDimension()->setRowHeight(30);
    }

    public function startCell(): string
    {
        return $this->first_cell_start['column'] . $this->first_cell_start['row'];
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

    public function prepareRows($rows)
    {
        return $rows->flatmap(function ($row, $index) {

            $delivery_at = Carbon::parse($row->delivery_at);

            return $row->orders->map(function ($order) use ($row, $index, $delivery_at) {
                $this->total_data_row += 1;
                return [
                    'no' => $index + 1,
                    'order_id' => $row->id,
                    'customer_info' => $row->user->first_name,
                    'status' => $row->currentStatus(),
                    'note' => $row->note,
                    'ordered_menu' => $order->menu_price->menu->name,
                    'ordered_package' => $order->menu_price->package->name . ' (' . $order->quantity . ')',
                    'total_servings_package' => $order->quantity * $order->menu_price->package->total_servings,
                    'ordered_menu_note' => $order->note,
                    'delivery_info' => [
                        'delivery_at' => $delivery_at->format('d-m-y'),
                        'shift' => $row->getDeliveryShift(),
                        'received_name' => $row->address->received_name . ' / ' . $row->address->phone,
                        'address' => $row->address->address,
                        'note' => $row->address->note,
                        'estimation_hour' => $delivery_at->hour . ':' . $delivery_at->minute,
                    ],
                ];
            });
        });
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                Log::info(
                    'error',
                    $this->rows
                );
            }
        ];
    }

    private function createColumn(
        $transaction,
        $cell,
        $total_blank_spaces = 3,
    ) {

        $delivery_at = $transaction['delivery_info']['delivery_at'];
        $shift = strtolower($transaction['delivery_info']['shift']);

        $shipping_title = [' Pengirman Pada ' . $delivery_at];
        $shippig_sub_title = [' Pengiriman ' . $shift . ': ' . $this->getHourByShift($transaction['delivery_info']['shift'])];
        $column = array_map(fn($column) => $column['label'], $this->columns);
        $blank_spaces = array_fill(0, $total_blank_spaces, [[]]);

        $total_column = $this->previous_data['has_delivery_at'] ? ['Total Data  ', 'C', 'D', 'E', 'F', $this->total_servings] : [];

        if ($this->previous_data['has_delivery_at']) {
            $this->total_servings = 0;
            $this->previous_data['row'] += 1;
            $this->rows[$this->previous_data['delivery_at']][$this->previous_data['shift']]['total_column'] = $this->previous_data['row'];
        }

        $this->previous_data['row'] += $total_blank_spaces;

        $this->rows[$delivery_at][$shift]['title'] = $this->previous_data['row'] + 1;
        $this->rows[$delivery_at][$shift]['sub_title'] = $this->previous_data['row'] + 2;
        $this->rows[$delivery_at][$shift]['is_weekend'] = Carbon::parse($delivery_at)->isWeekend();
        $this->rows[$delivery_at][$shift]['column'] = $this->previous_data['row'] + 3;

        $this->previous_data['row'] += 3;

        if ($this->previous_data['has_delivery_at']) {
            return array_merge([$total_column, ...$blank_spaces, $shipping_title, $shippig_sub_title, $column], $cell);
        }

        return array_merge([...$blank_spaces, $shipping_title, $shippig_sub_title, $column], $cell);
    }

    private function getHourByShift(string $shift)
    {
        $shift = strtolower($shift);
        switch ($shift) {
            case 'siang':
                return '10:00 - 12:00';
            case 'sore':
                return '15:00 - 17:00';
            default:
                return 'Jam Berada Di Luar Shift Pengiriman!';
        }
    }

    private function styleTheInformationColumn(
        Worksheet $sheet,
        $row,
        bool $is_weekend = false,
    ) {
        $coordinate_title = 'B' . $row . ':' . 'N' . $row;
        $sheet->mergeCells($coordinate_title);
        $sheet->getStyle($coordinate_title)->applyFromArray([
            'font' => [
                'size' => 12,
                'bold' => true,
                'color' => [
                    'rgb' => $is_weekend ? Color::COLOR_RED : Color::COLOR_BLACK,
                ]
            ],
            'fill' => [
                'fillType' => FILL::FILL_SOLID,
                'startColor' => [
                    'argb' => 'FFB4C7DC',
                ],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_LEFT,
                'vertical' => Alignment::VERTICAL_CENTER,
            ],
        ]);
    }

    private function styleTheTableColumn(
        Worksheet $sheet,
        $start_row,
        $end_row,
        $end_column = 'N'
    ) {
        $sheet->getStyle('B' . $start_row . ':' . $end_column . $end_row)->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                ],
            ],
        ]);
    }

    private function styleTheTotalServingsCell(
        Worksheet $sheet,
        $label_row,
    ) {
        $coordinate_label = 'B' . $label_row . ':' . 'F' . $label_row;
        $sheet->mergeCells($coordinate_label);

        $sheet->getStyle('B' . $label_row)
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_RIGHT);

        // giving border disini
        $this->styleTheTableColumn($sheet, $label_row, $label_row, 'G');
        // menambahkan warna kuning pada total penyajian menu
        $sheet->getStyle('G' . $label_row)->applyFromArray([
            'font' => [
                'size' => 12,
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => [
                    'rgb' => Color::COLOR_YELLOW,
                ],
            ],
        ]);
    }

    private function mergeDuplicateOrderID(
        Worksheet $sheet,
        $start_row,
        $end_row
    ) {

        if ($start_row == $end_row)
            return;

        $ignore_columns = ['E', 'F', 'G', 'H'];

        foreach ($this->columns as $column) {
            if (!in_array($column['column'], $ignore_columns)) {
                $sheet->mergeCells($column['column'] . $start_row . ':' . $column['column'] . $end_row);
            }
        }

    }

}
