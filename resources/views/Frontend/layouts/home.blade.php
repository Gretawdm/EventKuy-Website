   @extends('frontend/layouts.template')

   @section('content')
       <!-- ======= Hero Section ======= -->
       <div id="hero" class="hero d-flex align-items-center">
           <div class="container">
               <div class="row gy-4 d-flex justify-content-between">
                   <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                       <h2 data-aos="fade-up"
                           style="font-weight:1000; font-size:42px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                           Booking Event
                           dengan mudah melalui <span style="color: #FF6699;text-decoration: underline;">Event</span><span
                               style="color: #2d2828; text-decoration: underline;">Kuy</span></h2>
                       <style>
                           @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
                       </style>
                       <p data-aos="fade-up" data-aos-delay="100" style="font-size: 17px; font-weight: 600;">
                           Dengan kemudahan pendaftaran online, kini proses mendaftarkan booth tenant semakin simpel dan
                           cepat. Tak
                           perlu repot-repot, cukup klik dan kirim formulir pendaftaranmu!</p>

                       <div class="hero-buttons">
                           <a class="btn-download" href="#download" style="font-weight: 1000;">Download Aplikasi <i
                                   class="fa-solid fa-download ms-1"></i></a> <!-- memberi spasi pd icon -->
                           <a class="btn-pembuat-event" href="{{ route('login') }}" style="font-weight: 1000;">Pembuat Event
                               <i class="fa-solid fa-house ms-1"></i></a>

                       </div>

                       <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

                       </div>
                   </div>

                   <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                       <img src="{{ asset('frontend/assets/img/logo-kanan.png') }}" class="img-fluid mb-3 mb-lg-0"
                           alt="">
                   </div>

               </div>
           </div>
       </div><!-- End Hero Section -->

       <main id="main">

           <!-- ======= About Section ======= -->
           <section id="about" class="about">
               <div class="container" data-aos="fade-up">

                   <div class="section-header">
                       <span style="font-weight: 1000;">About Us</span>
                       <h2 style="font-weight: 1000;">About Us</h2>
                   </div>

                   <div class="d-flex" style="align-items: center;">
                       <div class=" position-relative about-img" data-aos="fade-up" data-aos-delay="150">
                           <img src="{{ asset('frontend/assets/img/kiri-logo.png') }}" alt="" width="600">
                       </div>
                       <div class="" data-aos="fade-up" data-aos-delay="300">
                           <div class="content ps-0 ps-lg-5" style="font-size: 18px; font-weight: 400;">
                               <p>
                                   <span style="font-weight: 1000; font-size:36px">Mengapa Harus Menggunakan
                                       EventKuy?</span>
                                   <br style="font-weight: 600;">Di EventKuy, kami berkomitmen untuk menyediakan platform
                                   pendaftaran booth tenant
                                   yang
                                   efisien dan mudah diakses melalui Mobile. Kami memahami pentingnya memfasilitasi
                                   interaksi
                                   antara penyelenggara event dan UMKM lokal. Dengan antarmuka yang ramah pengguna,
                                   MyEvent Web memberikan kemudahan bagi penyelenggara acara dan UMKM untuk terhubung dan
                                   berkembang
                                   bersama.</brS>
                               </p>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!-- end about section -->

           <!-- ======= Services Section ======= -->
           <section id="service" class="services pt-0">
               <div class="container" data-aos="fade-up">

                   <div class="section-header">
                       <span style="font-weight: 1000;">Our Services</span>
                       <h2 style="font-weight: 1000;">Our Services</h2>
                   </div>

                   <div class="row gy-4">

                       <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                           <div class="card">
                               <div class="card-img">
                                   <img src="{{ asset('frontend/assets/img/event.png') }}" alt="" class="img-fluid">
                               </div>
                               <h3 style="font-weight: 1000;">Public Event</h3>
                               <p style="color: #000000; font-weight: 600;">Daftarkan Event Anda pada website kami,agar
                                   dapat dilihat oleh
                                   seluruh tenant yang ada di
                                   Indonesia.</p>
                           </div>
                       </div><!-- End Card Item -->

                       <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                           <div class="card">
                               <div class="card-img">
                                   <img src="{{ asset('frontend/assets/img/tenant.png') }}" alt=""
                                       class="img-fluid">
                               </div>
                               <h3 style="font-weight: 1000;">Pendaftaran Booth Tenant
                               </h3>
                               <p style="color: #000000; font-weight: 600;">Pada EventKuy Application,kami menyediakan
                                   layanan pendaftaran
                                   Tenant pada Event
                                   diseluruh indonesia yang terdaftar diwebsite kami.</p>
                           </div>
                       </div><!-- End Card Item -->

                       <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                           <div class="card">
                               <div class="card-img">
                                   <img src="{{ asset('frontend/assets/img/generate-code.png') }}" alt=""
                                       class="img-fluid">
                               </div>
                               <h3 style="font-weight: 1000;">Generate Code</h3>
                               <p style="color: #000000; font-weight: 600;">Buat QR Code anda untuk proses check-in atau
                                   identifikasi booth
                                   saat event berlangsung.
                               </p>
                           </div>
                       </div><!-- End Card Item -->

           </section>




           <!-- ======= Gallery Section ======= -->
           <section id="gallery">
               <div class="container" data-aos="fade-up">
                   <div class="section-header">
                       <span style="font-weight: 1000;">Gallery</span>
                       <h2 style="font-weight: 1000;">Gallery</h2>
                   </div>

               </div>
               <div class="container" data-aos="fade-up">
                   <div class="swiper gallery-slider">
                       <div class="swiper-wrapper">
                           <!-- Slide-start -->
                           <div class="swiper-slide gallery-slide">
                               <div class="gallery-slide-img">
                                   <img src="{{ asset('frontend/assets/img/features-1.jpg') }}" alt="Gallery">
                               </div>
                           </div>
                           <!-- Slide-end -->

                           <!--Slide-start-->
                           <div class="swiper-slide gallery-slide">
                               <div class="gallery-slide-img">
                                   <img src="{{ asset('frontend/assets/img/features-2.jpg') }}" alt="">
                               </div>
                           </div>
                           <!--Slide-end-->

                           <!--Slide-start-->
                           <div class="swiper-slide gallery-slide">
                               <div class="gallery-slide-img">
                                   <img src="{{ asset('frontend/assets/img/features-3.jpg') }}" alt="">
                               </div>
                           </div>
                           <!--Slide-end-->

                           <!--Slide-start-->
                           <div class="swiper-slide gallery-slide">
                               <div class="gallery-slide-img">
                                   <img src="{{ asset('frontend/assets/img/features-4.jpg') }}" alt="">
                               </div>
                           </div>
                           <!--Slide-end-->

                           <!--Slide-start-->
                           <div class="swiper-slide gallery-slide">
                               <div class="gallery-slide-img">
                                   <img src="{{ asset('frontend/assets/img/features-1.jpg') }}" alt="">
                               </div>
                           </div>
                           <!--Slide-end-->

                           <!--Slide-start-->
                           <div class="swiper-slide gallery-slide">
                               <div class="gallery-slide-img">
                                   <img src="{{ asset('frontend/assets/img/features-2.jpg') }}" alt="">
                               </div>
                           </div>
                           <!--Slide-end-->

                           <!--Slide-start-->
                           <div class="swiper-slide gallery-slide">
                               <div class="gallery-slide-img">
                                   <img src="{{ asset('frontend/assets/img/features-3.jpg') }}" alt="">
                               </div>
                           </div>
                           <!--Slide-end-->
                       </div>

                       <div class="gallery-slider-control">
                           <div class="swiper-button-prev slider-arrow">
                               <ion-icon name="arrow-back-outline"></ion-icon>
                           </div>
                           <div class="swiper-button-next slider-arrow">
                               <ion-icon name="arrow-forward-outline"></ion-icon>
                           </div>
                           <div class="swiper-pagination"></div>
                       </div>
                   </div>
               </div>
           </section>

           <!-- ======= Contact Section ======= -->
           <section id="contact" class="contact">
               <div class="container" data-aos="fade-up">
                   <div class="section-header">
                       <span style="font-weight: 1000;">Contact Us</span>
                       <h2 style="font-weight: 1000;">Contact Us</h2>
                   </div>

                   <div class="row">

                       <div class="col-lg-7 d-flex align-items-stretch">
                           <div class="info">
                               <div class="col-md-11 footer-contact">
                                   <img src="{{ asset('frontend/assets/img/MyEventLogoFooter.png') }}"
                                       alt=""width="100">
                                   <p style="color: #000000; font-weight: 600; ">
                                       MyEvent hadir membantu Anda dalam mengelola event dengan mudah dan efisien. Dengan
                                       platform kami, Anda dapat mendaftarkan booth tenant Anda secara cepat dan praktis.
                                       Nikmati pengalaman
                                       yang lancar dalam perencanaan dan pelaksanaan event Anda bersama platform kami.
                                   </p>
                               </div>

                               <div class="row">
                                   <div class="col-lg-6 col-md-6 footer-links">
                                       <h4 style="font-weight: 1000;">Useful Links</h4>
                                       <ul>
                                           <li><i class="fas fa-home" style="color: white; font-weight: 600;"></i> <a
                                                   href="index.html">Home</a></li>
                                           <li><i class="fas fa-info-circle" style="color: white; font-weight: 600;"></i>
                                               <a href="about.html">About
                                                   us</a>
                                           </li>
                                           <li><i class="fas fa-cogs" style="color: white; font-weight: 600;"></i> <a
                                                   href="services.html">Our
                                                   Services</a></li>
                                           <li><i class="fas fa-envelope" style="color: white; font-weight: 600;"></i> <a
                                                   href="contact.html">Contact</a>
                                           </li>

                                       </ul>
                                   </div>

                                   <div class="col-lg-6 col-md-6 footer-links">
                                       <h4 style="font-weight: 1000;">Our Services</h4>
                                       <ul>
                                           <li><i class="fas fa-calendar-alt" style="color: white; font-weight: 600;"></i>
                                               <a href="services.html">Public
                                                   vent</a>
                                           </li>
                                           <li><i class="fas fa-clipboard" style="color: white; font-weight: 600;"></i> <a
                                                   href="service.html">Pendaftaran Booth
                                                   Tenant</a></li>
                                           <li><i class="fas fa-barcode" style="color: white; font-weight: 600;"></i> <a
                                                   href="service.html">Generate Code</a>
                                           </li>
                                       </ul>
                                   </div>

                               </div>


                           </div>

                       </div>

                       <div class="contact col-lg-5 mt-5 mt-lg-0 d-flex align-items-stretch">
                           <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                               <div class="row">
                                   <div class="col-md-6">
                                       <div class="form-group">
                                           <label for="name" style="font-weight: 1000;">Your Name</label>
                                           <input type="text" name="name" class="form-control" id="name"
                                               required>
                                       </div>
                                   </div>
                                   <div class="col-md-6">
                                       <div class="form-group">
                                           <label for="email">Your Email</label>
                                           <input type="email" class="form-control" name="email" id="email"
                                               required>
                                       </div>
                                   </div>
                               </div>

                               <div class="form-group">
                                   <label for="message">Message</label>
                                   <textarea class="form-control" name="message" rows="8" required></textarea>
                               </div>
                               <div class="my-3">
                                   <div class="loading">Loading</div>
                                   <div class="error-message"></div>
                                   <div class="sent-message">Your message has been sent. Thank you!</div>
                               </div>
                               <div class="text-center">
                                   <button type="submit" style="font-weight: 900">Send Message</button>
                               </div>
                           </form>
                       </div>

                   </div>

               </div>


           </section>

       </main><!-- End #main -->
   @endsection
