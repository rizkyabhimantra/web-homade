@php
    $placeImg = "https://placehold.co/400";
    $pickedAddress = $mainAddress['id'] ?? null;
@endphp

<!DOCTYPE html>
<html lang="en">
    @include('components.header' )

    <body class="d-flex flex-column">

        @if (session('response'))
            <script>
                alert("{{ session('response')['message'] }}");
            </script>
        @endif
        
    @if ($response['status_code'] === 201)

        @include('components.navbarHead',[ "page" => "schedule", "bg" => "grey"])


            <span class="h-40px flex-shrink-0"></span>

            <div class="d-flex align-items-center justify-content-center flex-column gap-5 w-100">
                
                <span class="h-30px flex-shrink-0"></span>

                <div class="d-flex align-items-center justify-content-center flex-column flex-row mb-5 w-95 w-lg-85">
                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-100px img-accent ratio-1">
                    <p class="fsc-4 fw-bolder mb-2">Pesanan Berhasil</p>
                    <p class="fsc-2 mb-3">Silahkan Tunggu konfirmasi pemesanan anda</p>
                </div>
                
                <!-- real meat and potatoes -->

                <div class="d-flex align-items-stretch flex-column flex-lg-row justify-content-center gap-5 w-95 w-sm-60 w-lg-95 w-xl-85 mt-5">
                    
                    <div class="w-99 w-lg-55 w-xl-65 flex-shrink-0 align-items-center rounded-5 border-grey-1 gap-3 px-7 py-10 justify-content-center flex-column">
                        
                        <div class="d-flex align-items-center justify-content-center flex-column w-100 mb-3">
                            <p class="fsc-2 mb-3 w-100 fw-bold">Nama Lengkap</p>
                            <p class="fsc-2 mb-0 px-3 py-4 w-100 border-grey-1 rounded-4 fw-bold">{{ $response['data']['user']['first_name'] }} {{ $response['data']['user']['last_name'] }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center flex-column w-100 mb-3">
                            <p class="fsc-2 mb-3 w-100 fw-bold">Nomor Telepon</p>
                            <p class="fsc-2 mb-0 px-3 py-4 w-100 border-grey-1 rounded-4 fw-bold">{{ $response['data']['user']['phone'] }} </p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center flex-column w-100 mb-3">
                            <p class="fsc-2 mb-3 w-100 fw-bold">Alamat Pengiriman</p>
                            <p class="fsc-2 mb-0 px-3 py-4 w-100 border-grey-1 rounded-4 fw-bold">{{ $response['data']['delivery_info']['address_info']['address'] }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center flex-column w-100 mb-3">
                            <p class="fsc-2 mb-3 w-100 fw-bold">Note Opsional</p>
                            <p class="fsc-2 mb-0 px-3 py-4 w-100 border-grey-1 rounded-4 h-100px overflow-scroll fw-bold">{{ $response['data']['note'] }} </p>
                        </div>

                    </div>

                    <div class="d-flex align-items-center overflow-hidden w-100 h-max flex-column rounded-5 border-grey-1 py-5 min-w-0">
                    
                        <div class="d-flex align-items-center justify-content-center flex-column w-100 px-10">

                            <p class="fsc-3 fw-black d-flex align-items-center w-100 gap-5"><img src="{{ asset('icons/bag.svg')}}" class="h-1em img-accent">Ringkasan Pesanan</p>
        
                            <div class="d-flex w-100 h-50px px-3 rounded-3 align-items-center justify-content-between flex-shrink-0 border-grey-1 mb-3">
                                <p class="fsc-2 mb-0">Tipe Pesanan</p>
                                <p class="fsc-2 mb-0">
                                    {{ $response['data']['category'] === "order" 
                                        ? 'Pesanan Via Jadwal' 
                                        : 'Pesanan Pre Order' }}
                                </p>
                            </div>
        
                            <div class="d-flex w-100 h-50px px-3 rounded-3 align-items-center justify-content-between flex-shrink-0 border-grey-1 mb-5">
                                <p class="fsc-2 mb-0">Tanggal Pengiriman</p>
                                <p class="fsc-2 mb-0">{{\Carbon\Carbon::parse($response['data']['delivery_info']['delivery_at'])->translatedFormat('d F Y')}}</p>
                            </div>

                            <div class="d-flex align-items-center flex-column overflow-scroll my-4 gap-3 h-100 w-100">
                                
                                @foreach ($response['data']['items'] as $item)

                                        <div class="d-flex w-100 h-50px overflow-hidden gap-3 flex-shrink-0">

                                            <div class="d-flex align-items-center flex-shrink-0 justify-content-center h-100 ratio-1 border-grey-1 rounded-3">
                                                <p class="fsc-3 fw-black text-accent mb-0 flex-shrink-0">{{ $item['quantity'] }}x</p>
                                            </div>

                                            <div class="d-flex flex-column overflow-hidden min-w-0 flex-grow-1 h-100">
                                                <p class="fsc-2 h-50 w-100 text-nowrap overflow-hidden text-overflow fw-black mb-0">{{ $item['name'] }}</p>
                                                <p class="fsc-1 h-50 mb-0">{{ $item['package'] }}</p>
                                            </div>

                                            <div class="d-flex flex-column flex-shrink-0 align-items-end">
                                                <p class="fsc-2 mb-0">Rp {{ number_format($item['total_price'] * $item['quantity'], 2, ',', '.') }}</p>
                                            </div>

                                        </div>

                                @endforeach

                            </div>

                            <div class="d-flex mt-3 justify-content-between align-items-center w-100">
                                <p class="fsc-2 mb-0">Subtotal</p>
                                <p class="fsc-2 mb-0" id="orderSubtotal">Rp {{ number_format($response['data']['subtotal'], 2, ',', '.') }}</p>
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <p class="fsc-2 mb-0">Ongkos Kirim</p>
                                <p class="fsc-2 mb-0" id="orderSubtotal">Rp {{ number_format($response['data']['shipping_cost'], 2, ',', '.') }}</p>
                            </div>

                            <div class="d-flex mt-3 justify-content-between align-items-center w-100">
                                <p class="fsc-2 fw-bold mb-0">Total Pembayaran</p>
                                <p class="fsc-2 fw-bold mb-0" id="orderTotal">Rp {{ number_format($response['data']['total_price'], 2, ',', '.') }}</p>
                            </div>
        
                            <a href="{{ route('user.orders') }}" class="w-100 py-3 bg-accent fw-bold text-white text-center fsc-2 mt-5 rounded-3">Lihat Page Transaksi</a>

                        </div>
                        

                    </div>

                </div>

            </div>

            <span class="h-40px flex-shrink-0"></span>

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
