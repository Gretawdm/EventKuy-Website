@extends('backend.app')
@section('content')
    <div class="row">
        <div class="col-xl-2 col-md-2 mb-4">
            <div class="card border-bottom-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-primary" style="font-weight: 800; font-size:20px">
                                Semua</div>
                            <div id="allCount" class="h5 mb-0" style="font-weight: 700;">0
                            </div>
                        </div>
                        <div class="col">
                            <i class="fas fa-solid fa-layer-group fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- belum verifikasi Card  -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-bottom-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-info " style="font-weight: 800; font-size:20px">
                                Diterima</div>
                            <div id="unverifiedCount" class="h5 mb-0" style="font-weight: 700;">0
                            </div>
                        </div>
                        <div class="col">
                            <i class="fas fa-check-circle fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-bottom-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-danger " style="font-weight: 800; font-size:20px">
                                Ditolak</div>
                            <div id="unverifiedCount" class="h5 mb-0" style="font-weight: 700;">0
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-times-circle fa-2x text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-bottom-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-1">
                            <div class="text-warning " style="font-weight: 800; font-size:20px">
                                Menunggu Pembayaran</div>
                            <div id="unverifiedCount" class="h5 mb-0" style="font-weight: 700;">0
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-hourglass-half fa-2x text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-bottom-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-success " style="font-weight: 800; font-size:20px">
                                Terverifikasi</div>
                            <div id="unverifiedCount" class="h5 mb-0" style="font-weight: 700;">0
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-thumbs-up fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('backend.tenan.index')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0  text-purple">Data Pendaftar Booth</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-advance table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">Nama Produk</th>
                            <th class="text-center">Nama Lengkap</th>
                            <th class="text-center">Alamat</th>
                            <th class="text-center">Status Verifikasi</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($results as $result) --}}
                        <tr class="">
                            <td class="align-middle text-center ">Banana Crispy</td>
                            <td class="align-middle text-center">Greta Wahyu</td>
                            <td class="align-middle text-center">Jember</td>
                            <td class="align-middle text-center">Validasi</td>
                            <td class="align-middle text-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a style="font-weight: 800;" data-toggle="modal" data-target="#detailBooth"
                                        type="button" class="btn btn-warning">Detail</a>
                                    <form action="" method="POST" type="button" class="btn btn-success p-0"
                                        onsubmit="return confirm('Setujui Booth Ini?')">
                                        @csrf
                                        <button style="font-weight: 800" class="btn btn-success m-0">Setuju</button>
                                    </form>
                                    {{-- <form action="{{ route('tenant.terima', ['id' => $result['id_order']]) }}"
                                            method="POST" type="button" class="btn btn-success p-0"
                                            onsubmit="return confirm('Setujui Booth Ini?')">
                                            @csrf
                                            <button style="font-weight: 800" class="btn btn-success m-0">Setuju</button>
                                        </form> --}}
                                    <form action="" method="POST" type="button" class="btn btn-danger p-0"
                                        onsubmit="return confirm('Tolak Booth Ini?')">
                                        @csrf
                                        <button style="font-weight: 800" class="btn btn-danger m-0">Tolak</button>
                                    </form>
                                    {{-- <form action="{{ route('tenant.tolak', ['id' => $result['id_order']]) }}"
                                            method="POST" type="button" class="btn btn-danger p-0"
                                            onsubmit="return confirm('Tolak Booth Ini?')">
                                            @csrf
                                            <button style="font-weight: 800" class="btn btn-danger m-0">Tolak</button>
                                        </form> --}}
                                </div>
                            </td>

                        </tr>


                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        .nav-tabs-bordered {
            border-bottom: none;

        }

        .nav-tabs-bordered .nav-link {
            margin-bottom: -2px;
            border: none;
            background-color: #fff;
            color: black;
            align-items: center;
            justify-content: center;
            margin-top: 0;

            position: relative;
            /* Tambahkan posisi relatif untuk menempatkan garis di bawah */
        }

        .nav-tabs-bordered .nav-link:after {
            content: '';
            /* Tambahkan elemen after untuk garis */
            position: absolute;
            /* Jadikan posisi absolut */
            bottom: 0;
            /* Letakkan di bagian bawah */
            left: 0;
            /* Mulai dari kiri */
            width: 100%;
            /* Panjangkan sesuai lebar */
            height: 2px;
            /* Tentukan ketebalan garis */
            background-color: transparent;
            /* Mulai dengan transparan */
            transition: background-color 0.3s;
            /* Animasikan perubahan warna */
        }

        .nav-tabs-bordered .nav-link:hover:after,
        .nav-tabs-bordered .nav-link:focus:after,
        .nav-tabs-bordered .nav-link.active:after {
            background-color: #7e4a9e;
            /* Warna garis saat tab dihover atau aktif */
        }

        .nav-tabs-bordered .nav-link.active:after {
            height: 2px;
            /* Tinggikan garis pada tab aktif */
        }

        .nav-tabs-bordered .nav-link.active {
            background-color: #fff;
            color: #7e4a9e;
        }
    </style>



    <script src="{{ asset('backend/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('backend/assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('backend/assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('backend/assets/js/demo/datatables-demo.js') }}"></script>

    {{-- @foreach ($results as $result)
        <div class="card shadow mb-4" style="border-radius:5px; max-width: 300px;">
            <div class="card-body" style="display: flex; align-items: center; padding: 10px;">
                <div style="display: flex; flex-direction: column; width: 100%;">
                    <div class="detail mb-1">
                        <h5 class="nama_perusahaan" style="font-size:15px; font-weight:600;">{{ $result['nama_perusahaan'] }}
                        </h5>
                        <h5 class="nama_lengkap" style="font-size:15px; font-weight:600;">{{ $result['nama_lengkap'] }}</h5>
                        <h5 class="deskripsi" style="font-size:15px; font-weight:600;">{{ $result['deskripsi_perusahaan'] }}
                        </h5>
                        <h5 class="lokasi" style="font-size:15px; font-weight:600;">{{ $result['alamat_perusahaan'] }}</h5>
                        <h5 class="booth" style="font-size:15px; font-weight:600;">{{ $result['tipe_booth'] }}</h5>
                        <h5 class="no_booth" style="font-size:15px; font-weight:600;">{{ $result['nomor_booth'] }}</h5>
                        <h5 class="tanggal_pesan" style="font-size:15px; font-weight:600;">{{ $result['tgl_order'] }}</h5>
                    </div>
                    <div style="display: flex; justify-content: flex-end;">
                        <form action="{{ route('tenant.terima', ['id' => $result['id_order']]) }}" method="POST"
                            type="button" class="btn btn-success p-0" onsubmit="return confirm('Setujui Booth Ini?')">
                            @csrf
                            <button style="font-weight: 800" class="btn btn-success m-0">Setuju</button>
                        </form>
                        <form action="{{ route('tenant.tolak', ['id' => $result['id_order']]) }}" method="POST"
                            type="button" class="btn btn-danger p-0" onsubmit="return confirm('Tolak Booth Ini?')">
                            @csrf
                            <button style="font-weight: 800" class="btn btn-danger m-0">Tolak</button>
                        </form>
                    </div>
                    <div class="status mb-1" style="margin-left: auto;">
                        <!-- Konten status di sini -->
                    </div>
                </div>
            </div>
        </div>
    @endforeach --}}
@endsection
