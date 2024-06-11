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
                    <p><strong>Tanggal Diterima:</strong> {{ $orders_detail->tgl_diterima }}</p>
                    <p><strong>Tanggal Bayar:</strong> {{ $orders_detail->tgl_bayar }}</p>
                    <p><strong>Bukti Pembayaran:</strong>@if ($orders_detail->img_bukti_transfer)
                        <img src="{{ asset( $orders_detail->img_bukti_transfer) }}" alt="Bukti Transfer"
                            style="max-width: 100px;" />
                        @else
                    <p>Gambar tidak tersedia</p>
                    @endif</p>

                    <p><strong>Deskripsi:</strong> {{ $orders_detail['user']['deskripsi_perusahaan'] }}</p>
                    <p><strong>Status Verifikasi:</strong> {{ $orders_detail->status_order }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection