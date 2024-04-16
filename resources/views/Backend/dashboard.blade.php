@extends('backend.navbar')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Rincian Pendaftaran Event</h1>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="card-title"></h5>

                    <!-- General Form Elements -->
                    <form>
                        <div class="row mb-3">
                            <div class="col-sm-2 col-form-label">Poster</div>
                            <div class="col-sm-10">
                                <img src="{{ asset($event->poster) }}" alt="Image" style="max-width: 300px" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-2 col-form-label">Nama Event</div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $event->nama_event }}" disabled />
                            </div>
                        </div>
                </div>


                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Deskripsi Event</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" style="height: 150px">{{ $event->deskripsi_event }}</textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Contact Person</label>
                    <div class="col-sm-10">
                        {{ $event->contact_person }}
                    </div>
                </div>
                </form>
                <!-- End General Form Elements -->
            </div>

            <div class="col-lg-6">
                <h5 class="card-title"></h5>

                <!-- General Form Elements -->
                <form>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Event Organizer</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Event Owner</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tanggal Event</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">No Rekening</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Rekening</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Alamat Event</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tanggal Pendaftaran Booth Tenant</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Booth Yang Tersedia</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Denah Event</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" />
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
