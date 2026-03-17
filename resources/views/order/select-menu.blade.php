@php
    $placeImg = "https://placehold.co/400";
@endphp

<!DOCTYPE html>
<html lang="en">
    @include('components.header' )

    <body class="d-flex flex-column">
        @include('components.navbarHead',[ "page" => "schedule", "bg" => "grey"])
        
            <span class="h-40px flex-shrink-0"></span>

            
            <div class="d-flex align-items-center justify-content-center flex-column w-100">
                
                <span class="h-30px flex-shrink-0"></span>

                <div class="d-flex w-95 align-items-center">
                    <a href="/me/orders" class="fsc-3 text-black">Pesanan Saya</a>
                    <img src="{{ asset('icons/caret-arrow-right.svg') }}" class="h-100">
                    <p class="fsc-3 text-black mb-0">Detail Pesanan # 550E8300 - E298</p>
                </div>

                <div class="d-flex align-items-center mb-5 w-95">
                    <div class="d-flex w-100 justify-content-center flex-column">
                        <p class="fsc-5 mb-0">Detail Pemesanan # 550E8300 - E298</p>
                        <p class="fsc-3 mb-0">Dipesan pada: 6 Feb 2026, 15:00:30</p>
                    </div>

                    <div class="d-flex align-items-center gap-2 justify-content-end flex-shrink-0 h-100">
                        <button class="btn-primary-homade fsc-2 rounded-3 fw-bold text-white"><img src="{{ asset('icons/print.svg') }}" class="img-white"> Cetak Invoice</button>
                        <a href="/me/orders" class="btn-primary-homade fsc-2 rounded-3 fw-bold text-white">Kembali <img src="{{ asset('icons/arrow-right.svg') }}" class="img-white"></a>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-center w-95 border-grey-1 rounded-5 p-10 flex-column">
                    
                    <div class="d-flex align-items-center w-100 justify-content-between mb-5">
                        <p class="fsc-3 mb-0 fw-black d-flex gap-5 align-items-center"><img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em"> WORKFLOW STATUS : WAINTING REVIEW</p>
                        <p class="fsc-2 mb-0 bg-light-accent text-accent rounded-pill d-flex align-items-center gap-3 px-4 py-1"><img src="{{ asset('icons/show.svg') }}" class="img-accent h-1em"> Waiting Review</p>
                    </div>

                    <div class="d-flex align-items-center justify-content-center w-100 mt-5 h-100px">
                        <div class="d-flex align-items-center justify-content-center w-90 h-100">
                            
                            <div class="d-flex align-items-center justify-content-between h-100 w-100 flex-column">
                                
                                <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                    <span class="w-100 h-5px"></span>
                                    <div class="d-flex h-90 rounded-circle bg-accent ratio-1 justify-content-center align-items-center">
                                        <img src="{{ asset('icons/show.svg') }}" alt="" class="h-40 img-white">
                                    </div>
                                    <span class="w-100 h-5px bg-light-grey"></span>
                                </div>

                                <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting Review</p>
                                <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Validation Order</p>

                            </div>

                            <div class="d-flex align-items-center justify-content-between h-100 w-100 flex-column">
                                
                                <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                    <span class="w-100 h-5px bg-light-grey"></span>
                                    <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                        <img src="{{ asset('icons/hourglass.svg') }}" alt="" class="h-40 img-grey">
                                    </div>
                                    <span class="w-100 h-5px bg-light-grey"></span>
                                </div>

                                <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting Confirmation</p>
                                <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Wait Payment</p>

                            </div>

                            <div class="d-flex align-items-center justify-content-between h-100 w-100 flex-column">
                                
                                <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                    <span class="w-100 h-5px bg-light-grey"></span>
                                    <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                        <img src="{{ asset('icons/food.svg') }}" alt="" class="h-40 img-grey">
                                    </div>
                                    <span class="w-100 h-5px bg-light-grey"></span>
                                </div>

                                <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Process</p>
                                <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Processing Your Food</p>

                            </div>

                            <div class="d-flex align-items-center justify-content-between h-100 w-100 flex-column">
                                
                                <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                    <span class="w-100 h-5px bg-light-grey"></span>
                                    <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                        <img src="{{ asset('icons/bag.svg') }}" alt="" class="h-40 img-grey">
                                    </div>
                                    <span class="w-100 h-5px bg-light-grey"></span>
                                </div>

                                <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting For Pickup</p>
                                <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Menunggu Kurir</p>

                            </div>

                            <div class="d-flex align-items-center justify-content-between h-100 w-100 flex-column">
                                
                                <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                    <span class="w-100 h-5px bg-light-grey"></span>
                                    <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                        <img src="{{ asset('icons/truck.svg') }}" alt="" class="h-40 img-grey">
                                    </div>
                                    <span class="w-100 h-5px bg-light-grey"></span>
                                </div>

                                <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">On The Way</p>
                                <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Dalam Perjalanan</p>

                            </div>
                                
                            <div class="d-flex align-items-center justify-content-between h-100 w-100 flex-column">
                                
                                <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                    <span class="w-100 h-5px bg-light-grey"></span>
                                    <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                        <img src="{{ asset('icons/check-circle.svg') }}" alt="" class="h-40 img-grey">
                                    </div>
                                    <span class="w-100 h-5px"></span>
                                </div>

                                <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Delivered</p>
                                <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Finished</p>

                            </div>
                            
                        </div>
                    </div>

                </div>

                <span class="h-40px flex-shrink-0"></span>

            </div>

            <div class="d-flex align-items-center justify-content-center w-100 flex-shrink-0">

                <div class="d-flex align-items-stretch justify-content-center w-95 gap-5">

                    <div class="d-flex align-items-center flex-column w-100 border-grey-1 rounded-5 me-5">

                        <p class="fsc-3 mb-0 d-flex align-items-center w-100 px-10 py-3 gap-3"><img src="{{ asset('icons/user-circle.svg') }}" class="h-1em"> Informasi Pengiriman</p>
                        <span class="w-100 h-1px bg-grey"></span>

                        <div class="d-flex align-items-center justify-content-center w-100 px-15 py-10 flex-column gap-5">

                            <div class="d-flex align-items-center justify-content-center w-100 h-200px border-grey-1 rounded-4">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.223779593465!2d106.85558407355448!3d-6.234205161047454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3ba3fb17413%3A0xe50e0d2266ac9e74!2sPT.%20Abhimantra%20Sistem%20Solusindo!5e0!3m2!1sen!2sid!4v1772608159435!5m2!1sen!2sid" style="border:0;" class="w-100 h-100 rounded-4" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                            <div class="d-flex w-100 h-100px gap-5">

                                <div class="d-flex w-100 h-100 flex-column">
                                    <p class="fsc-2 fw-bolder mb-2 text-black">USER ID (CUSTOMER REF)</p>
                                    <p class="fsc-2 mb-0 px-2 py-1 bg-accent text-white rounded-2 fw-bold w-max">USR-9237</p>
                                </div>

                                <div class="d-flex w-100 h-100 flex-column">
                                    <p class="fsc-2 mb-0 fw-bolder text-black">Nama Lengkap</p>
                                    <p class="fsc-3 mb-0 fw-bold text-accent">Sonic The Hedgehog</p>
                                </div>

                            </div>

                            <div class="d-flex w-100 h-100px gap-5">

                                <div class="d-flex w-100 h-100 flex-column">
                                    <p class="fsc-2 mb-0 fw-bolder text-black">NOMOR TELEPON</p>
                                    <p class="fsc-3 mb-0 fw-bold text-black">0895-3912-9237</p>
                                </div>

                                <div class="d-flex w-100 h-100 flex-column">
                                    <p class="fsc-2 mb-0 fw-bolder text-black">ALAMAT PENGIRIMAN</p>
                                    <p class="fsc-1 mb-0">Jl. Kemajuan V No 4 RT 007 RW 04 Petukangan Selatan Kec. Petukangan Selatan</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center w-30 flex-shrink-0 border-grey-1 rounded-5"></div>

                </div>

            </div>

            <span class="h-40px flex-shrink-0"></span>

        @include('components.navbarFoot',[ "page" => "schedule"])
        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

        <script>

            function fill()
            {
                document.getElementById("empty").style.display = "none"
                document.getElementById("filled").style.display = "flex"
            }

        </script>

    </body>


</html>

<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->

    @if ($response['status'] === 'success')
        <form action="{{ route('user.checkout') }}" style="display:flex; flex-direction: column; gap: 10px;" method="POST">
            @csrf
            <input type="date" name="delivery_at" id="" value="{{ now()->addDays(3)->format('Y-m-d') }}">
            @foreach ($response['data']['items'] as $index=>$item)
                <span>Nama Menu ({{ $index }}): {{ $item['name'] }}</span>
                @if ($index < 1)
                    <input type="hidden" name="items[{{ $index }}][id]" value="{{ $item['id'] }}">
                    @foreach ($item['packages'] as $index_package=>$package)
                        <span>Nama Paket: {{ $package->name }}</span>
                        <input type="hidden" name={{ "items[$index][packages][$index_package][id]"}} value="{{ $package->id }}">
                        <div style="display:flex; flex-direction: column; gap: 10px;">
                            <label for="">Jumlah Pemesanan</label>
                            <input type="number" name={{ "items[$index][packages][$index_package][quantity]" }} min="{{ $package->minimum_order }}" value="1">
                        </div>
                        <div style="display:flex; flex-direction: column; gap: 10px;">
                            <label for="">Catatan</label>
                            <textarea name={{"items[$index][packages][$index_package][note]"}} id="">
                                
                            </textarea>
                        </div>
                    @endforeach
                    <button class="">Buatkan invoice</button>
                @endif
            @endforeach
        </form>
    @endif

    @if (session()->has('response'))
        {{ dd(session()->get('response')) }}
    @endif
</div>