@include('components.header')

<div class="d-flex w-100 min-h-100 p-15 px-5 px-md-15 bg-accent">
    <div class="d-flex flex-column bg-white p-10 align-items-center justify-content-between w-100">
    
        <p class=" w-100 fsc-3 text-center fw-bold text-accent">Pemesanan Berhasil</p>

        <div class="d-flex w-100 h-100 flex-column align-items-center justify-content-center">

            <p class=" w-100 text-center fsc-2 mb-1"><span class="fsc-2 fw-bold">ID Pemesanan:</span> {{ $transaction['id'] }}</p>
            <br>
            <p class=" w-100 text-center fsc-2 mb-1"><span class="fsc-2 fw-bold">Subtotal:</span> {{ $transaction['subtotal'] }}</p>
            <p class=" w-100 text-center fsc-2 mb-1"><span class="fsc-2 fw-bold">Ongkos Kirim:</span> {{ $transaction['shipping_cost'] }}</p>
            <p class=" w-100 text-center fsc-2 mb-1"><span class="fsc-2 fw-bold">Total Harga:</span> {{ $transaction['total_price'] }}</p>
                
        </div>
        
        
        <p class=" w-100 fsc-2 mb-1 text-center">{{ $contact['email'] }} | {{ $contact['customer_care_phone'] }}</p>
    
    
    </div>
</div>