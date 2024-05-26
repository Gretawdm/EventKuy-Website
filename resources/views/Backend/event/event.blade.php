@extends('backend.app')
@section('content')
    <h1 class="h3 mb-2 text-gray-800" style="font-size: 25px">Event</h1>
    <a href="/event/tambah_event" class="btn-event mb-3"><span style="font-size: 15px; font-weight:800">Tambah
            Event</span><i class="fas fa-plus"></i></a>

    <div class="d-flex" style="gap: 10px; flex-wrap:wrap;">
        @foreach ($detail_event as $event)
            <div class="card shadow mb-4" style="width:380px; height:180px; border-radius:5px; margin-right:18px;">
                <div class="card-body" style="display: flex; align-items:center;">
                    <div
                        class="corner-ribbon {{ $event->status == 'waiting' ? 'ribbon-yellow' : ($event->status == 'unverified' ? 'ribbon-red' : 'ribbon-green') }}">
                        {{ $event->status }}
                    </div>
                    <div style="flex: 0 0 100px; margin-right: 15px;">
                        <img src="{{ asset('uploads/' . $event->id_event . '/' . $event->upload_pamflet) }}" alt="Gambar"
                            style="width: 100px; height:140px">
                    </div>
                    <div style="display: flex; flex-direction: column;">
                        <div class="detail mb-1">
                            <h5 class="event"
                                style="font-size:20px; text-align:center ;font-weight:900;margin-bottom: 5px;">
                                {{ $event['nama_event'] }}
                            </h5>
                            <h5 class="tanggal_daftar" style="font-size:15px; font-weight:600;">
                                {{ $event['tanggal_pendaftaran'] }} - {{ $event['tanggal_penutupan'] }}
                            </h5>
                            <h5 class="lokasi" style="font-size:15px; font-weight:600;">{{ $event['alamat'] }}</h5>
                            <h5 class="event" style="font-size:15px; font-weight:600;">{{ $event['penyelenggara_event'] }}
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

<style>
    .corner-ribbon {
        position: absolute;
        top: 10px;
        left: -0px;
        width: 130px;
        text-align: center;
        line-height: 25px;

        font-size: 12px;
        font-weight: bold;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
    }

    .ribbon-red {
        background: #e74c3c;
        color: white;
    }

    .ribbon-yellow {
        background: yellow;
        color: black;
    }

    .ribbon-green {
        background: #2ecc71;
        color: white;
    }
</style>
