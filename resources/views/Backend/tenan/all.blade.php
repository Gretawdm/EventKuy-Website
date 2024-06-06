@extends('backend.app')
@section('content')
<h1 class="h3 mb-2 text-gray-800" style="font-size: 25px">Tenant Booth</h1>
<div class="d-flex" style="gap: 10px; flex-wrap:wrap;">
    @foreach ($detail_event as $event)
        @if ($event['status'] == 'verified')
            <div class="card shadow mb-4" style="width:200px; height:280px; border-radius:5px; margin-right:18pxpx">
                <div class="card-body" style="display: flex; flex-direction: column; align-items:center; text-align:center;">

                    <div style="margin-bottom: 15px;">
                        <img src="{{ asset($event->upload_pamflet) }}" alt="Gambar"
                            style="width: 100px; height:140px;">
                    </div>

                    <div style="text-align: left; width: 100%;">
                        <div class="detail mb-1">
                            <h5 class="event" style="font-size:16px; font-weight:900; margin-bottom: 5px;">
                                {{ $event['nama_event'] }}
                            </h5>
                            <h5 class="tanggal_daftar" style="font-size:12px; font-weight:600;">
                                {{ $event['tanggal_pendaftaran'] }} - {{ $event['tanggal_penutupan'] }}
                            </h5>
                        </div>
                        <button class="card-link mb-2" type="button"
                            style="border: none; background-color:#512e67; width:155px">
                            <a href="{{ route('booth.show', $event->id_event) }}" type="button" class="card-link"
                                style="border:none; border-radius:20px; font-size:12px; color:white; font-weight:700; padding: 5px 10px;">Lihat
                                Pemesan Booth</a>
                        </button>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>
@endsection