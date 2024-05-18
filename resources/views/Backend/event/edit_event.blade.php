@extends('backend.app')
@section('content')
<section id="main">
    <section class="wrapper">
        <div class="container-fluid">
            <div class="card mb-5 shadow" style="padding: 2% 0% 0% 2%; min-width: 600px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Edit Event</h2>
                        <form action="{{ route('event.update', $event->id_event) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="tanggal_event" class="col-sm-2 col-form-label">Tanggal Event:</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal_event" name="tanggal_event"
                                        value="{{ $event->tanggal_event }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggal_pendaftaran" class="col-sm-2 col-form-label">Tanggal Pendaftara
                                    Booth :</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal_pendaftaran"
                                        name="tanggal_pendaftaran" value="{{ $event->tanggal_pendaftaran }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggal_penutupan" class="col-sm-2 col-form-label">Tanggal
                                    Penutupan Booth :</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal_penutupan"
                                        name="tanggal_penutupan" value="{{ $event->tanggal_penutupan }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <!-- Menampilkan gambar dari database jika tersedia -->
                                    @if($event->upload_pamflet)
                                    <img src="{{ asset('uploads/' . $event->id_event . '/' . $event->upload_pamflet) }}"
                                        alt="Pamflet Event" width="100">
                                    @endif
                                    <div class="row mb-3">
                                        <label for="penyelenggara_event" class="col-sm-2 col-form-label">Upload
                                            Pamflet :</label>
                                        <div class="col-sm-10">
                                            <div class="image-upload-wrap">
                                                <input class="file-upload-input" type="file"
                                                    onchange="previewFile(this);" accept="image/*" id="upload_pamflet"
                                                    name="upload_pamflet" required>
                                                <span
                                                    id="selectedFileName">{{ $event->upload_pamflet ? $event->upload_pamflet : 'No file chosen' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
        </script>
    </section>
</section>
@endsection