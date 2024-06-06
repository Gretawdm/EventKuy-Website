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
        <h6 class="m-0  text-success">Data Pendaftar Booth Terverifikasi</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-advance table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">Nama Produk</th>
                        <th class="text-center">Nama Lengkap</th>
                        <th class="text-center">Tipe Booth</th>
                        <th class="text-center">Bukti Transfer</th>
                        <th class="text-center">Status Verifikasi</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr class="">
                        <td class="align-middle ">{{ $order['user']['nama_perusahaan'] }}</td>
                        <td class="align-middle">{{ $order['user']['nama_lengkap'] }}</td>
                        <td class="align-middle">{{ $order['booth']['tipe_booth'] }}</td>
                        <td class="align-middle">@if ($order->img_bukti_transfer)
                            <img src="{{ asset($order->img_bukti_transfer) }}"
                                alt="Bukti Transfer" style="max-width: 100px;" />
                            @else
                            <p>Gambar tidak tersedia</p>
                            @endif
                        </td>
                        <td class="align-middle text-center">
                            <p class="btn-color">{{ $order->status_order }}</p>
                        </td>
                        <td class="align-middle text-center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a style="font-weight: 800;" data-toggle="modal" data-target="#detailBooth"
                                    type="button" class="btn btn-warning">Detail</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
.text-success {
    font-weight: 800;
}
</style>

{{-- @foreach ($results as $result)
<div class="card shadow mb-4" style="border-radius:5px; max-width: 300px;">
    <div class="card-body" style="display: flex; align-items: center; padding: 10px;">
        <div style="display: flex; flex-direction: column; width: 100%;">
            <div class="detail mb-1">
                <h5 class="event" style="font-size:20px; font-weight:900; margin-bottom: 5px;">
                    {{ $result['nama_event'] }}
</h5>
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
<button class="card-link mb-2" type="button"
    style="border: none; width:150px; background-color:#512e67; align-self: flex-end;">
    <a href="" class="card-link"
        style="border: none; border-radius:20px; font-size:15px; color:white; font-weight:600; display: block; text-align: center;">Detail</a>
</button>
<div class="status mb-1" style="margin-left: auto;">
    <!-- Konten status di sini -->
</div>
</div>
</div>
</div>
@endforeach --}}
@endsection