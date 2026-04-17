<table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #EE2227; padding: 15px 20px;">
    <tr>
        <td>
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #ffffff; padding: 10px;">

                <tr>
                    <td style="text-align: center; padding-bottom: 10px;">
                        <p style="font-size: 1.5rem; margin: 0; font-weight: bold; color: #EE2227;">Pesanan Diterima</p>
                    </td>
                </tr>

                <tr>
                    <td style="text-align: center; padding-bottom: 10px;">
                        <img src="{{ asset('icons/check-circle.svg') }}" alt="" width="200" height="200" style="filter: brightness(0) saturate(100%) invert(25%) sepia(57%) saturate(4781%) hue-rotate(345deg) brightness(92%) contrast(103%);">
                    </td>
                </tr>

                <tr>
                    <td style="text-align: center; padding-bottom: 4px;">
                        <p style="font-size: 1.1rem; margin: 0;"><span style="font-weight: bold;">ID Pemesanan:</span> {{ $transaction['id'] }}</p>
                    </td>
                </tr>

                <tr><td style="height: 10px;"></td></tr>

                <tr>
                    <td style="text-align: center; padding-bottom: 4px;">
                        <p style="font-size: 1.1rem; margin: 0;"><span style="font-weight: bold;">Subtotal:</span> {{ $transaction['subtotal'] }}</p>
                    </td>
                </tr>

                <tr>
                    <td style="text-align: center; padding-bottom: 4px;">
                        <p style="font-size: 1.1rem; margin: 0;"><span style="font-weight: bold;">Ongkos Kirim:</span> {{ $transaction['shipping_cost'] }}</p>
                    </td>
                </tr>

                <tr>
                    <td style="text-align: center; padding-bottom: 4px;">
                        <p style="font-size: 1.1rem; margin: 0;"><span style="font-weight: bold;">Total Harga:</span> {{ $transaction['total_price'] }}</p>
                    </td>
                </tr>

                <tr><td style="height: 10px;"></td></tr>

                <tr>
                    <td style="text-align: center;">
                        <p style="font-size: 1.1rem; margin: 0;">{{ $contact['email'] }} | {{ $contact['customer_care_phone'] }}</p>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>