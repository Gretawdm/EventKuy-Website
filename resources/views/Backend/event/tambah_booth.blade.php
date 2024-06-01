<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
<form action="{{ route('booth.store', $detail_event->id_event) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="tambahBoothModal{{ $detail_event->id_event }}" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"
                    style="background-color: #512e60 !important; color: white; font-weight: 900; height: 50px;">
                    <h5 class="modal-title" style="font-size: 16px; font-weight: 800;">Tambah Booth</h5>
                    <button type="button" class="close" style="font-size: 18px; color: white;" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="mb-3 d-none">
                        <label for="id_event" class="form-label">ID Event</label>
                        <input type="text" class="form-control" id="id_event" name="id_event"
                            value="{{ $detail_event->id_event }}" required readonly>
                    </div>

                    <div class="row mb-3">
                        <div class="tipe col-md-6">
                            <label for="tipe_booth" class="form-label" style="color: black">Tipe Booth</label>
                            <input type="text" class="form-control" id="tipe_booth" name="tipe_booth" required>
                        </div>
                        <div class="jumlah col-md-6">
                            <label for="jumlah_booth" class="form-label " style="color: black">Jumlah Booth</label>
                            <input type="text" class="form-control" id="jumlah_booth" name="jumlah_booth" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="harga col-md-6">
                            <label for="harga_booth" class="form-label" style="color: black">Harga Booth</label>
                            <input type="text" class="form-control" id="harga_booth" name="harga_booth" required>
                        </div>
                        <div class="Upload col-md-6">
                            <label for="upload_gambar_booth" class="form-label" style="color: black">Upload Gambar
                                Booth</label>
                            <input type="file" class="form-control" id="upload_gambar_booth"
                                name="upload_gambar_booth" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="deskripsi col-md-12">
                            <label for="deskripsi_booth" class="form-label" style="color: black">Deskripsi Booth</label>
                            <textarea class="form-control" id="deskripsi_booth" name="deskripsi_booth" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 offset-sm-2 d-flex justify-content-end">
                            <button type="submit" class="btn btn-purple"
                                style="font-weight: 800; font-size:16px">Simpan Perubahan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
