<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventKuy - Login</title>
    <link rel="icon" href="{{ asset('frontend/assets/img/logo-eventkuynew.png') }}">
    <link rel="logo" href="{{ asset('frontend/assets/img/logo-eventkuynew.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/login/assets/css/style.css') }}">
</head>

<body>
    <main>
        <div class="login min-vh-100 d-flex align-items-center justify-content-center">
            <div class="login">
                <div class="luar">
                    <div class="box-luar mb-2">
                        <div class="box-dalam">
                            <h3 class="text mb-2" style="font-size: 25px; color: #512e67">Reset Password</h3>
                            <form action="{{route('resetpassword')}}" method="POST" id="reset-password-form" novalidate>
                                @csrf
                                @method('PUT')
                                <div id="step1" class="form-step active">
                                    <div class="mb-3">
                                        <h5 class="text mb-4" style="font-size: 16px">Input Your Email to Reset
                                            Password!</h5>
                                        <label for="email" class="form-label" style="font-weight: 800;">Email</label>
                                        <input type="email" id="email" placeholder="asd@gmail.com" name="email"
                                            class="form-control" autofocus required value="{{ old('email') }}">
                                        @error('email')
                                        <small style="color: red">* {{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-2">
                                        <button onclick="sendVerificationCode()" id="next1" class="btn btn-pink w-100"
                                            type="button">Send</button>
                                    </div>
                                </div>

                                <div id="step2" class="form-step">
                                    <div class="mb-3">
                                        <h5 class="text mb-4" style="font-size: 16px">We sent the OTP to your email,
                                            check your email!</h5>
                                        <label for="otp" class="form-label" style="font-weight: 800;">OTP</label>
                                        <input type="text" id="otp" placeholder="Enter OTP" name="otp"
                                            class="form-control" required>
                                        @error('otp')
                                        <small style="color: red">* {{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-2">
                                        <button onclick="clearOtpCache()" id="prev1" class="btn btn-secondary w-100"
                                            type="button">Previous</button>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <button onclick="validateOtp()" id="next2" class="btn btn-pink w-100"
                                            type="button">Submit</button>
                                    </div>
                                </div>

                                <div id="step3" class="form-step">
                                    <div class="mb-3">
                                        <h5 class="text mb-4" style="font-size: 16px">Input New Password!</h5>
                                        <label for="new_password" class="form-label" style="font-weight: 800;">New
                                            Password</label>
                                        <input type="password" id="new_password" placeholder="Enter New Password"
                                            name="new_password" class="form-control" required>
                                        @error('new_password')
                                        <small style="color: red">* {{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirm_password" class="form-label"
                                            style="font-weight: 800;">Confirm Password</label>
                                        <input type="password" id="confirm_password" placeholder="Confirm New Password"
                                            name="confirm_password" class="form-control" required>
                                        @error('confirm_password')
                                        <small style="color: red">* {{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-2">
                                        <button class="btn btn-pink w-100" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="logo">
                        <img src="{{ asset('frontend/assets/img/logo-eventkuynew.png') }}" alt="" width="100px">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const formSteps = document.querySelectorAll('.form-step');
        const progressBar = document.getElementById('progressbar');
        const nextButtons = document.querySelectorAll('[id^=next]');
        const prevButtons = document.querySelectorAll('[id^=prev]');
        const form = document.querySelector('form');

        nextButtons.forEach(button => {
            button.addEventListener('click', () => {
                const currentStep = button.parentElement.parentElement;
                const nextStep = currentStep.nextElementSibling;
                if (currentStep.id === 'step1') {
                    const email = document.getElementById('email').value;
                    if (email.trim() === '') {
                        alert('Please enter your email.');
                        return;
                    }
                    // Kirim email
                    sendEmail(email);
                } else if (currentStep.id === 'step2') {
                    const otp = document.getElementById('otp').value;
                    if (otp.trim() === '') {
                        alert('Please enter the OTP.');
                        return;
                    }
                    // Verifikasi OTP
                    // if (!verifyOTP(otp)) {
                    //     alert('Invalid OTP. Please try again.');
                    //     return;
                    // }
                }
                currentStep.classList.remove('active');
                nextStep.classList.add('active');
                updateProgressBar(nextStep.id);
            });
        });

        prevButtons.forEach(button => {
            button.addEventListener('click', () => {
                const currentStep = button.parentElement.parentElement;
                const prevStep = currentStep.previousElementSibling;
                currentStep.classList.remove('active');
                prevStep.classList.add('active');
                updateProgressBar(prevStep.id);
            });
        });

        function updateProgressBar(stepId) {
            const steps = ['step1', 'step2', 'step3'];
            const index = steps.indexOf(stepId);
            progressBar.querySelectorAll('li').forEach((step, i) => {
                if (i <= index) {
                    step.classList.add('active');
                } else {
                    step.classList.remove('active');
                }
            });
        }

        function sendEmail(email) {

        }

        function verifyOTP(otp) {

        }
    });

    function sendVerificationCode() {
        var email = $('#email').val();

        $.ajax({
            url: '{{ route("sendcode") }}',
            type: 'POST',
            dataType: 'json',
            data: {
                email: email,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                alert(response.message);
                // Move to the next step
                $('#step1').removeClass('active');
                $('#step2').addClass('active');
            },
            error: function(xhr, status, error) {
                alert('Kode OTP terkirim: ' + xhr.responseText);
            }
        });
    }

    function validateOtp() {
        var email = $('#email').val();
        var otp = $('#otp').val();

        $.ajax({
            url: '{{ route("validateOtp") }}',
            type: 'POST',
            dataType: 'json',
            data: {
                email: email,
                otp: otp,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                if (response.message === 'OTP is valid') {
                    alert('OTP is valid!');
                    // Move to the next step
                    $('#step2').removeClass('active');
                    $('#step3').addClass('active');
                } else {
                    // alert('Invalid OTP!');
                }
            },
            error: function(xhr, status, error) {
                // alert('Failed to validate OTP: ' + xhr.responseText);
            }
        });
    }

    function clearOtpCache() {
        var email = $('#email').val();

        $.ajax({
            url: '{{ route("clearOtpCache") }}',
            type: 'POST',
            dataType: 'json',
            data: {
                email: email,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                alert('OTP cache cleared!');
                // Move to the previous step
                $('#step2').removeClass('active');
                $('#step1').addClass('active');
            },
            error: function(xhr, status, error) {
                alert('Failed to clear OTP cache: ' + xhr.responseText);
            }
        });
    }
    </script>
</body>

</html>