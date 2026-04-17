@include('components.header')

<div class="d-flex w-100 min-h-100 p-15 px-5 px-md-15 bg-accent">
    <div class="d-flex flex-column bg-white p-10 align-items-center justify-content-between w-100">
    
        <p class=" w-100 fsc-3 text-center fw-bold text-accent">Berhasil Membuat Akun {{ $user['first_name'] }} {{ $user['last_name'] }}</p>

        <div class="d-flex w-100 h-100 flex-column align-items-center justify-content-center">

            <p class="fsc-2 w-100 text-center">Selamat Datang di keluarga homade, masakan rumahan yang pasti selalu fresh</p>
    
            <span class="h-100px"></span>

            <p class=" w-100 text-center fsc-2 mb-1"><span class="fsc-2 fw-bold">Email:</span> {{ $user['email'] }}</p>
            <p class=" w-100 text-center fsc-2 mb-1"><span class="fsc-2 fw-bold">Phone:</span> {{ $user['phone'] }}</p>
            <p class=" w-100 text-center fsc-2 mb-1"><span class="fsc-2 fw-bold">Dibuat Pada Tanggal:</span> {{ $user['created_at'] }}</p>
                
        </div>
        
    </div>
</div>