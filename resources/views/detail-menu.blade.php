@php
    $placeImg = "https://placehold.co/400"
@endphp

<!DOCTYPE html>
<html lang="en">
    @include('components.header' )

    <body class="d-flex flex-column">
        @include('components.navbarHead',[ "page" => "", "bg" => "grey"])

        <span class="h-100px flex-shrink-0"></span>

        <div class="d-flex w-100 flex-shrink-0 align-items-center flex-column gap-13 justify-content-center">

            <!-- begin::top side -->
            <div class="d-flex w-90 w-lg-80">

                <div class="d-flex w-100 flex-md-row flex-column h-100 h-md-250px">

                    <div class="d-flex w-100 overflow-hidden position-relative">
                        <img src="{{ $response['data']['image_url'] }}" alt="" class="w-100 h-100 object-fit-cover">
                        <span class="position-absolute px-10 py-1 bg-accent rounded-3 theme-position text-white fsc-2 fw-bold">{{ $response['data']['theme'] }}</span>
                    </div>

                    <!--  -->

                    <span class="w-md-30px w-lg-50px h-20px flex-shrink-0"></span>

                    <!--  -->

                    <div class="d-flex align-items-center overflow-hidden pt-3 w-101 w-md-55 h-100 flex-column flex-md-shrink-0">
                        <p class="fsc-4 mb-0 w-100 h-max flex-shrink-0 overflow-hidden text-nowrap text-overflow">{{$response['data']['name']}}</p>
                        <p class="fsc-2 mb-0 w-100 h-30 flex-shrink-0 overflow-scroll ps-1">{{ $response['data']['description'] }}</p>

                        <span class="h-100 "></span>

                        <div class="d-flex align-items-center justify-content-center flex-column flex-md-row gap-1 gap-md-4 gap-lg-2 h-51 h-md-35 flex-shrink-0 w-100">

                            <div class="d-flex w-100 h-100 bg-beige justify-content-center align-items-center rounded-4 flex-column">
                                <div class="d-flex p-7 p-md-0 w-101 w-md-80 h-80 flex-column justify-content-center">
                                    <p class="fsc-2 fsc-md-1 fsc-lg-2 w-100 fw-bold mb-1 text-nowrap">Lauk Pendamping</p>
                                    <p class="fsc-2 fsc-md-1 fsc-lg-2 w-100 mb-0">{{ $response['data']['addon']['side_dish'] }}</p>
                                </div>
                            </div>

                            <div class="d-flex w-100 h-100 bg-beige justify-content-center align-items-center rounded-4 flex-column">
                                <div class="d-flex p-7 p-md-0 w-101 w-md-80 h-80 flex-column justify-content-center">
                                    <p class="fsc-2 fsc-md-1 fsc-lg-2 w-100 fw-bold mb-1">Sayuran</p>
                                    <p class="fsc-2 fsc-md-1 fsc-lg-2 w-100 mb-0">{{ $response['data']['addon']['vegetable'] }}</p>
                                </div>
                            </div>

                            <div class="d-flex w-100 h-100 bg-beige justify-content-center align-items-center rounded-4 flex-column">
                                <div class="d-flex p-7 p-md-0 w-101 w-md-80 h-80 flex-column justify-content-center">
                                    <p class="fsc-2 fsc-md-1 fsc-lg-2 w-100 fw-bold mb-1">Sambal</p>
                                    <p class="fsc-2 fsc-md-1 fsc-lg-2 w-100 mb-0">{{ $response['data']['addon']['sauce'] }}</p>
                                </div>    
                            </div>    

                        </div>
                    </div>
                    
                </div>
                
            </div>
            <!-- end::top side -->

            <!-- begin::bottom side -->
            <div class="d-flex w-90 w-lg-80">

                <div class="d-flex w-100 flex-column flex-md-row flex-shrink-0 h-md-300px overflow-hidden">

                    <div class="d-flex w-100 h-100 flex-column gap-3">

                        @foreach ($response['data']['packages'] as $paket)
                            <div class="d-flex flex-column align-items-center justify-content-md-center justify-content-between py-8 py-md-0 bg-beige w-100 h-100px h-md-100 rounded-4 px-5">

                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <p class="fsc-3 mb-0 h-max">{{ $paket['name'] }}</p>
                                    <p class="fsc-2 mb-0 h-max">Rp {{ Number::format($paket['price'], locale: 'id') }}</p>
                                </div>

                                <p class="fsc-1 mb-0 w-100">{{ $paket['description'] }}</p>

                            </div>
                        @endforeach

                    </div>

                    <!--  -->

                    <span class="w-md-30px w-lg-50px h-20px flex-shrink-0"></span>

                    <!--  -->

                    <div class="d-flex align-items-center gap-4 bg-beige rounded-5 w-101 w-md-55 px-5 px-md-10 py-sm-10 py-5 h-100 flex-column justify-content-center flex-md-shrink-0">
                    
                            <div class="d-flex w-100 h-30px flex-shrink-0 gap-7 align-items-center">
                                <div class="d-flex h-100 ratio-1 align-items-center justify-content-center rounded-circle bg-white">
                                    <img src="{{ asset('icons/food.svg') }}" alt="" class="h-50 img-accent">
                                </div>

                                <p class="fsc-2 mb-0">Lauk pendamping dapat berbeda pada setiap pesanan</p>
                            </div>
                    
                            <div class="d-flex w-100 h-30px flex-shrink-0 gap-7 align-items-center">
                                <div class="d-flex h-100 ratio-1 align-items-center justify-content-center rounded-circle bg-white">
                                    <img src="{{ asset('icons/bag.svg') }}" alt="" class="h-50 img-accent">
                                </div>

                                <p class="fsc-2 mb-0">Minimum pemesanan 5 box untuk bento mealbox atau valuebox</p>
                            </div>
                    
                            <div class="d-flex w-100 h-30px flex-shrink-0 gap-7 align-items-center">
                                <div class="d-flex h-100 ratio-1 align-items-center justify-content-center rounded-circle bg-white">
                                    <img src="{{ asset('icons/clock.svg') }}" alt="" class="h-50 img-accent">
                                </div>

                                <p class="fsc-2 mb-0">Maksimal pemesanan H-1.</p>
                            </div>

                        <p class="fsc-2 mb-0 w-100 flex-shrink-0 mt-3">Pastikan menu yang Anda ingin pesan sesuai jadwal yang telah kami tetapkan.</p>
                        <p class="fsc-2 mb-0 w-100 flex-shrink-0">Untuk pertanyaan dan pemesanan silahkan hubungi Whatsapp Customer Care kami di 0857-1180-1336, Senin-Jumat 9:00-17:00 WIB</p>

                    </div>

                </div>
                
            </div>
            <!-- end::bottom side -->

        </div>

        <span class="h-40px flex-shrink-0"></span>

        <div class="d-flex w-100 align-items-center justify-content-center">
            <a href="/schedule" class="btn-primary-homade fsc-2 rounded-2">Order Via Jadwal <img src="{{ asset('icons/arrow-right-c.svg') }}" alt="" class=" img-white h-12"></a>
        </div>

        <span class="h-100px flex-shrink-0"></span>
        
        <div class="d-flex w-100 align-items-center justify-content-center flex-column">
            
            <p class="fsc-5 fsc-md-3 text-black">Categori: 
                @foreach($response['data']['categories'] as $kategori)
                {{ $kategori }}{{ $loop->last ? '' : ',' }}
                @endforeach
            </p>
            
            <span class="h-30px flex-shrink-0"></span>

            <div class="d-flex w-100 h-200px h-md-60px align-items-center flex-column flex-md-row gap-5 justify-content-center">

                @foreach (range(1,4) as $k)

                    <a href="/" class="d-flex gap-5 align-items-center h-100 w-80 w-md-20">
                        <span class="d-flex align-items-center justify-content-center h-100 ratio-1 bg-dark-grey rounded-circle"></span>
                        <p class="fsc-3 fsc-md-2 mb-0">Share On Facebook</p>
                    </a>

                @endforeach

            </div>
        </div>

        <span class="h-100px flex-shrink-0"></span>

        <div class="d-flex w-100 flex-shrink-0 align-items-center justify-content-center">
                
            <div class="d-flex flex-column d-sm-grid grid-template-homade-menus w-90 align-items-center justify-content-center flex-shrink-0 gap-5">

                @foreach ($response['data']['relevants'] as $menu)
                <a href="{{ $menu['id'] }}" class="d-flex flex-column gap-5 w-100 h-500px">

                    <div class="w-100 h-75 position-relative">
                        <img src="{{ $menu['image_url'] }}" class="w-100 h-100 object-fit-cover">
                        <span class="w-max py-2 px-10 fsc-2 fw-bold bg-accent rounded-3 text-white position-absolute theme-position">{{ $menu['theme']['name'] }}</span>
                    </div>

                    <div class="w-100 h-25">
                        <p class="fs-1 fw-bold text-center">{{ $menu['name'] }}</p>
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