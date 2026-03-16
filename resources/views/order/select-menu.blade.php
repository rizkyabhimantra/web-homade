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
                    <a href="/me/orders" class="fsc-3 text-black">Pesanan Saya</a>
                    <img src="{{ asset('icons/caret-arrow-right.svg') }}" class="h-100">
                    <p class="fsc-3 text-black mb-0">Detail Pesanan # 550E8300 - E298</p>
                </div>

                <div class="d-flex align-items-center mb-5 w-85">
                    <div class="d-flex w-100 justify-content-center flex-column">
                        <p class="fsc-4 mb-0 fw-bold">Detail Pemesanan # 550E8300 - E298</p>
                        <p class="fsc-3 mb-0">Dipesan pada: 6 Feb 2026, 15:00:30</p>
                    </div>

                    <div class="d-flex align-items-center gap-2 justify-content-end flex-shrink-0 h-100">
                        <button class="btn-primary-homade fsc-2 rounded-3 fw-bold text-white"><img src="{{ asset('icons/print.svg') }}" class="img-white"> Cetak Invoice</button>
                        <a href="/me/orders" class="btn-primary-homade fsc-2 rounded-3 fw-bold text-white">Kembali <img src="{{ asset('icons/arrow-right.svg') }}" class="img-white"></a>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-center w-85 border-grey-1 rounded-3 p-5 flex-column">
                    
                    <div class="d-flex align-items-center w-100 justify-content-between">
                        <p class="fsc-3 mb-0 fw-black">WORKFLOW STATUS : WAINTING REVIEW</p>
                        <p class="fsc-2 mb-0 bg-accent text-white rounded-pill d-flex align-items-center gap-3 px-4 py-1"><img src="{{ asset('icons/clock.svg') }}" class="img-white h-1em"> Waiting Confirmation</p>
                    </div>

                </div>

                <span class="h-40px flex-shrink-0"></span>


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