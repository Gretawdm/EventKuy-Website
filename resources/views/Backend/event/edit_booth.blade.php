<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
<form action="{{ route('booth.update', $detail_booth->id_booth) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="modal fade" id="editBoothModal{{ $detail_booth->id_booth }}" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"
                    style="background-color: #512e60 !important; color: white; font-weight: 900; height: 50px;">
                    <h5 class="modal-title" style="font-size: 16px; font-weight: 800;">Edit Booth</h5>
                    <button type="button" class="close" style="font-size: 18px; color: white;" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-sm-12 d-flex flex-column align-items-center">
                            <!-- Menampilkan gambar dari database jika tersedia -->
                            @if ($detail_booth->upload_gambar_booth)
                                <img src="{{ asset($detail_booth->upload_gambar_booth) }}" alt="Denah Event"
                                    width="100">
                            @endif
                            <label for="penyelenggara_event" class="form-label" style="color: black">Upload
                                Foto
                                Booth</label>
                            <div class="col-sm-12">
                                <div class="image-upload-wrap form-control">
                                    <input class="file-upload-input-booth" type='file' onchange="readURLBooth(this);"
                                        accept="image/*" name="upload_booth" required />
                                    <span
                                        id="selectedFileName">{{ $detail_booth->upload_gambar_booth ? $detail_booth->upload_gambar_booth : 'No file chosen' }}</span>
                                </div>
                                <div class="file-upload-content-booth">
                                    <img class="file-upload-image-booth" src="#" alt="your image" />
                                    <div class="image-title-wrap-booth">
                                        <button type="button" onclick="removeUploadBooth()"
                                            class="remove-image-booth">Remove
                                            <span class="image-title-booth">Uploaded
                                                Image</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="tipe col-md-6">
                            <label for="tipe_booth" class="form-label" style="color: black">Tipe Booth</label>
                            <input type="text" class="form-control" id="tipe_booth" name="tipe_booth"
                                value="{{ $detail_booth->tipe_booth }}" required>
                        </div>
                        <div class="jumlah col-md-6">
                            <label for="jumlah_booth" class="form-label" style="color: black">Jumlah Booth</label>
                            <input type="number" class="form-control" id="jumlah_booth" name="jumlah_booth"
                                value="{{ $detail_booth->jumlah_booth }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="harga col-md-6">
                            <label for="harga_booth" class="form-label" style="color: black">Harga Booth</label>
                            <input type="text" class="form-control" id="harga_booth" name="harga_booth"
                                value="{{ $detail_booth->harga_booth }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="harga_booth" class="form-label" style="color: black">Deskripsi Booth</label>
                            <textarea class="form-control" id="deskripsi_booth" name="deskripsi_booth" rows=" 4">{{ $detail_booth->deskripsi_booth }}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2 d-flex justify-content-end">
                            <button type="submit" class="btn btn-purple"
                                style="font-weight: 800; font-size:16px">Simpan
                                Perubahan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<style>
    .image-upload-wrap {
        display: flex;
        flex-direction: column;
        align-items: center;


    }

    .remove-image-booth {
        width: 200px;
        margin: 0;
        color: #fff;
        background: #cd4535;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #b02818;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .remove-image-booth:hover {
        background: #c13b2a;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .remove-image-booth:active {
        border: 0;
        transition: all .2s ease;
    }
</style>

<script>
    function previewFile(input) {
        var file = input.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            var imagePreview = document.createElement('img');
            imagePreview.src = e.target.result;
            imagePreview.width = 100;

            var existingImage = input.parentElement.querySelector('img');
            if (existingImage) {
                input.parentElement.replaceChild(imagePreview, existingImage);
            } else {
                input.parentElement.appendChild(imagePreview);
            }
        };

        reader.readAsDataURL(file);

        // Update nama file yang dipilih
        document.getElementById('selectedFileName').textContent = file.name;
    }

    function readURLBooth(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $(".image-upload-wrap-booth").hide();

                $(".file-upload-image-booth").attr("src", e.target.result);
                $(".file-upload-content-booth").show();

                $(".image-title-booth").html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            removeUpload();
        }
    }

    function removeUploadBooth() {
        $(".file-upload-input-booth").replaceWith(
            $(".file-upload-input-booth").clone()
        );
        $(".file-upload-content-booth").hide();
        $(".image-upload-wrap-booth").show();
    }
    $(".image-upload-wrap-booth").bind("dragover", function() {
        $(".image-upload-wrap-booth").addClass("image-dropping");
    });
    $(".image-upload-wrap-booth").bind("dragleave", function() {
        $(".image-upload-wrap-booth").removeClass("image-dropping");
    });
</script>
