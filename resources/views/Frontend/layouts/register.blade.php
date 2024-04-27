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
                            <form class="row g-3 needs-validation" method="POST" action="/register">
                                @csrf
                                <div class="col-12">
                                    <label for="yourName" class="form-label">Your Name</label>
                                    <input type="text" name="nama" class="form-control" id="yourName"
                                        value="{{ old('nama') }}" required>
                                    <div class="invalid-feedback">Please, enter your name!</div>
                                </div>

                                <div class="col-12">
                                    <label for="yourEmail" class="form-label">Your Email</label>
                                    <input type="email" name="email" class="form-control" id="yourEmail" required>
                                    <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                                </div>

                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="yourPassword"
                                        required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="terms" type="checkbox" value=""
                                            id="acceptTerms" required>
                                        <label class="form-check-label" for="acceptTerms">I agree and accept the
                                            <a href="#">terms and conditions</a></label>
                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                    </div>
                                </div>
                                <div class="col-12">
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
        </div>
        </div>
        </div>

        </section>

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
