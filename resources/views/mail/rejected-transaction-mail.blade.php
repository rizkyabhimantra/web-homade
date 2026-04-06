<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <h2>Pemesanan Dibatalkan Oleh {{ $transaction->status }}</h2>
    {{ $transaction }}

    <h4>Contact</h4>
    {{ $contact }}

    <span>Apakah Admin? : {{ $is_admin ? 'Ya' : 'Tidak' }}</span>

</div>
