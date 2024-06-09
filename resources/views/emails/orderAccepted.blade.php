<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Accepted</title>
</head>

<body>
    <h2>Hello {{ $name }},</h2>
    <p>Pemesanan booth Anda untuk booth <strong>{{ $booth_name }}</strong> ({{ $booth_type }})
        pada acara <strong>{{ $event_name }}</strong> telah diterima.</p>
    <p>Silahkan lakukan pembayaran dalam waktu 24 jam. Jika tidak, pemesanan akan otomatis dibatalkan.</p>
    <p>Terima kasih telah menggunakan layanan kami.</p>
</body>

</html>