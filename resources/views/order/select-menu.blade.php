@php
    $placeImg = "https://placehold.co/400";
@endphp

<!DOCTYPE html>
<html lang="en">
    @include('components.header' )

    <body class="d-flex flex-column">

        @if ($response['status_code'] === 200)

        @include('components.navbarHead',[ "page" => "schedule", "bg" => "grey"])
        
            <span class="h-40px flex-shrink-0"></span>

            
            <div class="d-flex align-items-center justify-content-center flex-column gap-5 w-100">
                
                <span class="h-30px flex-shrink-0"></span>

                <div class="d-flex w-95 w-lg-90 align-items-center">
                    <a href="/schedule" class="fsc-3 text-black">Jadwal</a>
                    <img src="{{ asset('icons/caret-arrow-right.svg') }}" class="h-100">
                    <p class="fsc-3 text-black mb-0 fw-bold">Pilih Menu</p>
                </div>

                <div class="d-flex align-items-center flex-row mb-5 w-95 w-lg-90">
                    <div class="d-flex w-100 justify-content-center flex-column">
                        <p class="fsc-4 fsc-xl-5 mb-0 fw-black">Pemesanan Untuk</p>
                        <p class="fsc-3 mb-0">Silahkan pilih paket menu harian anda</p>
                    </div>

                    <div class="d-none d-lg-flex align-items-center justify-content-end flex-shrink-0 h-100">
                        <a href="/schedule" class="btn-primary-homade fsc-3 rounded-3 fw-bold text-white">Kembali</a>
                    </div>
                </div>

                <div class="d-flex w-90 gap-5 align-items-start">

                    <!-- begin::menu -->
                    <div class="d-grid w-100 gap-5 overflow-hidden" style="grid-template-columns: repeat(2, 1fr);">
                        @foreach (range(1,20) as $r)

                        <div class="d-flex align-items-center justify-content-center flex-column border-grey-1 rounded-5 w-100 h-450px overflow-hidden">
                            <div class="d-flex w-100 flex-shrink-0 h-45 rounded-top-5 overflow-hidden">
                                <img src="{{ $placeImg }}" alt="" class="w-100 h-100 object-fit-cover">
                            </div>

                            <div class="d-flex w-100 h-55 rounded-bottom-5 p-9 pt-6 pb-5 overflow-hidden">

                                <div class="d-flex w-100 h-100 flex-column gap-5 overflow-hidden">

                                    <div class="d-flex w-100 align-items-center justify-content-between overflow-hidden gap-5 flex-shrink-0">
                                        <p class="fsc-3 mb-0 fw-bold w-100 overflow-hidden text-overflow text-nowrap">Sonic The Hedgehog had a rough transition into 3D</p>
                                        <p class="fsc-2 text-accent mb-0 fw-bold text-nowrap">Mulai Dari 500k</p>
                                    </div>

                                    <p class="fsc-2 mb-0 w-100 h-100 overflow-scroll">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

                                    <button class="d-flex py-3 fsc-3 bg-accent align-items-center justify-content-center text-white fw-bold rounded-3 flex-shrink-0">Pilih Menu</button>

                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                    <!-- end::menu -->
    
                    <!-- begin::basket -->
                    <div class="d-flex align-items-center flex-column flex-md-row justify-content-center gap-5 w-35 flex-shrink-0 h-max position-sticky top-20px">
    
                        <div class="d-flex2 py-20 align-items-center overflow-hidden justify-content-center w-100 h-100 flex-column rounded-5 border-grey-1" id="empty">
    
                            <p class="fsc-3 fw-black d-flex align-items-center text-center gap-5"><img src="{{ asset('icons/bag.svg')}}" class="h-1em img-accent">Ringkasan Pesanan</p>
                            <div class="d-flex my-5 align-items-center justify-content-center w-40 ratio-1 rounded-circle bg-accent">
                                <img src="{{ asset('icons/cart-plus.svg') }}" class=" w-40 ratio-1 img-white">
                            </div>
                            <p class="fsc-2 text-center mt-5 fw-bold">Keranjang Pemesanan Masih Kosong</p>
                            <p class="fsc-2 text-center w-80">Silahkan pilih menu dan paket HOMADE yang Anda inginkan untuk mulai memesan</p>
    
                        </div>
    
                        <div class="d-none2 py-20 align-items-center overflow-hidden w-100 h-100 flex-column rounded-5 border-grey-1 min-w-0" id="filled">
                        
                            <div class="d-flex align-items-center justify-content-center flex-column w-100 px-10 h-100">
    
                                <p class="fsc-3 fw-black d-flex align-items-center w-100 gap-5"><img src="{{ asset('icons/bag.svg')}}" class="h-1em img-accent">Ringkasan Pesanan</p>
            
                                <div class="d-flex w-100 h-50px px-3 rounded-3 align-items-center justify-content-between flex-shrink-0 border-grey-1 mb-3">
                                    <p class="fsc-2 mb-0">Tipe Pesanan</p>
                                    <p class="fsc-2 mb-0">Pesanan Via Jadwal</p>
                                </div>
            
                                <div class="d-flex w-100 h-50px px-3 rounded-3 align-items-center justify-content-between flex-shrink-0 border-grey-1 mb-5">
                                    <p class="fsc-2 mb-0">Tanggal Pengiriman</p>
                                    <p class="fsc-2 mb-0">today</p>
                                </div>
    
                                <div class="d-flex align-items-center flex-column overflow-scroll my-4 gap-3 h-100 w-100" id="orderSummaryItems">
                                    <!-- js -->
                                </div>
    
                                <div class="d-flex mt-3 justify-content-between align-items-center w-100">
                                    <p class="fsc-2 mb-0">Subtotal</p>
                                    <p class="fsc-2 mb-0" id="orderSubtotal">Rp 0</p>
                                </div>
    
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <p class="fsc-2 mb-0">Ongkos Kirim</p>
                                    <p class="fsc-2 mb-0"></p>
                                </div>
    
                                <div class="d-flex mt-3 justify-content-between align-items-center w-100">
                                    <p class="fsc-2 fw-bold mb-0">Total Pembayaran</p>
                                    <p class="fsc-3 fw-bold mb-0" id="orderTotal">Rp 0</p>
                                </div>
            
                                <form method="POST" class="w-100" action="/checkout" onsubmit="return prepareCheckout()">
                                    @csrf
                                    <input type="hidden" name="checkout_payload" id="checkoutPayload">
                                    <button type="submit" class="btn-primary-homade mt-3 rounded-3 fsc-3 fw-bold w-100 align-items-center justify-content-center">Lanjut</button>
                                </form>
                                
                            </div>
    
                        </div>
    
                    </div>
                    <!-- end::basket -->

                </div>


                <span class="h-40px flex-shrink-0"></span>

                <div class="d-flex align-items-center justify-content-center flex-column flex-md-row mt-5 w-95 w-sm-45 w-md-90 h-md-125px gap-10">
                    
                    <div class="d-flex w-100 h-100 bg-beige rounded-5 py-5 py-md-0 justify-content-center align-items-center flex-column">
                        <img src="{{ asset('icons/history.svg') }}" class="h-25 ratio-1 mb-3 img-accent">
                        <p class="fsc-3 text-black mb-0 fw-bolder">PEMESANAN</p>
                        <p class="fsc-2 text-black mb-0 fw-bold">MAKSIMAL H-1 jam 15.00 WIB</p>
                    </div>
                        
                    <div class="d-flex w-100 h-100 bg-beige rounded-5 py-5 py-md-0 justify-content-center align-items-center flex-column">
                        <img src="{{ asset('icons/verification.svg') }}" class="h-25 ratio-1 mb-3 img-accent">
                        <p class="fsc-3 text-black mb-0 fw-bolder">KUALITAS</p>
                        <p class="fsc-2 text-black mb-0 fw-bold">Bahan segan & 100% Halal</p>
                    </div>
                        
                    <div class="d-flex w-100 h-100 bg-beige rounded-5 py-5 py-md-0 justify-content-center align-items-center flex-column">
                        <img src="{{ asset('icons/map.svg') }}" class="h-25 ratio-1 mb-3 img-accent">
                        <p class="fsc-3 text-black mb-0 fw-bolder">AREA</p>
                        <p class="fsc-2 text-black mb-0 fw-bold">Jakarta & sekitarnya</p>
                    </div>
                        
                    
                </div>

            </div>

            <span class="h-40px flex-shrink-0"></span>

            <div class="d-none2 align-items-md-center justify-content-center pop-up p-3 px-md-5 px-lg-0" id="popUp">
                <div class="d-flex align-items-center justify-content-md-center overflow-scroll p-5 bg-white w-100 w-lg-75 h-md-95 rounded-4 flex-column">

                    <div class="d-flex align-items-center justify-content-between w-100 px-md-5 mb-5 flex-shrink-0">
                        <p class="fsc-md-3 fsc-5 mb-0 fw-bold">Pilih Kemasan Paket</p>
                        <button onclick="popUpClose()" class="h-100 ratio-1 align-items-center justify-content-center">
                            <img src="{{ asset('icons/close-circle.svg') }}" class="w-60 h-60">
                        </button>
                    </div>

                    <div class="d-flex gap-5 w-100 h-md-100 mb-5 flex-column flex-md-row overflow-md-hidden">

                        <div class="d-flex h-md-100 h-500px w-md-35 w-101 flex-column flex-shrink-0 overflow-hidden">

                            <div class="d-flex align-items-center justify-content-center overflow-hidden w-100 h-40 position-relative flex-shrink-0">
                                <img id="popUpMenuImg" src="" alt="" class="w-100 h-100 object-fit-cover rounded-top-4">
                                <span class="theme-position position-absolute px-4 py-1 fsc-2 bg-accent text-white rounded-3 fw-bold" id="popUpMenuLabel"></span>
                            </div>

                            <div class="d-flex w-100 h-100 px-5 py-5 overflow-hidden border-grey-1 rounded-bottom-4">
                                <div class="d-flex w-100 h-100 overflow-hidden flex-column">
                                    <p id="popUpMenuName" class="fsc-3 mb-2 w-100 overflow-hidden flex-shrink-0 text-overflow fw-bold text-nowrap"></p>
                                    <div class="d-flex w-100 h-100 overflow-hidden mb-3 pt-2">
                                        <p id="popUpMenuDesc" class="fsc-2 w-100 h-100 max-h-120px overflow-scroll mb-0"></p>
                                    </div>
                                    <button onclick="confirmOrder()" class="w-100 flex-shrink-0 btn-primary-homade justify-content-center align-items-center fw-bold fsc-3 rounded-3">Konfirmasi</button>
                                </div>
                            </div>

                        </div>

                        <div class="d-flex h-md-100 h-max w-100 gap-5 flex-column overflow-scroll" id="popUpPackages">
                            <!-- js -->
                        </div>

                    </div>

                    <div class="d-flex flex-column w-100 px-5 gap-3 flex-shrink-0">
                        <div class="d-flex w-100 h-30px gap-5 align-items-center">
                            <div class="d-flex h-100 ratio-1 rounded-circle bg-accent align-items-center justify-content-center">
                                <img src="{{ asset('icons/food.svg') }}" class="img-white w-50 h-50">
                            </div>
                            <p class="fsc-2 mb-0">Lauk pendamping dapat berbeda pada setiap pesanan</p>
                        </div>
                        <div class="d-flex w-100 h-30px gap-5 align-items-center">
                            <div class="d-flex h-100 ratio-1 rounded-circle bg-accent align-items-center justify-content-center">
                                <img src="{{ asset('icons/bag.svg') }}" class="img-white w-50 h-50">
                            </div>
                            <p class="fsc-2 mb-0">Minimum pemesanan 5 box untuk bento mealbox atau valuebox</p>
                        </div>
                        <div class="d-flex w-100 h-30px gap-5 align-items-center">
                            <div class="d-flex h-100 ratio-1 rounded-circle bg-accent align-items-center justify-content-center">
                                <img src="{{ asset('icons/clock.svg') }}" class="img-white w-50 h-50">
                            </div>
                            <p class="fsc-2 mb-0">Maksimal pemesanan H-1.</p>
                        </div>
                    </div>
                </div>

            </div>

        @include('components.navbarFoot',[ "page" => "schedule"])
        
        @else

        <div class="d-flex align-items-center justify-content-center w-100 h-100 flex-column">
            <p class="fsc-3 text-accent fw-bold">{{ $response['message'] }}</p>
            <a href="{{ route('user.schedules') }}" class="fsc-2 w-max bg-accent px-4 py-2 rounded-3 text-white fw-bold">Back</a>
        </div>

        @endif

        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

    </body>


</html>
