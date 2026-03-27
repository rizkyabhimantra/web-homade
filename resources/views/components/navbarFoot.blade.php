@php
    $page;
    $placeImg = "https://placehold.co/400";
@endphp

<nav class="bg-nav h-sm-90 flex-shrink-0 d-flex flex-column align-items-center justify-content-center overflow-hidden">
    <div class="d-flex mb-5 w-100 gap-5 h-sm-40px align-items-center mt-5 flex-column flex-sm-row justify-content-center">

        <a href="/" class="{{ $page == "home" ? 'text-yellow' : 'text-white fw-light' }} fsc-4 me-sm-3">Home</a>
        <a href="/menus" class="{{ $page == "menu" ? 'text-yellow' : 'text-white fw-light' }} fsc-4 me-sm-3">Menu</a>
        <a href="/schedule" class="{{ $page == "schedule" ? 'text-yellow' : 'text-white fw-light' }} fsc-4 me-sm-3">Jadwal</a>
        <a href="/profile" class="{{ $page == "profile" ? 'text-yellow' : 'text-white fw-light' }} fsc-4 me-sm-3">Profil</a>
        <a href="/contact" class="{{ $page == "contact" ? 'text-yellow' : 'text-white fw-light' }} fsc-4 me-sm-3">Kontak</a>
        
        <a href="/" class="h-50px h-sm-100 ratio-1"><img src="{{ $placeImg }}" class="rounded-circle" alt=""></a>
    </div>

    <div class="d-flex mt-5 w-100 gap-1 h-25 align-items-center justify-content-center flex-column">
        <p class="fsc-3 flex-shrink-0 mb-0 text-white">Whatsapp Customer Care</p>
        <p class="fsc-5 h-100 align-items-center d-flex fw-bolder text-yellow gap-3 mb-0"><img src="{{asset('icons/whatsapp.svg')}}" class="h-1em" alt=""> 0857-1180-1336</p>
        <p class="fsc-2 flex-shrink-0 mb-0 fw-light text-white">(Senin - Jumat 9:00-17:00 WIB)</p>
    </div>

    <div class="d-flex w-100 mb-5 flex-column align-items-center">
        <p class="text-center text-white w-100 fsc-5 fw-bolder mb-0 h-auto">Homade Catering Jakarta</p>
        <p class="text-center text-white w-80 w-sm-100 fsc-2 fw-light">Catering harian tanpa langganan, masakan rumahan, hemat, enak, bersih di Jakarta</p>
    </div>

    <div class="d-flex w-100 h-60px h-sm-40px align-items-center mt-5 mb-5 justify-content-center">
        <div class="d-flex h-100 gap-5">
            <a href="/" class="d-flex h-100 ratio-1 bg-white align-items-center rounded-circle justify-content-center"><img class="w-50 h-50" src="{{asset('icons/facebook.svg')}}" alt=""></a>
            <a href="/" class="d-flex h-100 ratio-1 bg-white align-items-center rounded-circle justify-content-center"><img class="w-50 h-50" src="{{asset('icons/x.svg')}}" alt=""></a>
            <a href="/" class="d-flex h-100 ratio-1 bg-white align-items-center rounded-circle justify-content-center"><img class="w-50 h-50" src="{{asset('icons/instagram.svg')}}" alt=""></a>
        </div>
    </div>
    
    <div class="d-flex w-100 mb-5 flex-column align-items-center justify-content-center gap-2 flex-md-row mt-3">
        <p class="text-white fs-3">© Copyright 2017 - 2026</p>
        <p class="d-none d-md-inline text-white fs-3">|</p>
        <p class="text-white fs-3"> Homade Kreatif Teknologi</p>
    </div>
</nav>
