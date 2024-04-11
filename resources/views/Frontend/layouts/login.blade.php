<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>EventKuy - Login</title>
    <link href="{{ asset('frontend/assets/img/MyEvent-logo.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/MyEvent-logo.png') }}" rel="logo">
    <link href="{{ asset('frontend/login/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/login/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">




</head>

<body>
    <main>
        <div class=" register min-vh-100 d-flex align-items-center justify-content-center ">
            <div class="bg-login"style="">
                <div class="deskripsi">
                    <h1>Selamat Datang!</h1>
                    <h2>Silahkan Masuk Untuk Melanjutkan</h2>
                </div>
            </div>

            <div class="" style="width: 50%">
                <div class="d-flex justify-content-center">
                    <div class="d-flex flex-column align-items-center justify-content-center" style="width: 500px">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h3 class="card-title text-center pb-0 fs-4">Login to Your
                                        Account</h3>
                                    <p class="text-center small font-weight-bold">Enter your username & password
                                        to
                                        login</p>
                                </div>


                                <form action="/login" method="POST">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" id="email" placeholder="asd@gmail.com" name="email"
                                            class="form-control" autofocus required value="{{ old('email') }}">
                                        @error('email')
                                            <small style="color: red">* {{ $message }}</small>
                                        @enderror

                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" id="password" placeholder="minimal 6 karakter"
                                            name="password" class="form-control" required>
                                        @error('password')
                                            <small style="color: red">* {{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                value="true" id="rememberMe" />
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="mb-e d-grid">
                                        <button class="btn btn-pink w-100" type="submit">
                                            Login
                                        </button>
                                    </div>
                                    @if (session()->has('loginError'))
                                        <div class="alert alert-danger mt-2" role="alert">
                                            {{ session()->get('loginError') }}
                                        </div>
                                    @endif
                                    <div class="col-12 d-flex justify-content-center">
                                        <p>Lupa Password? <a href="#">Klik disini</a>
                                        </p>
                                        <p class="small mb-0">
                                            Don't have account?
                                            <a href="{{ route('register') }}">Create an account</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
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
