@php
    $placeImg = "https://placehold.co/400";
@endphp

<!DOCTYPE html>
<html lang="en">
    @include('components.header' )

    <body class="d-flex flex-column">
        @include('components.navbarHead',[ "page" => "schedule", "bg" => "grey"])
        
            <span class="h-40px flex-shrink-0"></span>

            <div class="d-flex w-100 align-items-center justify-content-center">
                <p class="fsc-6 homade-underline-black fw-black text-accent">Jadwal Menu</p>
            </div>

            <div class="d-flex align-items-center justify-content-center flex-column gap-5 w-100">

                <div class="d-flex mt-5 align-items-center justify-content-between w-80">
                    <p class="fsc-4 mb-0 fw-black">Jadwal Menu Harian Homade Catering</p>
    
                    <div class="d-flex w-45 h-50px border-grey-1 rounded-2">
                        <button class="flex-shrink-0 h-100 ratio-1 d-flex align-items-center justify-content-center"><img class=" w-75 h-75" src="{{ asset('icons/caret-arrow-left.svg') }}" alt=""></button>

                        <div class="d-flex align-items-center borderx-black-1 justify-content-center w-100 h-100">
                            <p class="fsc-3 fw-bold d-flex gap-4 mb-0 align-items-center"><img src="{{ asset('icons/calendar.svg') }}" class="h-12em"> 9 Februari - 15 Februari 2026 </p>
                        </div>

                        <button class="flex-shrink-0 h-100 ratio-1 d-flex align-items-center justify-content-center"><img class=" w-75 h-75" src="{{ asset('icons/caret-arrow-right.svg') }}" alt=""></button>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-center gap-3 w-80 h-500px">
                    @foreach (range(1,5) as $i)
                        <a href="/select-menu-weekly" class="d-flex align-items-center overflow-hidden justify-content-center w-100 h-100 flex-column rounded-3">

                            <div class="d-flex p-5 justify-content-center flex-column bg-accent rounded-top-3 h-20 w-100">
                                <p class="fsc-3 mb-1 fw-bolder text-white">Senin</p>
                                <p class="fsc-2 mb-0 text-white">Feb 09</p>
                            </div>

                            <div class="d-flex align-items-center overflow-hidden justify-content-center rounded-bottom-3 flex-column gap-5 border-grey-1 h-100 w-100">

                                @foreach (range(1,2) as $j)
                                <div class="d-flex align-items-center overflow-hidden flex-column justify-content-center w-70 h-45 rounded-5 border-grey-1">

                                    <div class="d-flex w-100 h-60 flex-shrink-0 overflow-hidden position-relative">
                                        <img src="{{ $placeImg }}" class="w-100 h-100 rounded-5 object-fit-cover">
                                        <span class="position-absolute fsc-1 theme-position bg-accent px-3 py-1 text-white fw-bold rounded-pill">Paket A</span>
                                    </div>

                                    <div class="d-flex w-100 h-40 overflow-hidden">
                                        <div class="d-flex px-4 py-2 w-100 h-100 overflow-hidden">
                                            <p class="fsc-2 w-100 h-100 overflow-hidden text-overflow text-nowrap">Ayam Pop Maknyus Wildan Super Enak Banget Omaigad</p>
                                            <!-- <p class="fsc-2 w-100 h-100 overflow-scroll">Ayam Pop Maknyus Wildan Super Enak Banget Omaigad</p> -->
                                        </div>
                                    </div>

                                </div>
                                @endforeach

                            </div>

                            
                        </a>
                    @endforeach
                </div>

                <div class="d-flex align-items-center justify-content-center mt-5 w-80 h-125px gap-10">
                    
                    <div class="d-flex w-100 h-100 bg-beige rounded-5 justify-content-center align-items-center flex-column">
                        <p class="fsc-2 text-black mb-1 w-80 fw-bolder">Informasi Catering</p>
                        <p class="fsc-1 text-black mb-0 w-80 fw-bold d-flex align-items-center"><span class="d-flex h-05em ratio-1 me-2 bg-black rounded-circle"></span> Pemesanan maksimal H-1 jam 15.00</p>
                        <p class="fsc-1 text-black mb-0 w-80 fw-bold d-flex align-items-center"><span class="d-flex h-05em ratio-1 me-2 bg-black rounded-circle"></span>  Pengiriman area jakarta & sekitarnya.</p>
                        <p class="fsc-1 text-black mb-0 w-80 fw-bold d-flex align-items-center"><span class="d-flex h-05em ratio-1 me-2 bg-black rounded-circle"></span>  Semua bahan  segar dan halal 100%</p>

                    </div>

                    <div class="d-flex w-100 h-100 bg-beige rounded-5 justify-content-center align-items-center flex-column">
                        <p class="fsc-2 text-black mb-0 fw-bolder">Untuk pemesanan hubungi</p>
                        <p class="fsc-1 text-black mb-0 fw-bold">Whatsapp Customor Care</p>
                        <p class="fsc-3 text-black mb-0 fw-black">0857-1180-1336</p>
                        <p class="fsc-1 text-black mb-0 fw-bold">Senin - Jumat 9:00-17.00 WIB</p>
                    </div>

                    <div class="d-flex w-100 h-100 bg-beige rounded-5 justify-content-center align-items-center flex-column">
                        <p class="fsc-2 mb-0 w-80 text-black fw-bolder">Alamat</p>
                        <p class="fsc-1 mb-0 w-80 text-black fw-bold">PT. Homade Kreatif Teknologi Jl.Tebet Timur Dalam VI No.3, RT.008  RW.011 Kel. Tebet Timur, Kec.Tebet, Jakarta Selatan, Jakarta 12820 <br> Telp. 0857-1180-1336.</p>
                    </div>

                </div>

                <div class="d-flex w-80">
                    <a href="/" class="btn-primary-homade fsc-3 rounded-3 fw-bold">Order non-jadwal <img src="{{ asset('icons/arrow-right.svg') }}" class="img-white"></a>
                </div>

            </div>

            <span class="h-40px flex-shrink-0"></span>

        @include('components.navbarFoot',[ "page" => "schedule"])
        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    </body>


</html>