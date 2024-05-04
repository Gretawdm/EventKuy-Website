<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventKuy - Waiting</title>
    <link href="{{ asset('frontend/assets/img/logo-eventkuynew.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/logo-eventkuynew.png') }}" rel="logo">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link href="{{ asset('frontend/login/assets/css/waiting.css') }}" rel="stylesheet">
</head>

<body>
    @extends('backend.apps')
    @section('content')
        <div class="text-center">
            <div class="image">
                <img src="{{ 'frontend/login/assets/img/waiting.png' }}" alt="Deskripsi Gambar">

            </div>
        </div>
        <div class="text-center">
            <div class="chat-bubble">
                <span id="myElement"></span>
                <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
                <script src="/path/to/typeit/source"></script>
                <script>
                    new TypeIt("#myElement", {
                        strings: "Fitur ini hanya bisa di akses jika admin menyetujui verifikasi akun anda! Akun anda sedang dalam proses verifikasi oleh admin. Mohon Bersabar.....",
                    }).go();
                </script>
            </div>

        </div>
    @endsection

</body>

</html>
