@php
    $placeImg = "https://placehold.co/400";
    $category = request('category');
@endphp

<!DOCTYPE html>
<html lang="en">
    @include('components.header' )

    <body class="d-flex flex-column">
        @include('components.navbarHead',[ "page" => "menu", "bg" => ""])
        
            <div class="d-flex w-100 h-md-75 flex-shrink-0">
                <div class="d-flex w-100 h-md-75 align-items-center py-5 justify-content-center gap-5 flex-column flex-shrink-0">
                    <p class="fsc-6 fw-bolder text-white mb-5">Menu</p>
                    <div class="d-flex flex-column flex-md-row w-75 h-auto h-md-50 gap-5 mt-5">
                        <a href="/menus?category=ayam" class="d-flex w-100 h-100px h-md-100 align-items-center justify-content-center text-white text-center fs-3 bg-chicken">Ayam</a>
                        <a href="/menus?category=ikan" class="d-flex w-100 h-100px h-md-100 align-items-center justify-content-center text-white text-center fs-3 bg-fish">Ikan & Seafood</a>
                        <a href="/menus?category=nasi" class="d-flex w-100 h-100px h-md-100 align-items-center justify-content-center text-white text-center fs-3 bg-rice">Nasi</a>
                        <a href="/menus?category=sapi" class="d-flex w-100 h-100px h-md-100 align-items-center justify-content-center text-white text-center fs-3 bg-beef">Sapi & Kambing</a>
                    </div>
                </div>
            </div>

            <div class="bg-menu">
                <img src="img/food2.webp" alt="" class="w-100 h-900px h-md-100 object-fit-cover">
            </div>

            <div class="d-flex w-100 h-50 overflow-hidden flex-shrink-0 bg-white align-items-center flex-column justify-content-between pt-5 pb-5" id="category">

                <div class="d-flex h-40px w-100 overflow-scroll justify-content-sm-center px-5 gap-5">
                    
                    <a href="/menus#category" class="d-flex text-nowrap {{ !$category ? 'bg-accent' : '' }} h-100 align-items-center px-5 rounded-pill">
                        <p class="fs-2 {{ !$category ? 'text-white' : 'text-grey' }} mb-0 fw-bold">ALL</p>
                    </a>

                    <a href="/menus?category=ayam#category" class="d-flex text-nowrap {{ $category == "ayam" ? 'bg-accent' : '' }} h-100 align-items-center px-5 rounded-pill">
                        <p class="fs-2 {{ $category == "ayam" ? 'text-white' : 'text-grey' }} mb-0 fw-bold">Ayam</p>
                    </a>

                    <a href="/menus?category=ikan#category" class="d-flex text-nowrap {{ $category == "ikan" ? 'bg-accent' : '' }} h-100 align-items-center px-5 rounded-pill">
                        <p class="fs-2 {{ $category == "ikan" ? 'text-white' : 'text-grey' }} mb-0 fw-bold">Ikan & Seafood</p>
                    </a>

                    <a href="/menus?category=nasi#category" class="d-flex text-nowrap {{ $category == "nasi" ? 'bg-accent' : '' }} h-100 align-items-center px-5 rounded-pill">
                        <p class="fs-2 {{ $category == "nasi" ? 'text-white' : 'text-grey' }} mb-0 fw-bold">Nasi</p>
                    </a>

                    <a href="/menus?category=sapi#category" class="d-flex text-nowrap {{ $category == "sapi" ? 'bg-accent' : '' }} h-100 align-items-center px-5 rounded-pill">
                        <p class="fs-2 {{ $category == "sapi" ? 'text-white' : 'text-grey' }} mb-0 fw-bold">Sapi & Kambing</p>
                    </a>
                </div>

                <div class="d-flex h-100px h-md-50px w-100 justify-content-center align-items-center">
                    <div class="w-90 h-100 d-flex flex-column gap-1 flex-md-row justify-content-between">

                        <div class="h-100 w-100 w-md-50 bg-light-grey rounded d-flex align-items-center px-5 gap-5 cursor-text" onclick="focusInput()">
                            <div class="d-flex h-50 ratio-1"> <img src="icons/search.svg" class="w-100 h-100" alt=""></div>
                            <input type="text" class="w-100 h-100 fs-2" id="searchInput" placeholder="cari menu...">
                        </div>

                        <div class="h-100 w-100 w-md-25 bg-light-grey rounded px-5">
                            <select name="" id="theme-select" class="w-100 h-100 border-0 outline-0 bg-transparent fs-4">
                                <option value="" selected>Semua Tema Menu</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <p class="w-100 fsc-3 text-center">Porsinya pas, buat perut kenyang, aktifitas jadi lancar.</p>
                

            </div>

            <div class="d-flex w-100 flex-shrink-0 align-items-md-center justify-content-center">
                <div class="d-flex w-90 flex-shrink-0 flex-column align-items-center align-items-lg-start">
                    <p class="fsc-md-5 fsc-6 homade-underline">{{ !$category ? 'Menu' : '' }}{{ $category == "ayam" ? 'Ayam' : '' }}{{ $category == "ikan" ? 'Ikan & Seafood' : '' }}{{ $category == "nasi" ? 'Nasi' : '' }}{{ $category == "sapi" ? 'Sapi & Kambing' : '' }}</p>
                    <p class="fs-2">menu masakan {{ $category == "ayam" ? 'ayam' : '' }}{{ $category == "ikan" ? 'ikan & seafood' : '' }}{{ $category == "nasi" ? 'nasi' : '' }}{{ $category == "sapi" ? 'sapi & kambing' : '' }} enak ala homade</p>
                </div>
            </div>

            <div class="d-flex w-100 flex-shrink-0 align-items-center flex-column justify-content-center">
                
                <div class="d-flex flex-column d-sm-grid grid-template-homade-menus w-90 align-items-center justify-content-center flex-shrink-0 gap-5">

                    @foreach ($response['data']['items'] ?? [] as $menu)
                    <a href="menus/{{ $menu['id'] }}" class="d-flex flex-column gap-5 w-100 h-500px">

                        <div class="w-100 h-75 position-relative">
                            <img src="{{ $menu['image_url'] }}" alt="{{ $menu['name'] }}" class="w-100 h-100 object-fit-cover">
                            <span class="w-max py-2 px-10 fsc-2 fw-bold bg-accent rounded-3 text-white position-absolute theme-position">{{ $menu['theme'] }}</span>
                        </div>

                        <div class="w-100 h-25">
                            <p class="fs-1 fw-bold text-center">{{ $menu['name'] }}</p>
                        </div>
                        
                    </a>
                    @endforeach
                    
                </div>

                <div class="d-flex align-items-center justify-content-between w-90">
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

            <div class="d-flex w-100 h-25 flex-shrink-0"></div>

        @include('components.navbarFoot',[ "page" => "menu"])
        <script src="assets/plugins/global/plugins.bundle.js"></script>
        <script src="assets/js/scripts.bundle.js"></script>
        <script>

            function focusInput() {
                document.getElementById("searchInput").focus();
            }

            document.addEventListener('DOMContentLoaded', function() {
            const themeSelect = document.getElementById('theme-select');
            const urlParams = new URLSearchParams(window.location.search);
            const currentTheme = urlParams.get('theme');

            fetch('/api/themes')
                .then(response => response.json())
                .then(res => {
                    const themes = res.data.themes; 

                    themes.forEach(theme => {
                        const option = document.createElement('option');
                        option.value = theme.name;
                        option.textContent = theme.name;

                        if (currentTheme === theme.name) {
                            option.selected = true;
                        }

                        themeSelect.appendChild(option);
                    });
                })

            themeSelect.addEventListener('change', function() {
                if (this.value) {
                    urlParams.set('theme', this.value);
                } else {
                    urlParams.delete('theme');
                }
                urlParams.set('page', 1);
                window.location.search = urlParams.toString();
            });
        });

            document.addEventListener('DOMContentLoaded', function() {
                const searchInput = document.getElementById('searchInput');
                const urlParams = new URLSearchParams(window.location.search);

                if (urlParams.has('search')) {
                    searchInput.value = urlParams.get('search');
                }

                searchInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        const query = this.value.trim();

                        if (query) {
                            urlParams.set('search', query);
                        } else {
                            urlParams.delete('search');
                        }

                        urlParams.set('page', 1);

                        window.location.search = urlParams.toString();
                    }
                });
            });
        </script>
    {{  dd($response) }}
    </body>


</html>