<?php

namespace App\Http\Controllers\Admin;

use App\Exports\PackageExport;
use App\Http\Controllers\Controller;
use App\Http\Resources\PaginationResource;
use App\ResponseData;
use App\Service\PackageService;
use Exception;
use Illuminate\Http\Request;
use Log;
use Validator;

class PackageController extends Controller
{

    private ResponseData $responseData;
    private PackageService $packageService;

    public function __construct()
    {
        $this->packageService = new PackageService();
        $this->responseData = new ResponseData();
    }

    function index(Request $request)
    {
        try {
            $search = $request->query('search');
            $limit = $request->query('limit', 8);
            $status = $request->query('status', 'all');
            $packages = $this->packageService->all(
                $search,
                $limit,
                $status,
                true
            );

            if ($packages->isEmpty()) {
                $response = $this->responseData->create(
                    'Tidak dapat menemukan paket - paket menu',
                    status: 'warning',
                    status_code: 404,
                    isJson: false,
                );
                return view('admin.package.index', compact('response'));
            }

           $response = $this->responseData->create(
                'Berhasil Mendapatkan Paket - Paket Menu!',
                [
                    'pagination' => (new PaginationResource($packages))->toArray($request),
                    'packages' => $packages->toArray()['data']
                ],
                isJson: false,
            );

            return view('admin.package.index', compact('response'));


        } catch (Exception $e) {
            Log::error('Halaman Packages Error: ' . $e->getMessage());
            $response = $this->responseData->create(
                'Telah Terjadi Kesalahan Pada Server',
                status: 'error',
                status_code: 500,
                isJson: false
            );
            return view('admin.package.index', compact('response'));
        }
    }
    function detail(Request $request, string $id)
    {
        try {

            $package = $this->packageService->detail(
                $id,
                true
            );

            if (!$package) {
                $response = $this->responseData->create(
                    'Tidak dapat menemukan paket',
                    status: 'warning',
                    status_code: 404,
                    isJson: false,
                );
                return view('admin.package.detail', compact('response'));
            }

            $response = $this->responseData->create(
                'Berhasil Mendapatkan Paket Menu!',
                $package,
                isJson: false,
            );

            return view('admin.package.detail', compact('response'));

        } catch (Exception $e) {
            Log::error('Halaman Detail Package Error: ' . $e->getMessage());
            $response = $this->responseData->create(
                'Telah Terjadi Kesalahan Pada Server',
                status: 'error',
                status_code: 500,
                isJson: false
            );
            return view('admin.package.detail', compact('response'));
        }
    }

    function store()
    {
        return view('admin.package.store');
    }

    function storeHandler(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'name' => 'required|string|min:1',
                'description' => 'required|string|min:10',
                'image' => 'required|image|mimes:jpg,png,jpeg,webp|max:2048',
                'minimum_order' => 'required|int|min:1',
                'total_servings' => 'required|int|min:1'
            ], [
                'required' => ':attribute diperlukan',
                'string' => ':attribute harus berupa string atau text',
                'image' => ':attribute harus berupa sebuah gambar',
                'integer' => ':attribute harus berupa sebuah bilangan bulat',
                'mimes' => ':attribute harus berupa format jpg,png,jpeg,webp',
                'min' => ':attribute harus memiliki minimal :min',
                'max' => ':attribute harus memiliki maximal :max'
            ], [
                'name' => 'Nam Paket',
                'description' => 'Deskripsi',
                'image' => 'Gambar Paket',
                'minimum_order' => 'Minimal Pemesanan',
                'total_servings' => 'Banyaknya Porsi Yang Didapatkan'
            ]);

            if ($validator->fails()) {
                $response = $this->responseData->create(
                    'Data yang diberikan belum valid!',
                    errors: $validator->errors()->toArray(),
                    status: 'warning',
                    status_code: 422,
                    isJson: false
                );
                return redirect()->back()->withInput()->with(compact('response'));
            }

            $created_info = $this->packageService->save(
                $request->only('name', 'description', 'minimum_order', 'total_servings'),
                $request->file('image')
            );

            if (!$created_info['is_success']) {
                $response = $this->responseData->create(
                    $created_info['message'],
                    status: 'warning',
                    status_code: 400,
                    isJson: false,
                );
                return redirect()->back()->withInput()->with(compact('response'));
            }

            $response = $this->responseData->create(
                $created_info['message'],
                status_code: 201,
                isJson: false,
            );

            return redirect()->route('admin.packages')->with(compact('response'));


        } catch (Exception $e) {
            Log::error('Handler Membuat Package Error: ' . $e->getMessage());
            $response = $this->responseData->create(
                'Telah Terjadi Kesalahan Pada Server',
                status: 'error',
                status_code: 500,
                isJson: false
            );
            return redirect()->back()->withInput()->with(compact('response'));
        }
    }

    function editHandler(Request $request, string $id)
    {
        try {

            $validator = Validator::make($request->all(), [
                'name' => 'required|string|min:1',
                'description' => 'required|string|min:10',
                'image' => 'image|mimes:jpg,png,jpeg,webp|max:2048',
                'minimum_order' => 'required|int|min:1',
                'total_servings' => 'required|int|min:1'
            ], [
                'required' => ':attribute diperlukan',
                'string' => ':attribute harus berupa string atau text',
                'image' => ':attribute harus berupa sebuah gambar',
                'integer' => ':attribute harus berupa sebuah bilangan bulat',
                'mimes' => ':attribute harus berupa format jpg,png,jpeg,webp',
                'min' => ':attribute harus memiliki minimal :min',
                'max' => ':attribute harus memiliki maximal :max'
            ], [
                'name' => 'Nam Paket',
                'description' => 'Deskripsi',
                'image' => 'Gambar Paket',
                'minimum_order' => 'Minimal Pemesanan',
                'total_servings' => 'Banyaknya Porsi Yang Didapatkan'
            ]);

            if ($validator->fails()) {
                $response = $this->responseData->create(
                    'Data yang diberikan belum valid!',
                    errors: $validator->errors()->toArray(),
                    status: 'warning',
                    status_code: 422,
                    isJson: false
                );
                return redirect()->back()->withInput()->with(compact('response'));
            }

            $package = $this->packageService->detail($id);

            if (!$package) {
                $response = $this->responseData->create(
                    'Tidak dapat menemukan paket menu',
                    status: 'warning',
                    status_code: 404,
                    isJson: false,
                );
                return redirect()->back()->withInput()->with(compact('response'));
            }

            $updated_info = $this->packageService->edit(
                $package,
                $request->only('name', 'description', 'minimum_order', 'total_servings'),
                $request->file('image')
            );

            if (!$updated_info['is_success']) {
                $response = $this->responseData->create(
                    $updated_info['message'],
                    status: 'warning',
                    status_code: 400,
                    isJson: false,
                );
                return redirect()->back()->withInput()->with(compact('response'));
            }

            $response = $this->responseData->create(
                $updated_info['message'],
                isJson: false,
            );

            return redirect()->back()->with(compact('response'));


        } catch (Exception $e) {
            Log::error('Handler Merubah Package Error: ' . $e->getMessage());
            $response = $this->responseData->create(
                'Telah Terjadi Kesalahan Pada Server',
                status: 'error',
                status_code: 500,
                isJson: false
            );
            return redirect()->back()->withInput()->with(compact('response'));
        }
    }

    public function deleteHandler(Request $request, string $id)
    {
        try {

            $packages = $this->packageService->detail($id);

            if (!$packages) {
                $response = $this->responseData->create(
                    'Tidak Dapat Menemukan paket menu!',
                    status: 'warning',
                    status_code: 404,
                    isJson: false
                );
                return redirect()->back()->withInput()->with(compact('response'));
            }

            $this->packageService->delete($packages);

            $response = $this->responseData->create(
                'Berhasil dalam menghapus paket menu',
                isJson: false
            );

            return redirect()->route('admin.packages')->with(compact('response'));

        } catch (Exception $e) {
            Log::error('There Something Error When Handling Delete The Menu Package :' . $e->getMessage());
            $resposne = $this->responseData->create(
                'Telah Terjadi Kesalahan Pada Server',
                status: 'error',
                status_code: 500,
                isJson: false,
            );

            return redirect()->back()->withInput()->with(compact('response'));
        }
    }

    public function restoreHandler(Request $request, string $id)
    {
        try {

            $package = $this->packageService->detail($id, true);

            if (!$package) {
                $response = $this->responseData->create(
                    'Tidak Dapat Menemukan Paket Menu!',
                    status: 'warning',
                    status_code: 404,
                    isJson: false
                );
                return redirect()->back()->withInput()->with(compact('response'));
            }

            $this->packageService->restore($package);

            $response = $this->responseData->create(
                'Berhasil dalam mengembalikan paket menu',
                isJson: false
            );

            return redirect()->route('admin.packages')->with(compact('response'));

        } catch (Exception $e) {
            Log::error('There Something Error When Restoring The Deleted Menu Package :' . $e->getMessage());
            $resposne = $this->responseData->create(
                'Telah Terjadi Kesalahan Pada Server',
                status: 'error',
                status_code: 500,
                isJson: false,
            );

            return redirect()->back()->withInput()->with(compact('response'));
        }
    }

    public function export()
    {
        return (new PackageExport)->download('List Paket Menu Homade.xlsx');
    }
}
