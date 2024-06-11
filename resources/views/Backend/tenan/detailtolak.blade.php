@extends('backend.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Order</div>
                <div class="card-body">
                    <p><strong>Nama Perusahaan:</strong> {{ $orders_detail['user']['nama_perusahaan'] }}</p>
                    <p><strong>Nama Lengkap:</strong> {{ $orders_detail['user']['nama_lengkap'] }}</p>
                    <p><strong>Alamat:</strong> {{ $orders_detail['user']['alamat_perusahaan'] }}</p>
                    <p><strong>Tanggal Order:</strong> {{ $orders_detail->tgl_order }}</p>
                    <p><strong>Tanggal Ditolak:</strong> {{ $orders_detail->tgl_ditolak }}</p>
                    <p><strong>Deskripsi:</strong> {{ $orders_detail['user']['deskripsi_perusahaan'] }}</p>
                    <p><strong>Status Verifikasi:</strong> {{ $orders_detail->status_order }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection