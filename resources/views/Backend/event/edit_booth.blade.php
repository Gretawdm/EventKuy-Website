@extends('backend.app')
@section('content')
<section id="main">
    <section class="wrapper">
        <div class="container-fluid">
            <div class="card mb-5 shadow" style="padding: 2% 0% 0% 2%; min-width: 600px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Edit Booth</h2>
                        <form action="{{ route('booth.update', $booth->id_booth) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="tipe_booth" class="col-sm-2 col-form-label">Tipe Booth:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tipe_booth" name="tipe_booth"
                                        value="{{ $booth->tipe_booth }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jumlah_booth" class="col-sm-2 col-form-label">Jumlah Booth:</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="jumlah_booth" name="jumlah_booth"
                                        value="{{ $booth->jumlah_booth }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="harga_booth" class="col-sm-2 col-form-label">Harga Booth:</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="harga_booth" name="harga_booth"
                                        value="{{ $booth->harga_booth }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="harga_booth" class="col-sm-2 col-form-label">Deskripsi Booth:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="deskripsi_booth" name="deskripsi_booth"
                                        rows=" 4">{{ $booth->deskripsi_booth }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <!-- Menampilkan gambar dari database jika tersedia -->
                                    @if($booth->upload_gambar_booth)
                                    <img src="{{ asset('uploads/' . $booth->id_event . '/' . $booth->upload_gambar_booth) }}"
                                        alt="Denah Event" width="100">
                                    @endif
                                    <div class="row mb-3">
                                        <label for="penyelenggara_event" class="col-sm-2 col-form-label">Upload
                                            Foto Booth :</label>
                                        <div class="col-sm-10">
                                            <div class="image-upload-wrap">
                                                <input class="file-upload-input" type="file"
                                                    onchange="previewFile(this);" accept="image/*"
                                                    id="upload_gambar_booth" name="upload_gambar_booth" required>
                                                <span
                                                    id="selectedFileName">{{ $booth->upload_gambar_booth ? $booth->upload_gambar_booth : 'No file chosen' }}</span>
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