@extends('backend.app')
@section('content')
    <h1 class="h3 mb-2 text-gray-800" style="font-size: 25px">Event</h1>
    <a href="/event/tambah_event" class="btn-event mb-3"><span style="font-size: 15px; font-weight:800">Tambah
            Event</span><i class="fas fa-plus"></i></a>

    <div class="container-wrapper">
        @foreach ($detail_event as $event)
            <div class="card shadow mb-4" style="width: 31%; height:25%; border-radius:5px">
                <div class="card-body" style="display: flex;">
                    <div style="flex: 0 0 100px; margin-right: 13px;">
                        <img src="/pamflet_event/{{ $event['upload_pamflet'] }}" alt="Gambar"
                            style="width: 100%; height: auto;">
                    </div>
                    <div style="display: flex; flex-direction: column;">
                        <div class="detail mb-1">
                            <h5 class="event" style="font-size:18px; font-weight:900;">{{ $event['nama_event'] }}</h5>
                            <h5 class="tanggal_daftar" style="font-size:15px; font-weight:600;">
                                {{ $event['tanggal_pendaftaran'] }} - {{ $event['tanggal_penutupan'] }}</h5>
                            <h5 class="lokasi" style="font-size:15px; font-weight:600;">{{ $event['alamat'] }}</h5>
                            <h5 class="event" style="font-size:15px; font-weight:600;">{{ $event['penyelenggara_event'] }}
                            </h5>
                        </div>
                        <button class="card-link" type="button" style="border: none; background-color:#512e67">
                            <a href="{{ route('event.show', $event->id_event) }}" type="button" class="card-link"
                                style="border:none; border-radius:20px; font-size:15px; color:white; font-weight:600">Detail</a>
                        </button>

                    </div>

                </div>
            </div>
        @endforeach
    </div>
    <div class="clearfix"></div>
@endsection
