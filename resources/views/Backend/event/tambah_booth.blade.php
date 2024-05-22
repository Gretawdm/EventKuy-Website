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
                    <h5 class="modal-title" style="font-size: 16px; font-weight: 800;">Edit Event</h5>
                    <button type="button" class="close" style="font-size: 18px; color: white;" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="id_event" class="form-label">ID Event</label>
                        <input type="text" class="form-control" id="id_event" name="id_event"
                            value="{{ $detail_event->id_event }}" required readonly>
                    </div>
                    <div class="mb-3">
                        <label for="tipe_booth" class="form-label">Tipe Booth</label>
                        <input type="text" class="form-control" id="tipe_booth" name="tipe_booth" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_booth" class="form-label">Harga Booth</label>
                        <input type="text" class="form-control" id="harga_booth" name="harga_booth" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_booth" class="form-label">Jumlah Booth</label>
                        <input type="text" class="form-control" id="jumlah_booth" name="jumlah_booth" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_booth" class="form-label">Deskripsi Booth</label>
                        <textarea class="form-control" id="deskripsi_booth" name="deskripsi_booth" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="upload_gambar_booth" class="form-label">Upload Gambar Booth</label>
                        <input type="file" class="form-control" id="upload_gambar_booth" name="upload_gambar_booth"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>


