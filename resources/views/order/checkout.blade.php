@php
    $placeImg = "https://placehold.co/400";
    $mainAddress = collect($response['data']['delivery_info']['user_address'])->where('is_main', true)->first();
    $pickedAddress = $mainAddress['id'] ?? null;
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

                <div class="d-flex w-95 w-lg-85 align-items-center">
                    <a href="/schedule" class="fsc-3 text-black mb-0">Jadwal</a>
                    <img src="{{ asset('icons/caret-arrow-right.svg') }}" class="h-100">
                    <a href="/schedule" class="fsc-3 text-black mb-0">Pilih Menu</a>
                    <img src="{{ asset('icons/caret-arrow-right.svg') }}" class="h-100">
                    <p class="fsc-3 text-black mb-0 fw-bold">Isi Data Pengiriman</p>
                </div>

                <div class="d-flex align-items-center flex-row mb-5 w-95 w-lg-85">
                    <div class="d-flex w-100 justify-content-center flex-column">
                        <p class="fsc-4 fsc-xl-5 mb-0 fw-black">Data Pengiriman</p>
                        <p class="fsc-3 mb-0">Pastikan data valid untuk kelancaran pengirimian</p>
                    </div>
                </div>
                
                <!-- real meat and potatoes -->

                <div class="d-flex align-items-stretch flex-column flex-lg-row justify-content-center gap-5 w-95 w-sm-60 w-lg-95 w-xl-85 mt-5">
                    
                    <div class="w-99 w-lg-55 w-xl-65 flex-shrink-0 align-items-center justify-content-center flex-column">

                        <p class="fsc-3 mb-10 fw-bold">Alamat</p>

                        <!-- begin::pick address -->
                            <div class="d-flex align-items-center justify-content-center border-grey-1 px-5 py-10 rounded-4 mb-10 w-100">
                                <button onclick="togglePopUp()" class="d-flex w-100 h-70px gap-4 overflow-hidden">

                                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 h-100 ratio-1 bg-light-accent rounded-3">
                                        <img src="{{ asset('icons/map.svg') }}" alt="" class="h-50 img-accent">
                                    </div>

                                    <div class="d-flex flex-column w-100 h-100 justify-content-center overflow-hidden">
                                        <p class="fsc-3 mb-0 fw-bold w-100 text-start" id="selectedAddressLabel">
                                            {{ isset($mainAddress) ? $mainAddress['received_name'] : 'Pilih Alamat' }}
                                        </p>
                                        <p class="fsc-2 mb-0 w-100 text-start overflow-hidden text-overflow text-nowrap" id="selectedAddressText">
                                            {{ $mainAddress['address'] ?? 'Belum ada alamat dipilih' }}
                                        </p>
                                    </div>

                                    <div class="d-flex h-100 ratio-1 align-items-center justify-content-center flex-shrink-0">
                                        <img src="{{ asset('icons/caret-arrow-right.svg') }}" alt="" class="h-80">
                                    </div>

                                </button>
                            </div>
                            <!-- end::pick address -->

                        <form class="d-flex align-items-center justify-content-center flex-column border-grey-1 p-5 rounded-4 mb-10 w-100">
                            @csrf

                            <div class="d-flex w-100 mb-5 flex-column">
                                <p class="fsc-2 mb-1 fw-bold">Catatan Pemesanan</p>
                                <textarea name="note" class="px-2 py-3 d-flex w-100 min-h-100px max-h-300px border-grey-1 rounded-1"></textarea>
                            </div>

                            <div class="d-flex w-100 h-70px gap-4 mb-5 overflow-hidden">

                                <div class="d-flex flex-column w-100 h-100 justify-content-center overflow-hidden">
                                    <p class="fsc-2 mb-0 fw-black w-100 text-start">Total Pembayaran</p>
                                    <p class="fsc-2 mb-0 fw-black w-100 text-start">(Belum Termasuk Ongkir)</p>
                                </div>
                                
                                <div class="d-flex h-100 ratio-1 align-items-center justify-content-center flex-shrink-0">
                                    <p class="fsc-3 mb-0 fw-bolder w-100 text-start text-nowrap">Rp {{ number_format($response['data']['transaction']['sub_total'], 2, ',', '.') }}</p>
                                </div>

                            </div>

                            <input id="checkoutPayload" name="checkout_payload" value="">
                            <input id="pickedAddressId" name="address_id" value="{{ $pickedAddress ?? '' }}">

                            <button type="button" onclick="submitOrder()" class="w-100 bg-accent rounded-3 align-items-center justify-content-center d-flex py-5 fsc-3 text-white fw-bold">Pesan</button>

                        </form>

                    </div>

                    <div class="d-flex align-items-center overflow-hidden w-100 h-max flex-column rounded-5 border-grey-1 py-5 min-w-0">
                    
                        <div class="d-flex align-items-center justify-content-center flex-column w-100 px-10">

                            <p class="fsc-3 fw-black d-flex align-items-center w-100 gap-5"><img src="{{ asset('icons/bag.svg')}}" class="h-1em img-accent">Ringkasan Pesanan</p>
        
                            <div class="d-flex w-100 h-50px px-3 rounded-3 align-items-center justify-content-between flex-shrink-0 border-grey-1 mb-3">
                                <p class="fsc-2 mb-0">Tipe Pesanan</p>
                                <p class="fsc-2 mb-0">
                                    {{ $response['data']['transaction']['category']->value === "order" 
                                        ? 'Pesanan Via Jadwal' 
                                        : 'Pesanan Pre Order' }}
                                </p>
                            </div>
        
                            <div class="d-flex w-100 h-50px px-3 rounded-3 align-items-center justify-content-between flex-shrink-0 border-grey-1 mb-5">
                                <p class="fsc-2 mb-0">Tanggal Pengiriman</p>
                                <p class="fsc-2 mb-0">{{\Carbon\Carbon::parse($response['data']['delivery_info']['delivery_at'])->translatedFormat('d F Y')}}</p>
                            </div>

                            <div class="d-flex align-items-center flex-column overflow-scroll my-4 gap-3 h-100 w-100">
                                
                                @foreach ($response['data']['summary_orders']['items'] as $item)
                                    @foreach ($item['packages'] as $package)

                                        <div class="d-flex w-100 h-50px overflow-hidden gap-3 flex-shrink-0">

                                            <div class="d-flex align-items-center flex-shrink-0 justify-content-center h-100 ratio-1 border-grey-1 rounded-3">
                                                <p class="fsc-3 fw-black text-accent mb-0 flex-shrink-0">{{ $package['quantity'] }}x</p>
                                            </div>

                                            <div class="d-flex flex-column overflow-hidden min-w-0 flex-grow-1 h-100">
                                                <p class="fsc-2 h-50 w-100 text-nowrap overflow-hidden text-overflow fw-black mb-0">{{ $item['name'] }}</p>
                                                <p class="fsc-1 h-50 mb-0">{{ $package['name'] }}</p>
                                            </div>

                                            <div class="d-flex flex-column flex-shrink-0 align-items-end">
                                                <p class="fsc-2 mb-0">Rp {{ number_format($package['price'] * $package['quantity'], 0, ',', '.') }}</p>
                                            </div>

                                        </div>

                                    @endforeach
                                @endforeach

                            </div>

                            <div class="d-flex mt-3 justify-content-between align-items-center w-100">
                                <p class="fsc-2 mb-0">Subtotal</p>
                                <p class="fsc-2 mb-0" id="orderSubtotal">Rp {{ number_format($response['data']['transaction']['sub_total'], 2, ',', '.') }}</p>
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <p class="fsc-2 mb-0">Ongkos Kirim</p>
                                <p class="fsc-2 mb-0" id="orderSubtotal">Rp {{ number_format($response['data']['transaction']['shipping_cost'], 2, ',', '.') }}</p>
                            </div>

                            <div class="d-flex mt-3 justify-content-between align-items-center w-100">
                                <p class="fsc-2 fw-bold mb-0">Total Pembayaran</p>
                                <p class="fsc-2 fw-bold mb-0" id="orderTotal">Rp {{ number_format($response['data']['transaction']['sub_total'], 2, ',', '.') }}</p>
                            </div>
        
                        </div>

                    </div>

                </div>

                <div class="d-none2 align-items-center justify-content-center pop-up" id="PopUp">
                    <div class="d-flex align-items-center justify-content-center w-99 w-sm-85 w-md-51 h-80 bg-white flex-column gap-5 rounded-4 p-5 px-10">

                        <div class="d-flex w-100 align-items-stretch justify-content-between">
                            <p class=" fsc-4 fsc-md-3 mb-0 fw-bold">Pilih Alamat</p>

                            <button class="h-100 ratio-1 align-items-center justify-content-center d-flex bg-accent rounded-2" onclick="togglePopUp()">
                                <img src="{{ asset('icons/close.svg') }}" alt="" class="h-80 img-white">
                            </button>
                        </div>

                        <div class="d-flex align-items-center flex-column gap-3 w-100 h-100 overflow-scroll">

                            @foreach ($response['data']['delivery_info']['user_address'] as $address)
                                <button
                                    class="address-option w-100 border-grey-1 py-5 px-5 rounded-3 overflow-hidden flex-shrink-0 {{ ($address['id'] ?? null) === $pickedAddress ? 'border-homade-1' : '' }}"
                                    data-id="{{ $address['id'] }}"
                                    data-name="{{ $address['received_name'] }}"
                                    data-address="{{ $address['address'] }}"
                                    onclick="selectAddress(this)">
                                    <p class="fsc-2 mb-3 text-start fw-bold rounded-pill bg-accent text-white px-4 py-1 py-md-0 w-max">
                                        {{ $address['label'] }}
                                    </p>
                                    <p class="fsc-3 mb-0 w-100 text-start fw-bolder">{{ $address['received_name'] }}</p>
                                    <p class="fsc-2 mb-0 w-100 text-start fw-bold">{{ $address['phone'] }}</p>
                                    <p class="fsc-1 mb-0 w-100 text-start text-nowrap overflow-hidden text-overflow">{{ $address['address'] }}</p>
                                </button>
                            @endforeach

                        </div>
                    </div>
                </div>

                <!--  -->

                <span class="h-40px flex-shrink-0"></span>


                <div class="d-flex align-items-center justify-content-center flex-column flex-md-row mt-5 w-95 w-sm-45 w-md-85 h-md-125px gap-10">
                    
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

        @include('components.navbarFoot',[ "page" => "schedule"])

        <script>
            let pickedAddress = @json($pickedAddress);

            const summaryItems = @json($response['data']['summary_orders']['items']);
            const deliveryAt   = @json(\Carbon\Carbon::parse($response['data']['delivery_info']['delivery_at'])->format('Y-m-d'));
            const userInfo     = @json($response['data']['user_info']);

            function openPopup() {
                document.getElementById('PopUp').classList.add('d-flex');
            }

            function closePopup() {
                document.getElementById('PopUp').classList.remove('d-flex');
            }

            function togglePopUp() {
                document.getElementById('PopUp').classList.toggle('d-flex');
            }

            function selectAddress(btn) {
                const id      = btn.dataset.id;  // keep as string — it's a UUID
                const name    = btn.dataset.name;
                const address = btn.dataset.address;

                pickedAddress = id;

                document.getElementById('selectedAddressLabel').textContent = name;
                document.getElementById('selectedAddressText').textContent  = address;
                document.getElementById('pickedAddressId').value            = id;

                closePopup();

                document.querySelectorAll('.address-option').forEach(b => {
                    b.classList.toggle('border-homade-1', b.dataset.id === id);
                });
            }

            function submitOrder() {
                const note      = document.querySelector('textarea[name="note"]').value;
                const addressId = document.getElementById('pickedAddressId').value;

                if (!addressId) {
                    alert('Silakan pilih alamat pengiriman terlebih dahulu.');
                    return;
                }

                const items = summaryItems.map(item => ({
                    id: item.id,
                    packages: item.packages.map(pkg => ({
                        id: pkg.id,
                        quantity: pkg.quantity
                    }))
                }));

                const payload = {
                    items: items,
                    delivery_info: {
                        delivery_at: deliveryAt,
                        user_address_id: addressId
                    },
                    user_info: {
                        first_name: userInfo.first_name,
                        last_name:  userInfo.last_name,
                        phone:      userInfo.phone
                    },
                    note: note
                };

                const payloadString = JSON.stringify(payload).replace(/"/g, "'");

                console.log('checkout_payload:', payloadString); // remove when working

                document.getElementById('checkoutPayload').value = payloadString;
                document.querySelector('form').action  = '/transaction';
                document.querySelector('form').method  = 'POST';
                document.querySelector('form').submit();
            }
            

        </script>
        
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
