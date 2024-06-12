@extends('backend.app')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Detail Pendaftar Event</h1>
        <div class="card mb-5 shadow" style="padding: 2% 0% 0% 5%;">
            <div class="row">
                <div class="col-lg-6">
                    <!-- General Form Elements -->
                    <form>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Poster :</div>
                            <div class="col-sm-10">
                                <img src="{{ asset($detail_event->upload_pamflet) }}"
                                    alt="Poster" style="max-width: 300px" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Nama Event :</div>
                            <div class="col-sm-10">
                                {{ $detail_event['nama_event'] }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Deskripsi Event :</div>
                            <div class="col-sm-10">
                                {{ $detail_event['deskripsi'] }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Contact Person :</div>
                            <div class="col-sm-10">
                                <i class="fas fa-envelope"></i> {{ $detail_event['email'] }}
                            </div>
                            <div class="col-sm-10">
                                <i class="fab fa-instagram"></i> <a href="{{ $detail_event['instagram'] }}">{{ $detail_event['instagram'] }}</a>
                            </div>
                            <div class="col-sm-10">
                                <i class="fab fa-whatsapp"></i> <a
                                    href="{{ str_replace('https://wa.me/', '', $detail_event['whatsapp']) }}">{{ $detail_event['whatsapp'] }}</a>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <a href="" id="container">{!! $qrCodes['simple']->toHtml() !!}</a><br />
                            <button id="download" class="mt-2 btn btn-info text-light"
                                style="width: 175px; font-size:15px; font-weight:800" onclick="downloadSVG()">Download QR
                                Code</button>
                        </div>
                    </form>
                    <!-- End General Form Elements -->
                </div>

                <div class="col-lg-6">
                    <form>
                        <div class="row mb-3">
                            <div class="col-sm-10 col-form-label">Penyelenggara Event :</div>
                            <div class="col-sm-10">
                                {{ $detail_event['penyelenggara_event'] }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Tanggal Event :</div>
                            <div class="col-sm-10">
                                {{ $detail_event['pelaksanaan_event'] }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">KTP :</div>
                            <div class="col-sm-10" style="width: 300px; height: auto;">
                                <img src="{{ asset($detail_event->upload_ktp) }}"
                                    alt="Poster" style="max-width: 300px" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">No Rekening :</div>
                            <div class="col-sm-10">
                                {{ $detail_event['no_rekening'] }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Nama Rekening :</div>
                            <div class="col-sm-10">
                                {{ $detail_event['nama_rekening'] }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Alamat Event :</div>
                            <div class="col-sm-10">
                                {{ $detail_event['alamat'] }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-8 col-form-label">Tanggal Pendaftaran Booth Tenant :</div>
                            <div class="col-sm-10">
                                {{ $detail_event['tanggal_pendaftaran'] }} sd {{ $detail_event['tanggal_penutupan'] }}

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-7 col-form-label">Booth Yang Tersedia :</div>
                            <div class="col-sm-10">
                                @foreach ($booths as $detail_booth)
                                    <div class="card mb-3"
                                        style="border-radius:10px; border:none; width:350px; height:150px;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1)">
                                        <div class="card-body" style="display: flex; ">
                                            <div style="flex: 0 0 100px; margin-right:20px">
                                                <img src="{{ asset($detail_booth->upload_gambar_booth) }}"
                                                    alt="Gambar" style="max-width: 150px; height:100px;">
                                            </div>
                                            <div style="display: flex; flex-direction: column;">
                                                <h5 class="event"
                                                    style="font-size: 15px; font-weight: 800; margin-bottom:0px">Tipe Booth
                                                    :
                                                </h5>
                                                <p class="mb-1">{{ $detail_booth['tipe_booth'] }}</p>
                                                <h5 class="tanggal_daftar" style="font-size: 15px; font-weight: 800;">Jumlah
                                                    Booth : {{ $detail_booth['jumlah_booth'] }}</h5>
                                                <h5 class="tanggal_daftar" style="font-size: 18px; font-weight: 800;">
                                                    {{ $detail_booth['harga_booth'] }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-8 col-form-label">Denah Event :</div>
                            <div class="col-sm-10">
                                <img src="{{ asset($detail_event->upload_denah) }}"
                                    alt="Poster" style="max-width: 300px" />
                            </div>
                        </div>
                    </form>
                </div>

                <!-- End General Form Elements -->
            </div>

        </div>

    </div>
    </section>
    </main>
    <!-- End #main -->
@endsection
