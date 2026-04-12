@if (session()->has('response'))
<script>
	alert('{{ session()->get('response')['message']}}')
	console.log(@json( session()->get('response')))
</script>
@endif

@php

    $placeImg = "https://placehold.co/400";
    $state = 2

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
                    <p class="fsc-2 fsc-lg-3 text-black mb-0">Detail Pesanan # {{ $response['data']['id'] }}</p>
                </div>
                <!-- end::breadcrumb -->

                <!-- begin::detail pesanan -->
                <div class="d-flex flex-column gap-4 gap-md-0 flex-lg-row align-items-center mb-5 w-95">
                    <div class="d-flex w-100 justify-content-center flex-column">
                        <p class="fsc-4 fsc-xl-5 mb-0">Detail Pemesanan</p>
                        <p class="fsc-3 mb-0">Dipesan pada: {{ $response['data']['created_at'] }}</p>
                    </div>

                    <div class="d-flex align-items-center gap-2 justify-content-start justify-content-md-end flex-shrink-0 w-100 w-lg-auto h-lg-100">
                        <button class="btn-primary-homade fsc-2 rounded-3 fw-bold text-white"><img src="{{ asset('icons/print.svg') }}" class="img-white"> Cetak Invoice</button>
                        <a href="/me/orders" class="btn-primary-homade fsc-2 rounded-3 fw-bold text-white">Kembali <img src="{{ asset('icons/arrow-right.svg') }}" class="img-white"></a>
                    </div>
                </div>
                <!-- end::detail pesanan -->

                <!-- begin::timeline -->
                <div class="d-flex align-items-center justify-content-center w-95 border-grey-1 rounded-5 p-10 flex-column">
                    
                @if ($state === 1)
    
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


                
                @elseif ($state === 2)

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

                @elseif ($state === 3)

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

                @elseif ($state === 4)

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
                @elseif ($state === 5)

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

                @elseif ($state === 6)

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
                    <div class="d-flex align-items-center gap-10 justify-content-center w-100 {{ $state == 1 || $state == 2 ? 'flex-column' : 'flex-column-reverse' }} me-lg-5">
                        <div class="d-flex align-items-center flex-column w-100 border-grey-1 rounded-5">

                            <p class="fsc-3 mb-0 d-flex align-items-center w-100 px-10 py-5 gap-3"><img src="{{ asset('icons/user-circle.svg') }}" class="h-1em"> Informasi Pengiriman</p>
                            <span class="w-100 h-1px bg-grey"></span>

                            <div class="d-flex align-items-center justify-content-center w-100 px-5 px-md-15 py-10 flex-column gap-5">

                                <div class="d-flex align-items-center justify-content-center w-100 h-200px border-grey-1 rounded-4">
                                    <iframe 
                                        class="w-100 h-100 rounded-4" 
                                        style="border:0"
                                        loading="lazy" 
                                        allowfullscreen 
                                        src="https://maps.google.com/maps?q={{ $response['data']['delivery_info']['address_info']['latitude'] }},{{ $response['data']['delivery_info']['address_info']['longitude'] }}&hl=es&z=14&output=embed">
                                    </iframe>
                                </div>

                                <div class="d-flex w-100 h-100px gap-5">

                                    <div class="d-flex w-100 h-100 flex-column">
                                        <p class="fsc-2 fw-bolder mb-2 text-black">USER ID (CUSTOMER REF)</p>
                                        <p class="fsc-2 mb-0 px-2 py-1 bg-accent text-white rounded-2 fw-bold w-max">{{ $response['data']['user']['id'] }}</p>
                                    </div>

                                    <div class="d-flex w-100 h-100 flex-column">
                                        <p class="fsc-2 mb-0 fw-bolder text-black">Nama Lengkap</p>
                                        <p class="fsc-3 mb-0 fw-bold text-accent">{{ $response['data']['user']['first_name'] }} {{ $response['data']['user']['last_name'] }}</p>
                                    </div>

                                </div>

                                <div class="d-flex w-100 h-100px gap-5">

                                    <div class="d-flex w-100 h-100 flex-column">
                                        <p class="fsc-2 mb-0 fw-bolder text-black">NOMOR TELEPON</p>
                                        <p class="fsc-3 mb-0 fw-bold text-black">{{ $response['data']['user']['phone'] }}</p>
                                    </div>

                                    <div class="d-flex w-100 h-100 flex-column">
                                        <p class="fsc-2 mb-0 fw-bolder text-black">ALAMAT PENGIRIMAN</p>
                                        <p class="fsc-1 mb-0">{{ $response['data']['delivery_info']['address_info']['address'] }}</p>
                                    </div>

                                </div>

                                <div class="d-flex w-100 h-100px flex-column gap-5">

                                    <div class="d-flex w-100 h-100 flex-column">
                                        <p class="fsc-2 mb-3 fw-bolder text-black">Note Opsional</p>
                                        <p class="fsc-2 w-100 h-100px overflow-scroll px-3 py-3 rounded-2 border-grey-1 mb-0 text-black">{{ $response['data']['note'] }}</p>
                                    </div>

                                </div>
                            </div>
                                                        
                            
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

                                @foreach ($response['data']['items'] as $menu)
                                    
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
                                            <p class="fsc-3 fw-bold mb-0 w-100 text-end">Rp {{ number_format($menu['total_price'] , 0, ',', '.') }}</p>
                                            <p class="fsc-2 mb-0 w-100 text-end d-none d-md-inline">Rp {{ number_format( $menu['price_at_purchase'] , 0, ',', '.') }} / Pcs</p>
                                            <p class="fsc-2 mb-0 w-100 text-end d-md-none">{{ $menu['quantity'] }} Porsi</p>
                                        </div>

                                    </div>

                                    <span class="h-1px w-100 bg-dark-grey"></span>

                                @endforeach

                                @if ($state === 6)
                                
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

						@if ($state === 1)
                                
                            <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">
                                <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                <form action="{{ route('admin.change-transaction-information', ['id' => $response['data']['id']]) }}" method="post" class="d-flex w-100 px-5 pt-5 pb-10 mb-10 border-grey-1 flex-column rounded-4 flex-shrink-0">
                                    @csrf
                                    @method('PUT')

                                    <p class="fsc-2">Status Saat Ini:</p>

                                    <label for="ongkirInput" class="mb-2">Input ongkos kirim</label>
                                    <div class="d-flex w-100 gap-2 border-grey-1 bg-light accent px-5 py-4 align-items-center rounded-3">
                                        <label for="ongkirInput">Rp</label>
                                        <input type="number" name="shipping_cost" id="ongkirInput" class="w-100 h-100" oninput="ongkirSync()" required>
                                    </div>

                                    <button class="w-100 py-4 fsc-2 bg-accent rounded-3 text-white d-flex align-items-center justify-content-center fw-bold mt-5">Simpan Ongkir</button>
                                </form>

                                <button onclick="togglePopUp('cancel')" class="w-100 py-4 fsc-2 bg-light-accent rounded-3 text-accent d-flex align-items-center justify-content-center mb-5 fw-bold">Batalkan Pesanan</button>

                                <p class="fsc-3 mb-3 fw-bold flex-shrink-0 mb-3 w-100">Rincian Pembayaran</p>

                                <div class="d-flex w-100 h-100 flex-column">

                                    <div class="d-flex w-100 mb-3 justify-content-between align-items-center">
                                        <p class="fsc-2 mb-0">Subtotal</p>
                                        <p class="fsc-2 mb-0">Rp {{ number_format($response['data']['subtotal'], 0, ',', '.') }}</p>
                                    </div>
        
                                    <div class="d-flex w-100 mb-4 justify-content-between align-items-center">
                                        <p class="fsc-2 mb-0">Ongkir</p>
                                        <div class="d-flex gap-2">
                                            <p class="fsc-2 mb-0">Rp</p>
                                            <p class="fsc-2 mb-0" id="ongkirLabel">0</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="d-flex w-100 mb-1 flex-shrink-0 justify-content-between align-items-center">
                                    <p class="fsc-3 fw-bold mb-0">Total Transaksi</p>
                                    <p class="fsc-3 fw-bold mb-0">Rp {{ number_format($response['data']['total_price'], 0, ',', '.') }}</p>
                                </div>

                            </div>

                        @elseif ($state === 2)

                            <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">

                                <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                <div class="d-flex w-100 px-5 pt-5 pb-10 mb-10 border-grey-1 flex-column rounded-4 flex-shrink-0">

                                    <p class="fsc-2">Status saat ini:</p>

                                    <label for="ongkirInput" class="mb-2">Ongkos kirim ditentukan</label>
                                    <div class="d-flex w-100 gap-2 border-grey-1 bg-light accent px-5 py-4 align-items-center rounded-3">
                                        <label>Rp {{ $response['data']['shipping_cost'] }}</label>
                                    </div>

                                    <div class="w-100 py-4 gap-2 bg-accent rounded-3 d-flex align-items-center justify-content-center mb-0 text-white fsc-2 mt-5">
                                        <img src="{{ asset('icons/check-circle.svg') }}" alt="" class="h-12em img-white">Invoice Dikirim
                                    </div>
                                </div>

                                <div class="d-flex w-100 flex-column">
                                    <p class="fsc-3 mb-3 fw-bold flex-shrink-0 mb-3 w-100">Rincian Pembayaran</p>
    
                                    <div class="d-flex w-100 h-100 flex-column">
    
                                        <div class="d-flex w-100 mb-3 justify-content-between align-items-center">
                                            <p class="fsc-2 mb-0">Subtotal</p>
                                            <p class="fsc-2 mb-0">Rp {{ number_format($response['data']['subtotal'], 0, ',', '.') }}</p>
                                        </div>
            
                                        <div class="d-flex w-100 mb-4 justify-content-between align-items-center">
                                            <p class="fsc-2 mb-0">Ongkir</p>
                                                <p class="fsc-2 mb-0">Rp {{ number_format($response['data']['shipping_cost'], 0, ',', '.') }}</p>
                                        </div>
    
                                    </div>
    
                                    <div class="d-flex w-100 mb-1 flex-shrink-0 justify-content-between align-items-center">
                                        <p class="fsc-3 fw-bold mb-0">Total Transaksi</p>
                                        <p class="fsc-3 fw-bold mb-0">Rp {{ number_format($response['data']['total_price'], 0, ',', '.') }}</p>
                                    </div>
                                </div>

                                <div class="d-flex w-100 px-5 pt-5 pb-10 mb-10 border-grey-1 flex-column rounded-4 flex-shrink-0">

                                    <p class="fsc-2 w-100 text-center">Validasi Pembayaran</p>
                                    
                                    <button onclick="togglePopUp('proof')" class="w-100 py-4 gap-2 bg-accent rounded-3 d-flex align-items-center mb-0 text-white fsc-2 justify-content-center mt-5">
                                        <img src="{{ asset('icons/show.svg') }}" alt="" class="h-12em img-white">Lihat Bukti Pembayaran
                                    </button>

                                    <form action="">
                                        @csrf

                                        <button class="w-100 py-4 gap-2 bg-accent rounded-3 d-flex align-items-center justify-content-center mb-0 text-white fsc-2 mt-5">
                                            <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-12em img-white">Konfirmasi Pembayaran
                                        </button>

                                    </form>

                                    <button onclick="togglePopUp('cancelP')" class="w-100 py-4 gap-2 bg-light-accent rounded-3 d-flex align-items-center justify-content-center fsc-2 text-accent mb-5 mt-5">
                                        <img src="{{ asset('icons/close.svg') }}" alt="" class="h-2em img-accent">Tolak Pembayaran
                                    </button>

                                    <p class="fsc-1 w-100 text-center">Pastikan bukti transfer valid. Klik konfirmasi untuk memindahkan pesanan ke dapur</p>
                                </div>

                            </div>

						@elseif ($state === 3)

                            <div class="d-flex w-100 rounded-5 flex-column">
                                <div class="d-flex px-6 flex-column pt-10 py-5 rounded-top-5 w-100 bg-accent">
                                    <p class="fsc-3 mb-3 d-flex gap-3 text-white align-items-center fw-bold"><img src="{{ asset('icons/document-filled.svg') }}" alt="" class="img-white h-12em"> Invoice Tersedia</p>
                                    <p class="fsc-2 mb-3 text-white">Invoice teleh divalidasi  oleh admin. Silahkan lanjutkan ke pembayaran</p>
                                </div>

                                <div class="d-flex w-100 px-6 py-5 flex-column">

                                    <div class="d-flex w-100 mb-3 align-items-center justify-content-between">
                                        <p class="fsc-2 fw-bold mb-0">Subtotal</p>
                                        <p class="fsc-2 fw-bold mb-0">Rp {{ number_format(30000, 0, ',', '.') }}</p>
                                    </div>

                                    <div class="d-flex w-100 mb-3 align-items-center justify-content-between">
                                        <p class="fsc-2 fw-bold mb-0">Ongkir</p>
                                        <p class="fsc-2 fw-bold mb-0">Rp {{ number_format(30000, 0, ',', '.') }}</p>
                                    </div>

                                    <span class="w-100 h-1px bg-light-grey mb-3"></span>

                                    <div class="d-flex w-100 mb-4 align-items-center justify-content-between">
                                        <p class="fsc-3 fw-bold mb-0">Total</p>
                                        <p class="fsc-3 fw-black mb-0">Rp {{ number_format(30000, 0, ',', '.') }}</p>
                                    </div>

                                    <p class="fsc-2 mb-2">Konfirmasi Pembayaran</p>
                                    
                                    <div class="d-flex w-100 h-100px align-items-center justify-content-center flex-column">
                                        <img src="{{ asset('icons/check-circle.svg') }}" alt="" class="h-50 img-accent ratio-1">
                                        <p class="fsc-2 mb-0">Pembayaran Sedang Di Review</p>
                                    </div>


                                </div>
                            </div>

						@elseif ($state === 4)

                            <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">
                                <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                <div class="d-flex w-100 mb-5 flex-column rounded-4 flex-shrink-0">

                                    <div class="d-flex w-100 bg-grey-1 rounded-3 py-5 bg-light-green flex-column p-3">
                                        <p class="fsc-2 mb-1 d-flex gap-3 align-items-center"><img src="{{ asset('icons/verification.svg') }}" alt="" class="img-green h-12em"> Pembayaran Berhasil</p>
                                        <p class="fsc-1 mb-0">Dapur sedang menyiapkan masakan segar anda</p>
                                    </div>

                                </div>

                                <button class="w-100 btn-primary-homade align-items-center justify-content-center text-white fsc-2 py-4 rounded-3 mb-3">Unduh Invoice</button>

                            </div>

						@elseif ($state === 5)

                            <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">
                                <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                <div class="d-flex w-100 mb-5 flex-column rounded-4 flex-shrink-0">

                                    <div class="d-flex w-100 bg-grey-1 rounded-3 py-5 bg-light-yellow flex-column p-3">
                                        <p class="fsc-2 mb-1 d-flex gap-3 align-items-center"><img src="{{ asset('icons/info.svg') }}" alt="" class="h-12em"> Menunggu Kurir</p>
                                        <p class="fsc-1 mb-0">Pesanan sudah siap sedang mengunggu kurir</p>
                                    </div>

                                </div>

                                <button class="w-100 btn-primary-homade align-items-center justify-content-center text-white fsc-2 py-4 rounded-3 mb-3">Unduh Invoice</button>

                            </div>

						@elseif ($state === 6)

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
                                    <p class="fsc-2 mb-0 fw-black">Rp {{ number_format(30000, 0, ',', '.') }}</p>
                                </div>

                                <div class="d-flex w-100 justify-content-between mb-3 align-items-center">
                                    <p class="fsc-2 mb-0 fw-bold">Status</p>
                                    <p class="fsc-2 bg-success px-4 rounded-pill text-white mb-0">Paid</p>
                                </div>

                            </div>

						@elseif ($state === 7)

                            <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">
                                <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                <div class="d-flex mt-5 h-50px bg-success align-items-center justify-content-center ratio-1 rounded-circle">
                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-50 img-white">
                                </div>

                                <p class="fsc-2 mb-7 mt-5">Pesanan Sudah Sampai</p>

                                <button class="w-100 btn-primary-homade align-items-center justify-content-center text-white fsc-2 py-4 rounded-3 mb-3 fw-bold"><img src="{{ asset('icons/star.svg') }}" alt="" class="h-12em img-white"> Beri Ulsan & Rating</button>

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
            <div class="d-none2 align-items-center justify-content-center pop-up" id="CancelPopUp">
                <form action="{{ route('admin.reject-order', ['id' => $response['data']['id']]) }}" method="post" class="d-flex flex-column w-30 px-10 py-5 rounded-3 bg-white">
                    @csrf
                    <p class="fsc-3 mb-5 fw-bold">Alasan Kenapa Cancel</p>
                    <textarea name="reason" class="w-100 px-2 py-3 min-h-100px max-h-300px rounded-2 border-grey-2 mb-5" minlength="10" required></textarea>
                    <div class="d-flex w-100 gap-3">
                        <button type="button" onclick="togglePopUp('cancel')" class="w-100 rounded-2 bg-light-accent py-3 fsc-2 text-accent fw-bold d-flex justify-content-center align-items-center">Cancel</button>
                        <button type="submit" class="w-100 rounded-2 bg-accent py-3 fsc-2 text-white fw-bold d-flex justify-content-center align-items-center">Cancel</button>
                    </div>
                </form>
            </div>
            <!-- end::cancel pop up -->

            <!-- begin::cancel payment pop up -->
            <div class="d-none2 align-items-center justify-content-center pop-up" id="CancelPaymentPopUp">
                <form action="{{ route('admin.reject-payment-proof', ['id' => $response['data']['id']]) }}" method="post" class="d-flex flex-column w-30 px-10 py-5 rounded-3 bg-white">
                    @csrf
                    <p class="fsc-3 mb-5 fw-bold">Alasan Kenapa Ditolak</p>
                    <textarea name="reason" class="w-100 px-2 py-3 min-h-100px max-h-300px rounded-2 border-grey-2 mb-5" minlength="10" required></textarea>
                    <div class="d-flex w-100 gap-3">
                        <button type="button" onclick="togglePopUp('cancelP')" class="w-100 rounded-2 bg-light-accent py-3 fsc-2 text-accent fw-bold d-flex justify-content-center align-items-center">Cancel</button>
                        <button type="submit" class="w-100 rounded-2 bg-accent py-3 fsc-2 text-white fw-bold d-flex justify-content-center align-items-center">Tolak</button>
                    </div>
                </form>
            </div>
            <!-- end::cancel payment pop up -->

            <!-- begin::proof pop up -->
            <div class="d-none2 align-items-center justify-content-center pop-up" id="ProofPopUp">
                <div class="d-flex flex-column w-100 h-100 gap-3 p-5">
                    
                    <div class="d-flex h-30px justify-content-end align-items-center gap-3 flex-shrink-0">
                        <form enctype="multipart/form-data" action="{{ route('admin.uploud-payment-proof', ['id' => $response['data']['id']]) }}" method="post" class="position-relative bg-accent rounded-pill align-items-center h-100 px-3 pe-5 d-flex gap-3 fsc-2 text-white mb-0">
                            @csrf
                            <img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em img-white"> Ganti Bukti
                            <input type="hidden" name="reason" value="Bukti Pembayaran Baru">
                            <input name="uplouded_file" accept="image/*" type="file" onchange="this.form.submit()" class="w-100 h-100 top-0 left-0 position-absolute opacity-0">
                        </form>

                        <button onclick="togglePopUp('proof')" class="bg-accent rounded-pill align-items-center h-100 px-3 pe-5 d-flex gap-3 fsc-2 text-white mb-0">
                            <img src="{{ asset('icons/close.svg') }}" alt="" class="h-15em img-white"> Close
                        </button>
                    </div>

                    <div class="d-flex w-100 h-100 overflow-hidden">
                        <img src="{{ $response['data']['payment_proof']['url'] ?? "https://placehold.co/400x250/FFEEEE/DC3545?text=Gambar+Rusak" }}" alt="" class="w-100 h-100 object-fit-contain">
                    </div>

                    <p>@json($response['data']['payment_proof'] ?? [])</p>

                </div>
            </div>
            <!-- end::proof pop up -->
             
            <div class="d-flex align-items-center justify-content-center w-100 p-10">
				<div class="d-flex flex-column w-95 bg-white border-grey-05 p-5 px-10 rounded-2">

					@if ($response['status'] === 'success')

						<h2 class="text-accent fsc-3">Data Customer</h2>

						<div class="mb-5 d-flex flex-column gap-2">
							<span>Nama Pembeli: {{ $response['data']['user']->first_name . ' ' . $response['data']['user']->last_name }}
							</span>
							<span>Nomor Telepon Pembeli: {{ $response['data']['user']->phone }} </span>
							<span>Alamat Email Pembeli: {{ $response['data']['user']->email }} </span>
							<span>Tanggal Dibuatnya Akun: {{ $response['data']['user']->created_at }}</span>
							<a href="{{ route('admin.detail-account', ['id' => $response['data']['user']->id]) }}" class="px-5 py-2 bg-accent text-white fw-bold mt-3 mb-5 rounded-2 w-max">Lihat Akun</a>
						</div>

						<span class="w-100 h-1px bg-dark-grey mb-5"></span>

						<h2 class="text-accent fsc-3">Informasi Pengiriman</h2>

						<div class="mb-5 d-flex flex-column gap-2">
							<span>Dikirimkan Pada: {{ $response['data']['delivery_info']['delivery_at'] }}</span>
							<span>Estimasi Jarak: {{ $response['data']['delivery_info']['distance'] }} Kilometer</span>
							<span>Status: {{ $response['data']['delivery_info']['status'] }}</span>
							<div class="mb-5 d-flex gap-2 mt-2 flex-wrap">
								@foreach ($response['data']['status_information']['delivery'] as $status_delivery)
									@php
										$isCurrentStatus = trim($status_delivery -> value) === $response['data']['delivery_info']['status'];
									@endphp

									<form action="{{ route('admin.change-status-delivery-order', ['id' => $response['data']['id']]) }}" method="POST">
										@csrf
										@method('PUT')
										
										<button type="submit" name="delivery_status" value="{{ $status_delivery }}" @disabled($isCurrentStatus) class="{{ $isCurrentStatus ? 'bg-accent text-white fw-bold' : 'border-grey-1' }} rounded-2 px-5 py-3">
											{{ $status_delivery }}
										</button>
									</form>
								@endforeach
							</div>
						</div>
					
						<span class="w-100 h-1px bg-dark-grey mb-5"></span>

						<h2 class="text-accent fsc-3">Data Alamat Customer</h2>

						<div class="mb-5 d-flex flex-column gap-2">
							<span>Nama Penerima: {{ $response['data']['delivery_info']['address_info']['received_name'] }}</span>
							<span>Nomor Telepon: {{ $response['data']['delivery_info']['address_info']['phone']   }} </span>
							<span>Alamat: {{ $response['data']['delivery_info']['address_info']['address']   }} </span>
							<span>Catatan: {{ $response['data']['delivery_info']['address_info']['note']   }} </span>
						</div>

						<div class="d-flex w-75 border-homade-1 rounded-3 mb-10">
							<iframe class="w-100 h-100 rounded-3"
								src="https://www.google.com/maps?q={{ $response['data']['delivery_info']['address_info']['latitude'] }},{{ $response['data']['delivery_info']['address_info']['longitude'] }}&output=embed"
								allowfullscreen>
							</iframe>
						</div>

						<span class="w-100 h-1px bg-dark-grey mb-5"></span>

						<h2 class="text-accent fsc-3">Data Transaksi</h2>

						<div class="mb-5 d-flex flex-column gap-2">
							<span>Transaksi ID: {{ $response['data']['id'] }}</span>
							<span>Total menu yang dipesan : {{ $response['data']['total_menu'] }}</span>
							<span>Sub Total : {{ $response['data']['subtotal'] }}</span>
							<span>Ongkos Kirim : {{ $response['data']['shipping_cost'] }}</span>
							<span>Total Price : {{ $response['data']['total_price'] }}</span>
							<span>Status : {{ $response['data']['status'] }}</span>
							<span>Kategori : {{ $response['data']['category'] }}</span>
							<span>Catatan: {{ $response['data']['note'] ?? '-' }} </span>
							<span>Dibuat Pada: {{ $response['data']['created_at'] }} </span>

							<form action="{{ route('admin.complete-order', ['id' => $response['data']['id']]) }}" method="post">
								@csrf
								<button>Selesaikan Transaksi</button>
							</form>
						</div>

						@if ($response['data']['refund_info']['is_refund'])

							<span class="w-100 h-1px bg-dark-grey mb-5"></span>

							<h2 class="text-accent fsc-3">Data Refund</h2>
								<div class="mb-5 d-flex flex-column gap-2">
									<span>Alasan: {{ $response['data']['refund_info']['reason'] }}</span>
									<span>Status: {{ $response['data']['refund_info']['status'] }}</span>
								</div>
							</div>

						@endif

						@if (str_starts_with($response['data']['status'], 'cancelled_by'))
							<span class="w-100 h-1px bg-dark-grey mb-5"></span>

							<h2 class="text-accent fsc-3">Data Dibatalkan</h2>
							<div class="mb-5 d-flex flex-column gap-2">
								<span>Alasan: {{ $response['data']['cancelled_reason'] }}</span>
								<span>Di Cancel Oleh: {{ $response['data']['status'] === 'cancelled_by_admin' ? 'admin' : 'customer' }}</span>
							</div>
						@endif

						<span class="w-100 h-1px bg-dark-grey mb-5"></span>

						<h2 class="text-accent fsc-3">List Pemesanan</h2>
						@foreach ($response['data']['items'] as $item)
							<div class="mb-5 d-flex flex-column gap-2">
								<span>Nama Menu: {{ $item['name'] }}</span>
								<span>Tema: {{ $item['theme'] }}</span>
								<span>Paket: {{ $item['package'] }}</span>
								<span>Jumlah Di Pesan: {{ $item['quantity'] }}</span>
								<span>Harga: {{ $item['price_at_purchase'] }}</span>
							</div>
						@endforeach

						
						<div style="display:flex; flex-direction: column; gap:2px;">
							@if ($response['data']['status'] === 'waiting_for_invoice' || !$response['data']['payment_proof'] || $response['data']['payment_proof']['status'] === 'rejected')
							<span class="w-100 h-1px bg-dark-grey mb-5"></span>
							    <h4 class="text-accent fsc-3">Invoice Pemesanan</h4>
									<span>Transaksi Belum Memiliki Invoice</span>
									
									<span class="w-100 h-1px bg-dark-grey mb-5"></span>
									
									<form action="{{ route('admin.change-transaction-information', ['id' => $response['data']['id']]) }}" method="POST">
										@csrf
										@method('PUT')
										<h4>Yukk, Buatkan Invoice Untuk Customer, Dia nunggu lho!</h4>
										<div style="display:flex; flex-direction: column; gap:2px;">
											<label for="shipping_cost">Ongkos Kirim</label>
											<input class="bg-light-accent" type="number" name="shipping_cost" id="shipping_cost"
												value="{{ old('shipping_cost') ?? $response['data']['shipping_cost'] }}" required>

											<label for="delivery_at">Delivery At</label>
											<span>note: ketika kategori transaksi adalah order maka yang berubah hanya jamnya saja, namun ketika
												pre-order maka yang berubah bisa keseulurah tanggal dan jamnya</span>
											<span>kategori : {{ $response['data']['category'] }}</span>
											<input class="bg-light-accent" type="datetime-local" name="delivery_at" id=""
												value="{{ $response['data']['delivery_info']['delivery_at'] }}">
											<label for="received_transaction_information">Email Penerima</label>
											<input class="bg-light-accent" type="email" name="received_transaction_information" id=""
												value="{{ $response['data']['send_email_into'] }}">
											<div>
												<label for="notif_after_update_information_trigger">Beritahu Customer</label>
												<input type="checkbox" name="notif_after_update_information_trigger" checked id="notif_after_update_information_trigger">
												<input type="hidden" name="notif_after_update_information" id="notif_after_update_information" value="1">
											</div>
											<button>{{ !$response['data']['payment_proof'] ? 'Tambahkan Invoice' : 'Simpan Perubahan' }}</button>
										</div>
									</form>

									<form action="{{ route('admin.reject-order', ['id' => $response['data']['id']]) }}" method="POST">
										@csrf
										<textarea name="reason">Tidak memenuhi persyaratan</textarea>
										<button>Tolak Transaksi</button>
								</div>
								</form>
							@endif
                        @if ($response['data']['payment_proof'])
                        <span class="w-100 h-1px bg-dark-grey mb-5"></span>
                            <h2 class="text-accent fsc-3">Data Bukti Pembayaran</h2>
                            <div style="display:flex; flex-direction: column; gap:2px;">
                                <span>Payment Proof ID: {{ $response['data']['payment_proof']['id'] }}</span>
                                <span>Bukti Pembayaran Dibawha ini</span>
                                {{-- terima bukti pembayaran --}}
                                <h4>Action Untuk Menerima / Menolak Bukti Pembayaran</h4>
                                {{-- gak ada validasi ya disini, takutnya kepencet acc hehe... tpai kalo status transaksi sudah success itu gak bisa
                                di ubah lagi & dan ketika makanannya udh di dikirimkan gak bisa di tolak! --}}
                                <form action="{{ route('admin.accept-payment-proof', ['id' => $response['data']['id']]) }}" method="post"
                                    style="display:flex; flex-direction: column; gap:10px;" enctype="multipart/form-data">
                                    @csrf
                                    <span>Ganti Bukti Pembayaran</span>
                                    <input type="file" name="uplouded_file" accept="image/*">
                                    <textarea name="reason" id="">Bukti pembayaran yang sangat valid!</textarea>
                                    <button>Terima Bukti Pembayaran</button>
                                </form>
                                <form action="{{ route('admin.reject-payment-proof', ['id' => $response['data']['id']]) }}" method="post"
                                    style="display:flex; flex-direction: column; gap:2px;">
                                    {{-- tolak butki pembayaran --}}
                                    @csrf
                                    <textarea name="reason" id="">Bukti pembayaran yang sangat tidak valid!</textarea>
                                    <button>Tolak Bukti Pembayaran</button>
                                </form>
                            </div>
                        @elseif(!$response['data']['payment_proof'] && $response['data']['status'] === 'pending')
                            <h2>Tambahkan Bukti Pembayaran</h2>
                            <form action="{{ route('admin.uploud-payment-proof', ['id' => $response['data']['id']]) }}" method="post"
                                style="display:flex; flex-direction: column; gap:10px;" enctype="multipart/form-data">
                                @csrf
                                <span>Uploud Bukti Pembayaran</span>
                                <input type="file" name="uplouded_file" accept="image/*">
                                <button>Uploud Bukti Pembayaran</button>
                            </form>
                        @endif
						
						

						<script>
							document.getElementById('notif_after_update_information_trigger').addEventListener('change', function(e){
								document.getElementById('notif_after_update_information').value = e.target.checked ? 1 : 0;
							})
						</script>
						</div>
					@else
					<p>Error</p>
					@endif

				</div>
			</div>
			

        @include('components.navbarFoot',[ "page" => "schedule"])
        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

        <script>

            function togglePopUp(x)
            {
                if (x === "cancel")
                {
                    document.getElementById("CancelPopUp").classList.toggle("d-flex")
                } 

                if (x === "cancelP")
                {
                    document.getElementById("CancelPaymentPopUp").classList.toggle("d-flex")
                } 
                
                if (x === "proof")
                {
                    document.getElementById("ProofPopUp").classList.toggle("d-flex")
                }
            }
        </script>

        <script>
            @if ( $response['data']['shipping_cost'] )
            let ongkirValue = {{ $response['data']['shipping_cost'] }};
            @else
            let ongkirValue = 0;
            @endif

            const formatter = new Intl.NumberFormat('id-ID');
            let displayValue = ongkirValue ? formatter.format(ongkirValue) : 0;
            document.getElementById('ongkirLabel').innerText = displayValue;

            function ongkirSync() {
                ongkirValue = document.getElementById('ongkirInput').value;

                let displayValue = ongkirValue ? formatter.format(ongkirValue) : 0;
                document.getElementById('ongkirLabel').innerText = displayValue;
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
