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

                    <div class="d-flex w-100 mb-2 h-100px align-items-center gap-5">

                        <div class="h-100 ratio-1 flex-shrink-0">
                            <img src="{{ $placeImg }}" class="w-100 h-100 rounded-circle" alt="">
                        </div>

                        <div class="d-flex w-100 h-75 flex-column justify-content-center w-100 ">
                            <p class="fs-3 text-accent fw-bolder mb-0">Andi Pratama</p>
                            <a href="/me" class="fs-5 mb-0 text-accent fw-light d-flex align-items-center gap-1"><img src="{{ asset("icons/edit.svg") }}" class="h-12em"> Ubah Profil</a>
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
                                    <a href="/me" class="fs-4 w-100 px-5 text-black fw-semibold">Profil</a>
                                    <a href="/me/address" class="fs-4 w-100 px-5 text-black fw-semibold">Alamat</a>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Item-->

                    </div>
                    <!--end::Accordion-->

                    <a href="/me/orders" class="fs-2 fw-bolder px-3 mb-0 d-flex align-items-center text-black mb-3 gap-1"><img src="{{ asset('icons/document.svg')}}" class="h-15em" alt="">Pesanan Saya</a>
                    <a href="/" class="fs-2 fw-bolder px-3 mb-0 d-flex align-items-center text-accent gap-1"><img src="{{asset('icons/log-out.svg')}}" class="h-15em img-accent" alt="">Log Out</a>

                </div>
            <!-- end::Left Side -->

                <span class="w-1px flex-shrink-0"></span>

            <!-- begin::Right Side -->
                <div class="d-flex w-100 w-lg-75 p-10 flex-column border-grey-1 rounded-4">

                    <p class="fsc-4 fw-bold">Daftar Pesanan</p>

                    <div class="d-flex mb-5 w-100 align-items-center gap-3 overflow-scroll">
                        <button class="text-accent fsc-3 fw-bold w-100">All</button>
                        @foreach (range(1,15) as $i)
                        <button class="fsc-3 px-2 position-relative">Test <img src="https://pbs.twimg.com/media/GvF8AkFXwAAA2Ai.jpg" alt="" class="sonic"></button>
                        @endforeach
                    </div> 
                    @dd($response)
                    @foreach ($response['data']['orders'] as $pesanan)

                    <div class="d-flex w-100 rounded-3 flex-column-reverse flex-lg-row mb-5 p-5 px-7 border-grey-1 overflow-hidden">
                        <div class="d-flex w-100 flex-column overflow-hidden">
                            <p class="fsc-2 border-grey-1 bg-dark-grey p-1 px-4 text-accent w-max rounded-pill">Rumah</p>
                            <p class="fsc-3 mb-0 fw-bolder">Jl. Kemajuan V No.45</p>
                            <p class="fsc-2 mb-0 fw-bold">0812-3456-7890</p>
                            <p class="fsc-2 mb-5 w-100 w-lg-50">Jl. Kemajuan V No.45, RT.5/RW.4, Petukangan Sel., Kec. Pesanggrahan, Kota Jakarta Selatan.</p>

                            <div class="d-flex w-100 h-50px h-lg-75px mt-5 gap-5 mb-5">
                                <div class="d-flex h-100 ratio-1">
                                    <img src="https://pbs.twimg.com/media/GvF8AkFXwAAA2Ai.jpg" alt="" class="w-100 h-100">
                                </div>
                                <div class="d-flex flex-column overflow-hidden justify-content-center">
                                    <p class="fsc-2 fw-bolder mb-0">Paket A - Bento Mealbox</p>
                                    <p class="fsc-2 mb-0 w-100 w-lg-25 overflow-hidden text-nowrap text-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>
                            </div>

                            <a href="/select-menu" class="text-black fsc-2 border-grey-1 d-flex d-lg-none p-1 py-3 px-4 fw-bold w-max rounded-3">Detail Pesanan</a>
                        </div>

                        <div class="d-flex justify-content-between align-items-center align-items-sm-end mb-5 mb-lg-0 flex-column w-100 w-lg-auto flex-shrink-0">
                            <p class="fsc-2 fw-bold bg-light-accent p-1 px-4 py-3 text-accent w-max rounded-3">Waiting Review</p>
                            <a href="/select-menu" class="text-black fsc-2 border-grey-1 d-none d-lg-flex p-1 py-3 px-4 fw-bold w-max rounded-3">Detail Pesanan</a>
                        </div>

                    </div>
                        
                    @endforeach

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

<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    @if ($response['status'] == 'success')
        <h2>Data Berhasil</h2>
        <h2>akun {{ auth()->user()->first_name }}</h2>
        @foreach ($response['data'] as $key => $address)
            <a href="{{ route('user.detail-user-address', ['id' => $address->id]) }}">
                Alamat ke - {{ $key + 1 }}
                <br>
            </a>
            <span>Alamat : {{ $address->address }}</span>
            <br>
        @endforeach
    @endif
    @if(session()->has('response'))
        @if(isset(session()->get('response')['data']['show_form']) && session()->get('response')['data']['show_form'])
            <h2>Tampilkan detail alamat</h2>
            <form action="{{ route('user.edit-user-address', ['id' => session()->get('response')['data']['address']->id]) }}" method="POST">
                @csrf
                @method("PUT")
                <span>Nama Penerima</span>
                <input type="text" name="fullname" value="{{ session()->get('response')['data']['address']->received_name }}">
                <br>
                 <span>Nomor Telepon Penerima</span>
                <input type="text" name="phone" value="{{ session()->get('response')['data']['address']->phone }}">
                <br>
                 <span>Label Alamat</span>
                <input type="text" name="label" value="{{ session()->get('response')['data']['address']->label }}">
                <br>
                 <span>Alamat Rumah</span>
                <input type="text" name="address" value="{{ session()->get('response')['data']['address']->address }}">
                <br>
                <span>Catatan</span>
                <textarea type="text" name="note">{{ session()->get('response')['data']['address']->note }}"></textarea>
                <br>
                <span>Pin Point</span>
                <input type="text" name="longitude" value="{{ session()->get('response')['data']['address']->longitude }}">
                <input type="text" name="latitude" value="{{ session()->get('response')['data']['address']->latitude }}">
                <br>
                <button class="">Ubah Data</button>
            </form>
            <br>
            <h2>Hapus Data</h2>
            <br>
            <form action="{{ route('user.delete-user-address', [ 'id' => session()->get('response')['data']['address']->id ]) }}" method="post" id="kamu-yakin">
                @csrf
                @method('delete')
                <button>Delete Alamat Ini</button>
            </form>
        @else 
            <h2>Response (Alert)</h2>
            {{ dd(session()->get('response')) }}
        @endif      
    @endif
</div>

<script>
    document.getElementById('kamu-yakin').addEventListener('submit', (e) => {
        e.preventDefault()
        if(confirm('apakah kamu yakin ingin menhapus alamat ini?')){
            e.target.submit()
        }
    })
</script>