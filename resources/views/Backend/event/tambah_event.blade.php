@extends('backend.app')
@section('content')
    <h1 class="h3 mb-2 text-gray-800" style="font-size: 25px">Tambah Event</h1>
    <div class="progressbar">
        <div class="progress" id="progress"></div>

        <div class="progress-step progress-step-active" data-title="Intro"></div>
        <div class="progress-step" data-title="Contact"></div>
        <div class="progress-step" data-title="ID"></div>
    </div>

    <div class="card shadow mb-4" style="border-radius:15px">

        <form method="POST" action="{{ route('tambah_event.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card col-12">
                <div class="card-body">
                    <div class="form-step form-step-active">
                        <h3 class="judul1">Kebutuhan Pembuatan Event :</h3>
                        <div class="garis-pemisah"></div> <!-- Garis pemisah -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-2" style="display: flex; flex-direction:column;">
                                    <label for="exampleInputNama" class="form-label">Nama Event</label>
                                    <input type="text" class="form-control" id="nama_event" name="nama_event">
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
                                        name="penyelenggara_event">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3" style="display: flex; flex-direction:column;">
                                    <label for="exampleInputKTP" class="form-label">Upload KTP Penanggung Jawab</label>
                                    <input type="file" class="form-control" id="upload_ktp" name="upload_ktp">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3" style="display: flex; flex-direction:column;">
                                    <label for="exampleKategoriJenis" class="form-label">Kategori Event</label>
                                    <select class="form-select" aria-label="Default select example" name="kategori_event">
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
                                    <input type="date" class="form-control" id="tanggal_event" name="tanggal_event">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="jam" class="form-label">Jam Event</label>
                                    <input type="time" class="form-control" id="jam_event" name="jam_event">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">Tanggal Pendaftan Event</label>
                                    <input type="date" class="form-control" id="tanggal_event"
                                        name="tanggal_pendaftaran">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">Tanggal Penutupan Event</label>
                                    <input type="date" class="form-control" id="tanggal_penutupan"
                                        name="tanggal_penutupan">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3" style="display: flex; flex-direction:column;">
                                    <label for="exampleInputEmail1" class="form-label">Deskripsi Event</label>
                                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3" style="display: flex; flex-direction:column;">
                                    <label for="exampleInputEmail1" class="form-label">Alamat Event</label>
                                    <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div id="map" style="height: 400px;"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3" style="display: flex; flex-direction:column;">
                                    <label for="exampleInputEmail1" class="form-label">Latitude</label>
                                    <input type="text" class="form-control" id="latitude" name="latitude">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3" style="display: flex; flex-direction:column;">
                                    <label for="exampleInputEmail1" class="form-label">Longitude</label>
                                    <input type="text" class="form-control" id="longitude" name="longitude">
                                </div>
                            </div>
                        </div>
                        <h3 class="judul1">Metode Pembayaran & Contact Person :</h3>
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
                        <div class="">
                            <a href=" #" class="btn btn-next width-50 ml-auto">Next</a>
                        </div>
                    </div>
                    <div class="form-step">
                        <h3 class="judul1">Upload Denah Event :</h3>
                        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

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
                            <!-- Formulir Booth Default (tidak ditampilkan) -->
                            <div class="booth-form">
                                <h5>Formulir Booth</h5>
                                <div class="mb-3" style="display: flex">
                                    <label for="exampleInputBooth" class="form-label">Foto Booth : </label>
                                    <input type="file" class="form-control" id="upload_gambar_booth"
                                        name="upload_gambar_booth[]">
                                </div>
                                <div class="mb-3" style="display: flex">
                                    <label for="exampleInputEmail1" class="form-label" style="margin-right: 10px;">Tipe
                                        Booth : </label>
                                    <input type="text" class="form-control" id="tipe_booth" name="tipe_booth[]">
                                </div>
                                <div class="mb-3" style="display: flex">
                                    <label for="exampleInputEmail1" class="form-label" style="margin-right: 10px;">Harga
                                        Booth : </label>
                                    <input type="text" class="form-control" id="harga_booth" name="harga_booth[]">
                                </div>
                                <div class="mb-3" style="display: flex">
                                    <label for="exampleInputEmail1" class="form-label" style="margin-right: 5px;">Jumlah
                                        Booth : </label>
                                    <input type="text" class="form-control" id="jumlah_booth" name="jumlah_booth[]">
                                </div>
                                <div class="mb-3" style="display: flex; flex-direction:column;">
                                    <label for="exampleInputEmail1" class="form-label">Deskripsi : </label>
                                    <textarea class="form-control" id="deskripsi_booth" name="deskripsi_booth[]" rows="4"></textarea>
                                </div>
                                <button class="btn btn-danger remove-booth" type="button"
                                    style="margin-top: 10px: margin-bottom:10px;">Hapus</button>
                            </div>
                        </div>
                        <button class="btn custom-btn mb-3 add-booth" style="margin-top:10px;" type="button">Tambah
                            Booth</button>

                        <!-- Kontainer untuk formulir tambahan -->
                        <div class="btns-group">
                            <a href="#" class="btn btn-prev">Previous</a>
                            <a href="#" class="btn btn-next">Next</a>
                        </div>
                    </div>
                    <div class="form-step">
                        <h3 class="judul1">Upload Pamflet Event :</h3>
                        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                        <div class="image-upload-wrap-pamflet">
                            <input class="file-upload-input-pamflet" type='file' onchange="readURLPamflet(this);"
                                accept="image/*" name="upload_pamflet" />
                            <div class="drag-text-pamflet">
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
                        <div class="btns-group">
                            <a href="#" class="btn btn-prev">Previous</a>
                            <input type="submit" value="Submit" class="btn" />
                        </div>
                    </div>
                </div>
        </form>
        <style>
            /* Progressbar */
            .progressbar {
                position: relative;
                display: flex;
                justify-content: space-between;
                counter-reset: step;
                margin: 2rem 0 4rem;
            }

            .progressbar::before,
            .progress {
                content: "";
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                height: 4px;
                width: 100%;
                background-color: #dcdcdc;
                z-index: -1;
            }

            .progress {
                background-color: #512E67;
                width: 0%;
                transition: 0.3s;
            }

            .progress-step {
                width: 2.1875rem;
                height: 2.1875rem;
                background-color: #dcdcdc;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .progress-step::before {
                counter-increment: step;
                content: counter(step);
            }

            .progress-step::after {
                content: attr(data-title);
                position: absolute;
                top: calc(100% + 0.5rem);
                font-size: 0.85rem;
                color: #666;
            }

            .progress-step-active {
                background-color: #512E67;
                color: #f3f3f3;
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

            // leafletMap.on('click', function(e) {
            //     let latitude = e.latlng.lat.toString().substring(0, 15);
            //     let longitude = e.latlng.lng.toString().substring(0, 15);
            //     // if (marker != undefined) {
            //     //     leafletMap.removeLayer(marker)
            //     // }
            //     // document.getElementById("latitude").value = latitude;
            //     // document.getElementById("longitude").value = longitude;

            //     let popup = L.popup()
            //         .setLatLng([latitude, longitude])
            //         .setContent("Kordinat : " + latitude + " - " + longitude)
            //         .openOn(leafletMap);

            //     if (theMarker != undefined) {
            //         // leafletMap.removeLayer(theMarker);
            //         theMarker = L.marker([latitude, longitude]).addTo(leafletMap);
            //         document.getElementById("latitude").value = latitude;
            //         document.getElementById("longitude").value = longitude;
            //     };

            // });



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

            function validateForm() {
                var inputs = document.querySelectorAll('input, select, textarea');
                var isValid = true;

                inputs.forEach(function(input) {
                    if (input.required && !input.value.trim()) {
                        isValid = false;
                    }
                });

                if (!isValid) {
                    alert('Silakan lengkapi semua field sebelum melanjutkan.');
                }

                return isValid;
            }
        </script>
    @endsection
