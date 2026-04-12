<!DOCTYPE html>
<html lang="en">
    
    @include('components.header')
    
    <body>
    @if ($response['status'] === 'success')

    <div class="d-flex w-100 h-100 align-items-center justify-content-center flex-column">
        <div class="d-flex flex-column px-10 py-15 w-35 border-homade-1 rounded-3 gap-3">
            
            <h2>Detail Tema - {{ $response['data']['name'] }}</h2>

            <form action="{{ route('admin.edit-theme', ['id' => $response['data']['id']] ) }}" method="post" style="display:flex; flex-direction: column; gap:10px;">
                @csrf
                @method('put')
                <label for="name">Nama Tema</label>
                <input id="name" class="border-homade-1 px-3 py-2 rounded-2 mb-2" type="text" name="name" value="{{ old('name') ?? $response['data']['name'] }}">
                <label for="description">Deskripsi Tema</label>
                <textarea id="description" class="border-homade-1 w-100 min-h-50px max-h-100px px-3 py-2 mb-3 rounded-2" name="description" id="">{{ old('description') ?? $response['data']['description'] }}</textarea>

                <span>Dibuat Pada: {{ $response['data']['created_at'] }}</span>
                @if ($response['data']['deleted_at'])
                <span>Dihapus Pada: {{ $response['data']['deleted_at'] }}</span>
                @endif
                
                <button class="py-3 bg-accent text-white fw-semibold rounded-2">Simpan Perubahan</button>
            </form>
            
            <div class="d-flex w-100 gap-3 align-items-stretch">
                @if ($response['data']['deleted_at'])
                <form class="w-100 py-3 bg-accent rounded-2 d-flex align-items-center justify-content-center" action="{{ route('admin.restore-theme', ['id' => $response['data']['id']] ) }}" method="post" style="display:flex; flex-direction: column; gap:10px;">
                    @csrf
                    @method('patch')
                    <button class="text-white w-100 h-100 fw-semibold ">Kembalikan tema</button>
                </form>
                @else
                <form class="w-100 py-3 bg-accent rounded-2 d-flex align-items-center justify-content-center" action="{{ route('admin.delete-theme', ['id' => $response['data']['id']] ) }}" method="post" style="display:flex; flex-direction: column; gap:10px;">
                    @csrf
                    @method('delete')
                    <button class="text-white w-100 h-100 fw-semibold ">Hapus Data Perubahan</button>
                </form>
                @endif
            </div>

            <a href="{{ route('admin.themes') }}" class="text-accent d-flex align-items-center justify-content-center bg-danger-subtle py-3 fw-semibold rounded-2">Kembali</a>

        </div>
    </div>

    @else
    <p>Error</p>
    @endif
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="{{asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>
    <script src="{{asset('assets/plugins/custom/jstree/jstree.bundle.js')}}"></script>
    <!--end::Vendors Javascript-->

</body>
</html>



@if (session()->has('response'))
<script>
    alert('{{ session()->get('response')['message'] }}')
</script>
@endif