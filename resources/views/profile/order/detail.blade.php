@if (session()->has('response'))
<script>
	alert('{{ session()->get('response')['message']}}')
	console.log(@json( session()->get('response')))
</script>
@endif

@php

    $placeImg = "https://placehold.co/400";
    $state = 1

@endphp

<!DOCTYPE html>
<html lang="en">
    @include('components.header' )
    
    <body class="d-flex flex-column">
        @include('components.navbarHead',[ "page" => "", "bg" => "grey"])
        
            <span class="h-40px flex-shrink-0"></span>

            <!-- begin::top side  -->
            <div class="d-flex align-items-center justify-content-center flex-column w-100">
                
                <span class="h-30px flex-shrink-0"></span>

                <!-- begin::breadcrumb -->
                <div class="d-flex w-95 align-items-center">
                    <a href="/me/orders" class="fsc-2 fsc-lg-3 text-black">Pesanan Saya</a>
                    <img src="{{ asset('icons/caret-arrow-right.svg') }}" class="h-100">
                    <p class="fsc-2 fsc-lg-3 text-black mb-0">Detail Pesanan # {{ $response['data']['transaction']['id'] }}</p>
                </div>
                <!-- end::breadcrumb -->

                <!-- begin::detail pesanan -->
                <div class="d-flex flex-column gap-4 gap-md-0 flex-lg-row align-items-center mb-5 w-95">
                    <div class="d-flex w-100 justify-content-center flex-column">
                        <p class="fsc-4 fsc-xl-5 mb-0">Detail Pemesanan</p>
                        <p class="fsc-3 mb-0">Dipesan pada: {{ $response['data']['transaction']['created_at'] }}</p>
                    </div>

                    <div class="d-flex align-items-center gap-2 justify-content-start justify-content-md-end flex-shrink-0 w-100 w-lg-auto h-lg-100">
                        <a href="{{ route('user.orders') }}" class="btn-primary-homade fsc-2 rounded-3 fw-bold text-white">Unduh Invoice</a>
                        <a href="{{ route('user.orders') }}" class="btn-primary-homade fsc-2 rounded-3 fw-bold text-white">Kembali <img src="{{ asset('icons/arrow-right.svg') }}" class="img-white"></a>
                    </div>
                </div>
                <!-- end::detail pesanan -->

                {{ $response['data']['transaction']['status'] }}

                <!-- begin::timeline -->
                <div class="d-flex align-items-center justify-content-center w-95 border-grey-1 rounded-5 p-10 flex-column">
                    
                @if ($response['data']['transaction']['status'] === "waiting_for_invoice")
    
                <div class="d-flex align-items-end align-items-sm-center gap-3 gap-sm-0 flex-column flex-sm-row w-100 justify-content-between mb-5">
                    <p class="fsc-3 mb-0 fw-black d-flex gap-5 align-items-center w-100 w-sm-auto"><img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em"> WORKFLOW STATUS : <br class="d-sm-none">WAINTING REVIEW</p>
                    <p class="fsc-2 mb-0 bg-light-accent text-accent rounded-pill d-none d-sm-flex align-items-center gap-3 px-4 py-1"><img src="{{ asset('icons/show.svg') }}" class="img-accent h-1em"> Waiting Review</p>
                </div>

                <div class="d-flex align-items-center justify-content-center w-100 mt-5 h-100px">
                    <div class="d-flex align-items-center w-101 w-lg-90 overflow-scroll h-100">


                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
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

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                <span class="w-100 h-5px bg-light-grey"></span>
                                <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/hourglass.svg') }}" alt="" class="h-40 img-grey">
                                </div>
                                <span class="w-100 h-5px bg-light-grey"></span>
                            </div>

                            <p class="fsc-2 text-center text-nowrap w-100 mb-0 fw-light h-30px">Waiting Confirmation</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Wait Payment</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
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

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
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

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
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
                            
                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
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


                
                @elseif ($response['data']['transaction']['status'] === "pending")

                <div class="d-flex align-items-end align-items-sm-center gap-3 gap-sm-0 flex-column flex-sm-row w-100 justify-content-between mb-5">
                    <p class="fsc-3 mb-0 fw-black d-flex gap-5 align-items-center w-100 w-sm-auto"><img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em"> WORKFLOW STATUS : <br class="d-sm-none">WAINTING PAYMENT</p>
                    <p class="fsc-2 mb-0 bg-light-yellow text-yellow2 rounded-pill d-none d-sm-flex align-items-center gap-3 px-4 py-1"><img src="{{ asset('icons/clock.svg') }}" class="img-yellow h-1em"> Waiting Payment</p>
                </div>

                <div class="d-flex align-items-center justify-content-center w-100 mt-5 h-100px">
                    <div class="d-flex align-items-center w-101 w-lg-90 overflow-scroll h-100">


                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px"></span>
                                <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-success"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting Review</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Validation Order</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                <span class="w-100 h-5px bg-success"></span>
                                <div class="d-flex h-90 rounded-circle bg-accent ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/clock.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-light-grey"></span>
                            </div>

                            <p class="fsc-2 text-center text-nowrap w-100 mb-0 fw-light h-30px">Waiting Confirmation</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Wait Payment</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
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

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
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

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
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
                            
                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
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

                @elseif ($response['data']['transaction']['status'] === "process")

                <div class="d-flex align-items-end align-items-sm-center gap-3 gap-sm-0 flex-column flex-sm-row w-100 justify-content-between mb-5">
                    <p class="fsc-3 mb-0 fw-black d-flex gap-5 align-items-center w-100 w-sm-auto"><img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em"> WORKFLOW STATUS : <br class="d-sm-none">PROCCESS</p>
                    <p class="fsc-2 mb-0 bg-light-blue text-blue rounded-pill d-none d-sm-flex align-items-center gap-3 px-4 py-1"><img src="{{ asset('icons/food.svg') }}" class="img-blue h-1em"> Proses</p>
                </div>

                <div class="d-flex align-items-center justify-content-center w-100 mt-5 h-100px">
                    <div class="d-flex align-items-center w-101 w-lg-90 overflow-scroll h-100">


                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px"></span>
                                <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-success"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting Review</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Validation Order</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px bg-success"></span>
                                <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-success"></span>
                            </div>

                            <p class="fsc-2 text-center text-nowrap w-100 mb-0 fw-light h-30px">Waiting Confirmation</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Wait Payment</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                <span class="w-100 h-5px bg-success"></span>
                                <div class="d-flex h-90 rounded-circle bg-accent ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/food.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-light-grey"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Process</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Processing Your Food</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
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

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
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
                            
                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
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

                @elseif ($response['data']['transaction']['status'] === "wait_for_pick_up")

                <div class="d-flex align-items-end align-items-sm-center gap-3 gap-sm-0 flex-column flex-sm-row w-100 justify-content-between mb-5">
                    <p class="fsc-3 mb-0 fw-black d-flex gap-5 align-items-center w-100 w-sm-auto"><img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em"> WORKFLOW STATUS : <br class="d-sm-none">WAITING FOR PICKUP</p>
                    <p class="fsc-2 mb-0 bg-light-purple text-purple rounded-pill d-none d-sm-flex align-items-center gap-3 px-4 py-1"><img src="{{ asset('icons/bag.svg') }}" class="img-purple h-1em"> Waiting For Pickup</p>
                </div>

                <div class="d-flex align-items-center justify-content-center w-100 mt-5 h-100px">
                    <div class="d-flex align-items-center w-101 w-lg-90 overflow-scroll h-100">


                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px"></span>
                                <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-success"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting Review</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Validation Order</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px bg-success"></span>
                                <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-success"></span>
                            </div>

                            <p class="fsc-2 text-center text-nowrap w-100 mb-0 fw-light h-30px">Waiting Confirmation</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Wait Payment</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px bg-success"></span>
                                <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-success"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Process</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Processing Your Food</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                <span class="w-100 h-5px bg-success"></span>
                                <div class="d-flex h-90 rounded-circle bg-accent ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/bag.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-light-grey"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting For Pickup</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Menunggu Kurir</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
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
                            
                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
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
                @elseif ($response['data']['transaction']['status'] === "on_the_way")

                <div class="d-flex align-items-end align-items-sm-center gap-3 gap-sm-0 flex-column flex-sm-row w-100 justify-content-between mb-5">
                    <p class="fsc-3 mb-0 fw-black d-flex gap-5 align-items-center w-100 w-sm-auto"><img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em"> WORKFLOW STATUS : <br class="d-sm-none">ON THE WAY</p>
                    <p class="fsc-2 mb-0 bg-light-orange text-orange rounded-pill d-none d-sm-flex align-items-center gap-3 px-4 py-1"><img src="{{ asset('icons/truck.svg') }}" class="img-orange h-1em"> On The Way</p>
                </div>

                <div class="d-flex align-items-center justify-content-center w-100 mt-5 h-100px">
                    <div class="d-flex align-items-center w-101 w-lg-90 overflow-scroll h-100">


                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px"></span>
                                <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-success"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting Review</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Validation Order</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px bg-success"></span>
                                <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-success"></span>
                            </div>

                            <p class="fsc-2 text-center text-nowrap w-100 mb-0 fw-light h-30px">Waiting Confirmation</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Wait Payment</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px bg-success"></span>
                                <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-success"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Process</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Processing Your Food</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px bg-success"></span>
                                <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-success"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting For Pickup</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Menunggu Kurir</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                <span class="w-100 h-5px bg-success"></span>
                                <div class="d-flex h-90 rounded-circle bg-accent ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/truck.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-light-grey"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">On The Way</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Dalam Perjalanan</p>

                        </div>
                            
                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
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

                @elseif ($response['data']['transaction']['status'] === "delivered")

                <div class="d-flex align-items-end align-items-sm-center gap-3 gap-sm-0 flex-column flex-sm-row w-100 justify-content-between mb-5">
                    <p class="fsc-3 mb-0 fw-black d-flex gap-5 align-items-center w-100 w-sm-auto"><img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em"> WORKFLOW STATUS : <br class="d-sm-none">DELIVERED</p>
                    <p class="fsc-2 mb-0 bg-light-green text-green rounded-pill d-none d-sm-flex align-items-center gap-3 px-4 py-1"><img src="{{ asset('icons/check-circle.svg') }}" class="img-green h-1em"> Delivered</p>
                </div>

                <div class="d-flex align-items-center justify-content-center w-100 mt-5 h-100px">
                    <div class="d-flex align-items-center w-101 w-lg-90 overflow-scroll h-100">


                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px"></span>
                                <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-success"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting Review</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Validation Order</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px bg-success"></span>
                                <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-success"></span>
                            </div>

                            <p class="fsc-2 text-center text-nowrap w-100 mb-0 fw-light h-30px">Waiting Confirmation</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Wait Payment</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px bg-success"></span>
                                <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-success"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Process</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Processing Your Food</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px bg-success"></span>
                                <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-success"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting For Pickup</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Menunggu Kurir</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px bg-success"></span>
                                <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-success"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">On The Way</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Dalam Perjalanan</p>

                        </div>
                            
                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                <span class="w-100 h-5px bg-success"></span>
                                <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Delivered</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Finished</p>

                        </div>
                        
                    </div>
                </div>
                
                @elseif ($response['data']['transaction']['status'] === "cancelled_by_customer")

                <div class="d-flex align-items-end align-items-sm-center gap-3 gap-sm-0 flex-column flex-sm-row w-100 justify-content-between mb-5">
                    <p class="fsc-3 mb-0 fw-black d-flex gap-5 align-items-center w-100 w-sm-auto"><img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em"> WORKFLOW STATUS : <br class="d-sm-none">DELIVERED</p>
                    <p class="fsc-2 mb-0 bg-danger text-white rounded-pill d-none d-sm-flex align-items-center gap-3 px-4 py-1"><img src="{{ asset('icons/close-circle.svg') }}" class="img-white h-1em"> Cancelled</p>
                </div>

                <div class="d-flex align-items-center justify-content-center w-100 mt-5 h-100px">
                    <div class="d-flex align-items-center w-101 w-lg-90 overflow-scroll h-100">

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px"></span>
                                <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-danger"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting Review</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Validation Order</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px bg-danger"></span>
                                <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-danger"></span>
                            </div>

                            <p class="fsc-2 text-center text-nowrap w-100 mb-0 fw-light h-30px">Waiting Confirmation</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Wait Payment</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px bg-danger"></span>
                                <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-danger"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Process</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Processing Your Food</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px bg-danger"></span>
                                <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-danger"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting For Pickup</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Menunggu Kurir</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px bg-danger"></span>
                                <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-danger"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">On The Way</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Dalam Perjalanan</p>

                        </div>
                            
                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                <span class="w-100 h-5px bg-danger"></span>
                                <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Delivered</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Finished</p>

                        </div>
                        
                    </div>

                </div>
                @elseif ($response['data']['transaction']['status'] === "cancelled_by_admin")

                <div class="d-flex align-items-end align-items-sm-center gap-3 gap-sm-0 flex-column flex-sm-row w-100 justify-content-between mb-5">
                    <p class="fsc-3 mb-0 fw-black d-flex gap-5 align-items-center w-100 w-sm-auto"><img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em"> WORKFLOW STATUS : <br class="d-sm-none">DELIVERED</p>
                    <p class="fsc-2 mb-0 bg-danger text-white rounded-pill d-none d-sm-flex align-items-center gap-3 px-4 py-1"><img src="{{ asset('icons/close-circle.svg') }}" class="img-white h-1em"> Cancelled</p>
                </div>

                <div class="d-flex align-items-center justify-content-center w-100 mt-5 h-100px">
                    <div class="d-flex align-items-center w-101 w-lg-90 overflow-scroll h-100">

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px"></span>
                                <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-danger"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting Review</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Validation Order</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px bg-danger"></span>
                                <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-danger"></span>
                            </div>

                            <p class="fsc-2 text-center text-nowrap w-100 mb-0 fw-light h-30px">Waiting Confirmation</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Wait Payment</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px bg-danger"></span>
                                <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-danger"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Process</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Processing Your Food</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px bg-danger"></span>
                                <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-danger"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting For Pickup</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Menunggu Kurir</p>

                        </div>

                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                <span class="w-100 h-5px bg-danger"></span>
                                <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px bg-danger"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">On The Way</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Dalam Perjalanan</p>

                        </div>
                            
                        <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                            
                            <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                <span class="w-100 h-5px bg-danger"></span>
                                <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                    <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                </div>
                                <span class="w-100 h-5px"></span>
                            </div>

                            <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Delivered</p>
                            <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Finished</p>

                        </div>
                        
                    </div>

                </div>
                
                @endif

                </div>
                <!-- end::timeline -->

                <span class="h-40px flex-shrink-0"></span>

            </div>
            <!-- end::top side -->

            <!-- begin::bottom side -->
            <div class="d-flex align-items-center justify-content-center flex-column gap-15 w-100 flex-shrink-0">

                <div class="d-flex w-95 flex-column-reverse align-items-center align-items-lg-start flex-lg-row gap-5">

                <!-- begin::left side -->
                    <div class="d-flex align-items-center gap-10 justify-content-center w-100 {{ $response['data']['transaction']['status'] === "waiting_for_invoice" || $response['data']['transaction']['status'] === "pending" ? 'flex-column' : 'flex-column-reverse' }} me-lg-5">

                        <div class="d-flex align-items-center flex-column w-100 border-grey-1 rounded-5">

                            @if ($response['data']['transaction']['status'] === "pending")

                            <p class="fsc-3 mb-0 d-flex align-items-center w-100 px-10 py-5 gap-3"><img src="{{ asset('icons/info.svg') }}" class="h-1em"> Instruksi Pembayaran</p>
                            <span class="w-100 h-1px bg-grey"></span>

                            <div class="d-flex justify-content-center flex-column flex-xl-row w-100 px-5 px-md-15 py-10 gap-7">

                                <div class="d-flex w-100 flex-column">
                                    <p class="fsc-2 mb-3 fw-bold">Silahkan transfer sesuai dengan total tagihan ke rekening tersebut:</p>

                                    <div class="d-flex w-100 p-4 flex-column border-grey-1 rounded-3">
                                        <p class="fsc-2 mb-0 fw-bold">Trasfer Bank</p>

                                        @foreach ($response['data']['payment_methods'] as $payment)
                                            
                                        <span class="w-100 h-1px bg-dark-grey mb-5 mt-5"></span>

                                        <p class="fsc-2 mb-2">Bank {{ $payment['bank_name'] }} (A/N {{ $payment['account_owner'] }})</p>
                                        <p class="fsc-3 d-flex w-100 flex-row-reverse align-items-center justify-content-between fw-bold mb-0"><img src="{{ $payment['image_url'] }}" alt="" class="h-12em"> {{ $payment['account_number'] }}</p>

                                        @endforeach

                                    </div>
                                </div>

                                <div class="d-flex w-100 flex-column">
                                    <p class="fsc-2 fw-bold mb-3">Langkah langkah:</p>
                                    <p class="fsc-2 mb-3 d-flex gap-3 h-max align-items-center w-100"><span class="bg-accent text-white fw-bold rounded-circle h-2em ratio-1 d-flex justify-content-center align-items-center fsc-1">1</span>Gunakan m bangking atau ATM untuk tranfer</p>
                                    <p class="fsc-2 mb-3 d-flex gap-3 h-max align-items-center w-100"><span class="bg-accent text-white fw-bold rounded-circle h-2em ratio-1 d-flex justify-content-center align-items-center fsc-1">2</span>Pastikan nominal sesuai dengan Total Pembayaran</p>
                                    <p class="fsc-2 mb-3 d-flex gap-3 h-max align-items-center w-100"><span class="bg-accent text-white fw-bold rounded-circle h-2em ratio-1 d-flex justify-content-center align-items-center fsc-1">3</span>Simpan Bukti tranfer dan uplod pada area di samping</p>
                                    <p class="fsc-2 mb-3 d-flex gap-3 h-max align-items-center w-100"><span class="bg-accent text-white fw-bold rounded-circle h-2em ratio-1 d-flex justify-content-center align-items-center fsc-1">4</span>Admin akan mevalidasi pembayaran anda dalam maks. 30 menit</p>
                                </div>

                            </div>

                            

                            @else

                            <p class="fsc-3 mb-0 d-flex align-items-center w-100 px-10 py-5 gap-3"><img src="{{ asset('icons/user-circle.svg') }}" class="h-1em"> Informasi Pengiriman</p>
                            <span class="w-100 h-1px bg-grey"></span>

                            <div class="d-flex align-items-center justify-content-center w-100 px-5 px-md-15 py-10 flex-column gap-5">

                                <div class="d-flex align-items-center justify-content-center w-100 h-200px border-grey-1 rounded-4">
                                    <iframe 
                                        class="w-100 h-100 rounded-4" 
                                        style="border:0"
                                        loading="lazy" 
                                        allowfullscreen 
                                        src="https://maps.google.com/maps?q={{ $response['data']['transaction']['delivery_info']['address_info']['latitude'] }},{{ $response['data']['transaction']['delivery_info']['address_info']['longitude'] }}&hl=es&z=14&output=embed">
                                    </iframe>
                                </div>

                                <div class="d-flex w-100 h-100px gap-5">

                                    <div class="d-flex w-100 h-100 flex-column">
                                        <p class="fsc-2 fw-bolder mb-2 text-black">USER ID (CUSTOMER REF)</p>
                                        <p class="fsc-2 mb-0 px-2 py-1 bg-accent text-white rounded-2 fw-bold w-max">{{ $response['data']['transaction']['user']['id'] }}</p>
                                    </div>

                                    <div class="d-flex w-100 h-100 flex-column">
                                        <p class="fsc-2 mb-0 fw-bolder text-black">Nama Lengkap</p>
                                        <p class="fsc-3 mb-0 fw-bold text-accent">{{ $response['data']['transaction']['user']['first_name']}} {{ $response['data']['transaction']['user']['last_name'] }}</p>
                                    </div>

                                </div>

                                <div class="d-flex w-100 h-100px gap-5">

                                    <div class="d-flex w-100 h-100 flex-column">
                                        <p class="fsc-2 mb-0 fw-bolder text-black">NOMOR TELEPON</p>
                                        <p class="fsc-3 mb-0 fw-bold text-black">{{ $response['data']['transaction']['user']['phone'] }}</p>
                                    </div>

                                    <div class="d-flex w-100 h-100 flex-column">
                                        <p class="fsc-2 mb-0 fw-bolder text-black">ALAMAT PENGIRIMAN</p>
                                        <p class="fsc-1 mb-0">{{ $response['data']['transaction']['delivery_info']['address_info']['address'] }}</p>
                                    </div>

                                </div>

                                <div class="d-flex w-100 h-100px flex-column gap-5">

                                    <div class="d-flex w-100 h-100 flex-column">
                                        <p class="fsc-2 mb-3 fw-bolder text-black">Note Opsional</p>
                                        <p class="fsc-2 w-100 h-100px overflow-scroll px-3 py-3 rounded-2 border-grey-1 mb-0 text-black">{{ $response['data']['transaction']['note'] }}</p>
                                    </div>

                                </div>
                            </div>
                                                        
                            @endif
                            
                        </div>

                        <!--  -->
                        
                        <div class="overflow-hidden d-flex align-items-center flex-column w-100 border-grey-1 rounded-5">

                            <p class="fsc-3 mb-0 d-flex align-items-center w-100 px-10 py-3 gap-3"><img src="{{ asset('icons/bag.svg') }}" class="h-1em"> Daftar Pemesanan</p>
                            <span class="w-100 h-1px bg-grey"></span>

                            <div class="overflow-hidden d-flex align-items-center justify-content-center w-100 px-10 py-5 flex-column gap-5">

                                <div class="d-flex w-100 gap-1 h-30px align-items-center justify-content-center">

                                    <div class="d-flex h-100 w-100 align-items-center justify-content-center"><p class="fsc-2 fw-bold mb-0 w-100">MENU</p></div>

                                    <div class="h-100 w-20 flex-shrink-0 align-items-center d-none d-md-flex justify-content-center"><p class="fsc-2 mb-0 w-100 text-center">QUANTITY</p></div>

                                    <div class="d-flex h-100 w-30 flex-shrink-0 align-items-center justify-content-center"><p class="fsc-2 mb-0 w-100 text-end">TOTAL PRICE</p></div>

                                </div>

                                @foreach ($response['data']['transaction']['items'] as $menu)
                                    
                                    <div class="overflow-hidden d-flex w-100 gap-1 h-60px h-md-100px align-items-center justify-content-center">

                                        <div class="overflow-hidden d-flex h-100 w-100 align-items-center justify-content-center">
                                            <div class="overflow-hidden d-flex w-100 h-100 gap-3 gap-md-10">

                                                <div class="d-none d-sm-flex h-100 ratio-1">
                                                    <img src="{{ $menu['image_url'] }}" alt="" class="w-100 h-100 object-fit-cover">
                                                </div>

                                                <div class="overflow-hidden d-flex w-100 h-100 align-items-center justify-content-center flex-column">
                                                    <p class="fsc-3 mb-0 w-100 overflow-hidden text-overflow text-nowrap fw-bold">{{ $menu['name'] }}</p>
                                                    <p class="fsc-2 mb-0 w-100 overflow-hidden text-overflow text-nowrap">{{ $menu['package'] }}</p>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="d-none d-md-flex h-100 w-20 flex-column flex-shrink-0 align-items-center justify-content-center">
                                            <p class="fsc-3 fw-bold mb-0 w-100 text-center">{{ $menu['quantity'] }}</p>
                                            <p class="fsc-2 mb-0 w-100 text-center">PORSI</p>
                                        </div>

                                        <div class="d-flex h-100 w-35 w-sm-30 flex-shrink-0 flex-column align-items-center justify-content-center">
                                            <p class="fsc-3 fw-bold mb-0 w-100 text-end">Rp {{ number_format($menu['total_price'], 0, ',', '.') }}</p>
                                            <p class="fsc-2 mb-0 w-100 text-end d-none d-md-inline">Rp {{ number_format($menu['price_at_purchase'], 0, ',', '.') }} / Pcs</p>
                                            <p class="fsc-2 mb-0 w-100 text-end d-md-none">{{ $menu['quantity'] }} Porsi</p>
                                        </div>

                                    </div>

                                    <span class="h-1px w-100 bg-dark-grey"></span>

                                @endforeach

                                @if ($response['data']['transaction']['status'] === "delivered")
                                
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <p class="fsc-2 mb-0">Subtotal</p>
                                    <p class="fsc-2 mb-0">Rp 45.000.000</p>
                                </div>

                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <p class="fsc-2 mb-0">Ongkir</p>
                                    <p class="fsc-2 mb-0">Rp 5.000</p>
                                </div>

                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <p class="fsc-3 mb-0">Subtotal</p>
                                    <p class="fsc-3 mb-0 fw-bold">Rp 45.005.000</p>
                                </div>

                                @endif

                            </div>
                        </div>

                    </div>
                <!-- end::left side -->
                
                <!-- begin::right side -->
                    <div class="d-flex w-99 w-sm-400px w-lg-30 flex-shrink-0">
                        <div class="d-flex h-max align-items-center justify-content-center w-100 border-grey-1 rounded-5">

                            @if ($response['data']['transaction']['status'] === "waiting_for_invoice")
                                
                            <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">
                                <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                <div class="d-flex w-100 px-5 pt-5 pb-10 mb-10 border-grey-1 flex-column rounded-4 flex-shrink-0">

                                    <p class="fsc-2">Status Saat Ini:</p>

                                    <div class="d-flex w-100 bg-grey-1 rounded-3 bg-light-accent border-grey-1 flex-column p-3">
                                        <p class="fsc-2 mb-1 d-flex gap-3 align-items-center"><img src="{{ asset('icons/info.svg') }}" alt="" class="img-accent h-12em"> Pesanan Sedang Overview</p>
                                        <p class="fsc-1 mb-0">Admin kami sedang memvalidasi pesanan dan menghitung biaya pengiriman terbaik untuk Anda. Mohon tunggu konfirmasi selanjutnya.</p>
                                    </div>

                                </div>

                                <p class="fsc-3 mb-3 fw-bold flex-shrink-0 mb-3 w-100">Rincian Pembayaran</p>

                                <div class="d-flex w-100 h-100 flex-column">

                                    <div class="d-flex w-100 mb-3 justify-content-between align-items-center">
                                        <p class="fsc-2 mb-0">Subtotal</p>
                                        <p class="fsc-2 mb-0">Rp {{ number_format($response['data']['transaction']['subtotal'], 0, ',', '.') }}</p>
                                    </div>
        
                                    <div class="d-flex w-100 mb-4 justify-content-between align-items-center">
                                        <p class="fsc-2 mb-0">Ongkir</p>
                                        <p class="fsc-2 bg-accent-secondary px-4 rounded-pill text-white mb-0">Pending</p>
                                    </div>

                                </div>

                                <div class="d-flex w-100 mb-1 flex-shrink-0 justify-content-between align-items-center">
                                    <p class="fsc-3 fw-bold mb-0">Total Transaksi</p>
                                    <p class="fsc-3 fw-bold mb-0">Rp {{ number_format($response['data']['transaction']['total_price'], 0, ',', '.') }}</p>
                                </div>
                                <p class="fsc-1 w-100 flex-shrink-0 mb-0"><b>*</b>BELUM TERMASUK ONGKIR</p>

                                <a href="https://web.whatsapp.com/send?phone=6285711801336&text=Halo%20Homade%20catering%2C" class="w-100 bg-whatsapp d-flex align-items-center justify-content-center text-white fsc-2 py-4 rounded-3 mt-5 mb-3 gap-3"><img src="{{ asset('icons/whatsapp.svg') }}" alt="" class="img-white h-15em"> like whatsapp danger</a>
                                <button onclick="togglePopUp()" class="w-100 btn-primary-homade align-items-center justify-content-center text-white fsc-2 py-4 rounded-3 mb-3">Batalkan Pesanan</button>

                            </div>

                            @elseif ($response['data']['transaction']['status'] === "pending")

                            <div class="d-flex w-100 rounded-5 flex-column">
                                <div class="d-flex px-6 flex-column pt-10 py-5 rounded-top-5 w-100 bg-accent">
                                    <p class="fsc-3 mb-3 d-flex gap-3 text-white align-items-center fw-bold"><img src="{{ asset('icons/document-filled.svg') }}" alt="" class="img-white h-12em"> Invoice Tersedia</p>
                                    <p class="fsc-2 mb-3 text-white">Invoice teleh divalidasi  oleh admin. Silahkan lanjutkan ke pembayaran</p>
                                </div>

                                <div class="d-flex w-100 px-6 py-5 flex-column">

                                    <div class="d-flex w-100 mb-3 align-items-center justify-content-between">
                                        <p class="fsc-2 fw-bold mb-0">Subtotal</p>
                                        <p class="fsc-2 fw-bold mb-0">Rp {{ number_format($response['data']['transaction']['subtotal'], 0, ',', '.') }}</p>
                                    </div>

                                    <div class="d-flex w-100 mb-3 align-items-center justify-content-between">
                                        <p class="fsc-2 fw-bold mb-0">Ongkir</p>
                                        <p class="fsc-2 fw-bold mb-0">Rp {{ number_format($response['data']['transaction']['shipping_cost'], 0, ',', '.') }}</p>
                                    </div>

                                    <span class="w-100 h-1px bg-light-grey mb-3"></span>

                                    <div class="d-flex w-100 mb-4 align-items-center justify-content-between">
                                        <p class="fsc-3 fw-bold mb-0">Total</p>
                                        <p class="fsc-3 fw-black mb-0">Rp {{ number_format($response['data']['transaction']['total_price'], 0, ',', '.') }}</p>
                                    </div>

                                    <p class="fsc-2 mb-2">Konfirmasi Pembayaran</p>

                                    @if ($response['data']['transaction']['payment_proof'] == null || $response['data']['transaction']['payment_proof']['status'] == "rejected")
                                        <form enctype="multipart/form-data" action="{{ route('user.uploud-payment-proof', $response['data']['transaction']['id']) }}" method="post" class="w-100">
                                            @csrf

                                                
                                            <div class="position-relative d-flex w-100 mb-3 h-150px border-grey-1 rounded-3" id="upload-area">
                                                <input type="file" name="uplouded_file" accept="image/*" class="w-100 h-100 opacity-0 position-relative cursor-pointer" style="z-index:2;" id="payment-proof-input">
                                                
                                                <div class="d-flex flex-column w-100 h-100 position-absolute top-0 start-0 bg-white rounded-3 pointer-events-none align-items-center justify-content-center" id="upload-placeholder">
                                                    <div class="d-flex h-50">
                                                        <img src="{{ asset('icons/cloud-upload.svg') }}" alt="" class="h-100 img-grey">
                                                    </div>
                                                    <p class="fsc-2 mb-0">Drag and Drop Gambar</p>
                                                    <p class="fsc-1 mb-0">atau klik untuk pilih gambar</p>
                                                </div>

                                                <div class="d-none w-100 h-100 position-absolute top-0 start-0 bg-white rounded-3 align-items-center justify-content-center px-3 gap-2" id="upload-preview">
                                                    <img src="{{ asset('icons/image.svg') }}" alt="" class="img-grey" style="height:24px; width:24px; flex-shrink:0;">
                                                    <span class="fsc-2 text-truncate flex-grow-1" id="upload-filename"></span>
                                                    <button type="button" class="btn-close fsc-2 flex-shrink-0" id="upload-remove" aria-label="Hapus file"></button>
                                                </div>
                                            </div>

                                            <p class="fsc-2 text-danger mb-2 d-none" id="upload-error"></p>

                                            <button class="w-100 fsc-2 fw-bold py-3 align-items-center justify-content-center d-flex bg-accent rounded-2 text-white mb-2">Kirim Bukti Pembayaran</button>

                                        </form>
                                    @else
                                        <div class="d-flex w-100 flex-column">
                                            <p class="fsc-2 w-100 text-center my-10">Bukti pesanan sedang di review admin</p>
                                        </div>
                                    @endif
                                    
                                    @if ($response['data']['transaction']['payment_proof']['status'] == "rejected")
                                        <p class="fsc-2 w-100 text-start my-10">Pembayaran Ditolak Karena: {{ $response['data']['transaction']['payment_proof']['reason'] }}</p>
                                        
                                    @endif

                                </div>
                            </div>
                            @elseif ($response['data']['transaction']['status'] === "wait_for_confirmation")

                            <div class="d-flex w-100 rounded-5 flex-column">
                                <div class="d-flex px-6 flex-column pt-10 py-5 rounded-top-5 w-100 bg-accent">
                                    <p class="fsc-3 mb-3 d-flex gap-3 text-white align-items-center fw-bold"><img src="{{ asset('icons/document-filled.svg') }}" alt="" class="img-white h-12em"> Invoice Tersedia</p>
                                    <p class="fsc-2 mb-3 text-white">Invoice teleh divalidasi  oleh admin. Silahkan lanjutkan ke pembayaran</p>
                                </div>

                                <div class="d-flex w-100 px-6 py-5 flex-column">

                                    <div class="d-flex w-100 mb-3 align-items-center justify-content-between">
                                        <p class="fsc-2 fw-bold mb-0">Subtotal</p>
                                        <p class="fsc-2 fw-bold mb-0">Rp {{ number_format($response['data']['transaction']['subtotal'], 0, ',', '.') }}</p>
                                    </div>

                                    <div class="d-flex w-100 mb-3 align-items-center justify-content-between">
                                        <p class="fsc-2 fw-bold mb-0">Ongkir</p>
                                        <p class="fsc-2 fw-bold mb-0">Rp {{ number_format($response['data']['transaction']['shipping_cost'], 0, ',', '.') }}</p>
                                    </div>

                                    <span class="w-100 h-1px bg-light-grey mb-3"></span>

                                    <div class="d-flex w-100 mb-4 align-items-center justify-content-between">
                                        <p class="fsc-3 fw-bold mb-0">Total</p>
                                        <p class="fsc-3 fw-black mb-0">Rp {{ number_format($response['data']['transaction']['total_price'], 0, ',', '.') }}</p>
                                    </div>

                                    <p class="fsc-2 mb-2">Konfirmasi Pembayaran</p>
                                    
                                    <div class="d-flex w-100 h-100px align-items-center justify-content-center flex-column">
                                        <img src="{{ asset('icons/check-circle.svg') }}" alt="" class="h-50 img-accent ratio-1">
                                        <p class="fsc-2 mb-0">Pembayaran Sedang Di Review</p>
                                    </div>


                                </div>
                            </div>

                            @elseif ($response['data']['transaction']['status'] === "process")

                            <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">
                                <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                <div class="d-flex w-100 mb-5 flex-column rounded-4 flex-shrink-0">

                                    <div class="d-flex w-100 bg-grey-1 rounded-3 py-5 bg-light-green flex-column p-3">
                                        <p class="fsc-2 mb-1 d-flex gap-3 align-items-center"><img src="{{ asset('icons/verification.svg') }}" alt="" class="img-green h-12em"> Pembayaran Berhasil</p>
                                        <p class="fsc-1 mb-0">Dapur sedang menyiapkan masakan segar anda</p>
                                    </div>

                                </div>

                            </div>

                            @elseif ($response['data']['transaction']['status'] === "wait_for_pick_up")

                            <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">
                                <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                <div class="d-flex w-100 mb-5 flex-column rounded-4 flex-shrink-0">

                                    <div class="d-flex w-100 bg-grey-1 rounded-3 py-5 bg-light-yellow flex-column p-3">
                                        <p class="fsc-2 mb-1 d-flex gap-3 align-items-center"><img src="{{ asset('icons/info.svg') }}" alt="" class="h-12em"> Menunggu Kurir</p>
                                        <p class="fsc-1 mb-0">Pesanan sudah siap sedang mengunggu kurir</p>
                                    </div>

                                </div>

                            </div>

                            @elseif ($response['data']['transaction']['status'] === "on_the_way")

                            <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">
                                <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                <div class="d-flex w-100 mb-5 flex-column rounded-4 flex-shrink-0">

                                    <div class="d-flex w-100 bg-grey-1 rounded-3 py-5 bg-light-blue flex-column p-3">
                                        <p class="fsc-2 mb-1 d-flex gap-3 align-items-center"><img src="{{ asset('icons/info.svg') }}" alt="" class="h-12em"> Pesanan Dalam Perjalanan</p>
                                        <p class="fsc-1 mb-0">Kurir sedang dalam perjalanan menuju lokasimu harap pastikan nomor handphone aktif</p>
                                    </div>

                                </div>

                                <a href="https://web.whatsapp.com/send?phone=6285711801336&text=Halo%20Homade%20catering%2C" class="w-100 bg-success align-items-center justify-content-center text-center text-white fsc-2 py-4 rounded-3 mb-5">Hubungi Admin</a>

                                <div class="d-flex w-100 justify-content-between mb-3 mt-5 align-items-center">
                                    <p class="fsc-2 mb-0 fw-bold">Total Pembayaran</p>
                                    <p class="fsc-2 mb-0 fw-black">Rp {{ number_format($response['data']['transaction']['total_price'], 0, ',', '.') }}</p>
                                </div>

                                <div class="d-flex w-100 justify-content-between mb-3 align-items-center">
                                    <p class="fsc-2 mb-0 fw-bold">Status</p>
                                    <p class="fsc-2 bg-success px-4 rounded-pill text-white mb-0">Paid</p>
                                </div>

                            </div>

                            @elseif ($response['data']['transaction']['status'] === "delivered")

                            <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">
                                <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                <div class="d-flex mt-5 h-50px bg-success align-items-center justify-content-center ratio-1 rounded-circle">
                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-50 img-white">
                                </div>

                                <p class="fsc-2 mb-7 mt-5">Pesanan Sudah Sampai</p>

                            </div>
                            @elseif ($response['data']['transaction']['status'] === "cancelled_by_customer")

                            <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">
                                <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                <div class="d-flex mt-5 h-50px bg-danger align-items-center justify-content-center ratio-1 rounded-circle">
                                    <img src="{{ asset('icons/close.svg') }}" alt="" class="h-50 img-white">
                                </div>

                                <p class="fsc-3 mb-0 mt-5">Pesanan Dibatalkan</p>
                                <p class="fsc-2 mb-7 mt-1">Oleh Pengguna</p>

                            </div>

                            @elseif ($response['data']['transaction']['status'] === "cancelled_by_admin")

                            <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">
                                <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                <div class="d-flex mt-5 h-50px bg-danger align-items-center justify-content-center ratio-1 rounded-circle">
                                    <img src="{{ asset('icons/close.svg') }}" alt="" class="h-50 img-white">
                                </div>

                                <p class="fsc-3 mb-0 mt-5">Pesanan Dibatalkan</p>
                                <p class="fsc-2 mb-7 mt-1">Oleh Admin</p>

                                <p class="fsc-2 mb-7 mt-1">Alasan: {{ $response['data']['transaction']['cancelled_reason'] }}</p>

                            </div>

                            @endif
                            
                        </div>
                    </div>
                <!-- end::right side -->

                </div>

            </div>
            <!-- end::bottom side -->

            <span class="h-40px flex-shrink-0"></span>

            <!-- begin::cancel pop up -->
            <div class="d-none2 align-items-center justify-content-center pop-up" id="PopUp">
                <form action="{{ route('user.cancell-order', $response['data']['transaction']['id']) }}" method="post" class="d-flex flex-column w-30 px-10 py-5 rounded-3 bg-white">
                    @csrf
                    <p class="fsc-3 mb-5 fw-bold">Alasan Kenapa Cancel</p>
                    <textarea name="reason" class="w-100 px-2 py-3 min-h-100px max-h-300px rounded-2 border-grey-2 mb-5" minlength="10" required></textarea>
                    <div class="d-flex w-100 gap-3">
                        <button type="button" onclick="togglePopUp()" class="w-100 rounded-2 bg-light-accent py-3 fsc-2 text-accent fw-bold d-flex justify-content-center align-items-center">Cancel</button>
                        <button type="submit" class="w-100 rounded-2 bg-accent py-3 fsc-2 text-white fw-bold d-flex justify-content-center align-items-center">Cancel</button>
                    </div>
                </form>
            </div>
            <!-- end::cancel pop up -->



        @include('components.navbarFoot',[ "page" => "schedule"])
        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

        <script>

            function fill()
            {
                document.getElementById("empty").style.display = "none"
                document.getElementById("filled").style.display = "flex"
            }

            function togglePopUp()
            {
                document.getElementById("PopUp").classList.toggle("d-flex")
            }

        </script>

        <script>
            const input     = document.getElementById('payment-proof-input');
            const placeholder = document.getElementById('upload-placeholder');
            const preview   = document.getElementById('upload-preview');
            const filename  = document.getElementById('upload-filename');
            const removeBtn = document.getElementById('upload-remove');
            const errorMsg  = document.getElementById('upload-error');

            input.addEventListener('change', () => {
                const file = input.files[0];
                errorMsg.classList.add('d-none');

                if (!file) return;

                if (!file.type.startsWith('image/')) {
                    showError('File harus berupa gambar (JPG, PNG, dll).');
                    input.value = '';
                    return;
                }

                if (file.size > 2 * 1024 * 1024) {
                    showError('Ukuran file tidak boleh lebih dari 2MB.');
                    input.value = '';
                    return;
                }

                showPreview(file.name);
            });

            removeBtn.addEventListener('click', () => {
                input.value = '';
                errorMsg.classList.add('d-none');
                hidePreview();
            });

            function showPreview(name) {
                placeholder.classList.add('d-none');
                preview.classList.remove('d-none');
                preview.classList.add('d-flex');
                filename.textContent = name;
                input.style.zIndex = '-1';
            }

            function hidePreview() {
                preview.classList.add('d-none');
                preview.classList.remove('d-flex');
                placeholder.classList.remove('d-none');
                input.style.zIndex = '2';
            }

            function showError(msg) {
                errorMsg.textContent = msg;
                errorMsg.classList.remove('d-none');
                hidePreview();
            }
        </script>
    </body>


</html>