<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Reject</title>
</head>

<body>
    <h2>Sorry {{ $name }},</h2>
    <p>Pemesanan booth Anda untuk booth <strong>{{ $booth_name }}</strong> ({{ $booth_type }})
        pada acara <strong>{{ $event_name }}</strong> Ditolak.</p>
    <p>Sampai Jumpa di Event Selanjutnya</p>
    <p>Terima kasih telah menggunakan layanan kami.</p>
</body>

</html>