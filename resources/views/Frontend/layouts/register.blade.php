<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>EventKuy - Login</title>

    <link href="{{ asset('frontend/assets/img/logo-eventkuynew.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/logo-eventkuynew.png') }}" rel="logo">

    <link href="{{ asset('frontend/login/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link href="{{ asset('frontend/login/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <main>
        <div class="login min-vh-100 d-flex align-items-center justify-content-center ">
            <div class="login">
                <div class="luar">
                    <div class="box-luar mb-2">
                        <div class="box-dalam">
                            <h3 class="text mb-4" style="font-size: 25px">Create Your Account!</h3>
                            <form method="POST" enctype="multipart/form-data" action="/register">
                                @csrf
                                <div class="form-group row mb-2">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="nama_perusahaan" class="form-label" style="font-weight: 800;">Nama
                                            Perusahaan</label>
                                        <input type="text" class="form-control" id="nama_perusahaan"
                                            name="nama_perusahaan" value="{{ old('nama_perusahaan') }}" required>
                                        @error('nama_perusahaan')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="alamat_perusahaan" class="form-label"
                                            style="font-weight: 800;">Alamat Perusahaan</label>
                                        <input type="text" class="form-control" id="alamat_perusahaan"
                                            name="alamat_perusahaan" value="{{ old('alamat_perusahaan') }}" required>
                                        @error('alamat_perusahaan')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 mb-2">
                                    <label for="no_telp" class="form-label" style="font-weight: 800;">Nomor
                                        Telepon</label>
                                    <input type="text" class="form-control" id="no_telp" name="no_telp"
                                        value="{{ old('no_telp') }}" required>
                                    @error('no_telp')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 mb-2">
                                    <label for="email" class="form-label" style="font-weight: 800;">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group row mb-2">
                                    <div class="col-sm-6">
                                        <label for="password" class="form-label" style="font-weight: 800;">
                                            Password</label>
                                        <input name="password_confirmation" type="password"
                                            class="form-control form-control-user @error('password_confirmation')is-invalid @enderror"
                                            id="exampleRepeatPassword">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="password" class="form-label" style="font-weight: 800;">Repeat
                                            Password</label>
                                        <input name="password" type="password"
                                            class="form-control form-control-user @error('password')is-invalid @enderror"
                                            id="exampleInputPassword">
                                        @error('password')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-12 mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" name="terms" type="checkbox" value=""
                                            id="acceptTerms" required>
                                        <label class="form-check-label" for="acceptTerms">I agree and accept the
                                            <a href="#">terms and conditions</a></label>
                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <button class="btn btn-pink w-100" type="submit">Create Account</button>
                                </div>
                                @if (session()->has('succes'))
                                    <div class="alert alert-success mt-2" role="alert">
                                        {{ session()->get('succes') }}
                                    </div>
                                @endif


                                <div class="col-12 d-flex justify-content-center">
                                    <p class="form-label">Already have an account? <a href="{{ route('login') }}">Log
                                            in</a></p>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="logo">
                        <img src="{{ asset('frontend/assets/img/logo-eventkuynew.png') }}" alt=""
                            width="100px">
                    </div>

                </div>



            </div>
        </div>


    </main>

    <script src="{{ asset('frontend/login/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('frontend/login/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/login/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('frontend/login/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('frontend/login/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('frontend/login/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('frontend/login/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('frontend/login/assets/vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('frontend/login/assets/js/main.js') }}"></script>


</body>

</html>
