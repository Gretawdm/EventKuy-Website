<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
<form action="{{ route('event.update', ['id' => $detail_event->id_event]) }}" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="editEventModal{{ $detail_event->id_event }}" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"
                    style="background-color: #512e60 !important; color:white; font-weight:900; height:50px">
                    <h5 class="modal-title" style="font-size: 16px; font-weight:800">Edit Event</h5>
                    <button type="button" class="close" style="font-size: 18px; color:white" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-sm-12 d-flex flex-column align-items-center">
                            <!-- Display the image from the database if available -->
                            @if ($detail_event->upload_pamflet)
                                <img src="{{ asset($detail_event->upload_pamflet) }}" alt="Pamflet Event" width="200px"
                                    style="margin-bottom:10px">
                            @endif
                            <label for="penyelenggara_event" class="form-label" style="color: black">Upload
                                Pamflet</label>
                            <div class="col-sm-12">
                                <div class="image-upload-wrap form-control">
                                    <input class="file-upload-input-pamflet" type='file'
                                        onchange="readURLPamflet(this);" accept="image/*" name="upload_pamflet"
                                        required />
                                    <span
                                        id="selectedFileName">{{ $detail_event->upload_pamflet ? $detail_event->upload_pamflet : 'No file chosen' }}</span>
                                </div>
                                <div class="file-upload-content-pamflet">
                                    <img class="file-upload-image-pamflet" src="#" alt="your image" />
                                    <div class="image-title-wrap-pamflet">
                                        <button type="button" onclick="removeUploadPamflet()"
                                            class="remove-image-pamflet">Remove
                                            <span class="image-title-pamflet">Uploaded
                                                Image</span></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="tanggal col-md-4">
                            <label for="tanggal_event" class="form-label" style="color: black">Tanggal Event</label>
                            <input type="datetime-local" class="form-control" id="tanggal_event" name="tanggal_event"
                                value="{{ $detail_event->pelaksanaan_event }}" required>

                        </div>
                        <div class="booth col-md-4">
                            <label for="tanggal_pendaftaran" class="form-label" style="color: black">Tanggal Pendaftara
                                Booth </label>

                            <input type="date" class="form-control" id="tanggal_pendaftaran"
                                name="tanggal_pendaftaran" value="{{ $detail_event->tanggal_pendaftaran }}" required>

                        </div>
                        <div class="booth col-md-4">
                            <label for="tanggal_penutupan" class="form-label"
                                style="color: black
                            ">Tanggal
                                Penutupan Booth </label>

                            <input type="date" class="form-control" id="tanggal_penutupan" name="tanggal_penutupan"
                                value="{{ $detail_event->tanggal_penutupan }}" required>

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
    @csrf
    @method('PUT')
</form>

<style>
    .image-upload-wrap {
        display: flex;
        flex-direction: column;
        align-items: center;


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

        // Update the name of the selected file
        document.getElementById('selectedFileName').textContent = file.name;
    }

    function readURLPamflet(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $(".image-upload-wrap-pamflet").hide();

                $(".file-upload-image-pamflet").attr("src", e.target.result);
                $(".file-upload-content-pamflet").show();

                $(".image-title-pamflet").html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            removeUpload();
        }
    }
</script>
