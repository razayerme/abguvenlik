<!DOCTYPE html>
<html>
<head>
    <title>Yeni İletişim Formu Mesajı</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2 style="color: #ce1126;">Yeni İletişim Formu Mesajı</h2>
    <p>Web siteniz üzerinden yeni bir iletişim formu gönderilmiştir.</p>
    
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd; font-weight: bold; width: 150px;">Adı Soyadı:</td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $data['name'] }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd; font-weight: bold;">E-posta:</td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $data['email'] }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd; font-weight: bold;">Telefon:</td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $data['phone'] ?? 'Belirtilmedi' }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd; font-weight: bold;">Konu:</td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $data['subject'] }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd; font-weight: bold;">Mesaj:</td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $data['message'] }}</td>
        </tr>
    </table>
    
    <p style="margin-top: 20px; font-size: 12px; color: #777;">Bu mesaj {{ config('app.name') }} otomatik iletişim sistemi tarafından gönderilmiştir.</p>
</body>
</html>
