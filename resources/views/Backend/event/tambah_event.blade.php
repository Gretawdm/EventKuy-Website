@extends('backend.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/stylemultistep.css" />

    <script src="js/jsmultistep.js" defer></script>
    <title>Tambah Event Form</title>
</head>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tambah Event</h1>
    </div>

    <form action="#" class="form">
        <!-- <h1 class="text-center">Registration Form</h1> -->
        <!-- Progress bar -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>

            <div class="progress-step progress-step-active" data-title="Intro"></div>
            <div class="progress-step" data-title="Contact"></div>
            <div class="progress-step" data-title="ID"></div>
            <div class="progress-step" data-title="Password"></div>
            <!-- <div class="progress-step" data-title="end"></div> -->
        </div>


        <!-- <link rel="stylesheet" href="css/stylemultistep.css" /> -->
        <!-- Steps -->
        <div class="form-step form-step-active">
            <h3 class="judul1">Kebutuhan Pembuatan Event :</h3>
            <div class="wrapper" style="display: flex">
                <div class=" input-group">
                    <label for="username">Nama Event</label>
                    <input type="text" name="username" id="username" placeholder="Password" />
                </div>
                <div class="input-group">
                    <label for="position">Penyelenggara Event</label>
                    <input type="text" name="position" id="position" />
                </div>
            </div>
            <div class="wrapper" style="display: flex">
                <div class="input-group">
                    <label for="position">Event Owner</label>
                    <input type="text" name="position" id="position" />
                </div>
                <div class="input-group">
                    <label for="position">Jenis Event</label>
                    <input type="text" name="position" id="position" />
                </div>
            </div>
            <div class="wrapper" style="display: flex">
                <div class="input-group">
                    <label for="dob">Tanggal Event</label>
                    <input type="date" name="dob" id="dob" />
                </div>
                <div class="input-group">
                    <label for="position" id="jam">Jam Event</label>
                    <input type="time" name="position" id="jam" />
                </div>
            </div>
            <div class="input-group-tanggal">
                <label for="dob" id="dob">Tanggal Pendaftaran</label>
                <input type="date" name="dob" id="tgl" />
            </div>
            <div class="input-group">
                <label for="position" id="des">Deskripsi Event</label>
                <textarea name=" des" id="des"></textarea>
            </div>
            <div class="input-group">
                <label for="position">Alamat Lengkap Event</label>
                <textarea name="des" id="des"></textarea>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.4241543730127!2d113.72049837443926!3d-8.159949781753564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b617d8f623%3A0xf6c4437632474338!2sPoliteknik%20Negeri%20Jember!5e0!3m2!1sid!2sid!4v1713859118310!5m2!1sid!2sid"
                width="857" height="300" style="border:0; display: block;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="input-group">
                <label for="position">Longtitude</label>
                <input type="text" name="position" id="position" />
            </div>
            <div class="input-group">
                <label for="position">Langtitude</label>
                <input type="text" name="position" id="position" />
            </div>
            <h3 class="judul1">Metode Pembayaran & Contact Person :</h3>
            <div class=" input-group">
                <label for="username">No Rekening</label>
                <input type="text" name="username" id="username" placeholder="Password" />
            </div>
            <div class="input-group">
                <label for="position">Nama Bank</label>
                <input type="text" name="position" id="position" />
            </div>
            <div class=" input-group">
                <label for="username">Atas Nama Rekening</label>
                <input type="text" name="username" id="username" placeholder="Password" />
            </div>
            <div class="input-group">
                <label for="position">Email</label>
                <input type="text" name="position" id="position" />
            </div>
            <div class="input-group">
                <label for="position">Link Whatsapp Grup</label>
                <input type="text" name="position" id="position" />
            </div>
            <div class="input-group">
                <label for="position">Link Instagram</label>
                <input type="text" name="position" id="position" />
            </div>
            <div class="">
                <a href=" #" class="btn btn-next width-50 ml-auto">Next</a>
            </div>
        </div>
        <div class="form-step">
            <h3 class="judul1">Upload Denah Event :</h3>
            <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
            <!-- <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add
                Image</button> -->

            <div class="image-upload-wrap">
                <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
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
            <div class="input-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" />
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" />
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>
        <div class="form-step">
            <div class="input-group">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob" />
            </div>
            <div class="input-group">
                <label for="email">National ID</label>
                <input type="text" name="email" id="email" />
            </div>
            <h3 class="judul1">Upload Denah Event :</h3>
            <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
            <!-- <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add
                Image</button> -->

            <div class="image-upload-wrap">
                <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
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
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>
        <!-- <div class="form-step">
            <div class="input-group">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob" />
            </div>
            <div class="input-group">
                <label for="ID">National ID</label>
                <input type="number" name="ID" id="ID" />
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div> -->
        <div class="form-step">
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" />
            </div>
            <div class="input-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" name="confirmPassword" id="confirmPassword" />
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <input type="submit" value="Submit" class="btn" />
            </div>

        </div>
    </form>
    @endsection