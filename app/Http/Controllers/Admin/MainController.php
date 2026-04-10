<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ResponseData;
use App\Service\TransactionService;
use Carbon\Carbon;
use DB;
use Exception;
use Illuminate\Http\Request;
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
            // ini jujur say pakai ai untuk generate, karena gak tau mau di isi apa...
            // 1. Setup Filter Tanggal (Default: Bulan Ini)


            $period = $request->query('period', 'today'); // today, this_week, this_month

            $period = $this->gettingPeriod($request);

            $ts = new TransactionService();

            $transaction_query = $ts->all(null, null, null, null, 1,null, is_query:true)
            ->whereBetween('created_at', [  $period['date']['start'], $period['date']['end'] ]);

            // total_transaksi (refactor ini nannti, kayaknya ini n+1)
            $total_transactions = $transaction_query->count();
            $total_waiting_for_validation_payment_proofs = $transaction_query->clone()->whereHas('payment_proof', function($query){
                return $query->where('status', 'wait_for_confirmation');
            })->count();
            $total_waiting_for_invoice = $transaction_query->clone()->where('status', 'waiting_for_invoice')->count();
            $total_process_transactions = $transaction_query->clone()->where('status_delivery', 'process')->count();
            $total_waiting_for_pick_up_transactions = $transaction_query->clone()->where('status_delivery', 'waiting_for_pick_up')->count();
            $total_on_the_way_transactions = $transaction_query->clone()->where('status_delivery', 'on_the_way')->count();
            $total_delivered_transactions = $transaction_query->clone()->where('status_delivery', 'delivered')->count();

            // total_dikirimkan

            $response = $this->responseData->create(
                'Berhasil Dalam Mendapatkan Ringkasan Data',
                [
                    'current_period' => $period['period'],
                    'date' => $period['date'],
                    'trasnaction_summary' => [
                        'total' => $total_transactions,
                        'waiting_for_invoice' => $total_waiting_for_invoice,
                        'waiting_for_confirmation_payment_proof' => $total_waiting_for_validation_payment_proofs,
                        'process' => $total_process_transactions,
                        'on_the_way' => $total_on_the_way_transactions,
                        'delivered' => $total_delivered_transactions,
                    ]
                ]
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
        $period = strtolower($request->query('period', 'today') ?? 'today');

        $allowed_periods = ['today', 'weekly', 'monthly', 'yearly'];

        // mendapatkan periode yang valid
        $period = in_array($period, $allowed_periods) ? $period : 'today';

        // mendapatkan transaksi berdasarkan
        $start_date = now()->startOfDay();
        $end_date = now()->endOfDay();
        if ($period === 'weekly') {
            $start_date->subDays(6);
        } elseif ($period === 'monthly') {
            $start_date->subDays(30);
        } elseif ($period === 'yearly') {
            $start_date->subDays(364);
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
