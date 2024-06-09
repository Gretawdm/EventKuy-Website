<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Verified</title>
</head>

<body>
    <h2>Hello {{ $name }},</h2>
    <p>Pemesanan booth Anda untuk booth <strong>{{ $booth_name }}</strong> ({{ $booth_type }})
        pada acara <strong>{{ $event_name }}</strong> telah diverifikasi.</p>
    <p>Untuk bergabung dengan grup WhatsApp acara, silakan klik tombol di bawah:</p>
    <p>
        <a href="{{ $whatsapp_group_link }}"
            style="display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">Join
            Grup WhatsApp</a>
    </p>
    <p>Terima kasih telah menggunakan layanan kami.</p>
</body>

</html>