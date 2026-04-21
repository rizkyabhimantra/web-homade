<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Pemesanan Homade</title>
</head>
<body style="margin: 0; padding: 0; background-color: #121212; font-family: Arial, Helvetica, sans-serif; color: #ffffff;">
    
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #121212; padding: 40px 20px;">
        <tr>
            <td align="center">
                
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px; background-color: #1a1a1a; border: 1px solid #444444; border-radius: 12px; overflow: hidden;">
                    <tr>
                        <td align="center" style="padding: 40px 30px;">
                            
                            <img src="https://homade.id/wp-content/uploads/2026/02/Logo-Primer-White-Font-hm.png" alt="Homade Logo" width="130" style="display: block; border: 0; max-width: 100%; height: auto; color: #ffffff; font-size: 20px; font-weight: bold; text-align: center;">

                            <h2 style="margin: 30px 0; font-size: 18px; font-weight: normal; text-align: center; color: #ffffff; line-height: 1.5;">
                                Ada Perubahan Pada Transaksi Anda
                            </h2>

                            <table border="0" cellpadding="12" cellspacing="0" width="100%" style="font-size: 14px; color: #cccccc; margin-bottom: 35px;">
                                <tr>
                                    <td align="left" width="50%" style="border-bottom: 1px solid #333333;">Nama Customer</td>
                                    <td align="right" width="50%" style="border-bottom: 1px solid #333333; color: #ffffff;">{{ $transaction->address->received_name ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td align="left" style="border-bottom: 1px solid #333333;">Total Pemesanan</td>
                                    <td align="right" style="border-bottom: 1px solid #333333; color: #ffffff;">{{ count($transaction->orders) . ' Menu' }}</td>
                                </tr>
                                <tr>
                                    <td align="left" style="border-bottom: 1px solid #333333;">Total Harga</td>
                                    <td align="right" style="border-bottom: 1px solid #333333; color: #ffffff;">Rp. {{ number_format($transaction->total_price, 0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td align="left">Status</td>
                                    <td align="right" style="color: #ffffff;">{{ $status ?? 'Waiting For Invoice' }}</td>
                                </tr>
                            </table>

                            <table border="0" cellpadding="0" cellspacing="0" style="margin: 0 auto;">
                                <tr>
                                    <td align="center" style="border-radius: 6px; background-color: #d90429;">
                                        <a href="{{ $transaction->is_guest ? route('guest.detail-order', ['id' => $transaction->id]) : route('user.detail-order', ['id' => $transaction->id]) }}" target="_blank" style="display: inline-block; padding: 12px 24px; font-size: 14px; color: #ffffff; text-decoration: none; font-weight: bold; border-radius: 6px; background-color: #d90429; border: 1px solid #d90429;">
                                            Lihat Detail Pemesanan
                                        </a>
                                    </td>
                                </tr>
                            </table>

                            <p style="margin-top: 40px; font-size: 11px; color: #888888; text-align: center; line-height: 1.6;">
                                Jika memiliki pertanyaan hubungi nomer di<br>bawah ini<br>
                                Telepon: {{ $contact->customer_care_phone }} | Email: {{ $contact->email }}
                            </p>

                        </td>
                    </tr>
                </table>
                </td>
        </tr>
    </table>
    </body>
</html>