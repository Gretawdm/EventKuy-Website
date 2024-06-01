@extends('backend.app')
@section('content')
    <div class="container-fluid">
        <div class="card mb-5 shadow" style="padding: 2% 0% 0% 5%;">
            <div class="row">
                <div class="col-lg-6">
                    <!-- General Form Elements -->
                    <form>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Poster :</div>
                            <div class="col-sm-10">
                                <img src="{{ asset('uploads/' . $detail_event->id_event . '/' . $detail_event->upload_pamflet) }}"
                                    alt="Poster" style="max-width: 300px" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-5 col-form-label">Nama Event :</div>
                            <div class="col-sm-10">
                                {{ $detail_event['nama_event'] }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6 col-form-label">Deskripsi Event :</div>
                            <div class="col-sm-10">
                                {{ $detail_event['deskripsi'] }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Contact Person :</div>
                            <div class="col-sm-10">
                                <i class="fas fa-envelope"></i> {{ $detail_event['email'] }}
                            </div>
                            <div class="col-sm-10">
                                <i class="fab fa-instagram"></i> {{ $detail_event['instagram'] }}
                            </div>
                            <div class="col-sm-10">
                                <i class="fab fa-whatsapp"></i> {{ $detail_event['whatsapp'] }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-6 col-form-label">QR Code :
                                <div class="row">
                                    <div class="col-md-2">
                                        <a href="" id="container">{!! $qrCodes['simple']->toHtml() !!}</a><br />
                                        <button id="download" class="mt-2 btn btn-info text-light"
                                            style="width: 175px; font-size:15px; font-weight:800"
                                            onclick="downloadSVG()">Download QR
                                            Code</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
                            rel="stylesheet"
                            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                            crossorigin="anonymous">
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> --}}

                    </form>
                    <!-- End General Form Elements -->
                </div>

                <div class="col-lg-6">

                    <div class="row mb-3">
                        <div class="col-sm-6 col-form-label">Penyelenggara Event :</div>
                        <div class="col-sm-10">
                            {{ $detail_event['penyelenggara_event'] }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-6 col-form-label">Tanggal Event :</div>
                        <div class="col-sm-10">
                            {{ $detail_event['pelaksanaan_event'] }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6 col-form-label">No Rekening :</div>
                        <div class="col-sm-10">
                            {{ $detail_event['no_rekening'] }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6 col-form-label">Nama Rekening :</div>
                        <div class="col-sm-10">

                            {{ $detail_event['nama_rekening'] }}

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6 col-form-label">Alamat Event :</div>
                        <div class="col-sm-10">

                            {{ $detail_event['alamat'] }}

                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-8 col-form-label">Tanggal Pendaftaran Booth Tenant :</div>
                        <div class="col-sm-10">

                            {{ $detail_event['tanggal_pendaftaran'] }} sd {{ $detail_event['tanggal_penutupan'] }}

                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-7 col-form-label">Booth Yang Tersedia :</div>
                        <div class="col-sm-6">
                            @foreach ($booths as $detail_booth)
                                <div class="card mb-3"
                                    style="border-radius:10px; border:none; width:400px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1)">
                                    <div class="card-body" style="display: flex; ">
                                        <div style="flex: 0 0 100px; margin-right:20px">
                                            <img src="{{ asset('uploads/' . $detail_booth->id_event . '/' . $detail_booth->upload_gambar_booth) }}"
                                                alt="Gambar" style="max-width: 150px; height:100px;">
                                        </div>
                                        <div style="display: flex; flex-direction: column;">
                                            <h5 class="event" style="font-size: 15px; font-weight: 800;">Tipe Booth :
                                                {{ $detail_booth['tipe_booth'] }}</h5>
                                            <h5 class="tanggal_daftar" style="font-size: 15px; font-weight: 800;">Jumlah
                                                Booth : {{ $detail_booth['jumlah_booth'] }}</h5>
                                            <h5 class="tanggal_daftar" style="font-size: 18px; font-weight: 800;">
                                                {{ $detail_booth['harga_booth'] }}</h5>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                @if ($detail_event['status'] == 'waiting')
                                                    <a style="font-weight: 800;" type="button" data-toggle="modal"
                                                        data-target="#tambahBoothModal{{ $detail_event->id_event }}"
                                                        class="btn btn-primary btn-sm m-0">Tambah</a>
                                                @endif
                                                <a style="font-weight: 800; display: flex; align-items: center; justify-content: center;"
                                                    type="button" data-toggle="modal"
                                                    data-target="#editBoothModal{{ $detail_booth->id_booth }}"
                                                    href="#" class="btn btn-warning btn-sm m-0">Edit</a>
                                                @if ($detail_event['status'] == 'waiting')
                                                    <form
                                                        action="{{ route('booth.destroy', ['id' => $detail_booth['id_booth']]) }}"
                                                        method="POST" type="button" class="btn btn-danger btn-sm p-0"
                                                        onsubmit="return confirm('Apakah anda yakin ingin menghapus booth ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button
                                                            style="font-weight: 800; display: flex; align-items: center; justify-content: center;"
                                                            class="btn btn-danger btn-sm ">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-8 col-form-label">Denah Event :</div>
                        <div class="col-sm-10">
                            <img src="{{ asset('uploads/' . $detail_event->id_event . '/' . $detail_event->upload_denah) }}"
                                alt="Poster" style="max-width: 300px" />
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-sm-11 d-flex justify-content-end">
                            <a data-toggle="modal" data-target="#editEventModal{{ $detail_event->id_event }}"
                                href="#" class="btn btn-purple" style="font-weight: 800">Edit
                                Event</a>
                        </div>
                    </div>

                    @include('backend.event.edit_event')
                    @include('backend.event.edit_booth')
                    @include('backend.event.tambah_booth')






                </div>
                <!-- End General Form Elements -->
            </div>

        </div>
        <div class="clearfix"></div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        // Tambahkan event listener untuk tombol "Hapus"
        document.querySelectorAll('.delete-btn').forEach(item => {
            item.addEventListener('click', function(event) {
                event.preventDefault(); // Untuk mencegah pengiriman form secara otomatis

                // Tampilkan SweetAlert untuk konfirmasi penghapusan
                swal({
                        title: "Apakah Anda yakin?",
                        text: "Data ini akan dihapus secara permanen!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            // Jika pengguna mengonfirmasi penghapusan, submit form
                            event.target.closest('form').submit();
                        }
                    });
            });
        });
        // Fungsi untuk mengunduh SVG
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


{{-- <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
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
    </style> --}}
