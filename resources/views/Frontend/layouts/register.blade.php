<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EventKuy - Register</title>
    <link href="{{ asset('frontend/assets/img/logo-eventkuynew.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/logo-eventkuynew.png') }}" rel="logo">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">


    <link href="{{ asset('frontend/login/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/login/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <main>
        <div class="register min-vh-100 d-flex align-items-center justify-content-center ">
            <div class="bg-login"style="width: 50%">
                <div class="login-container">
                    <h2 style="font-weight: 1000; font-size:36px">Welcome To EventKuy</h2>
                    <h4 style="font-weight: 600; font-size:30px">Public Your Event In Here!</h4>
                    <img src="{{ asset('frontend/login/assets/img/human.png') }}" style="width: 65%; height:65%">

                </div>
            </div>

            <div class="bg-login-knn" style="width: 50%">
                <div class="form-container">
                    <form class="row g-3 needs-validation" method="POST" action="/register">
                        @csrf
                        <div class="logo">
                            <img src="{{ asset('frontend/assets/img/logo-register.png') }}" alt=""
                                width="200px">
                        </div>
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
                            <input type="password" name="password" class="form-control" id="yourPassword" required>
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
                            <p class="form-label">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                        </div>


                    </form>

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
