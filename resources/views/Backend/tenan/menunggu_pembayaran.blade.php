@extends('backend.app')
@section('content')
@include('backend.tenan.index')
@foreach ($results as $result)
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
            <div style="display: flex; justify-content: flex-end;">
                <form action="{{ route('tenant.verifikasi', ['id' => $result['id_order']]) }}" method="POST"
                    type="button" class="btn btn-success p-0" onsubmit="return confirm('Verifikasi Event Ini?')">
                    @csrf
                    <button style="font-weight: 800" class="btn btn-success m-0">Verifikasi</button>
                </form>
            </div>
            <div class="status mb-1" style="margin-left: auto;">
                <!-- Konten status di sini -->
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection