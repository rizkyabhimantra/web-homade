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

            $dates = $this->gettingPeriod($request);

            $ts = new TransactionService();

            // total_transaksi
            // $total_transactions = $
            // total_dikirimkan
            $delivereds = $ts->all(
                null,null,null,
                status_delivery: 'paid',
            );

            return$response = $this->responseData->create(
                'Berhasil Dalam Mendapatkan Ringkasan Data',
                [
                    'current_period' => $dates['period'],
                    'date' => $dates['date']
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
