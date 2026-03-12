@php
    $placeImg = "https://placehold.co/400"
@endphp

<!DOCTYPE html>
<html lang="en">
    @include('components.header' )

    <body class="d-flex flex-column">
        @include('components.navbarHead',[ "page" => "", "bg" => "grey"])

        <span class="h-40px flex-shrink-0"></span>

        <div class="d-flex w-100 h-100 flex-shrink-0 align-items-center justify-content-center">

            <div class="d-flex gap-20 h-100 w-76 gap-5">

                <!-- begin::left side -->
                <div class="d-flex w-100 h-100 gap-10 flex-column">

                    <div class="d-flex w-100 h-100 overflow-hidden position-relative">
                        <img src="{{ $placeImg }}" alt="" class="w-100 h-100 object-fit-cover">
                        <span class="position-absolute px-10 py-1 bg-accent rounded-3 theme-position text-white fsc-2 fw-bold">Sunda</span>
                    </div>

                    <!--  -->

                    <div class="d-flex w-100 h-100 flex-column gap-5">

                            <div class="d-flex w-100 h-100 bg-beige px-5 flex-column align-items-center justify-content-center rounded-4">

                                <div class="d-flex w-100 justify-content-between">
                                    <p class="fsc-3 mb-0">Bento Mealbox</p>
                                    <p class="fsc-2 mb-0">Rp. 30.000 / box</p>
                                </div>
                                <p class="fsc-1 mb-0">Paket normal terdiri dari lauk utama dan lauk pendamping lengkap.</p>

                            </div>

                            <div class="d-flex w-100 h-100 bg-beige px-5 flex-column align-items-center justify-content-center rounded-4">

                                <div class="d-flex w-100 justify-content-between">
                                    <p class="fsc-3 mb-0">Valuebox</p>
                                    <p class="fsc-2 mb-0">Rp. 25.000 / box</p>
                                </div>
                                <p class="fsc-1 mb-0">Paket hemat terdiri dari lauk utama dan lauk pendamping terbatas opsional.</p>

                            </div>

                            <div class="d-flex w-100 h-100 bg-beige px-5 flex-column align-items-center justify-content-center rounded-4">

                                <div class="d-flex w-100 justify-content-between">
                                    <p class="fsc-3 mb-0">Family Pack</p>
                                    <p class="fsc-2 mb-0">Rp. 75.000 / box</p>
                                </div>
                                <p class="fsc-1 mb-0">Paket Keluarga terdiri dari lauk utama dan sayuran pendamping (tanpa nasi),Porsi untuk 4 orang.</p>

                            </div>

                    </div>
                    
                </div>
                <!-- end::left side -->
                
                <!-- begin::right side -->
                <div class="d-flex w-55 flex-shrink-0 flex-column gap-10 h-100">

                    <div class="d-flex w-100 h-100 gap-5 pt-3 flex-column">
                        
                        <div class="d-flex w-100 h-50 flex-column flex-shrink-0 overflow-hidden">
                            <p class="fsc-4 w-100 overflow-hidden flex-shrink-0 mb-0 text-nowrap text-overflow">Ayam Geprek Wildan Maknyus</p>
                            <p class="fsc-2 w-80 h-100 overflow-scroll">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a neque nec mauris euismod pretium. Sed placerat commodo justo, a convallis purus interdum quis.</p>
                        </div>

                        <div class="d-flex w-100 h-35 gap-10">
                            
                                <div class="d-flex w-100 h-100 px-5 bg-beige rounded-4 align-items-center justify-content-center flex-column">
                                    <p class="fsc-2 w-100 mb-1">Lauk Pendamping</p>
                                    <p class="fsc-1 w-100">Tahu, Tempe</p>
                                </div>

                                <div class="d-flex w-100 h-100 px-5 bg-beige rounded-4 align-items-center justify-content-center flex-column">
                                    <p class="fsc-2 w-100 mb-1">Sayuran</p>
                                    <p class="fsc-1 w-100">Lalapan</p>
                                </div>

                                <div class="d-flex w-100 h-100 px-5 bg-beige rounded-4 align-items-center justify-content-center flex-column">
                                    <p class="fsc-2 w-100 mb-1">Sambal</p>
                                    <p class="fsc-1 w-100">Sambal Geprek</p>
                                </div>

                        </div>

                    </div>

                    <!--  -->

                    <div class="d-flex w-100 h-100 bg-beige rounded-4">
                    
                        <div class="d-flex flex-column w-100 h-100 py-5 gap-3 px-10">

                            <div class="d-flex flex-shrink-0 gap-4 align-items-center h-30px">
                                <span class="me-5 h-100 ratio-1 bg-light-grey rounded-circle d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('icons/food.svg') }}" alt="" class="img-accent w-60 h-60">
                                </span>
                                <p class="fsc-2 mb-0">Lauk pendamping dapat berbeda pada setiap pesanan</p>
                            </div>

                            <div class="d-flex flex-shrink-0 gap-4 align-items-center h-30px">
                                <span class="me-5 h-100 ratio-1 bg-light-grey rounded-circle d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('icons/bag.svg') }}" alt="" class="img-accent w-60 h-60">
                                </span>
                                <p class="fsc-2 mb-0">Minimum pemesanan 5 box untuk bento mealbox atau valuebox</p>
                            </div>

                            <div class="d-flex flex-shrink-0 gap-4 align-items-center h-30px">
                                <span class="me-5 h-100 ratio-1 bg-light-grey rounded-circle d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('icons/clock.svg') }}" alt="" class="img-accent w-60 h-60">
                                </span>
                                <p class="fsc-2 mb-0">Maksimal pemesanan Hari H-1</p>
                            </div>

                            <span class="h-100"></span>

                            <p class="fsc-2 mb-1">Pastikan menu yang Anda ingin pesan sesuai jadwal yang telah kami tetapkan. Lihat jadwal menu disini.</p>
                            <p class="fsc-2 mb-0">Untuk pertanyaan dan pemesanan silahkan hubungi Whatsapp Customer Care kami di 0857-1180-1336, Senin-Jumat 9:00-17:00 WIB</p>


                        </div>

                    </div>

                </div>
                <!-- end::right side -->

            </div>

        </div>

        <span class="h-40px flex-shrink-0"></span>

        <div class="d-flex w-100 align-items-center justify-content-center">
            <a href="/" class="btn-primary-homade fsc-2 rounded-2">Order Via Jadwal <img src="{{ asset('icons/arrow-right-c.svg') }}" alt="" class=" img-white h-12"></a>
        </div>

        <span class="h-100px flex-shrink-0"></span>
        
        <div class="d-flex w-100 align-items-center justify-content-center flex-column">
            
            <p class="fsc-3 text-black">Categori: Ayam</p>
            
            <span class="h-30px flex-shrink-0"></span>

            <div class="d-flex w-100 h-60px align-items-center gap-5 justify-content-center">

                @foreach (range(1,4) as $k)

                    <a href="/" class="d-flex gap-5 align-items-center h-100 w-20">
                        <span class="d-flex align-items-center justify-content-center h-100 ratio-1 bg-dark-grey rounded-circle"></span>
                        <p class="fsc-2 mb-0">Share On Facebook</p>
                    </a>

                @endforeach

            </div>
        </div>

        <span class="h-100px flex-shrink-0"></span>

        
            <div class="d-flex w-100 flex-shrink-0 align-items-center justify-content-center">
                
                <div class="d-grid grid-template-homade-menus w-90 flex-wrap flex-shrink-0 gap-5">

                    @foreach (range(1, 4) as $i)
                    <a href="menus/9" class="d-flex flex-column gap-5 h-500px">

                        <div class="w-100 h-75 position-relative">
                            <img src="{{ $placeImg }}" class="w-100 h-100 object-fit-cover">
                            <span class="w-max py-2 px-10 fsc-2 fw-bold bg-accent rounded-3 text-white position-absolute theme-position">Sunda</span>
                        </div>

                        <div class="w-100 h-25">
                            <p class="fs-1 fw-bold text-center">Ayam Geprek Wildan Maknyus Meletus</p>
                        </div>
                        
                    </a>
                    @endforeach
                    
                </div>
            
            </div>

        <span class="h-40px flex-shrink-0"></span>
                
        @include('components.navbarFoot',[ "page" => ""])
        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    </body>


</html>