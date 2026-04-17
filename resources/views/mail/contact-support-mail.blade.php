@include('components.header')

<div class="d-flex w-100 min-h-100 p-15 px-5 px-md-15 bg-accent">
    <div class="d-flex flex-column bg-white p-10 align-items-center justify-content-between w-100">
    
        <p class=" w-100 fsc-4 text-center fw-bold text-accent mb-0">Pesan Masuk Dari Customer</p>
        <p class=" w-100 fsc-2 text-center fw-semibold">Ada customer yang mengirim pesan melalui sistem kontak admin di website homade</p>

        <div class="d-flex w-100 h-100 flex-column align-items-center justify-content-center">

            <p class="fsc-3 fw-semibold mb-1 w-100">Nama Pengirim: {{ $mailData['fullname'] }}</p>
            <p class="fsc-3 fw-semibold mb-1 w-100">Alamat Email Pengirim: <a href="mailto:{{ $mailData['email'] }}">{{ $mailData['email'] }}</a></p>
            <br>
                
            <div class="d-flex w-100 flex-column p-3 border-homade-1 rounded-2">
                <p class="fsc-3 mb-1 w-100 fw-semibold">{{ $mailData['subject'] }}</p>
                <p class="fsc-2 mb-1 w-100 h-200px overflow-scroll">{{ $mailData['message'] }} </p>
            </div>
        </div>
    </div>
</div>
