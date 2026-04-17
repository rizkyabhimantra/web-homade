@include('components.header')

<div class="d-flex w-100 min-h-100 p-15 px-5 px-md-15 bg-accent">
    <div class="d-flex flex-column bg-white p-10 align-items-center justify-content-between w-100">
    
        
        <p class=" w-100 fsc-3 mb-0 text-center fw-bold text-accent">Password anda berhasil dirubah</p>

        <div class="d-flex flex-column w-100 h-100 justify-content-center">
            <p class="fsc-2 w-100 text-center"> Mohon Kontak Tim Support Kami Jika Anda Tidak Membuat Perubahan Ini</p>
        </div>
        
        <p class=" w-100 fsc-2 mb-1 text-center">{{ $contact['email'] }} | {{ $contact['customer_care_phone'] }}</p>
    
    
    </div>
</div>

