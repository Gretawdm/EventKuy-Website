@extends('backend.navbar')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Verifikasi Event</h1>
        <div class="row">
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-bottom-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-primary" style="font-weight: 800; font-size:20px">
                                    Pendaftar Event Bulan Ini</div>
                                <div class="h5 mb-0" style="font-weight: 700">23</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-solid fa-layer-group fa-2x "></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- belum verifikasi Card  -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-bottom-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-warning " style="font-weight: 800; font-size:20px">
                                    Belum Terverifikasi</div>
                                <div class="h5 mb-0" style="font-weight: 700">10</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x "></i>
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
                <h6 class="m-0  text-purple">Data Pendaftar Event</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-advance table-hover" id="dataTable" width="100%" cellspacing="0">
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
                            <tr>
                                <td>Coldplay</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quia
                                    deserunt velit nihil, non maxime? Porro consequatur saepe harum eveniet
                                    totam pariatur numquam! Dolorum, ab iure? Alias, dicta. Sapiente, et?
                                </td>
                                <td>Sos Organization</td>
                                <td>Junaeid</td>
                                <td>2011/04/25</td>
                                <td>52516366162616</td>
                                <td>23551516663616</td>
                                <td>

                                    <div class="btn-group">
                                        <form action="" method="POST">
                                            <button type="submit" style="margin-bottom: 5px; " class="btn btn-success"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <i class="fas fa-check-circle"></i>Setuju
                                            </button>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <i class="fas fa-times-circle"></i>Tolak
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td>Coldplay</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quia
                                    deserunt velit nihil, non maxime? Porro consequatur saepe harum eveniet
                                    totam pariatur numquam! Dolorum, ab iure? Alias, dicta. Sapiente, et?
                                </td>
                                <td>Sos Organization</td>
                                <td>Junaeid</td>
                                <td>2011/04/25</td>
                                <td>52516366162616</td>
                                <td>23551516663616</td>
                                <td>

                                    <div class="btn-group">
                                        <form action="" method="POST">
                                            <button type="submit" style="margin-bottom: 5px; " class="btn btn-success"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <i class="fas fa-check-circle"></i>Setuju
                                            </button>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <i class="fas fa-times-circle"></i>Tolak
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
