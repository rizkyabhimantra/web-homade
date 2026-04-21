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
                                Ada Pesan Masuk Dari Customer
                            </h2>
                            
                            <table border="0" cellpadding="12" cellspacing="0" width="100%" style="font-size: 14px; color: #cccccc; margin-bottom: 35px;">
                                <tr>
                                    <td align="left" width="50%" style="border-bottom: 1px solid #333333;">Nama Pengirim</td>
                                    <td align="right" width="50%" style="border-bottom: 1px solid #333333; color: #ffffff;">{{ $mailData['fullname'] }}</td>
                                </tr>

                                <tr>
                                    <td align="left" width="50%" style="border-bottom: 1px solid #333333;">Email Pengirim</td>
                                    <td align="right" width="50%" style="border-bottom: 1px solid #333333; color: #ffffff;"><a style="color: #fff;" href="mailto:{{ $mailData['email'] }}">{{ $mailData['email'] }}</a></td>
                                </tr>
                            </table>

                            <h2 style="margin: 30px 0; font-size: 18px; font-weight: bold; text-align: center; color: #ffffff; line-height: 1.5;">
                                {{ $mailData['subject'] }}
                            </h2>

                            <h2 style="margin: 30px 0; font-size: 14px; font-weight: normal; text-align: center; color: #ffffff; line-height: 1.5;">
                                {{ $mailData['message'] }}
                            </h2>

                        </td>
                    </tr>
                </table>
                </td>
        </tr>
    </table>
    </body>
</html>