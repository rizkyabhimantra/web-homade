<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ResponseData;
use App\Service\TransactionService;
use Carbon\Carbon;
use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Log;

class MainController extends Controller
{

    private ResponseData $responseData;

    public function __construct()
    {
        $this->responseData = new ResponseData();
    }

    public function _index()
    {
        try {

            // transaksi
            //  - total transaksi
            //  - total transaksi menunggu invoice, menunggu konfirmasi bukti, di prosess, menunggu kurir, dikirimkan.
            //  menu
            //  - total paket, tema, kategori
            //  - total menu
            //  -  menu populer? & menu tidak populer berdasarkan jumlah dibelinya
            //  - total jadwal menu - menu yang aktif ambil di setiap minggunya
            // filterkan berdasarkan hari? minggu? atau gimana idk ya
            // perlu statistika penjualan?
            // import & export data?
            // atau buatkan lainnya dong

            $response = $this->responseData->create(
                'Berhasil Mendapatkan Data',
                // data: data,
                isJson: false
            );

            return view('admin.index', compact('response'));

        } catch (Exception $e) {
            Log::error($e->getMessage());
            $response = $this->responseData->create(
                'Telah Terjadi Kesalahan Pada Server',
                status: 'error',
                status_code: 500,
                isJson: false,
            );
            return view('admin.index', compact('response'));
        }
    }

    public function index(Request $request)
    {
        try {

            $period = $this->gettingPeriod($request);
            $ts = new TransactionService();

            // Ambil base query
            $transaction_query = $ts->all(null, null, null, null, null,1, null,is_query: true)->whereBetween('created_at', [$period['date']['start'], $period['date']['end']]);

            //Summary Transaksi
            $total_transactions = $transaction_query->count();
            $total_waiting_for_validation_payment_proofs = $transaction_query->clone()->whereHas('payment_proof', function ($query) {
                return $query->where('status', 'wait_for_confirmation');
            })->count();
            $total_waiting_for_invoice = $transaction_query->clone()->where('status', 'waiting_for_invoice')->count();
            $total_process_transactions = $transaction_query->clone()->where('status_delivery', 'process')->count();
            $total_waiting_for_pick_up_transactions = $transaction_query->clone()->where('status_delivery', 'waiting_for_pick_up')->count();
            $total_on_the_way_transactions = $transaction_query->clone()->where('status_delivery', 'on_the_way')->count();
            $total_delivered_transactions = $transaction_query->clone()->where('status_delivery', 'delivered')->count();


            $raw_stats = $transaction_query->clone()
                ->where('status_delivery', 'delivered')
                ->orWhereIn('status', ['success', 'paid'])
                ->groupBy('created_at')
                ->selectRaw('count(id) as total, created_at')
                ->get()
                ->groupBy(function ($t) use ($period) {
                    $format = $period['period'] === 'yearly' ? 'm-Y' : 'd-m-Y';
                    return Carbon::parse($t->created_at)->format($format);
                })
                ->map(function ($t) {
                    return $t->reduce(function ($carry, $item) {
                        return $carry + $item->total;
                    }, 0);
                });

            $init = [];

            if ($period['period'] === 'weekly') {
                for ($index = 6; $index >= 0; $index--) {
                    $date = now()->subDays($index)->format('d-m-Y');
                    array_push($init, [
                        'date' => $date,
                        'day' => 7 - $index,
                        'total' => $raw_stats->get($date) ?? 0,
                    ]);
                }
            } else if ($period['period'] === 'monthly') {
                for ($index = 4; $index > 0; $index--) {
                    $start = now()->subDays($index * 6)->startOfDay();
                    $end = $start->clone()->addDays(6)->endOfDay();
                    $count = $raw_stats->reduce(function ($carry, $value, $date) use ($start, $end) {
                        if (Carbon::parse($date)->between($start, $end)) {
                            $carry += $value;
                        }
                        return $carry;
                    }, 0);
                    array_push($init, [
                        'start' => $start->format('d-m-Y'),
                        'end' => $end->format('d-m-Y'),
                        'week' => 5 - $index,
                        'total' => $count,
                    ]);
                }
            } else if ($period['period'] === 'yearly') {
                for ($index = 11; $index >= 0; $index--) {
                    $start_date = now()->subMonths($index)->startOfMonth();
                    $end_date = $start_date->clone()->endOfMonth();
                    $count = $raw_stats->reduce(function ($carry, $value, $key) use ($start_date) {
                        if (Carbon::parse('01-' . $key)->isSameMonth($start_date)) {
                            $carry += $value;
                        }
                        return $carry;
                    }, 0);

                    array_push($init, [
                        'start' => $start_date->format('d-m-Y'),
                        'end' => $end_date->format('d-m-Y'),
                        'month' => 12 - $index,
                        'total' => $count,
                    ]);
                }
            }

            $response = $this->responseData->create(
                'Berhasil Dalam Mendapatkan Ringkasan Data',
                [
                    'current_period' => $period['period'],
                    'date' => [
                        'start' => $period['date']['start']->format('Y-m-d'),
                        'end' => $period['date']['end']->format('Y-m-d')
                    ],
                    'transaction_summary' => [
                        'total' => $total_transactions,
                        'waiting_for_invoice' => $total_waiting_for_invoice,
                        'waiting_for_confirmation_payment_proof' => $total_waiting_for_validation_payment_proofs,
                        'process' => $total_process_transactions,
                        'on_the_way' => $total_on_the_way_transactions,
                        'delivered' => $total_delivered_transactions,
                    ],
                    'statistic' => $init,
                ],
                isJson: false
            );

            return view('admin.index', compact('response'));

        } catch (Exception $e) {
            Log::error('Dashboard Error: ' . $e->getMessage());
            $response = $this->responseData->create(
                'Telah Terjadi Kesalahan Pada Server',
                status: 'error',
                status_code: 500,
                isJson: false,
            );
            return view('admin.index', compact('response'));
        }
    }


    private function gettingPeriod(Request $request)
    {
        $period = strtolower($request->query('period', 'today'));
        $allowed_periods = ['today', 'weekly', 'monthly', 'yearly'];

        // Validasi periode, default 'today'
        $period = in_array($period, $allowed_periods) ? $period : 'today';

        $end_date = Carbon::now()->endOfDay();
        $start_date = Carbon::now()->startOfDay();

        if ($period === 'weekly') {
            // 7 Hari terakhir (hari ini + 6 hari ke belakang)
            $start_date = Carbon::now()->subDays(6)->startOfDay();
        } elseif ($period === 'monthly') {
            // 30 Hari terakhir (hari ini + 29 hari ke belakang)
            $start_date = Carbon::now()->subDays(29)->startOfDay();
        } elseif ($period === 'yearly') {
            // 12 Bulan terakhir
            $start_date = Carbon::now()->subMonths(11)->startOfMonth();
        }

        return [
            'period' => $period,
            'date' => [
                'start' => $start_date,
                'end' => $end_date
            ]
        ];
    }

}
