@extends('backend.app')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2" style="color: black">Detail Event</h1>
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
                        <div class="col-sm-4 col-form-label">Event Owner</label>
                            <div class="col-sm-10">
                                {{ $detailevent->event_owner }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Tanggal Event</div>
                            <div class="col-sm-10">
                                {{ $detailevent->tanggal_event }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">No Rekening</div>
                            <div class="col-sm-10">
                                {{ $detailevent->no_rek }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Nama Rekening</div>
                            <div class="col-sm-10">
                                {{ $detailevent->nama_rekening }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Alamat Event</label>
                                <div class="col-sm-10">
                                    {{ $detailevent->alamat_event }}
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Tanggal Pendaftaran Booth Tenant</label>
                                <div class="col-sm-10">
                                    {{ $detailevent->tanggal_pendaftaran_booth_tenant }}
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Booth Yang Tersedia</label>
                                <div class="col-sm-10">
                                    {{ $detailevent->booth }}
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-form-label">Denah Event</label>
                                <div class="col-sm-10">
                                    {{ $detailevent->denah }}
                                </div>
                            </div>
                        </div>
                </form>
                <!-- End General Form Elements -->
            </div>
        </div>
        </section>
        </main>
        <!-- End #main -->
    @endsection
