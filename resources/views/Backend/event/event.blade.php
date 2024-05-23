@extends('backend.app')
@section('content')
<h1 class="h3 mb-2 text-gray-800" style="font-size: 25px">Event</h1>
<a href="/event/tambah_event" class="btn-event mb-3"><span style="font-size: 15px; font-weight:800">Tambah
        Event</span><i class="fas fa-plus"></i></a>

<div class="d-flex" style="gap: 10px; flex-wrap:wrap;">
    @foreach ($detail_event as $event)
        <div class="card shadow mb-4" style="width:380px; height:200px; border-radius:5px">
            <div class="card-body" style="display: flex; align-items:center;">
                <div style="flex: 0 0 100px; margin-right: 15px;">
                    <img src="{{ asset('uploads/' . $event->id_event . '/' . $event->upload_pamflet) }}" alt="Gambar"
                        style="width: 100px; height:140px">
                </div>
                <div style="display: flex; flex-direction: column;">
                    <div class="detail mb-1">
                        <h5 class="event" style="font-size:20px; font-weight:900; text-align: center; margin-bottom: 5px;">
                            {{ $event['nama_event'] }}
                        </h5>
                        <h5 class="tanggal_daftar" style="font-size:15px; font-weight:600;">
                            {{ $event['tanggal_pendaftaran'] }} - {{ $event['tanggal_penutupan'] }}
                        </h5>
                        <h5 class="lokasi" style="font-size:15px; font-weight:600;">{{ $event['alamat'] }}</h5>
                        <h5 class="event" style="font-size:15px; font-weight:600;">{{ $event['penyelenggara_event'] }}
                        </h5>
                        <h5 class="status"
                            style="font-size:15px; font-weight:600; color: {{ $event['status'] == 'unverified' ? 'red' : 'green' }};">
                            {{ $event['status'] }}
                        </h5>
                    </div>
                    <button class="card-link mb-2" type="button"
                        style="border: none; width:220px; background-color:#512e67">
                        <a href="{{ route('event.show', $event->id_event) }}" type="button" class="card-link"
                            style="border:none; border-radius:20px; font-size:15px; color:white; font-weight:600">Detail</a>
                    </button>
                    <div class="status mb-1" style="margin-left: auto;">

                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="clearfix"></div>
@endsection