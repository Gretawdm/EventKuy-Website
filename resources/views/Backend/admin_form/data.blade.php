@extends('backend.app')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Data Bohong</h1>
        <!-- Content Row -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0  text-purple">Data Acak</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-advance table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Pegawai</th>
                                <th>Jabatan</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_tabel as $item)
                                <tr>
                                    <td class="align-middle">{{ $item->pegawai_nama }}</td>
                                    <td class="align-middle">{{ $item->pegawai_jabatan }}</td>
                                    <td class="align-middle">{{ $item->pegawai_umur }}</td>
                                    <td class="align-middle">{{ $item->pegawai_alamat }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
