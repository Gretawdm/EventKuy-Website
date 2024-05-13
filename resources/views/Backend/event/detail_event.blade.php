@extends('backend.app')
@section('content')
<div class="row">
</div>
<div class="container-fluid">
    <div class="card mb-5 shadow" style="padding: 2% 0% 0% 2%; min-width: 600px;">
        <div class="row">
            <div class="col-lg-6">
                <!-- General Form Elements -->
                <form>
                    <div class="row mb-3">
                        <div class="col-sm-4 col-form-label">Poster :</div>
                        <div class="col-sm-10">
                            <img src="/pamflet_event/{{ $detail_event['upload_pamflet'] }}" alt="Poster"
                                style="max-width: 300px" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-5 col-form-label">Nama Event :</div>
                        <div class="col-sm-10">
                            {{$detail_event['nama_event']}}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6 col-form-label">Deskripsi Event :</div>
                        <div class="col-sm-10">
                            {{$detail_event['deskripsi']}}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6 col-form-label">Contact Person :</div>
                        <div class="col-sm-10">
                            {{$detail_event['email']}}
                        </div>
                        <div class="col-sm-10">
                            {{$detail_event['instagram']}}
                        </div>
                        <div class="col-sm-10">
                            {{$detail_event['whatsapp']}}
                        </div>
                    </div>
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
                        rel="stylesheet"
                        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                        crossorigin="anonymous">
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
                    </script>
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-md-2">
                                <a href="" id="container">{!! $qrCodes['simple']->toHtml() !!}</a><br />
                                <button id="download" class="mt-2 btn btn-info text-light"
                                    onclick="downloadSVG()">Download SVG</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- End General Form Elements -->
            </div>

            <div class="col-lg-6">
                <div class="row mb-3">
                    <div class="col-sm-6 col-form-label">Penyelenggara Event :</div>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            {{$detail_event['penyelenggara_event']}}
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-6 col-form-label">Tanggal Event :</div>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            {{$detail_event['tanggal_event']}}
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6 col-form-label">No Rekening :</div>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            {{$detail_event['no_rekening']}}
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6 col-form-label">Nama Rekening :</div>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            {{$detail_event['nama_rekening']}}
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6 col-form-label">Alamat Event :</div>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            {{$detail_event['alamat']}}
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-8 col-form-label">Tanggal Pendaftaran Booth Tenant :</div>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            {{$detail_event['tanggal_pendaftaran']}}
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-8 col-form-label">Tanggal Penutupan Booth Tenant :</div>
                    <div class="col-sm-10">
                        <div class="col-sm-10">
                            {{$detail_event['tanggal_penutupan']}}
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-7 col-form-label">Booth Yang Tersedia :</div>
                    <div class="col-sm-10">
                    </div>
                    @foreach ($booths as $detail_booth)
                    <div class="container" style="display: block; min-width: 21rem;">
                        <div class="card" style="width: 21rem;">
                            <div class="card-body" style="display: flex;">
                                <div style="flex: 0 0 100px; margin-right: 10px;">
                                    <img src="/foto_booth/{{ $detail_booth['upload_gambar_booth'] }}" alt="Gambar"
                                        style="width: 80%; height: auto;">
                                </div>
                                <div style="display: flex; flex-direction: column;">
                                    <h5 class="event">{{$detail_booth['tipe_booth']}}</h5>
                                    <h5 class="tanggal_daftar">{{$detail_booth['jumlah_booth']}}</h5>
                                    <h5 class="tanggal_tutup">{{$detail_booth['harga_booth']}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="row mb-3">
                    <div class="col-sm-6 col-form-label">Denah Event :</div>
                    <div class="col-sm-10">
                        <img src="/denah_event/{{ $detail_event['upload_denah'] }}" alt="Poster"
                            style="max-width: 300px" />
                    </div>
                </div>
            </div>
            <!-- End General Form Elements -->
        </div>

    </div>

</div>

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
<script>
// Function to download SVG
function downloadSVG() {
    var svg = document.getElementById('container').querySelector('svg');
    var svgData = new XMLSerializer().serializeToString(svg);
    var blob = new Blob([svgData], {
        type: "image/svg+xml;charset=utf-8"
    });
    var url = URL.createObjectURL(blob);
    var a = document.createElement('a');
    a.download = 'qrcode.svg';
    a.href = url;
    a.click();
}
</script>
@endsection