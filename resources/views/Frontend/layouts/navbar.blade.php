<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <!-- <a href="index.html" class="logo d-flex align-items-center"> -->
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('frontend/assets/img/logo-eventkuynew.png') }}" alt="" width="75">


        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul id="navbar">
                <li><a href="/">Home</a></li>
                <li><a href="/about.html">About Us</a></li>
                <li><a href="/services.html">Our Services</a></li>
                <li><a href="/contact.html">Contact</a></li>
                <div class="header-buttons" style="margin-left: 100px; margin-right: 100px;">
                    <a class="btn-login" href="{{ route('login') }}">Login</a>
                    <a class="btn-book-a-table" href="{{ route('register') }}">Register</a>
                </div>
            </ul>
        </nav>
    </div>
    <!-- .navbar -->

</header><!-- End Header -->
