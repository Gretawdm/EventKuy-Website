@extends('backend.app')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-3" style="color: black">Detail Pendaftaran Event</h1>
        <div class="card mb-5 shadow" style="padding: 2% 0% 0% 5%;">
            <div class="row">
                <div class="col-lg-6">
                    <!-- General Form Elements -->
                    <form>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Poster :</div>
                            <div class="col-sm-10">
                                <img src="/image/{{ $detailevent['poster'] }}" alt="Poster" style="max-width: 300px" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Nama Event :</div>
                            <div class="col-sm-10">
                                {{ $detailevent->nama_event }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Deskripsi Event :</div>
                            <div class="col-sm-10">
                                {{ $detailevent->deskripsi_event }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Contact Person :</div>
                            <div class="col-sm-10">
                                {{ $detailevent->contact_person }}
                            </div>
                        </div>
                    </form>
                    <!-- End General Form Elements -->
                </div>

                <div class="col-lg-6">
                    <form>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Event Organizer :</div>
                            <div class="col-sm-10">
                                {{ $detailevent->event_organizer }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Event Owner :</div>
                            <div class="col-sm-10">
                                {{ $detailevent->event_owner }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">KTP :</div>
                            <div class="col-sm-10" style="width: 300px; height: auto;">
                                <img src="/image/{{ $detailevent['ktp'] }}" alt="Poster" style="max-width: 300px" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Tanggal Event :</div>
                            <div class="col-sm-10">
                                {{ $detailevent->tanggal_event }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">No Rekening :</div>
                            <div class="col-sm-10">
                                {{ $detailevent->no_rek }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Nama Rekening :</div>
                            <div class="col-sm-10">
                                {{ $detailevent->nama_rekening }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Alamat Event :</div>
                            <div class="col-sm-10">
                                {{ $detailevent->alamat_event }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Tanggal Pendaftaran Booth Tenant :</div>
                            <div class="col-sm-10">
                                {{ $detailevent->tanggal_pendaftaran_booth_tenant }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Booth Yang Tersedia :</div>
                            <div class="col-sm-10">
                                {{ $detailevent->booth }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Denah Event :</div>
                            <div class="col-sm-10">
                                <img src="/image/{{ $detailevent['denah'] }}" alt="Poster" style="max-width: 300px" />
                            </div>
                        </div>
                </div>
                </form>
                <!-- End General Form Elements -->
            </div>

        </div>

    </div>
    </section>
    </main>
    <!-- End #main -->
@endsection
