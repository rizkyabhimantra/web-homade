@component('mail::message')
# Pemesanan Berhasil

Selamat! Pesanan Anda telah kami terima dan sedang diproses.

@component('mail::panel')
**ID Pemesanan:** {{ $transaction['id'] }}  
**Subtotal:** {{ number_format($transaction['subtotal'], 0, ',', '.') }}  
**Ongkos Kirim:** {{ number_format($transaction['shipping_cost'], 0, ',', '.') }}  
**Total Harga:** {{ number_format($transaction['total_price'], 0, ',', '.') }}
@endcomponent

Terima kasih telah mempercayai layanan catering kami. Jika ada pertanyaan, silakan hubungi kami melalui kontak di bawah ini.

@component('mail::button', ['url' => config('app.url') . '/orders/' . $transaction['id']])
Lihat Detail Pesanan
@endcomponent

**Kontak Kami:** {{ $contact['email'] }} | {{ $contact['customer_care_phone'] }}

Salam,  
**{{ config('app.name') }}**
@endcomponent