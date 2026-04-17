@include('components.header')

<div class="d-flex w-100 min-h-100 p-15 bg-accent">
    <div class="d-flex flex-column bg-white p-10 px-20 align-items-center justify-content-center w-100">
    
        
        <p class=" w-100 fsc-3 text-center fw-bold text-accent">Pemesanan Diterima</p>

        @dd($transaction)
        <p class=" w-100 fsc-2 mb-1">id: {{ $transaction['id'] }}</p>
        <p class=" w-100 fsc-2 mb-1">id_user: {{ $transaction['id_user'] }}</p>
        <p class=" w-100 fsc-2 mb-1">shipping_cost: {{ $transaction['shipping_cost'] }}</p>
        <p class=" w-100 fsc-2 mb-1">total_price: {{ $transaction['total_price'] }}</p>
        <p class=" w-100 fsc-2 mb-1">subtotal: {{ $transaction['subtotal'] }}</p>
        <p class=" w-100 fsc-2 mb-1">total_items: {{ $transaction['total_items'] }}</p>
        <p class=" w-100 fsc-2 mb-1">category: {{ $transaction['category'] }}</p>
        <p class=" w-100 fsc-2 mb-1">status: {{ $transaction['status'] }}</p>
        <p class=" w-100 fsc-2 mb-1">status_delivery: {{ $transaction['status_delivery'] }}</p>
        <p class=" w-100 fsc-2 mb-1">note: {{ $transaction['note'] }}</p>
        <p class=" w-100 fsc-2 mb-1">delivery_at: {{ $transaction['delivery_at'] }}</p>
        <p class=" w-100 fsc-2 mb-1">contact_email: {{ $transaction['contact_email'] }}</p>
        <p class=" w-100 fsc-2 mb-1">access_token: {{ $transaction['access_token'] }}</p>
        <p class=" w-100 fsc-2 mb-1">is_guest: {{ $transaction['is_guest'] }}</p>
        <p class=" w-100 fsc-2 mb-1">created_at: {{ $transaction['created_at'] }}</p>
        <p class=" w-100 fsc-2 mb-1">updated_at: {{ $transaction['updated_at'] }}</p>
        
        
        <p class=" w-100 fsc-2 mb-1 text-center">{{ $contact['email'] }} | {{ $contact['customer_care_phone'] }}</p>
    
    
    </div>
</div>
