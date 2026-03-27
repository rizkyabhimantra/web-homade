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
                


            </div>

            <span class="h-40px flex-shrink-0"></span>

        @include('components.navbarFoot',[ "page" => "schedule"])
        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    </body>


</html>

<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    {{-- posisinya ini tu methodnya post? --}}

    {{ dd($response) }}

    @if (session()->has('response'))
        {{ dd(session()->get('response')) }}
    @endif
</div>
