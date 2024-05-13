@extends('backend.app')
@section('content')
<div class="row">
    <div class="pagetitle" style="text-align: left;">
        <h1>Event</h1>
        <a href="{{ route('tambah_event') }}" class="btn-event"><span>Membuat Event</span><i
                class="fas fa-plus"></i></a>
    </div>
</div>
<div class="container-wrapper">
    @foreach ($detail_event as $event)
    <div class="container" style="display: block; min-width: 21rem;">

        <div class="card" style="width: 21rem;">
            <div class="card-body" style="display: flex;">
                <div style="flex: 0 0 100px; margin-right: 10px;">
                    <img src="/pamflet_event/{{ $event['upload_pamflet'] }}" alt="Gambar"
                        style="width: 80%; height: auto;">
                </div>
                <div style="display: flex; flex-direction: column;">
                    <h5 class="event">{{$event['nama_event']}}</h5>
                    <div class="wrapper-tanggal">
                        <h5 class="tanggal_daftar">{{$event['tanggal_pendaftaran']}}</h5>
                        <h5 class="tanggal_daftar">-</h5>
                        <h5 class="tanggal_tutup">{{$event['tanggal_penutupan']}}</h5>
                    </div>
                    <h5 class="lokasi">{{$event['alamat']}}</h5>
                    <a href="{{route('event.show', $event->id_event)}}" type="button" class="card-link">Details</a>
                    <!-- Memanggil fungsi toggleForm() -->
                </div>
            </div>
        </div>

    </div>
    @endforeach

</div>
<div class="clearfix"></div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
.btn-event {
    padding: 0.75rem;
    display: block;
    text-decoration: none;
    background-color: #512E67;
    color: #f3f3f3;
    text-align: center;
    border-radius: 0.25rem;
    cursor: pointer;
    width: 30vh;
    box-shadow: none;
}

.btn-event .fas {
    margin-left: 1rem;
    /* Memberi jarak antara ikon dan teks */
    font-size: 1em;
    /* Menyesuaikan ukuran ikon */
}

.btn-event span {
    font-size: 1em;
    /* Menyesuaikan ukuran teks */
}

.container-wrapper {
    display: flex;
    justify-content: space-between;
    /* Menempatkan kontainer berdampingan */
    margin-right: -5%;
    /* Mengatasi margin-right pada kontainer terakhir */
}


.container {
    width: 45%;
    /* Sesuaikan lebar kontainer sesuai kebutuhan */
    padding: 0;
    border: 1px solid #ccc;
    /* Membuat kontainer berdampingan */
    margin-right: 0%;
    /* Untuk memberi jarak antara kontainer */
    box-sizing: border-box;
    /* Menyesuaikan padding dan border ke dalam lebar kontainer */
    /* border: none; */
}

.container2 {
    width: 45%;
    /* Sesuaikan lebar kontainer sesuai kebutuhan */
    padding: 10px;
    border: 1px solid #ccc;
    float: left;
    /* Membuat kontainer berdampingan */
    margin-right: 5%;
    /* Untuk memberi jarak antara kontainer */
    box-sizing: border-box;
    /* Menyesuaikan padding dan border ke dalam lebar kontainer */
}

.card-body h5 {
    font-size: 16px;
    /* Ganti dengan ukuran font yang diinginkan */
}

/* Clearfix untuk membersihkan float */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

.wrapper-tanggal {
    display: flex;
    justify-content: space-between;
    /* Untuk menyusun kedua elemen bersebelahan dan rata kanan-kiri */
    align-items: center;
    /* Untuk mengatur kedua elemen secara vertikal */
}

.tanggal_daftar,
.tanggal_tutup {
    margin: 0;
    /* Menghilangkan margin default */
    /* Atur properti lain sesuai kebutuhan */
}
</style>

@endsection