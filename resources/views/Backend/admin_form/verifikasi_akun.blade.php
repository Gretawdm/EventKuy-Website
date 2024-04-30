@extends('backend.app')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Verifikasi Akun</h1>
        <!-- Content Row -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0  text-purple">Data Akun</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-advance table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Lengkap Pemilik</th>
                                <th>Nama Perusahaan</th>
                                <th>Alamat Perusahaan</th>
                                <th>No Telp</th>
                                <th>Email</th>
                                <th>KTP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                                <tr>
                                    <td class="align-middle">{{ $item->nama_lengkap }}</td>
                                    <td class="align-middle">{{ $item->nama_perusahaan }}</td>
                                    <td class="align-middle">{{ $item->alamat_perusahaan }}</td>
                                    <td class="align-middle">{{ $item->no_telp }}</td>
                                    <td class="align-middle">{{ $item->email }}</td>
                                    <td class="align-middle"><img src="{{ asset("storage/$item->ktp_pemilik") }}"
                                            alt="KTP" style="width: 100px; height: auto;"></td>

                                    <td class="align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="{{ route('detail_event.destroy', $item->id) }}" method="POST"
                                                type="button" class="btn btn-danger p-0"
                                                onsubmit="return confirm('Tolak Event Ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger m-0">Tolak</button>
                                            </form>
                                            <form action="{{ route('detail_event.destroy', $item->id) }}" method="POST"
                                                type="button" class="btn btn-success p-0"
                                                onsubmit="return confirm('Setujui Event Ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-success m-0">Terima</button>
                                            </form>
                                            <form action="{{ route('detail_event.destroy', $item->id) }}" method="POST"
                                                type="button" class="btn btn-success p-0"
                                                onsubmit="return confirm('Setujui Event Ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-primary m-0">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>

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
