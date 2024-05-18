@extends('backend.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Tambah Booth</div>
        <div class="card-body">
            <form action="{{ route('booth.store', $detail_event->id_event) }}" method="POST"
                enctype="multipart/form-data">

                @csrf
                <div class="mb-3">
                    <label for="tipe_booth" class="form-label">Tipe Booth</label>
                    <input type="text" class="form-control" id="tipe_booth" name="id_event"
                        value="{{$detail_event->id_event}}" required>
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
            </form>
        </div>
    </div>
</div>
@endsection