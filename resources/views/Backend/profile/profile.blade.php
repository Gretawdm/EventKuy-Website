@extends('backend.app')
@section('content')
    @include('backend.profile.index')
    <div class="card">
        <div class="card-body pt-3">
            <div class="tab-content">

                <div class="tab-pane fade show active profile-overview" id="profile-overview" style="width: 76vw;">

                    <h5 class="card-title" style="font-weight: 900; font-size:18px">Detail Profile</h5>


                    <div class="row">
                        <div class="col-lg-3 col-md-4 label" style="font-weight: 800">Nama Perusahaan</div>
                        <div class="col-lg-9 col-md-8">: {{ $user->nama_perusahaan }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label" style="font-weight: 800">Alamat</div>
                        <div class="col-lg-9 col-md-8">: {{ $user->alamat_perusahaan }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label" style="font-weight: 800">No Telepon</div>
                        <div class="col-lg-9 col-md-8">: {{ $user->no_telp }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label" style="font-weight: 800">Email</div>
                        <div class="col-lg-9 col-md-8">: {{ $user->email }}</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <style>
        .profile .profile-card img {
            max-width: 120px;
        }



        .profile .profile-card h2 {
            font-size: 24px;
            font-weight: 700;
            color: #2c384e;
            margin: 10px 0 0 0;
        }

        .profile .profile-card h3 {
            font-size: 18px;
        }

        .profile .profile-card .social-links a {
            font-size: 20px;
            display: inline-block;
            color: rgba(1, 41, 112, 0.5);
            line-height: 0;
            margin-right: 10px;
            transition: 0.3s;
        }

        .profile .profile-card .social-links a:hover {
            color: #012970;
        }

        .profile .profile-overview .row {
            margin-bottom: 20px;
            font-size: 15px;
        }

        .profile .profile-overview .card-title {
            color: #012970;
        }

        .profile .profile-overview .label {
            font-weight: 600;
            color: rgba(1, 41, 112, 0.6);
        }

        .profile .profile-edit label {
            font-weight: 600;
            color: rgba(1, 41, 112, 0.6);
        }

        .profile .profile-edit img {
            max-width: 120px;
        }
    </style>
@endsection
