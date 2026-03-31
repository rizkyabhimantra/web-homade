@php

    $placeImg = "https://placehold.co/400";
    $state = 6

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
                    <p class="fsc-2 fsc-lg-3 text-black mb-0">Detail Pesanan # 550E8300 - E298</p>
                </div>
                <!-- end::breadcrumb -->

                <!-- begin::detail pesanan -->
                <div class="d-flex flex-column gap-4 gap-md-0 flex-lg-row align-items-center mb-5 w-95">
                    <div class="d-flex w-100 justify-content-center flex-column">
                        <p class="fsc-4 fsc-xl-5 mb-0">Detail Pemesanan # 550E8300 - E298</p>
                        <p class="fsc-3 mb-0">Dipesan pada: 6 Feb 2026, 15:00:30</p>
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
                    <div class="d-flex align-items-center gap-10 justify-content-center w-100 {{ $state === 1 || $state === 2 ? 'flex-column' : 'flex-column-reverse' }} me-lg-5">

                        <div class="d-flex align-items-center flex-column w-100 border-grey-1 rounded-5">

                            @if ($state === 2)

                            <p class="fsc-3 mb-0 d-flex align-items-center w-100 px-10 py-5 gap-3"><img src="{{ asset('icons/info.svg') }}" class="h-1em"> Instruksi Pembayaran</p>
                            <span class="w-100 h-1px bg-grey"></span>

                            <div class="d-flex justify-content-center flex-column flex-xl-row w-100 px-5 px-md-15 py-10 gap-7">

                                <div class="d-flex w-100 flex-column">
                                    <p class="fsc-2 mb-3 fw-bold">Silahkan transfer sesuai dengan total tagihan ke rekening tersebut:</p>

                                    <div class="d-flex w-100 p-4 flex-column border-grey-1 rounded-3">
                                        <p class="fsc-2 mb-0 fw-bold">Trasfer Bank</p>

                                        <span class="w-100 h-1px bg-dark-grey mb-5 mt-5"></span>

                                        <p class="fsc-2 mb-2">Bank BCA (A/N Homade)</p>
                                        <p class="fsc-3 d-flex w-100 flex-row-reverse align-items-center justify-content-between fw-bold mb-0"><img src="{{ asset('icons/bca.svg') }}" alt="" class="h-12em"> 1234567890</p>

                                        <span class="w-100 h-1px bg-dark-grey mb-5 mt-5"></span>

                                        <p class="fsc-2 mb-2">Bank BNI (A/N Wildan Izhar Al-Haqq)</p>
                                        <p class="fsc-3 d-flex w-100 flex-row-reverse align-items-center justify-content-between fw-bold mb-0"><img src="{{ asset('icons/bni.svg') }}" alt="" class="h-12em"> 1234567890</p>
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

                                <div class="d-flex w-100 h-100px flex-column gap-5">

                                    <div class="d-flex w-100 h-100 flex-column">
                                        <p class="fsc-2 mb-3 fw-bolder text-black">Note Opsional</p>
                                        <p class="fsc-2 w-100 h-100px overflow-scroll px-3 py-3 rounded-2 border-grey-1 mb-0 text-black">Sambalnya dipisah Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
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

                                @foreach (range(1,3) as $i)
                                <div class="overflow-hidden d-flex w-100 gap-1 h-60px h-md-100px align-items-center justify-content-center">

                                    <div class="overflow-hidden d-flex h-100 w-100 align-items-center justify-content-center">

                                        <div class=" overflow-hidden d-flex w-100 h-100 gap-3 gap-md-10">

                                            <div class="d-none d-sm-flex h-100 ratio-1">
                                                <img src="{{ $placeImg }}" alt="" class="w-100 h-100 object-fit-cover">
                                            </div>

                                            <div class="overflow-hidden d-flex w-100 h-100 align-items-center justify-content-center flex-column">
                                                <p class="fsc-3 mb-0 w-100 overflow-hidden text-overflow text-nowrap fw-bold">Paket A - Ayam Geprek</p>
                                                <p class="fsc-2 mb-0 w-100 overflow-hidden text-overflow text-nowrap">Bento Mealbox</p>
                                                <p class="fsc-1 mb-0 w-100 overflow-hidden text-overflow text-nowrap d-flex gap-3 align-items-center"><img src="{{ asset('icons/text-left.svg') }}" alt="" class="h-12em"> Sambal Dipisah</p>
                                            </div>
                                                

                                        </div>

                                    </div>

                                    <div class="d-none d-md-flex h-100 w-20 flex-column flex-shrink-0 align-items-center justify-content-center">
                                        <p class="fsc-3 fw-bold mb-0 w-100 text-center">15</p>
                                        <p class="fsc-2 mb-0 w-100 text-center">PORSI</p>
                                    </div>

                                    <div class="d-flex h-100 w-35 w-sm-30 flex-shrink-0 flex-column align-items-center justify-content-center">
                                        <p class="fsc-3 fw-bold mb-0 w-100 text-end">Rp 4.500.000</p>
                                        <p class="fsc-2 mb-0 w-100 text-end d-none d-md-inline">Rp 30.000 / Pcs</p>
                                        <p class="fsc-2 mb-0 w-100 text-end d-md-none">15 Porsi</p>
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
                                        <p class="fsc-2 mb-0">Rp 4.200.000</p>
                                    </div>
        
                                    <div class="d-flex w-100 mb-4 justify-content-between align-items-center">
                                        <p class="fsc-2 mb-0">Ongkir</p>
                                        <p class="fsc-2 bg-accent-secondary px-4 rounded-pill text-white mb-0">Pending</p>
                                    </div>

                                </div>

                                <div class="d-flex w-100 mb-1 flex-shrink-0 justify-content-between align-items-center">
                                    <p class="fsc-3 fw-bold mb-0">Total Transaksi</p>
                                    <p class="fsc-3 fw-bold mb-0">Rp 4.200.000</p>
                                </div>
                                <p class="fsc-1 w-100 flex-shrink-0 mb-0"><b>*</b>BELUM TERMASUK ONGKIR</p>

                                <button class="w-100 bg-whatsapp d-flex align-items-center justify-content-center text-white fsc-2 py-4 rounded-3 mt-5 mb-3 gap-3"><img src="{{ asset('icons/whatsapp.svg') }}" alt="" class="img-white h-15em"> like whatsapp danger</button>
                                <button class="w-100 btn-primary-homade align-items-center justify-content-center text-white fsc-2 py-4 rounded-3 mb-3">Batalkan Pesanan</button>

                            </div>

                            @elseif ($state === 2)

                            <div class="d-flex w-100 rounded-5 flex-column">
                                <div class="d-flex px-6 flex-column pt-10 py-5 rounded-top-5 w-100 bg-accent">
                                    <p class="fsc-3 mb-3 d-flex gap-3 text-white align-items-center fw-bold"><img src="{{ asset('icons/document-filled.svg') }}" alt="" class="img-white h-12em"> Invoice Tersedia</p>
                                    <p class="fsc-2 mb-3 text-white">Invoice teleh divalidasi  oleh admin. Silahkan lanjutkan ke pembayaran</p>
                                </div>

                                <div class="d-flex w-100 px-6 py-5 flex-column">

                                    <div class="d-flex w-100 mb-3 align-items-center justify-content-between">
                                        <p class="fsc-2 fw-bold mb-0">Subtotal</p>
                                        <p class="fsc-2 fw-bold mb-0">Rp 99.500.000</p>
                                    </div>

                                    <div class="d-flex w-100 mb-3 align-items-center justify-content-between">
                                        <p class="fsc-2 fw-bold mb-0">Ongkir</p>
                                        <p class="fsc-2 fw-bold mb-0">Rp 99.500.000</p>
                                    </div>

                                    <span class="w-100 h-1px bg-light-grey mb-3"></span>

                                    <div class="d-flex w-100 mb-4 align-items-center justify-content-between">
                                        <p class="fsc-3 fw-bold mb-0">Total</p>
                                        <p class="fsc-3 fw-black mb-0">Rp 99.500.000</p>
                                    </div>

                                    <p class="fsc-2 mb-2">Konfirmasi Pembayaran</p>
                                    
                                    <div class="position-relative d-flex w-100 mb-3 h-150px border-grey-1 rounded-3">
                                        <input type="file" class="w-100 h-100 opacity-0">
                                        <div class="d-flex flex-column w-100 h-100 position-absolute top-0 left-0 bg-white rounded-3 pointer-events-none align-items-center justify-content-center">
                                            <div class="d-flex h-50">
                                                <img src="{{ asset('icons/cloud-upload.svg') }}" alt="" class="h-100 img-grey">
                                            </div>
                                            <p class="fsc-2 mb-0">Kirim Bukti Pembayaran</p>
                                        </div>
                                    </div>

                                    <button class="w-100 fsc-2 fw-bold py-3 align-items-center justify-content-center d-flex bg-accent rounded-2 text-white mb-2">Kirim Bukti Pembayaran</button>
                                    <button class="w-100 fsc-2 fw-bold py-3 align-items-center justify-content-center d-flex rounded-2 border-grey-1">Unduh Invoice (PDF)</button>

                                </div>
                            </div>

                            @elseif ($state === 3)

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

                            @elseif ($state === 4)

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

                            @elseif ($state === 5)

                            <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">
                                <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                <div class="d-flex w-100 mb-5 flex-column rounded-4 flex-shrink-0">

                                    <div class="d-flex w-100 bg-grey-1 rounded-3 py-5 bg-light-blue flex-column p-3">
                                        <p class="fsc-2 mb-1 d-flex gap-3 align-items-center"><img src="{{ asset('icons/info.svg') }}" alt="" class="h-12em"> Pesanan Dalam Perjalanan</p>
                                        <p class="fsc-1 mb-0">Kurir sedang dalam perjalanan menuju lokasimu harap pastikan nomor handphone aktif</p>
                                    </div>

                                </div>

                                <button class="w-100 bg-success align-items-center justify-content-center text-white fsc-2 py-4 rounded-3 mb-5">Hubungi Admin</button>

                                <div class="d-flex w-100 justify-content-between mb-3 mt-5 align-items-center">
                                    <p class="fsc-2 mb-0 fw-bold">Total Pembayaran</p>
                                    <p class="fsc-2 mb-0 fw-black">Rp 50.000.000</p>
                                </div>

                                <div class="d-flex w-100 justify-content-between mb-3 align-items-center">
                                    <p class="fsc-2 mb-0 fw-bold">Status</p>
                                    <p class="fsc-2 bg-success px-4 rounded-pill text-white mb-0">Paid</p>
                                </div>

                            </div>

                            @elseif ($state === 6)

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