<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Form with Circles</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/stylemultistep.css') }}"> --}}
</head>

<body>
    <div class="form-container">
        <form id="multiStepForm" class="step-form">
            <div class="steps">
                <div class="step-indicator active">1</div>
                <div class="step-indicator">2</div>
                <div class="step-indicator">3</div>
                <div class="step-indicator">4</div>
                <div class="step-indicator">5</div>
            </div>
            <div class="step">
                <h2>Step 1</h2>
                <input type="text" name="name" placeholder="Your Name" required>
                <button type="button" class="next-btn">Next</button>
            </div>
            <div class="step">
                <h2>Step 2</h2>
                <input type="email" name="email" placeholder="Your Email" required>
                <button type="button" class="prev-btn">Previous</button>
                <button type="button" class="next-btn">Next</button>
            </div>
            <div class="step">
                <h2>Step 3</h2>
                <input type="password" name="password" placeholder="Your Password" required>
                <button type="button" class="prev-btn">Previous</button>
                <button type="button" class="next-btn">Next</button>
            </div>
            <div class="step">
                <h2>Step 4</h2>
                <input type="text" name="address" placeholder="Your Address" required>
                <button type="button" class="prev-btn">Previous</button>
                <button type="button" class="next-btn">Next</button>
            </div>
            <div class="step">
                <h2>Step 5</h2>
                <input type="text" name="phone" placeholder="Your Phone Number" required>
                <button type="button" class="prev-btn">Previous</button>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/jsmultistep.js') }}"></script>
</body>

</html>
