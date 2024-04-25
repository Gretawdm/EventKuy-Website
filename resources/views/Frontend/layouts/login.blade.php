<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>EventKuy - Login</title>
    <link href="{{ asset('frontend/assets/img/logo-eventkuynew.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/logo-eventkuynew.png') }}" rel="logo">
    <link href="{{ asset('frontend/login/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link href="{{ asset('frontend/login/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <main>

        <div class=" login min-vh-100 d-flex align-items-center justify-content-center ">
            <div class="bg-login"style="width: 50%">
                <div class="login-container">
                    <h2 style="color:black; font-weight: 1000; font-size:36px">Welcome To EventKuy</h2>
                    <h4 style="color:black; font-weight: 600; font-size:30px">Public Your Event In Here!</h4>
                    <img src="{{ asset('frontend/login/assets/img/human.png') }}" style="width: 65%; height:65%">

                </div>
            </div>

            <div class="bg-login-knn" style="width: 50%">


                {{-- <div class="circle-small2"></div>
                <div class="circle-small"></div>
                <div class="half-circle"></div>
                <div class="circle"></div> --}}

                <div class="form-container">


                    <form action="/login" method="POST" novalidate>
                        @csrf

                        <div class="logo">
                            <img src="{{ asset('frontend/assets/img/logo-login.png') }}" alt="" width="200px">
                        </div>

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
                            <input type="password" id="password" placeholder="minimal 6 karakter" name="password"
                                class="form-control" required>
                            @error('password')
                                <small style="color: red">* {{ $message }}</small>
                            @enderror
                        </div>

                        <div class="row mb-2">
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" value="true"
                                        id="rememberMe" />
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                            </div>
                            <div class="col-auto text-right">
                                <div class="forgot-password">
                                    <label class="form-label">Forgot Password?</label>
                                    <a href="{{ route('forgot_password') }}" class="forgot-password-link">Click here</a>
                                </div>
                            </div>


                        </div>




                        <div class="col-12 mb-2">
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
                            <p class="form-label">Don't have an account? <a href="{{ route('register') }}">Register
                                    Now</a>
                            </p>
                        </div>


                    </form>
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
