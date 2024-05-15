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
                                    <input type="date" class="form-control" id="tanggal_event"
                                        name="tanggal_pendaftaran" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">Tanggal Penutupan Booth</label>
                                    <input type="date" class="form-control" id="tanggal_penutupan"
                                        name="tanggal_penutupan"required>
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
                                <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                                <div class="image-upload-wrap-pamflet" style="height: 300px; margin-top: 5px">
                                    <input class="file-upload-input-pamflet" type='file'
                                        onchange="readURLPamflet(this);" accept="image/*"
                                        name="upload_pamflet"required />
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
                            <a href="#" class="btn btn-next width-50 ml-auto"
                                onclick="if(validateForm()) { nextStep(1); } else { alert('Harap lengkapi semua field di form pertama.'); }"
                                disabled>Next</a>

                        </div>
                    </div>

                    <div class="form-step" id="form-step-2">
                        <h3 class="judul1">Booth :</h3>
                        <div class="garis-pemisah"></div> <!-- Garis pemisah -->
                        <label for="exampleUploadEvent" class="form-label mb-0" style="font-size: 20px">Upload Denah
                            Event</label>
                        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

                        <div class="image-upload-wrap mt-1">
                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*"
                                name="upload_denah" required />
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
                                            <input type="text" class="form-control" id="tipe_booth"
                                                name="tipe_booth[]" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3" style="display: flex; flex-direction:column;">
                                            <label for="exampleInputEmail1" class="form-label"
                                                style="margin-right: 10px;">Harga Booth : </label>
                                            <input type="text" class="form-control" id="harga_booth"
                                                name="harga_booth[]" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3" style="display: flex; flex-direction:column;">
                                            <label for="exampleInputEmail1" class="form-label"
                                                style="margin-right: 5px;">Jumlah Booth : </label>
                                            <input type="text" class="form-control" id="jumlah_booth"
                                                name="jumlah_booth[]" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3" style="display: flex; flex-direction:column;">
                                            <label for="exampleInputEmail1" class="form-label">Deskripsi : </label>
                                            <textarea class="form-control" id="deskripsi_booth" name="deskripsi_booth[]" required rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-danger remove-booth" type="button"
                                    style="margin-top: 10px; margin-bottom: 20px;">Hapus</button>
                            </div>
                        </div>
                        <button class="btn custom-btn mb-3 add-booth" style="margin-top:10px;"
                            type="button"><span>Tambah Booth</span><i class="fas fa-plus"></i></button>

                        <div class="btns-group">

                            <a href="#" class="btn btn-prev width-50" onclick="prevStep(1)">Back</a>
                            <a href="#" class="btn btn-next width-50 ml-auto"
                                onclick="if(validateFormStepp()) { nextStep(2); } else { alert('Harap lengkapi semua field di form kedua.'); }"
                                disabled>Next</a>

                        </div>
                    </div>



                    <div class="form-step" id="form-step-3">
                        <h3 class="judul1">Metode Pembayaran & Contact Person :</h3>
                        <div class="garis-pemisah"></div> <!-- Garis pemisah -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3" style="display: flex; flex-direction:column;">
                                    <label for="exampleInputNoRekening" class="form-label">No Rekening</label>
                                    <input type="text" class="form-control" id="no_rekening" name="no_rekening">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3" style="display: flex; flex-direction:column;">
                                    <label for="exampleInputNamaRekening" class="form-label">Nama Rekening</label>
                                    <input type="text" class="form-control" id="nama_rekening" name="nama_rekening">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3" style="display: flex; flex-direction:column;">
                                    <label for="exampleInputNamaBank" class="form-label">Nama Bank</label>
                                    <input type="text" class="form-control" id="nama_bank" name="nama_bank">
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

        <script>
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

            function validateFormStep2() {
                var isValid = true;

                // Ambil nilai dari setiap input di form kedua
                var denahEvent = document.getElementsByName('upload_denah')[0].value.trim();
                var uploadGambarBooth = document.getElementsByName('upload_gambar_booth[]')[0].value.trim();
                var tipeBooth = document.getElementsByName('tipe_booth[]')[0].value.trim();
                var hargaBooth = document.getElementsByName('harga_booth[]')[0].value.trim();

                // Validasi untuk setiap input di form kedua
                if (denahEvent === '') {
                    document.getElementById('upload_denah').setCustomValidity('Harap diisi');
                    isValid = false;
                } else {
                    document.getElementById('nama_event').setCustomValidity('');
                }

                // Tambahkan validasi lainnya untuk setiap input di form kedua

                return isValid;
            }






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
