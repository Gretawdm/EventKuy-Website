@extends('backend.app')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('booth.show', ['eventId' => $event->id_event]) }}"
                class="card border-bottom-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-primary text-uppercase mb-1" style="font-weight: 900;">
                                Menunggu Validasi
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $allOrdersCount }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-solid fa-layer-group fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-2 col-md-6 mb-4">
            <a href="{{ route('diterima', ['eventId' => $event->id_event]) }}"
                class="card border-bottom-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-info text-uppercase mb-1" style="font-weight: 900;">
                                Diterima
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $acceptedOrdersCount }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-2 col-md-6 mb-4">
            <a href="{{ route('ditolak', ['eventId' => $event->id_event]) }}"
                class="card border-bottom-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-danger text-uppercase mb-1" style="font-weight: 900;">
                                Ditolak
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $rejectedOrdersCount }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-times-circle fa-2x text-danger"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('menunggu_pembayaran', ['eventId' => $event->id_event]) }}"
                class="card border-bottom-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-warning text-uppercase mb-1" style="font-weight: 900;">
                                Menunggu Pembayaran
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $pendingPaymentOrdersCount }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-hourglass-half fa-2x text-warning"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-xl-2 col-md-6 mb-4">
            <a href="{{ route('terverifikasi', ['eventId' => $event->id_event]) }}"
                class="card border-bottom-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-success text-uppercase mb-1" style="font-weight: 900;">
                                Done
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $verifiedOrdersCount }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-thumbs-up fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0  text-danger">Data Pendaftar Booth Ditolak</h6>
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
                        @foreach ($orders as $order)
                            <tr class="">
                                <td class="align-middle ">{{ $order['user']['nama_perusahaan'] }}</td>
                                <td class="align-middle">{{ $order['user']['nama_lengkap'] }}</td>
                                <td class="align-middle">{{ $order['user']['alamat_perusahaan'] }}</td>
                                <td class="align-middle text-center">
                                    <p class="btn-color">{{ $order->status_order }}</p>
                                </td>
                                <td>
                                    <a type="button" data-toggle="modal"
                                        data-target="#detailTolakModal{{ $order->id_order }}" href="#"
                                        class="btn btn-warning" style="font-weight: 800;">Detail</a>
                                    @include('backend.tenan.detailtolak')
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        .text-danger {
            font-weight: 800;
        }

        .text-xs {
            font-size: .9rem
        }

        .text-primary {
            font-weight: 800;
        }
    </style>
@endsection
