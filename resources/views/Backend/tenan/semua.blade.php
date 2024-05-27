@extends('backend.app')
@section('content')
    @include('backend.tenan.index')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0  text-primary">Data Pendaftar Booth Semua</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-advance table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">Nama Produk</th>
                            <th class="text-center">Nama Lengkap</th>
                            <th class="text-center">Alamat</th>
                            <th class="text-center">Tanggal Order</th>
                            <th class="text-center">Status Verifikasi</th>

                            <th class="text-center">Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($results as $result) --}}
                        <tr class="">
                            <td class="align-middle ">Banana Crispy</td>
                            <td class="align-middle">Greta Wahyu</td>
                            <td class="align-middle">Jember</td>
                            <td class="align-middle text-center">16-08-2024</td>
                            <td class="align-middle text-center">
                                <p class="btn-color">Validasi</p>
                            </td>
                            <td class="align-middle text-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a style="font-weight: 800;" data-toggle="modal" data-target="#detailBooth" href="#"
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
        .text-primary {
            font-weight: 800;
        }

        .btn-color {
            display: inline-block;
            padding: 0.375rem 0.75rem;
            margin-bottom: 0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            border-radius: 50px;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            text-decoration: none;
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
