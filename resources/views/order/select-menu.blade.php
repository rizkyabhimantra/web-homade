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
                        <p class="fsc-4 fsc-xl-5 mb-0 fw-black">Pemesanan Untuk Pre Order</p>
                        <p class="fsc-3 mb-0">Silahkan pilih paket menu yang tersedia</p>
                    </div>

                    <div class="d-none d-lg-flex align-items-center justify-content-end flex-shrink-0 h-100">
                        <a href="/schedule" class="btn-primary-homade fsc-3 rounded-3 fw-bold text-white">Kembali</a>
                    </div>
                </div>

                <div class="d-flex w-90 gap-5 align-items-start flex-column flex-lg-row">

                    <!-- begin::menu -->
                    <div class="d-lg-grid d-flex flex-column align-items-center w-100 gap-5 overflow-hidden" style="grid-template-columns: repeat(2, 1fr);">
                        @foreach ($response['data']['items'] as $menu)

                        <div class="d-flex align-items-center justify-content-center flex-column border-grey-1 rounded-5 w-100 w-md-400px w-lg-100 h-auto overflow-hidden">
                            <div class="d-flex w-100 flex-shrink-0 h-160px rounded-top-5 overflow-hidden">
                                <img src="{{ $menu['image_url'] }}" alt="" class="w-100 h-100 object-fit-cover">
                            </div>

                            <div class="d-flex w-100 min-h-200px rounded-bottom-5 p-9 pt-6 pb-5 overflow-hidden">

                                <div class="d-flex w-100 h-100 flex-column gap-5 overflow-hidden">

                                    <div class="d-flex w-100 align-items-center justify-content-between overflow-hidden gap-5 flex-shrink-0">
                                        <p class="fsc-3 mb-0 fw-bold w-100 overflow-hidden text-overflow text-nowrap">{{ $menu['name'] }}</p>
                                        <p class="fsc-2 text-accent mb-0 fw-bold text-nowrap">Mulai Dari 30k</p>
                                    </div>

                                    <p class="fsc-2 mb-0 w-100 h-100 overflow-scroll">{{ $menu['description'] }}</p>
                                    <button onclick="popUpOpen('{{ $menu['id'] }}')" class="d-flex py-3 fsc-3 bg-accent align-items-center justify-content-center text-white fw-bold rounded-3 flex-shrink-0">Pilih Menu</button>

                                </div>
                            </div>
                        </div>

                        @endforeach

                        <div class="d-flex align-items-center justify-content-between w-95">
                            <select name="limit" onchange="window.location.href='?limit=' + this.value" class="h-100 border-grey-1 outline-0 bg-transparent fs-4 py-2 px-2 rounded-2">
                                @foreach ([4, 8, 12, 16] as $limit)
                                    <option value="{{ $limit }}" {{ request('limit') == $limit ? 'selected' : '' }}>
                                        {{ $limit }}
                                    </option>
                                @endforeach
                            </select>

                            @php
                                $pagination = $response['data']['pagination'] ?? null;
                                $currentPage = $pagination['current_page'] ?? 1;
                                $lastPage = $pagination['last_page'] ?? 1;

                                $window = 1;
                                $start = max(2, $currentPage - $window);
                                $end = min($lastPage - 1, $currentPage + $window);
                            @endphp

                            @if($pagination && $lastPage > 1)
                            <div class="d-flex h-100 gap-2">
                                
                                <a href="{{ $currentPage > 1 ? request()->fullUrlWithQuery(['page' => $currentPage - 1]) : '#' }}" 
                                class="text-decoration-none text-dark h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center {{ $currentPage <= 1 ? 'opacity-50 pe-none' : '' }}">
                                    <img src="{{ asset('icons/caret-arrow-left.svg') }}" alt="Prev" class="h-90">
                                </a>

                                <a href="{{ request()->fullUrlWithQuery(['page' => 1]) }}" 
                                class="text-decoration-none h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold {{ $currentPage == 1 ? 'bg-accent text-white' : 'text-dark' }}">
                                    1
                                </a>

                                @if($start > 2)
                                    <div class="h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold cursor-default">
                                        ...
                                    </div>
                                @endif

                                @for ($i = $start; $i <= $end; $i++)
                                    <a href="{{ request()->fullUrlWithQuery(['page' => $i]) }}" 
                                    class="text-decoration-none h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold {{ $currentPage == $i ? 'bg-accent text-white' : 'text-dark' }}">
                                        {{ $i }}
                                    </a>
                                @endfor

                                @if($end < $lastPage - 1)
                                    <div class="h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold cursor-default">
                                        ...
                                    </div>
                                @endif

                                <a href="{{ request()->fullUrlWithQuery(['page' => $lastPage]) }}" 
                                class="text-decoration-none h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold {{ $currentPage == $lastPage ? 'bg-accent text-white' : 'text-dark' }}">
                                    {{ $lastPage }}
                                </a>

                                <a href="{{ $currentPage < $lastPage ? request()->fullUrlWithQuery(['page' => $currentPage + 1]) : '#' }}" 
                                class="text-decoration-none text-dark h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center {{ $currentPage >= $lastPage ? 'opacity-50 pe-none' : '' }}">
                                    <img src="{{ asset('icons/caret-arrow-right.svg') }}" alt="Next" class="h-90">
                                </a>

                            </div>
                            @endif

                        </div>

                    </div>
                    <!-- end::menu -->
    
                    <!-- begin::basket -->
                    <div class="d-flex align-items-center flex-column flex-md-row justify-content-center gap-5 w-99 w-lg-40 w-xl-35 flex-shrink-0 h-max position-sticky top-20px">
    
                        <div class="d-flex py-20 align-items-center overflow-hidden w-100 h-100 flex-column rounded-5 border-grey-1 min-w-0">
                        
                            <div class="d-flex align-items-center justify-content-center flex-column w-100 px-10 h-100">
    
                                <p class="fsc-3 fw-black d-flex align-items-center w-100 gap-5"><img src="{{ asset('icons/bag.svg')}}" class="h-1em img-accent">Ringkasan Pesanan</p>
            
                                <div class="d-flex w-100 h-50px px-3 rounded-3 align-items-center justify-content-between flex-shrink-0 border-grey-1 mb-3">
                                    <p class="fsc-2 mb-0">Tipe Pesanan</p>
                                    <p class="fsc-2 mb-0">Pesanan Pre Order</p>
                                </div>

                                <div class="d-flex w-100 h-50px px-3 rounded-3 align-items-center justify-content-between flex-shrink-0 border-grey-1 mb-3">
                                    <p class="fsc-2 mb-0 text-nowrap">Tanggal Pengiriman</p>
                                    <input type="date" id="deliveryDate" class=" text-accent fw-bold fsc-2 text-center" placeholder="Pilih Tanggal Pengiriman">
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

                    <!-- begin::pop up -->
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
                    <!-- end::pop up -->
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

        @include('components.navbarFoot',[ "page" => "schedule"])

        <script>

            const menuData = @json($response['data']['items']);
            let currentMenu = null;
            let allOrders = [];

            const today = new Date();
            today.setDate(today.getDate() + 1);
            const minDate = today.toISOString().split('T')[0];
            document.getElementById('deliveryDate').min = minDate;

            document.getElementById('deliveryDate').addEventListener('change', function() {
                const selected = new Date(this.value);
                const tomorrow = new Date();
                tomorrow.setDate(tomorrow.getDate() + 1);
                tomorrow.setHours(0, 0, 0, 0);

                if (selected < tomorrow) {
                    alert('Tanggal pengiriman harus setelah hari ini!');
                    this.value = '';
                }
            });

            function popUpOpen(menuId) {
                const deliveryDate = document.getElementById('deliveryDate').value;

                if (!deliveryDate) {
                    alert('Mohon Pilih Tanggal Pengiriman Sebelum Memilih Menu');
                    return;
                }

                const day = new Date(deliveryDate).getDay();

                const minOrder = (day === 0 || day === 6) ? 100 : 50;

                currentMenu = menuData.find(m => m.id === menuId);
                if (!currentMenu) return;

                document.getElementById('popUpMenuImg').src = currentMenu.image_url;
                document.getElementById('popUpMenuName').innerText = currentMenu.name;
                document.getElementById('popUpMenuDesc').innerText = currentMenu.description;

                const menuIndex = menuData.findIndex(m => m.id === menuId);
                document.getElementById('popUpMenuLabel').innerText = 'Paket ' + (menuIndex === 0 ? 'A' : 'B');

                const container = document.getElementById('popUpPackages');
                container.innerHTML = '';

                currentMenu.packages.forEach((pkg, index) => {
                    const i = index + 1;
                    const price = new Intl.NumberFormat('id-ID').format(parseFloat(pkg.price));

                    container.innerHTML += `
                        <div class="d-flex bg-beige w-99 w-md-85 rounded-5 flex-column flex-shrink-0">
                            <div class="d-flex h-300px h-md-100px flex-column flex-md-row w-100 px-5 py-1 gap-5">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 h-50 h-md-100 ratio-1">
                                    <img src="${pkg.image_url}" alt="" class="h-60">
                                </div>
                                <div class="d-flex justify-content-center align-items-center align-items-md-start h-100 w-100 flex-column">
                                    <p class="fsc-3 fw-black mb-0">${pkg.name}</p>
                                    <p class="fsc-2 fw-bolder mb-0">Rp ${price} / box</p>
                                    <button class="fsc-1 d-none2 w-100px overflow-hidden text-overflow text-center justify-content-center justify-content-md-start text-md-start text-nowrap"
                                        onclick="notes('${i}')" id="note${i}">Tambah Catatan</button>
                                </div>
                                <div class="d-flex align-items-center justify-content-center my-5 gap-5 flex-shrink-0">
                                    <button onclick="counterSubtract('${i}', ${minOrder})"
                                        class="d-flex bg-accent text-white justify-content-center align-items-center h-100 h-md-25 ratio-1 rounded-2">
                                        <img src="{{ asset('icons/minus.svg') }}" alt="" class="img-white ratio-1 h-75">
                                    </button>
                                    <input class="fsc-2 text-center w-50px mb-0" id="input${i}"
                                        oninput="syncInput('${i}', ${minOrder})" onblur="checkEmpty('${i}')" value="0" type="number">
                                    <button onclick="counterAdd('${i}', ${minOrder})"
                                        class="d-flex bg-accent text-white justify-content-center align-items-center h-100 h-md-25 ratio-1 rounded-2">
                                        <img src="{{ asset('icons/plus.svg') }}" alt="" class="img-white ratio-1 h-75">
                                    </button>
                                </div>
                            </div>
                            <div class="d-none2 align-items-center px-10 pb-3 justify-content-center w-100 h-75px" id="textareaContainer${i}">
                                <textarea class="w-100 h-100 bg-white rounded-3 p-2 resize-0" placeholder="Catatan Opsional"
                                    oninput="syncButton('${i}')" id="textarea${i}"></textarea>
                            </div>
                        </div>
                    `;
                });
                
                allOrders
                    .filter(o => o.menuId === currentMenu.id)
                    .forEach(o => {
                        currentMenu.packages.forEach((pkg, index) => {
                            if (pkg.name === o.pkg) {
                                const i = index + 1;
                                document.getElementById('input' + i).value = o.qty;
                                document.getElementById('note' + i).style.display = "flex";

                                if (o.note) {
                                    document.getElementById('textarea' + i).value = o.note;
                                    document.getElementById('note' + i).innerText = o.note;
                                }
                            }
                        });
                    });

                document.getElementById('popUp').style.display = "flex";
            }

            function popUpClose() {document.getElementById('popUp').style.display = "none"}

            function confirmOrder() {
                if (!currentMenu) return;

                const packages = currentMenu.packages;
                const newItems = [];

                packages.forEach((pkg, index) => {
                    const i = index + 1;
                    const qty = parseInt(document.getElementById('input' + i).value) || 0;
                    if (qty > 0) {
                        newItems.push({
                            menuId: currentMenu.id,
                            menu: currentMenu.name,
                            pkgId: pkg.id,
                            pkg: pkg.name,
                            qty,
                            note: document.getElementById('textarea' + i).value.trim(),
                            price: parseFloat(pkg.price)
                        });
                    }
                });

                if (newItems.length === 0) {
                    alert('Mohon Pilih Menu Yang Ingin Di Pesan')
                    return;
                }

                allOrders = allOrders.filter(o => o.menuId !== currentMenu.id);
                allOrders.push(...newItems);

                renderSummary();
                popUpClose();
            }

            function renderSummary() {
                const summaryContainer = document.getElementById('orderSummaryItems');
                summaryContainer.innerHTML = '';
                let subtotal = 0;

                allOrders.forEach(item => {
                    const itemTotal = item.qty * item.price;
                    subtotal += itemTotal;
                    summaryContainer.innerHTML += `
                        <div class="d-flex w-100 h-50px overflow-hidden gap-3 flex-shrink-0">

                            <div class="d-flex align-items-center flex-shrink-0 justify-content-center h-100 ratio-1 border-grey-1 rounded-3">
                                <p class="fsc-3 fw-black text-accent mb-0 flex-shrink-0">${item.qty}x</p>
                            </div>

                            <div class="d-flex flex-column w-100 overflow-hidden h-100">
                                <p class="fsc-2 h-50 w-100 text-nowrap fw-black mb-0">${item.menu}</p>
                                <p class="fsc-1 h-50 mb-0">${item.pkg}</p>
                            </div>

                            <div class="d-flex flex-column flex-shrink-0 align-items-end">
                                <p class="fsc-2 mb-0">Rp ${new Intl.NumberFormat('id-ID').format(itemTotal)}</p>
                                <button onclick="removeOrder('${item.menuId}', '${item.pkg}')" class="fsc-1 text-danger fw-bold">Hapus</button>
                            </div>

                        </div>
                    `;
                });

                const fmt = new Intl.NumberFormat('id-ID').format(subtotal);
                document.getElementById('orderSubtotal').innerText = 'Rp ' + fmt;
                document.getElementById('orderTotal').innerText = 'Rp ' + fmt;
            }

            function removeOrder(menuId, pkgName) {
                allOrders = allOrders.filter(o => !(o.menuId === menuId && o.pkg === pkgName));
                renderSummary();
            }

            function counterAdd(x, minOrder = 5) {
                const element = document.getElementById('input' + x);
                let currentValue = parseInt(element.value) || 0;

                if (minOrder === 1) {
                    element.value = currentValue + 1;
                    if (currentValue === 0) {
                        document.getElementById('note' + x).style.display = "flex";
                    }
                } else {
                    if (currentValue === 0) {
                        element.value = minOrder;
                        document.getElementById('note' + x).style.display = "flex";
                    } else {
                        element.value = currentValue + 1;
                    }
                }
            }

            function counterSubtract(x, minOrder = 5) {
                const element = document.getElementById('input' + x);
                let currentValue = parseInt(element.value) || 0;

                if (currentValue > 0) {
                    if (minOrder === 1) {
                        element.value = currentValue - 1;
                        if (currentValue === 1) {
                            document.getElementById('note' + x).style.display = "none";
                            document.getElementById('textareaContainer' + x).style.display = "none";
                        }
                    } else {
                        if (currentValue === minOrder) {
                            element.value = 0;
                            document.getElementById('note' + x).style.display = "none";
                            document.getElementById('textareaContainer' + x).style.display = "none";
                        } else {
                            element.value = currentValue - 1;
                        }
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

            function syncInput(x, minOrder = 5) {
                const val = parseInt(document.getElementById('input' + x).value);
                if (val === 0 || isNaN(val)) {
                    document.getElementById('note' + x).style.display = "none";
                    document.getElementById('textareaContainer' + x).style.display = "none";
                } else {
                    document.getElementById('note' + x).style.display = "flex";
                }
            }

            function checkEmpty(x) 
            {
                const input = document.getElementById('input' + x)
                
                if (input.value.trim() === "") {
                    input.value = 0
                    syncInput(x)
                }
            }
        
            function prepareCheckout() {
                if (allOrders.length === 0) {
                    alert('Keranjang masih kosong!');
                    return false;
                }

                const deliveryDate = document.getElementById('deliveryDate').value;
                if (!deliveryDate) {
                    alert('Mohon pilih tanggal pengiriman!');
                    return false;
                }

                const itemsMap = {};

                allOrders.forEach(order => {
                    if (!itemsMap[order.menuId]) {
                        itemsMap[order.menuId] = { id: order.menuId, packages: [] };
                    }
                    itemsMap[order.menuId].packages.push({
                        id: order.pkgId,
                        quantity: order.qty,
                        note: order.note
                    });
                });

                const payload = {
                    items: Object.values(itemsMap),
                    delivery_info: {
                        delivery_at: deliveryDate
                    }
                };

                document.getElementById('checkoutPayload').value = JSON.stringify(payload);
                return true;
            }

            document.querySelectorAll('a[href*="page="]').forEach(link => {
                link.addEventListener('click', function() {
                    sessionStorage.setItem('allOrders', JSON.stringify(allOrders));
                    sessionStorage.setItem('deliveryDate', document.getElementById('deliveryDate').value);
                });
            });

            document.querySelector('select[name="limit"]').addEventListener('change', function() {
                sessionStorage.setItem('allOrders', JSON.stringify(allOrders));
                sessionStorage.setItem('deliveryDate', document.getElementById('deliveryDate').value);
            });

            const saved = sessionStorage.getItem('allOrders');
            if (saved) {
                allOrders = JSON.parse(saved);
                renderSummary();
                sessionStorage.removeItem('allOrders');
            }

            const savedDate = sessionStorage.getItem('deliveryDate');
            if (savedDate) {
                document.getElementById('deliveryDate').value = savedDate;
                sessionStorage.removeItem('deliveryDate');
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
