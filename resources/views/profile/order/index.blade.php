@php
    $placeImg = "https://placehold.co/400"
@endphp

<!DOCTYPE html>
<html lang="en">
    @include('components.header' )

    <body class="d-flex flex-column">
        @include('components.navbarHead',[ "page" => "", "bg" => "grey"])

        <span class="h-40px flex-shrink-0"></span>

        <div class="d-flex w-100 align-items-center justify-content-center">

            <div class="d-flex w-90 flex-column flex-lg-row align-items-start gap-5">

            <!-- begin::Left Side -->
                <div class="d-flex w-100 w-lg-25 flex-column border-grey-1 rounded-4 gap-1 p-5 flex-shrink-0">

                    <div class="d-flex w-100 mb-2 h-75px align-items-center gap-5">

                        <div class="h-100 ratio-1 rounded-circle border-black-1 align-items-center justify-content-center d-flex flex-shrink-0">
                            <img src="{{ asset('icons/user.svg') }}" class="h-75 ratio-1" alt="">
                        </div>

                        @php
                        
                        @endphp

                        <div class="d-flex w-100 h-75 flex-column justify-content-center w-100 ">
                            <p class="fs-3 text-accent fw-bolder mb-0">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>
                            <a href="{{ route('user.me') }}" class="fs-5 mb-0 text-accent fw-light d-flex align-items-center gap-1"><img src="{{ asset("icons/edit.svg") }}" class="h-12em"> Ubah Profil</a>
                        </div>

                    </div>

                    <!--begin::Accordion-->
                    <div class="accordion accordion-icon-collapse px-3" id="kt_accordion_3">
                        <!--begin::Item-->
                        <div class="">
                            <!--begin::Header-->
                            <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse" data-bs-target="#kt_accordion_3_item_1">
                                <h3 class="fs-2 fw-bolder mb-0 d-flex text-black align-items-center gap-1"><img src="{{ asset("icons/user-circle.svg") }}" class="h-15em" alt="">Akun Saya</h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_accordion_3_item_1" class="fs-6 mb-3 collapse show ps-10 flex-column" data-bs-parent="#kt_accordion_3">
                                <div class="d-flex flex-column w-100 h-100">
                                    <a href="{{ route('user.me') }}" class="fs-4 w-100 px-5 text-black fw-semibold">Profil</a>
                                    <a href="{{ route('user.user-address') }}" class="fs-4 w-100 px-5 text-black fw-semibold">Alamat</a>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                    </div>
                    <!--end::Accordion-->

                    <a href="{{ route('user.orders') }}" class="fs-2 fw-bolder px-3 mb-0 d-flex align-items-center text-black mb-3 gap-1"><img src="{{ asset('icons/document.svg')}}" class="h-15em" alt="">Pesanan Saya</a>
                    <form method="post" action="{{ route('user.signout') }}">
                        @csrf
                        <button class="fs-2 fw-bolder px-3 mb-0 d-flex align-items-center text-accent gap-1"><img src="{{asset('icons/log-out.svg')}}" class="h-15em img-accent" alt="">Log Out</button>
                    </form>

                </div>
            <!-- end::Left Side -->

                <span class="w-1px flex-shrink-0"></span>

            <!-- begin::Right Side -->
                <div class="d-flex w-100 w-lg-75 p-10 flex-column border-grey-1 rounded-4">

                    <p class="fsc-4 fw-bold">Daftar Pesanan</p>

                    <div class="d-flex mb-5 w-100 align-items-center gap-3 overflow-scroll">
                        <a href="/me/orders"                            class="fsc-3 px-2 text-default w-max text-nowrap {{ request('status') == '' ? 'text-accent fw-bold' : '' }}">All</a>
                        <a href="/me/orders?status=pending"             class="fsc-3 px-2 text-default w-max text-nowrap {{ request('status') == 'pending' ? 'text-accent fw-bold' : '' }}">Pending</a>
                        <a href="/me/orders?status=paid"                class="fsc-3 px-2 text-default w-max text-nowrap {{ request('status') == 'paid' ? 'text-accent fw-bold' : '' }}">Paid</a>
                        <a href="/me/orders?status=success"             class="fsc-3 px-2 text-default w-max text-nowrap {{ request('status') == 'success' ? 'text-accent fw-bold' : '' }}">Success</a>
                        <a href="/me/orders?status=cancelled_by_admin"  class="fsc-3 px-2 text-default w-max text-nowrap {{ request('status') == 'cancelled_by_admin' ? 'text-accent fw-bold' : '' }}">Cancelled By Admin</a>
                        <a href="/me/orders?status=cancelled_user"      class="fsc-3 px-2 text-default w-max text-nowrap {{ request('status') == 'cancelled_customer' ? 'text-accent fw-bold' : '' }}">Cancelled By Customer</a>
                        <a href="/me/orders?status=failed"              class="fsc-3 px-2 text-default w-max text-nowrap {{ request('status') == 'failed' ? 'text-accent fw-bold' : '' }}">Failed</a>
                    </div> 
                    
                    @foreach ($response['data']['orders'] ?? [] as $pesanan)

                    <div class="d-flex w-100 rounded-3 flex-column-reverse flex-lg-row mb-5 p-5 px-7 border-grey-1 overflow-hidden">
                        <div class="d-flex w-100 flex-column overflow-hidden">
                            <p class="fsc-2 border-grey-1 bg-dark-grey p-1 px-4 text-accent w-max rounded-pill">Rumah</p>
                            <p class="fsc-3 mb-0 fw-bolder">Jl. Kemajuan V No.45</p>
                            <p class="fsc-2 mb-0 fw-bold">0812-3456-7890</p>
                            <p class="fsc-2 mb-5 w-100 w-lg-50">Jl. Kemajuan V No.45, RT.5/RW.4, Petukangan Sel., Kec. Pesanggrahan, Kota Jakarta Selatan.</p>

                            <div class="d-flex w-100 h-50px h-lg-75px mt-5 gap-5 mb-5">
                                <div class="d-flex h-100 ratio-1">
                                    <img src="{{ $pesanan['items'][0]['image_url'] }}" alt="" class="w-100 h-100">
                                </div>
                                <div class="d-flex flex-column overflow-hidden justify-content-center">
                                    <p class="fsc-2 fw-bolder mb-0">{{ $pesanan['items'][0]['package'] }}</p>
                                    <p class="fsc-2 mb-0 w-100 w-lg-50 overflow-hidden text-nowrap text-overflow">{{ $pesanan['items'][0]['name'] }}</p>
                                </div>
                            </div>

                            <a href="/me/orders/{{ $pesanan['id'] }}" class="text-black fsc-2 border-grey-1 d-flex d-lg-none p-1 py-3 px-4 fw-bold w-max rounded-3">Detail Pesanan</a>
                        </div>

                        <div class="d-flex justify-content-between align-items-center align-items-sm-end mb-5 mb-lg-0 flex-column w-100 w-lg-auto flex-shrink-0">
                            <p class="fsc-2 fw-bold bg-light-accent p-1 px-4 py-3 text-accent w-max rounded-3">{{$pesanan['status']}}</p>
                            <a href="/me/orders/{{ $pesanan['id'] }}" class="text-black fsc-2 border-grey-1 d-none d-lg-flex p-1 py-3 px-4 fw-bold w-max rounded-3">Detail Pesanan</a>
                        </div>

                    </div>
                        
                    @endforeach

                    <div class="d-flex align-items-center justify-content-between w-100 h-40px">
                        <select name="limit" onchange="window.location.href='?limit=' + this.value" class="h-100 border-grey-1 outline-0 bg-transparent fs-4 py-2 px-2 rounded-2">
                            @foreach ([3, 6, 9, 12] as $limit)
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
                                <div class="h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold text-secondary cursor-default">
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
                                <div class="h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold text-secondary cursor-default">
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
            <!-- end::Right Side -->

            </div>

        </div>

        <span class="h-40px flex-shrink-0"></span>
        
        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

        <script>
            
            document.addEventListener("wheel", function(event) {
                if (document.activeElement.type === "number") {
                    document.activeElement.blur()
                }
            })
        </script>
    </body>


</html>