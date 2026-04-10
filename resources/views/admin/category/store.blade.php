
<!DOCTYPE html>
<html lang="en">

@include('components.header')

<body>

    <div class="d-flex w-100 h-100 align-items-center justify-content-center flex-column">
        <div class="d-flex flex-column px-10 py-15 w-25 border-homade-1 rounded-3 gap-3">
        
            <h2>Tambahakan category</h2>

            <form action="{{ route('admin.add-category' ) }}" method="post" style="display:flex; flex-direction: column; gap:10px;">
                @csrf
                <label for="name">Nama Kategori</label>
                <input class="border-homade-1 px-3 py-2 rounded-2 mb-2" type="text" name="name" value="{{ old('name') }}">
                <button class="py-3 bg-accent text-white fw-semibold rounded-2">Tambahkan Kategori</button>
            </form>

            <a href="{{ route('admin.categories') }}" class="text-accent d-flex align-items-center justify-content-center bg-danger-subtle py-3 fw-semibold rounded-2">Kembali</a>

        </div>
    </div>


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