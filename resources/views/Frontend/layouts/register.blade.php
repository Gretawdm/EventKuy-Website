<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EventKuy - register</title>
    <link href="{{ asset('frontend/assets/img/MyEvent-logo.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/MyEvent-logo.png') }}" rel="logo">

    <link href="{{ asset('frontend/login/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/login/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                        <p class="text-center small">Enter your personal details to create account</p>
                                    </div>

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
                                            <input type="email" name="email" class="form-control" id="yourEmail"
                                                required>
                                            <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                id="yourPassword" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" name="terms" type="checkbox"
                                                    value="" id="acceptTerms" required>
                                                <label class="form-check-label" for="acceptTerms">I agree and accept the
                                                    <a href="#">terms and conditions</a></label>
                                                <div class="invalid-feedback">You must agree before submitting.</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                        </div>
                                        @if (session()->has('succes'))
                                            <div class="alert alert-success mt-2" role="alert">
                                                {{ session()->get('succes') }}
                                            </div>
                                        @endif


                                        <div class="col-12 d-flex justify-content-center">
                                            <p class="small mb-0">Already have an account? <a
                                                    href="pages-login.html">Log in</a></p>
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
