    <!DOCTYPE html>
    <html lang="en">
        @include('components.header' )

    <body>
    
    @if($response['status'] === 'success')

    
    <div class="d-flex w-100 py-10 align-items-center justify-content-center flex-column gap-3">
        
        <a class="px-4 py-2 bg-accent rounded-3 text-white fw-bold w-max" href="{{ route('user.user-address') }}"> Kembali? </a>

        <form id="popUp" action="{{ route('user.edit-user-address', ['id' => $response['data']['id']]) }}" method="post" class="w-50 d-flex flex-column px-4 py-2">
            @csrf
            @method('put')

            <div class="d-flex w-100 min-h-100 flex-shrink-0 flex-column bg-white justify-content-center align-content-center rounded-5 border-grey-1">
                <p class="mb-0 w-100 text-center pb-10 pt-15 fsc-4 text-accent fw-bold">Edit Alamat</p>
                <span class="w-100 h-1px bg-black"></span>
                <div class="d-flex w-100 h-100 flex-column px-10">

                    <p class="mb-2 mt-5 ps-5 fsc-2 text-grey fw-bold">Pinpoint</p>
                    <div type="text" class="w-100 border-grey-1 h-250px rounded-4 fsc-2">
                        <div id="map" class="w-100 h-100 rounded-4"></div>
                    </div>

                    <label class="mb-2 mt-5 ps-5 fsc-2 text-grey fw-bold" for="addressLabel">Label Alamat</label>
                    <input id="addressLabel" name="label" type="text" value="{{ old('label') ?? $response['data']['label'] }}" class="w-100 border-grey-1 h-50px ps-5 rounded-4 fsc-2">
                    
                    <label class="mb-2 mt-5 ps-5 fsc-2 text-grey fw-bold" for="address">Alamat Lengkap</label>
                    <textarea id="address" name="address" type="text" class="w-100 border-grey-1 min-h-75px p-5 rounded-4 fsc-2">{{ old('address') ?? $response['data']['address'] }}</textarea>

                    <label class="mb-2 mt-5 ps-5 fsc-2 text-grey fw-bold" for="deliveryNote">Catatan kurir (opsional)</label>
                    <input id="deliveryNote" name="note" type="text" value="{{ old('note') ?? $response['data']['note']  }}" class="w-100 border-grey-1 h-50px ps-5 rounded-4 fsc-2">
                    
                    <label class="mb-2 mt-5 ps-5 fsc-2 text-grey fw-bold" for="fullname">Nama Penerima</label>
                    <input id="fullname" name="fullname" type="text" value="{{ old('fullname') ?? $response['data']['received_name'] }}" class="w-100 border-grey-1 h-50px ps-5 rounded-4 fsc-2">

                    <label class="mb-2 mt-5 ps-5 fsc-2 text-grey fw-bold" for="phone">Nomor HP</label>
                    <input id="phone" name="phone" type="text" value="{{ old('phone') ?? $response['data']['phone'] }}" class="w-100 mb-2 border-grey-1 h-50px ps-5 rounded-4 fsc-2">

                    <div class="d-flex w-100 border-grey-1 mt-5 h-50px px-5 align-items-center justify-content-between rounded-4">
                        <p class="fsc-2 mb-0 text-black fw-bold">Jadikan Alamat Utama?</p>
                        <button type="button" class="d-flex align-content-center flex-column justify-content-center h-100 ratio-1" onclick="activateSwitch()">
                            <div class="d-flex w-100 h-50 rounded-pill p-1 switch" id="mainSwitch">
                                <span class="fill1"></span>
                                <span class="h-100 ratio-1 flex-shrink-0 rounded-circle bg-white"></span>
                                <span class="fill2"></span>
                            </div>
                        </button>
                    </div>
                    
                    <input type="hidden" name="latitude" value="{{ old('longitude') ?? $response['data']['longitude'] }}" id="latInput">
                    <input type="hidden" name="longitude" value="{{ old('latitude') ?? $response['data']['latitude'] }}" id="lngInput">
                    <input type="checkbox" name="is_main_address" id="isMainInput" class="d-none" @checked(old('is_main') ?? $response['data']['is_main'])>

                    <button class="btn-primary-homade my-5 rounded-4 w-100 align-content-center h-50px justify-content-center fs-3">Simpan</button>
                </div>
            </div>
            
        </form>

    </div>

    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

    <script>
        document.addEventListener("wheel", function(event) {
            if (document.activeElement.type === "number") {
                document.activeElement.blur()
            }
        })

        const checkbox = document.getElementById("isMainInput")
        let mainAddress = checkbox.checked

        if (mainAddress) {
            document.getElementById("mainSwitch").classList.add("active")
        }

        function activateSwitch() {
            mainAddress = !mainAddress
            document.getElementById("mainSwitch").classList.toggle("active")
            
            checkbox.checked = mainAddress
            checkbox.value = mainAddress ? 1 : 0
        }

        var map = L.map('map').setView([-6.28, 106.71], 13)
        var marker

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map)

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        const lat = position.coords.latitude
                        const lng = position.coords.longitude
                        const userLocation = [lat, lng]

                        map.flyTo(userLocation, 16)

                        if (marker) {
                            marker.setLatLng(userLocation)
                        } else {
                            marker = L.marker(userLocation).addTo(map)
                        }

                        document.getElementById('latInput').value = lat
                        document.getElementById('lngInput').value = lng
                    },
                    function(error) {
                        console.warn("Location access denied.")
                    }
                )
            }
        }

        map.on('click', function(e) {
            var lat = e.latlng.lat
            var lng = e.latlng.lng

            if (marker) {
                marker.setLatLng(e.latlng)
            } else {
                marker = L.marker(e.latlng).addTo(map)
            }

            document.getElementById('latInput').value = lat
            document.getElementById('lngInput').value = lng
        })

    </script>

    <script>
        document.getElementById("popUp").addEventListener("submit", function(e) {
        e.preventDefault()

        const fullname = document.getElementById('fullname').value.trim()
        const phone    = document.getElementById('phone').value.trim()
        const label    = document.getElementById('addressLabel').value.trim()
        const address  = document.getElementById('address').value.trim()
        const lat      = document.getElementById('latInput').value
        const lng      = document.getElementById('lngInput').value

        if (!fullname) return alert('Nama penerima wajib diisi')
        if (!phone) return alert('Nomor HP wajib diisi')
        if (phone.length < 8) return alert('Nomor HP minimal 8 karakter')
        if (!label) return alert('Label alamat wajib diisi')
        if (label.length < 3) return alert('Label alamat minimal 3 karakter')
        if (!address) return alert('Alamat lengkap wajib diisi')
        if (address.length < 8) return alert('Alamat lengkap minimal 8 karakter')
        if (!lat || !lng) return alert('Silakan pilih lokasi di peta')

        this.submit()
    })
    </script>
    @endif

    
    </body>

    </html>

     @if (session()->has('response'))
        {{ dd(session()->get('response')) }}
    @endif
</div>
