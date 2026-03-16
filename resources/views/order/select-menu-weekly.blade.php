@php
    $placeImg = "https://placehold.co/400";
@endphp

<!DOCTYPE html>
<html lang="en">
    @include('components.header' )

    <body class="d-flex flex-column">
        @include('components.navbarHead',[ "page" => "schedule", "bg" => "grey"])
        
            <span class="h-40px flex-shrink-0"></span>

            
            <div class="d-flex align-items-center justify-content-center flex-column gap-5 w-100">
                
                <span class="h-30px flex-shrink-0"></span>

                <div class="d-flex w-85 align-items-center">
                    <a href="/schedule" class="fsc-3 text-black">Jadwal</a>
                    <img src="{{ asset('icons/caret-arrow-right.svg') }}" class="h-100">
                    <p class="fsc-3 text-black mb-0 fw-bold">Pilih Menu</p>
                </div>

                <div class="d-flex align-items-center mb-5 w-85">
                    <div class="d-flex w-100 justify-content-center flex-column">
                        <p class="fsc-5 mb-0 fw-black">Pemesanan Untuk Senin, 9 Februari 2026</p>
                        <p class="fsc-3 mb-0">Silahkan pilih paket menu harian anda</p>
                    </div>

                    <div class="d-flex align-items-center justify-content-end flex-shrink-0 h-100">
                        <a href="/schedule" class="btn-primary-homade fsc-3 rounded-3 fw-bold text-white">Kembali</a>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-center gap-5 w-85 mt-5 h-450px">

                    @foreach (range(1,2) as $i)

                    <div class="d-flex align-items-center overflow-hidden justify-content-center w-100 border-grey-1 h-100 flex-column rounded-5">
                        
                        <div class="d-flex h-50 w-100 flex-shrink-0 rounded-top-5 position-relative">
                            <img src="{{ $placeImg }}" class="w-100 h-100 rounded-top-5 object-fit-cover">
                            <span class="position-absolute theme-position bg-accent text-white fsc-2 fw-bolder py-1 px-4 rounded-3">Paket A</span>
                        </div>

                        <div class="p-5 d-flex w-100 h-100 py-5 px-10 flex-column">
                            
                            <div class="d-flex mb-2 w-100 align-items-center justify-content-between">
                                <p class="fsc-3 fw-bolder mb-0">Ayam Geprek</p>
                                <p class="fsc-2 text-accent fw-bolder mb-0">Mulai dari Rp 25K</p>
                            </div>

                            <p class="fsc-2 lh-sm h-100">Ayam kampung ungkep dengan bumbu rempah Dada rahasia, disajikan dengan sambal merah khas Padang, daun singkong rebus.</p>

                            <button onclick="popUp()" class="btn-primary-homade rounded-3 fsc-3 fw-bold w-100 align-items-center justify-content-center">Pilih Menu</button>
                        </div>
                    </div>

                    @endforeach

                    <div class="d-flex2 align-items-center overflow-hidden justify-content-center w-100 h-100 flex-column rounded-5 border-grey-1" id="empty">

                        <p class="fsc-3 fw-black d-flex align-items-center text-center gap-5"><img src="{{ asset('icons/bag.svg')}}" class="h-1em img-accent">Ringkasan Pesanan</p>
                        <div class="d-flex my-5 align-items-center justify-content-center w-40 ratio-1 rounded-circle bg-accent">
                            <img src="{{ asset('icons/cart-plus.svg') }}" class=" w-40 ratio-1 img-white">
                        </div>
                        <p class="fsc-2 mt-5 fw-bold">Keranjang Pemesanan Masih Kosong</p>
                        <p class="fsc-2 text-center w-80">Silahkan pilih menu dan paket HOMADE yang Anda inginkan untuk mulai memesan</p>

                    </div>

                    <div class="align-items-center overflow-hidden w-100 h-100 flex-column rounded-5 border-grey-1 d-none2 py-5 min-w-0" id="filled">
                    
                        <div class="d-flex align-items-center justify-content-center flex-column w-100 px-10 h-100">

                            <p class="fsc-3 fw-black d-flex align-items-center w-100 gap-5"><img src="{{ asset('icons/bag.svg')}}" class="h-1em img-accent">Ringkasan Pesanan</p>
        
                            <div class="d-flex w-100 h-50px px-3 rounded-3 align-items-center justify-content-between flex-shrink-0 border-grey-1 mb-3">
                                <p class="fsc-2 mb-0">Tipe Pesanan</p>
                                <p class="fsc-2 mb-0">Pesanan Via Jadwal</p>
                            </div>
        
                            <div class="d-flex w-100 h-50px px-3 rounded-3 align-items-center justify-content-between flex-shrink-0 border-grey-1 mb-5">
                                <p class="fsc-2 mb-0">Tanggal Pengiriman</p>
                                <p class="fsc-2 mb-0">9 Feb 2026</p>
                            </div>
        
                            <div class="d-flex align-items-center flex-column overflow-scroll my-4 gap-3 h-100 w-100">
        
                            @foreach (range(1,1) as $k)
                                
                                <div class="d-flex w-100 h-50px">
        
                                    <div class="d-flex align-items-center justify-content-center h-100 ratio-1 border-grey-1 rounded-3">
                                        <p class="fsc-3 fw-black text-accent mb-0 flex-shrink-0">15x</p>
                                    </div>
        
                                    <div class="d-flex flex-column w-100 h-100 ms-3">
                                        <p class="fsc-2 h-50 fw-black mb-0">Ayam Geprek</p>
                                        <p class="fsc-1 h-50 mb-0">Bento Mealbox</p>
                                    </div>
                                    
                                    <div class="d-flex flex-column flex-shrink-0">
                                        <p class="fsc-2 mb-0">Rp 50.000</p>
        
                                    </div>
        
                                </div>
        
                            @endforeach
        
                            </div>
        
                            <div class="d-flex mt-3 justify-content-between align-items-center w-100">
                                <p class="fsc-2 mb-0">Subtotal</p>
                                <p class="fsc-2 mb-0">Rp 50.000</p>
                            </div>
        
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <p class="fsc-2 mb-0">Ongkos Kirim</p>
                                <p class="fsc-2 mb-0"></p>
                            </div>
        
                            <div class="d-flex mt-3 justify-content-between align-items-center w-100">
                                <p class="fsc-3 fw-bold mb-0">Total Pembayaran</p>
                                <p class="fsc-3 fw-bold mb-0">Rp 50.000</p>
                            </div>
        
                            <a href="/select-menu" class="btn-primary-homade mt-3 rounded-3 fsc-3 fw-bold w-100 align-items-center justify-content-center">Lanjut</a>

                        </div>

                    </div>

                </div>

                <span class="h-40px flex-shrink-0"></span>

                <div class="d-flex align-items-center justify-content-center mt-5 w-85 h-125px gap-10">
                    
                    <div class="d-flex w-100 h-100 bg-beige rounded-5 justify-content-center align-items-center flex-column">
                        <img src="{{ asset('icons/history.svg') }}" class="h-25 ratio-1 mb-3 img-accent">
                        <p class="fsc-3 text-black mb-0 fw-bolder">PEMESANAN</p>
                        <p class="fsc-2 text-black mb-0 fw-bold">MAKSIMAL H-1 jam 15.00 WIB</p>
                    </div>
                        
                    <div class="d-flex w-100 h-100 bg-beige rounded-5 justify-content-center align-items-center flex-column">
                        <img src="{{ asset('icons/verification.svg') }}" class="h-25 ratio-1 mb-3 img-accent">
                        <p class="fsc-3 text-black mb-0 fw-bolder">KUALITAS</p>
                        <p class="fsc-2 text-black mb-0 fw-bold">Bahan segan & 100% Halal</p>
                    </div>
                        
                    <div class="d-flex w-100 h-100 bg-beige rounded-5 justify-content-center align-items-center flex-column">
                        <img src="{{ asset('icons/map.svg') }}" class="h-25 ratio-1 mb-3 img-accent">
                        <p class="fsc-3 text-black mb-0 fw-bolder">AREA</p>
                        <p class="fsc-2 text-black mb-0 fw-bold">Jakarta & sekitarnya</p>
                    </div>
                        
                    
                </div>

            </div>

            <span class="h-40px flex-shrink-0"></span>

            <div class="d-flex align-items-center justify-content-center pop-up">

                <div class="d-flex align-items-center justify-content-center p-5 bg-white w-75 h-95 rounded-4 flex-column">

                    <div class="d-flex align-items-center justify-content-between w-100 px-5 flex-shrink-0">

                        <p class="fsc-3 fw-bold">Pilih Kemasan Paket</p>

                        <button class="h-100 ratio-1 align-items-center justify-content-center">
                            <img src="{{ asset('icons/close-circle.svg') }}" class="w-60 h-60">
                        </button>

                    </div>

                    <div class="d-flex gap-5 w-100 h-100 mb-5 overflow-hidden">

                        <div class="d-flex h-100 w-35 flex-column flex-shrink-0 overflow-hidden">

                            <div class="d-flex align-items-center justify-content-center overflow-hidden w-100 h-40 position-relative flex-shrink-0">
                                <img src="{{ $placeImg }}" alt="" class="w-100 h-100 object-fit-cover rounded-top-4">
                                <span class="theme-position position-absolute px-4 py-1 fsc-2 bg-accent text-white rounded-3 fw-bold">Paket A</span>
                            </div>

                            <div class="d-flex w-100 h-100 px-5 py-5 overflow-hidden border-grey-1 rounded-bottom-4">

                                <div class="d-flex w-100 h-100 overflow-hidden flex-column">

                                    <p class="fsc-3 mb-2 w-100 overflow-hidden flex-shrink-0 text-overflow fw-bold text-nowrap">Ayam Geprek</p>

                                    <div class="d-flex w-100 h-100 overflow-hidden mb-3 pt-2">
                                        <p class="fsc-2 w-100 h-100 max-h-120px overflow-scroll mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                    </div>

                                    <button class="w-100 flex-shrink-0 btn-primary-homade justify-content-center align-items-center fw-bold fsc-3 rounded-3">Konfirmasi</button>

                                </div>

                            </div>

                        </div>

                        <div class="d-flex h-100 w-100 gap-5 flex-column overflow-scroll">

                            @foreach (range(1,3) as $i)
                            
                            <div class="d-flex bg-beige w-85 rounded-5 flex-column flex-shrink-0">

                                <div class="d-flex h-100px w-100 px-5 py-1 gap-5">
                                
                                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 h-100 ratio-1">
                                        @if ($i === 1)
                                        <img src="{{ asset('img/bento.webp') }}" alt="" class="h-60">
                                        @elseif ($i === 2)
                                        <img src="{{ asset('img/cardboard.webp') }}" alt="" class="h-60">
                                        @else
                                        <img src="{{ asset('img/plastic.webp') }}" alt="" class="h-60">
                                        @endif
                                    </div>

                                    <div class="d-flex justify-content-center h-100 w-100 flex-column">
                                        @if ($i === 1)
                                        <p class="fsc-3 fw-black mb-0">Bento Mealbox</p>
                                        @elseif ($i === 2)
                                        <p class="fsc-3 fw-black mb-0">Valuebox</p>
                                        @else
                                        <p class="fsc-3 fw-black mb-0">Family Pack</p>
                                        @endif
                                        <p class="fsc-2 fw-bolder mb-0">Rp 25.000 / box</p>

                                        <button class="fsc-1 w-max d-none2 w-100px overflow-hidden text-overflow text-nowrap" onclick="notes('{{ $i }}')" id="note{{ $i }}">Tambah Catatan</button>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center gap-5 flex-shrink-0">
                                        <button onclick="counterSubtract('{{ $i }}')" class="d-flex bg-accent text-white justify-content-center align-items-center h-25 ratio-1 rounded-2"><img src="{{ asset('icons/minus.svg') }}" alt="" class="img-white ratio-1 h-75"></button>
                                        <p class="fsc-2 text-center w-20px mb-0" id="input{{ $i }}">0</p>
                                        <button onclick="counterAdd('{{ $i }}')" class="d-flex bg-accent text-white justify-content-center align-items-center h-25 ratio-1 rounded-2"><img src="{{ asset('icons/plus.svg') }}" alt="" class="img-white ratio-1 h-75"></button>
                                    </div>

                                </div>

                                <div class="d-none2 align-items-center px-10 pb-3 justify-content-center w-100 h-75px" id="textareaContainer{{ $i }}">

                                    <textarea class="w-100 h-100 bg-white rounded-3 p-2 resize-0" placeholder="Catatan Opsional" oninput="syncButton('{{ $i }}')" id="textarea{{ $i }}"></textarea>

                                </div>

                            </div>

                            @endforeach

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
                            <p class="fsc-2 mb-0">Maksimal pemesanan H-1. </p>
                        </div>

                    </div>

                </div>

            </div>

        @include('components.navbarFoot',[ "page" => "schedule"])
        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

        <script>
            function fill()
            {
                document.getElementById("empty").style.display = "none"
                document.getElementById("filled").style.display = "flex"
            }

            function counterAdd(x) 
            {
                const element = document.getElementById('input' + x)
                let currentValue = parseInt(element.innerText) || 0

                if (x === 3)
                {
                    element.innerText = currentValue + 1
                }
                else
                {
                    if (currentValue === 0)
                    {
                        element.innerText = 5
                        document.getElementById('note' + x).style.display = "flex"
                    }
                    else
                    {
                        element.innerText = currentValue + 1
                    }
                }
            }

            function counterSubtract(x) 
            {
                const element = document.getElementById('input' + x)
                let currentValue = parseInt(element.innerText) || 0
                if (currentValue > 0) {
                    if (currentValue === 5)
                    {
                        element.innerText = 0
                        document.getElementById('note' + x).style.display = "none"

                        document.getElementById('textareaContainer' + x).style.display = "none"
                    }
                    else
                    {
                        element.innerText = currentValue - 1
                    }
                }
            }

            function notes(x) 
            {
                const element = document.getElementById('textareaContainer' + x);
                
                if (element.style.display === "none" || element.style.display === "") 
                
                    {
                        element.style.display = "flex";
                    } else {
                        element.style.display = "none";
                    }
            }
        
            function syncButton(x)
            {
                let text = document.getElementById('textarea' + x)
                let btn = document.getElementById('note' + x)

                if (text.value.trim().length > 0) {
                    btn.innerText = text.value;
                } else {
                    btn.innerText = "Tambah Catatan";
                }
            }

        </script>

    </body>


</html>