@extends('backend.app')
@section('content')
<h1 class="h3 text-gray-800" style="font-size: 25px">Tambah Event</h1>
<div class="progressbar-container">
    <div class="progressbar">
        <div class="progress" id="progress"></div>
        <div class="progress-step progress-step-active" data-title="Event" data-step="1"></div>
        <div class="progress-step" data-title="Booth" data-step="2"></div>
        <div class="progress-step" data-title="Pay&CP" data-step="3"></div>
    </div>
</div>

{{-- <div class="urutan">
    <div class="box">
        <p class="order-active-p"><span class="order-active" data-step="1">1</span>Event</p>
        <span class="line"></span>
        <p class="order"><span data-step="2">2</span>Pembayaran & CP</p>
        <span class="line"></span>
        <p class="order"><span data-step="3">3</span>Denah Event</p>
    </div>
</div> --}}

<div class="card shadow mt-0 mb-0" style="border-radius:15px">
    <form method="POST" action="{{ route('tambah_event.store') }}" enctype="multipart/form-data"
        onsubmit="return validateForm()">
        @csrf
        <div class="card col-12">
            <div class="card-body">
                <div class="form-step form-step-active" id="form-step-1">
                    <h3 class="judul1">Event :</h3>
                    <div class="garis-pemisah"></div> <!-- Garis pemisah -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2" style="display: flex; flex-direction:column;">
                                <label for="exampleInputNama" class="form-label">Nama Event</label>
                                <input type="text" class="form-control" id="nama_event" name="nama_event" required>

                            </div>
                        </div>
                        <div class="col-md-6" style="display: none;">
                            <div class=" mb-2">
                                <label for=" exampleInputNama" class="form-label">Nama Event</label>
                                <input type="text" class="form-control" id="nama_event" name="user_id"
                                    value="{{ auth()->user()->id }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3" style="display: flex; flex-direction:column;">
                                <label for="exampleInputPenyelenggara" class="form-label">Penyelenggara
                                    Event</label>
                                <input type="text" class="form-control" id="penyelenggara_event"
                                    name="penyelenggara_event" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3" style="display: flex; flex-direction:column;">
                                <label for="exampleInputKTP" class="form-label">Upload KTP Penanggung Jawab</label>
                                <input type="file" class="form-control" id="upload_ktp" name="upload_ktp" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3" style="display: flex; flex-direction:column;">
                                <label for="exampleKategoriJenis" class="form-label">Kategori Event</label>
                                <select class="form-select" aria-label="Default select example" name="kategori_event"
                                    required>
                                    <option selected>Pilih Kategori</option>
                                    <option value="Pameran">Pameran</option>
                                    <option value="Konser">Konser</option>
                                    <option value="Seminar">Seminar</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal Event</label>
                                <input type="date" class="form-control" id="tanggal_event" name="tanggal_event"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="jam" class="form-label">Jam Event</label>
                                <input type="time" class="form-control" id="jam_event" name="jam_event" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal Pendaftaran Booth</label>
                                <input type="date" class="form-control" id="tanggal_event" name="tanggal_pendaftaran"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal Penutupan Booth</label>
                                <input type="date" class="form-control" id="tanggal_penutupan" name="tanggal_penutupan"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3" style="display: flex; flex-direction:column;">
                                <label for="exampleInputEmail1" class="form-label">Deskripsi Event</label>
                                <textarea name="deskripsi" required id="deskripsi" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3" style="display: flex; flex-direction:column;">
                                <label for="exampleInputEmail1" class="form-label">Alamat Event</label>
                                <textarea name="alamat" required id="alamat" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="lokasi col-md-6">
                            <label for="exampleLokasi" class="form-label">Lokasi Anda</label>
                            <div id="map" style="width: 100%"></div>
                        </div>
                        <div class="pamflet col-md-6">
                            <label for="exampleUploadEvent" class="form-label mb-0">Upload Pamflet Event</label>
                            <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
                            </script>
                            <div class="image-upload-wrap-pamflet" style="height: 300px; margin-top: 5px">
                                <input class="file-upload-input-pamflet" type='file' onchange="readURLPamflet(this);"
                                    accept="image/*" name="upload_pamflet" required />
                                <div class="drag-text-pamflet" style="align-items: center">
                                    <h3 class="gambar1-pamflet">Drag and drop a file or select add Image</h3>
                                </div>
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

                    <div class="row" style="display: none">
                        <div class="col-md-6">
                            <div class="mb-3" style="display: flex; flex-direction:column;">
                                <label for="exampleInputEmail1" class="form-label">Latitude</label>
                                <input type="text" class="form-control" id="latitude" name="latitude" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3" style="display: flex; flex-direction:column;">
                                <label for="exampleInputEmail1" class="form-label">Longitude</label>
                                <input type="text" class="form-control" id="longitude" name="longitude" required>
                            </div>
                        </div>
                    </div>
                    {{-- <button onclick="nextStep(1)">Next</button> --}}

                    <div class="btns-group">
                        <a href="#" class="btn btn-next width-50 ml-auto" onclick="nextStep(1)">Next</a>
                        <!-- <a href="#" class="btn btn-next width-50 ml-auto"
                            onclick="if(validateForm()) { nextStep(1); } else { alert('Harap lengkapi semua field di form pertama.'); }"
                            disabled>Next</a> -->

                    </div>
                </div>

                <div class="form-step" id="form-step-2">
                    <h3 class="judul1">Booth :</h3>
                    <div class="garis-pemisah"></div> <!-- Garis pemisah -->
                    <h3 class="judul1">Upload Denah Event :</h3>
                    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                    <!-- <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add
                Image</button> -->

                    <div class="image-upload-wrap">
                        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*"
                            name="upload_denah" />
                        <div class="drag-text">
                            <h3 class="gambar1">Drag and drop a file or select add Image</h3>
                        </div>
                    </div>
                    <div class="file-upload-content">
                        <img class="file-upload-image" src="#" alt="your image" />
                        <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="remove-image">Remove <span
                                    class="image-title">Uploaded Image</span></button>
                        </div>
                    </div>
                    <div id="booth-form-container">
                        <label for="exampleUploadEvent" class="form-label mb-2" style="font-size: 20px">Formulir
                            Booth</label>
                        <!-- Formulir Booth Default (tidak ditampilkan) -->
                        <div class="booth-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3" style="display: flex; flex-direction:column; ">
                                        <label for="exampleInputBooth" class="form-label"
                                            style="margin-right:10px; font-size: 17px">Foto Booth : </label>
                                        <input type="file" class="form-control" id="upload_gambar_booth"
                                            name="upload_gambar_booth[]" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3" style="display: flex; flex-direction:column;">
                                        <label for="exampleInputEmail1" class="form-label"
                                            style="margin-right: 10px;">Tipe Booth : </label>
                                        <input type="text" class="form-control" id="tipe_booth" name="tipe_booth[]"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3" style="display: flex; flex-direction:column;">
                                        <label for="exampleInputEmail1" class="form-label"
                                            style="margin-right: 10px;">Harga Booth : </label>
                                        <input type="text" class="form-control" id="harga_booth" name="harga_booth[]"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3" style="display: flex; flex-direction:column;">
                                        <label for="exampleInputEmail1" class="form-label"
                                            style="margin-right: 5px;">Jumlah Booth : </label>
                                        <input type="text" class="form-control" id="jumlah_booth" name="jumlah_booth[]"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3" style="display: flex; flex-direction:column;">
                                        <label for="exampleInputEmail1" class="form-label">Deskripsi : </label>
                                        <textarea class="form-control" id="deskripsi_booth" name="deskripsi_booth[]"
                                            required rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger remove-booth" type="button"
                                style="margin-top: 10px; margin-bottom: 20px;">Hapus</button>
                        </div>
                    </div>
                    <button class="btn custom-btn mb-3 add-booth" style="margin-top:10px;" type="button"><span>Tambah
                            Booth</span><i class="fas fa-plus"></i></button>

                    <div class="btns-group">

                        <a href="#" class="btn btn-prev width-50" onclick="prevStep(1)">Back</a>
                        <a href="#" class="btn btn-next width-50 ml-auto" onclick="nextStep(2)">Next</a>

                    </div>
                </div>



                <div class=" form-step" id="form-step-3">
                    <h3 class="judul1">Metode Pembayaran & Contact Person :</h3>
                    <div class="garis-pemisah"></div> <!-- Garis pemisah -->
                    <label for="bank">Nama Bank:</label>
                    <select id="bank" name="bank" style="width: 100%;" onchange="setBankName()">
                        <option selected>--Pilih Bank--</option>
                        @foreach($banks as $bank)
                        <option value="{{ $bank['kodeBank'] }}" data-nama-bank="{{ $bank['namaBank'] }}">
                            {{ $bank['namaBank'] }}
                        </option>
                        @endforeach
                    </select>
                    <input type="hidden" id="nama_bank" name="nama_bank">
                    <label for="accountNumber">Nomor Rekening:</label>
                    <input type="text" id="accountNumber" name="no_rekening" required>
                    <button type="button" id="searchButton">Cari Rekening</button>
                    <div class="error-message" id="accountNumberError">Gagal mengambil detail rekening</div>

                    <!-- Loading Overlay -->
                    <div class="loading-overlay" id="loading-overlay">
                        <div class="spinner"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3" style="display: flex; flex-direction:column;">
                                <label for="exampleInputNoRekening" class="form-label">Nama Pemilik Rekening</label>
                                <input type="text" class="form-control" id="accountHolder" name="nama_rekening"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3" style="display: flex; flex-direction:column;">
                                <label for="exampleInputEmail" class="form-label">Email Event</label>
                                <input type="text" class="form-control" id="exampleInputEmail" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3" style="display: flex; flex-direction:column;">
                                <label for="exampleInputWhatsapp" class="form-label">Link Instagram</label>
                                <input type="text" class="form-control" id="instagram" name="instagram">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3" style="display: flex; flex-direction:column;">
                                <label for="exampleInputWhatsapp" class="form-label">Link Grup WA</label>
                                <input type="text" class="form-control" id="whatsapp" name="whatsapp">
                            </div>
                        </div>
                    </div>
                    <!-- Kontainer untuk formulir tambahan -->

                    <div class="btns-group">
                        <a href="#" class="btn btn-prev width-50" onclick="prevStep(2)">Back</a>
                        <input type="submit" value="Submit" class="btn btn-submit width-50 ml-auto" />
                    </div>
                    {{-- <div class="btns-group">
                        <a href="#" class="btn btn-prev">Previous</a>

                        <input type="submit" value="Submit" class="btn btn-submit width-50 ml-auto" />
                    </div> --}}
                </div>

            </div>
    </form>
    <style>
    #map {
        width: 95%;
        height: 300px;
        /* Atur height sesuai kebutuhan */
    }


    .progressbar-container {
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
    }

    .progressbar {
        display: flex;
        justify-content: space-between;
        position: relative;

        width: 50%;
        /* Adjust the width as needed */
    }

    /* warna garis */

    .progress {
        position: absolute;
        top: 50%;

        width: 0;
        height: 5px;
        background-color: #512E67;
        transition: width 0.4s ease;
        transform: translateY(-50%);
    }



    .progress-step {
        width: 30px;
        height: 30px;
        background-color: #ccc;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        font-size: 14px;
        /* Adjust font size as needed */
        color: white;
        /* Color of the number */
    }

    .progress-step::before {
        content: attr(data-step);
    }

    .progress-step::after {
        content: attr(data-title);
        position: absolute;
        top: 35px;
        width: 20px font-size: 12px;
        color: #512e67;
        margin-bottom: 10px;
    }


    .progress-step-active {
        background-color: #512e67;

        color: white;
        font-weight: 800;
    }

    .form-step {
        display: none;
    }

    .form-step-active {
        display: block;
    }

    .btns-group {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .btn {
        text-decoration: none;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border-radius: 5px;
        text-align: center;
    }

    .btn-prev {
        background-color: #6c757d;
    }

    .btn-submit {
        background-color: #28a745;
    }


    .btn-danger {
        background-color: #e74a3b !important;
    }


    .btns-group {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .btn {
        text-decoration: none;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border-radius: 5px;
        text-align: center;
    }

    .btn-prev {
        background-color: #6c757d;
    }

    .btn-submit {
        background-color: #28a745;
    }

    .btns-group {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
    }

    .custom-btn {
        display: inline-block;
        padding: 8px 16px !important;
        border-radius: 3px;
        width: 175px !important;
        background-color: var(--purple);
        color: #ffffff;
        font-weight: 700;
        text-decoration: none;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1) !important;
    }

    .custom-btn:hover {
        background-color: var(--purple);
        color: white;
        /* Warna latar belakang tombol saat dihover */
    }

    .custom-btn .fas {
        margin-left: 15px;
        /* Memberi jarak antara ikon dan teks */
        font-size: 15px;
        /* Menyesuaikan ukuran ikon */
    }

    .custom-btn span {
        font-size: 1em;
        /* Menyesuaikan ukuran teks */
    }

    .btn-submit {
        background-color: #1cc88a;
        width: 150px;
        color: white;
        border: none;
        font-weight: 800;
        border-radius: 5px;
        margin-left: auto;
    }

    .btn-danger {
        background-color: #e74a3;
        width: 150px;
        color: white;
        border: none;
        font-weight: 700;
        border-radius: 3px;
        margin-left: auto;
    }

    .btn-submit:hover {
        background-color: #1eb37d;
        width: 150px;
        color: white;
        border: none;
        font-weight: 800;
        border-radius: 5px;
        margin-left: auto;
    }

    /* optional, for some spacing */


    .btn-next {
        background-color: #673d81;
        width: 150px;
        color: white;
        border: none;
        font-weight: 800;
        border-radius: 5px;
        margin-left: auto;
    }

    .btn-next:hover {
        background-color: #512E67;
        width: 150px;
        color: white;
        border: none;
        font-weight: 800;
        border-radius: 5px;
        margin-left: auto;

    }

    .btn-prev {
        border: 1px solid #512E67;
        background-color: #fff;
        color: #512E67;
        width: 150px;
        margin-right: auto;
        border-radius: 5px;
        font-weight: 900;
    }


    m-btn {
        background-color: #512E67;
        /* Warna latar belakang */
        border-color: #512E67;
        /* Warna border */
        color: #ffffff;
        /* Warna teks */
    }

    .custom-btn:hover {
        background-color: #512E67;
        /* Warna latar belakang saat hover */
        border-color: #000000;
        /* Warna border saat hover */
    }

    .error-message {
        color: red;
        display: none;
    }

    .loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        align-content: center;
        display: none;
    }

    .loading-overlay .spinner {
        border: 4px solid rgba(0, 0, 0, 0.1);
        width: 36px;
        height: 36px;
        border-radius: 50%;
        border-left-color: #09f;
        animation: spin 1s ease infinite;
        margin-left: 50%;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
    </style>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css" />
    <script src="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.umd.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
    $(document).ready(function() {
        // Fungsi untuk menambahkan formulir tambahan saat tombol "Tambah Booth" diklik
        $('.add-booth').click(function() {
            var newForm = $('.booth-form').first().clone(); // Salin formulir pertama
            newForm.find('input[type="text"]').val(''); // Mengosongkan semua input teks
            newForm.find('textarea').val(''); // Mengosongkan semua textarea
            newForm.find('input[type="file"]').val(''); // Mengosongkan semua select

            // Tambahkan tombol "Hapus" ke formulir yang disalin
            if (!newForm.find('.remove-booth').length) {
                newForm.append(
                    '<button class="btn btn-danger remove-booth" type="button" style="margin-top: 10px; margin-bottom:10px;">Hapus</button>'
                );
            }

            $('#booth-form-container').append(newForm); // Tambahkan formulir baru ke dalam kontainer
            newForm.show(); // Tampilkan formulir baru
        });

        // Fungsi untuk menghapus formulir saat tombol "Hapus" diklik
        $(document).on('click', '.remove-booth', function() {
            $(this).closest('.booth-form').remove(); // Hapus formulir yang berisi tombol yang diklik
        });
    });
    $(document).ready(function() {
        // Initialize Select2 on the bank select element
        $('#bank').select2();

        // Function to show loading overlay
        function showLoadingOverlay() {
            $('#loading-overlay').show();
        }

        // Function to hide loading overlay
        function hideLoadingOverlay() {
            $('#loading-overlay').hide();
        }

        // Function to get bank details
        function getBankDetails() {
            const accountNumber = $('#accountNumber').val();
            const bankCode = $('#bank').val(); // Get the selected bank code

            if (!accountNumber) {
                $('#accountNumberError').show().text('Harap isikan nomor rekening terlebih dahulu.');
                return;
            }

            if (accountNumber && bankCode) {
                showLoadingOverlay(); // Show loading overlay
                $.ajax({
                    url: "{{ route('get.bank.details') }}",
                    method: "POST",
                    data: {
                        _token: '{{ csrf_token() }}',
                        bank: bankCode,
                        accountNumber: accountNumber
                    },
                    success: function(response) {
                        hideLoadingOverlay(); // Hide loading overlay
                        if (response.error) {
                            $('#accountNumberError').show().text(response.error);
                        } else {
                            $('#accountNumberError').hide();
                            $('#accountHolder').val(response.accountHolder);
                        }
                    },
                    error: function() {
                        hideLoadingOverlay(); // Hide loading overlay
                        $('#accountNumberError').show().text(
                            'No Rek Tidak Ditemukan Harap Periksa Kembali Nama Bank dan No Rek Ulang.'
                        );
                    }
                });
            }
        }

        // Get bank details on button click
        $('#searchButton').on('click', function() {
            getBankDetails();
        });
    });

    function setBankName() {
        var bankSelect = document.getElementById('bank');
        var bankNameText = bankSelect.options[bankSelect.selectedIndex].getAttribute('data-nama-bank');
        document.getElementById('nama_bank').value = bankNameText;
    }


    var tanggalEventInput = document.getElementById('tanggal_event');

    // Set tanggal minimum event sebagai tanggal hari ini
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
    var yyyy = today.getFullYear();
    today = yyyy + '-' + mm + '-' + dd;
    tanggalEventInput.setAttribute('min', today);


    // Mendapatkan input tanggal pendaftaran booth
    var tanggalPendaftaranInput = document.getElementsByName('tanggal_pendaftaran')[0];
    // Mendapatkan input tanggal penutupan booth
    var tanggalPenutupanInput = document.getElementsByName('tanggal_penutupan')[0];
    // Mendapatkan input tanggal event
    var tanggalEventInput = document.getElementById('tanggal_event');

    // Set tanggal minimum pendaftaran booth sebagai tanggal hari ini
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
    var yyyy = today.getFullYear();
    today = yyyy + '-' + mm + '-' + dd;
    tanggalPendaftaranInput.setAttribute('min', today);

    tanggalEventInput.addEventListener('change', function() {
        var tanggalEvent = new Date(tanggalEventInput.value);

        // Mendapatkan input tanggal pendaftaran booth
        var tanggalPendaftaranInput = document.getElementsByName('tanggal_pendaftaran')[0];

        // Mengatur tanggal maksimum untuk pendaftaran booth
        var oneDayBefore = new Date(tanggalEvent);
        oneDayBefore.setDate(oneDayBefore.getDate() - 1);
        tanggalPendaftaranInput.setAttribute('max', oneDayBefore.toISOString().split('T')[0]);
    });


    // Event listener untuk mengubah tanggal maksimum penutupan booth saat tanggal event berubah
    tanggalEventInput.addEventListener('change', function() {
        tanggalPenutupanInput.setAttribute('max', tanggalEventInput.value);
    });


    // Event listener untuk mengatur tanggal penutupan booth minimum saat tanggal pendaftaran booth berubah
    tanggalPendaftaranInput.addEventListener('change', function() {
        tanggalPenutupanInput.setAttribute('min', tanggalPendaftaranInput.value);
    });

    // Event listener untuk mengatur tanggal penutupan booth maksimum saat tanggal event berubah
    tanggalEventInput.addEventListener('change', function() {
        tanggalPenutupanInput.setAttribute('max', tanggalEventInput.value);
    });

    // Set tanggal maksimum pendaftaran booth sebagai tanggal event
    tanggalPendaftaranInput.setAttribute('max', tanggalEventInput.value);
    // Set tanggal maksimum penutupan booth sebagai tanggal event
    tanggalPenutupanInput.setAttribute('max', tanggalEventInput.value);


    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $(".image-upload-wrap").hide();

                $(".file-upload-image").attr("src", e.target.result);
                $(".file-upload-content").show();

                $(".image-title").html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        $(".file-upload-input").replaceWith($(".file-upload-input").clone());
        $(".file-upload-content").hide();
        $(".image-upload-wrap").show();
    }
    $(".image-upload-wrap").bind("dragover", function() {
        $(".image-upload-wrap").addClass("image-dropping");
    });
    $(".image-upload-wrap").bind("dragleave", function() {
        $(".image-upload-wrap").removeClass("image-dropping");
    });


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

    function removeUploadPamflet() {
        $(".file-upload-input-pamflet").replaceWith(
            $(".file-upload-input-pamflet").clone()
        );
        $(".file-upload-content-pamflet").hide();
        $(".image-upload-wrap-pamflet").show();
    }
    $(".image-upload-wrap-pamflet").bind("dragover", function() {
        $(".image-upload-wrap-pamflet").addClass("image-dropping");
    });
    $(".image-upload-wrap-pamflet").bind("dragleave", function() {
        $(".image-upload-wrap-pamflet").removeClass("image-dropping");
    });

    function validateForm() {
        var isValid = true;

        // Ambil nilai dari setiap input di form pertama
        var namaEvent = document.getElementById('nama_event').value.trim();
        var penyelenggaraEvent = document.getElementById('penyelenggara_event').value.trim();
        var uploadKTP = document.getElementById('upload_ktp').value.trim();
        var kategoriEvent = document.getElementsByName('kategori_event')[0].value;
        var tanggalEvent = document.getElementById('tanggal_event').value.trim();
        var jamEvent = document.getElementById('jam_event').value.trim();
        var tanggalPendaftaran = document.getElementsByName('tanggal_pendaftaran')[0].value.trim();
        var tanggalPenutupan = document.getElementsByName('tanggal_penutupan')[0].value.trim();
        var deskripsi = document.getElementById('deskripsi').value.trim();
        var alamat = document.getElementById('alamat').value.trim();

        // Validasi untuk setiap input di form pertama
        if (namaEvent === '') {
            document.getElementById('nama_event').setCustomValidity('Harap diisi');
            isValid = false;
        } else {
            document.getElementById('nama_event').setCustomValidity('');
        }

        // Tambahkan validasi lainnya untuk setiap input

        return isValid;
    }

    // function validateFormStep2() {
    //     var isValid = true;

    //     // Ambil nilai dari setiap input di form kedua
    //     var denahEvent = document.getElementById('upload_denah').value.trim();
    //     var uploadGambarBooth = document.getElementById('upload_gambar_booth').value.trim();
    //     var tipeBooth = document.getElementById('tipe_booth').value.trim();
    //     var hargaBooth = document.getElementById('harga_booth').value.trim();

    //     // Validasi untuk setiap input di form kedua
    //     if (denahEvent === '') {
    //         document.getElementById('upload_denah').setCustomValidity('Harap diisi');
    //         isValid = false;
    //     } else {
    //         document.getElementById('upload_denah').setCustomValidity('');
    //     }

    //     if (uploadGambarBooth === '') {
    //         document.getElementById('upload_gambar_booth').setCustomValidity('Harap diisi');
    //         isValid = false;
    //     } else {
    //         document.getElementById('upload_gambar_booth').setCustomValidity('');
    //     }

    //     if (tipeBooth === '') {
    //         document.getElementById('tipe_booth').setCustomValidity('Harap diisi');
    //         isValid = false;
    //     } else {
    //         document.getElementById('tipe_booth').setCustomValidity('');
    //     }

    //     if (hargaBooth === '') {
    //         document.getElementById('harga_booth').setCustomValidity('Harap diisi');
    //         isValid = false;
    //     } else {
    //         document.getElementById('harga_booth').setCustomValidity('');
    //     }

    //     // Enable the "Next" button if the form is valid
    //     if (isValid) {
    //         document.querySelector('.btn-next').removeAttribute('disabled');
    //     }

    //     return isValid;
    // }







    // pindah
    let currentStep = 1;
    const steps = document.querySelectorAll(".progress-step");
    const progress = document.getElementById("progress");
    const formSteps = document.querySelectorAll(".form-step");

    function updateProgressBar() {
        steps.forEach((step, index) => {
            if (index < currentStep) {
                step.classList.add("progress-step-active");
            } else {
                step.classList.remove("progress-step-active");
            }
        });

        const progressWidth = ((currentStep - 1) / (steps.length - 1)) * 100;
        progress.style.width = progressWidth + "%";
    }

    function nextStep(step) {
        currentStep = step + 1;
        updateProgressBar();
        updateFormStep();
    }

    function prevStep(step) {
        currentStep = step;
        updateProgressBar();
        updateFormStep();
    }

    function updateFormStep() {
        formSteps.forEach((formStep, index) => {
            if (index === currentStep - 1) {
                formStep.classList.add("form-step-active");
            } else {
                formStep.classList.remove("form-step-active");
            }
        });
    }

    document.addEventListener('DOMContentLoaded', updateProgressBar);
    // endpindah



    // you want to get it of the window global
    const providerOSM = new GeoSearch.OpenStreetMapProvider();

    //leaflet map
    var leafletMap = L.map('map', {
        fullscreenControl: true,
        // OR
        fullscreenControl: {
            pseudoFullscreen: false // if true, fullscreen to page width and height
        },
        minZoom: 2
    }).setView([0, 0], 2);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(leafletMap);

    let theMarker = {};


    const search = new GeoSearch.GeoSearchControl({
        provider: providerOSM,
        style: 'bar',
        searchLabel: 'Cari Lokasi',
    });

    leafletMap.addControl(search);
    leafletMap.on('geosearch/showlocation', function(result) {
        // Mendapatkan latitude dan longitude dari hasil pencarian
        let latitude = result.location.y;
        let longitude = result.location.x;
        document.querySelector("#longitude").value = longitude;
        document.querySelector("#latitude").value = latitude;

        // Memanggil fungsi onSearchResult dengan nilai latitude dan longitude dari hasil pencarian
        onSearchResult(latitude, longitude);
    });
    $(document).ready(function() {
        // Fungsi untuk menambahkan formulir tambahan saat tombol "Tambah Booth" diklik
        $('.add-booth').click(function() {
            var newForm = $('.booth-form').first().clone(); // Salin formulir pertama
            newForm.find('input[type="text"]').val(''); // Mengosongkan semua input teks
            newForm.find('textarea').val(''); // Mengosongkan semua textarea
            newForm.find('input[type="file"]').val(''); // Mengosongkan semua select
            $('#booth-form-container').append(newForm); // Tambahkan formulir baru ke dalam kontainer
            newForm.show(); // Tampilkan formulir baru
        });
        $(document).on('click', '.remove-booth', function() {
            $(this).closest('.booth-form').remove(); // Hapus formulir yang berisi tombol yang diklik
        });
    });
    </script>
    @endsection