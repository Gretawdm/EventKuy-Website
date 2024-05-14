@extends('backend.app')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800" style="font-size: 25px">Verifikasi Akun</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0  text-purple">Data Akun Pendaftar</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-advance table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Event</th>
                                <th>Nama Penyelenggara</th>
                                <th>Alamat Event</th>
                                <th>Kategori Event</th>
                                <th>Tanggal Event</th>

                                <th>KTP</th>
                                <th>Status Akun</th>
                                {{-- <th>Role</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                                @if ($item->jabatan !== 'admin')
                                    <tr class="{{ $item->status_verifikasi === 'unverified' ? 'unverified-row' : '' }}">

                                        <td class="align-middle">{{ $item->nama_event }}</td>
                                        <td class="align-middle">{{ $item->penyelenggara_event }}</td>
                                        <td class="align-middle">{{ $item->alamat }}</td>
                                        <td class="align-middle">{{ $item->kategori_event }}</td>
                                        <td class="align-middle">{{ $item->tanggal_event }}</td>
                                        <td class="align-middle"><img src="{{ asset("foto_ktp/$item->upload_ktp") }}"
                                                alt="KTP" style="width: 100px; height: auto;"></td>
                                        <td class="align-middle">{{ $item->status_verifikasi }}</td>
                                        {{-- <td class="align-middle">{{ $item->jabatan }}</td> --}}

                                        <td class="align-middle">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <form action="{{ route('verifikasi_akun.update', $item->id) }}"
                                                    method="POST" type="button" class="btn btn-success p-0"
                                                    onsubmit="return confirm('Setujui Akun Ini?')">
                                                    @csrf
                                                    <button style="font-weight: 800"
                                                        class="btn btn-success m-0">Terima</button>
                                                </form>
                                                {{-- <form action="{{ route('detail_event.destroy', $item->id) }}" method="POST" --}}
                                                type="button" class="btn btn-danger p-0"
                                                onsubmit="return confirm('Tolak Akun Ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button style="font-weight: 800" class="btn btn-danger m-0">Tolak</button>
                                                </form>
                                                {{-- <form action="{{ route('detail_event.destroy', $item->id) }}" --}}
                                                method="POST" type="button" class="btn btn-secondary p-0"
                                                onsubmit="return confirm('Apakah anda yakin ingin menghapus akun ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button style="font-weight: 800" class="btn btn-secondary m-0">
                                                    <i class="fas fa-trash ml-2"></i>
                                                </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
