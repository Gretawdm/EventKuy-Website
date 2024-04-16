@extends('backend.navbar')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Verifikasi Event</h1>
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-bottom-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Pendaftar Event Bulan Ini</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">23</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-solid fa-layer-group fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- belum verifikasi Card  -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-bottom-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Belum Terverifikasi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Content Row -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Pendaftar Event</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-advance table-hover" id="dataTable" width="100%"
                        cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Event</th>
                                <th>Deskripsi Event</th>
                                <th>Event Organizer</th>
                                <th>Event Owner</th>
                                <th>Tanggal Event</th>
                                <th>No Rek</th>
                                <th>KTP</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detail_event as $item)
                                <tr onclick="window.location.href='{{ route('admin_form.detail', ['id' => $event->id]) }}'">
                                    <td>{{ $item->nama_event }}</td>
                                    <td>{{ $item->deskripsi_event }}</td>
                                    <td>{{ $item->event_organizer }}</td>
                                    <td>{{ $item->event_owner }}</td>
                                    <td>{{ $item->tanggal_event }}</td>
                                    <td>{{ $item->no_rek }}</td>
                                    <td>{{ $item->ktp }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="" method="POST">
                                                <button type="submit" style="margin-bottom: 5px; " class="btn btn-success"
                                                    onclick="return confirm('Apakah Anda Menyetujui Event Ini?')">
                                                    <i class="fas fa-check-circle"></i>Setuju
                                                </button>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Tolak Event Ini?')">
                                                    <i class="fas fa-times-circle"></i>Tolak
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
