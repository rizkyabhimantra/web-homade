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
                                Password Akun Anda Berhasil Di Ubah
                            </h2>

                            <h4 style="margin: 30px 0; font-size: 13px; font-weight: normal; text-align: center; color: #ffffff; line-height: 1.5;">
                                Segera hubungi anda jika bukan anda yang mengubah password anda
                            </h4>

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