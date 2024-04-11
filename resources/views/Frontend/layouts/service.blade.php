@extends('frontend/layouts.template')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Our Services</h2>
                            <p>Dengan Berbagai Layanan yang Komprehensif dan Solusi yang Disesuaikan, Kami Menawarkan
                                Pendekatan yang Holistik untuk Menyalurkan Event Anda yang Meriah, Meningkatkan
                                Pengunjung Event Anda, dan Mengundang Para Booth Tenant Dalam Kemeriahan Acara Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Our Services</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
                        <div>
                            <h4 class="title">Public Event</h4>
                            <p class="description">Mempublikasikan Acara Anda Kepada Layanan Publik.</p>

                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
                        <div>
                            <h4 class="title">Pendaftaran Booth Tenant</h4>
                            <p class="description">Para Booth Tenant Dapat Dengan Mudah Mencari dan Menemukan Berbagai Event
                                Yang Tersedia.</p>

                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
                        <div>
                            <h4 class="title">Generated Code</h4>
                            <p class="description">Kode Unik Untuk Proses Check-in Atau Identifikasi Booth
                            </p>

                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">
                <div class="section-header">
                    <span>Our Services</span>
                    <h2>Our Services</h2>

                </div>

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

                    <div class="col-md-5">
                        <img src="{{ asset('frontend/assets/img/service2.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7">
                        <h3>Mempublikasikan Acara Anda Kepada Layanan Publik </h3>
                        <p class="fst-italic">
                            Dengan dedikasi untuk menyediakan platform yang menyeluruh dan mudah
                            digunakan, kami di sini untuk mendukung Anda dalam proses mempublikasikan acara Anda kepada
                            layanan publik dengan cara yang efektif dan efisien. Melalui fitur-fitur kami yang inovatif
                            dan alat-alat yang dapat disesuaikan, website kami memungkinkan Anda untuk mengunggah
                            informasi acara dengan detail lengkap, termasuk tanggal, lokasi, deskripsi, dan
                            gambar-gambar menarik yang dapat menarik minat audiens potensial
                        </p>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="{{ asset('frontend/assets/img/service12.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1">
                        <h3>Para Booth Tenant Dapat Dengan Mudah Mencari dan Menemukan Berbagai Event Yang Tersedia </h3>
                        <p class="fst-italic">
                            Dengan navigasi yang intuitif dan fitur pencarian yang canggih, kami memungkinkan para booth
                            tenant
                            untuk menelusuri daftar event yang relevan dengan cepat dan efektif. Setelah menemukan event
                            yang cocok, para booth tenant dapat mengisi formulir pendaftaran secara online dengan mudah
                            melalui platform kami.
                        </p>
                        <p>
                            Fitur-fitur yang dapat disesuaikan dan fleksibel memungkinkan para
                            booth tenant untuk memberikan informasi yang diperlukan dengan detail lengkap, termasuk
                            profil perusahaan, produk atau layanan yang ditawarkan, serta preferensi lokasi dan ukuran
                            booth. Dengan proses pendaftaran yang terotomatisasi dan sistem yang terintegrasi dengan
                            baik, kami menyederhanakan dan mempercepat seluruh proses, memastikan bahwa para booth
                            tenant dapat mendaftar pada event yang tersedia dengan mudah dan efisien.
                        </p>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

                    <div class="col-md-5">
                        <img src="{{ asset('frontend/assets/img/barcodeservice.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7">
                        <h3>Kode Unik Untuk Proses Check-in Atau Identifikasi Booth</h3>
                        <p>Salah satu fitur unggulan yang kami tawarkan adalah kemampuan untuk
                            menghasilkan kode unik untuk proses check-in atau identifikasi booth saat acara telah tiba.
                            Dengan menggunakan alat yang mudah digunakan di dalam website kami, penyelenggara acara
                            dapat dengan cepat dan mudah membuat kode unik yang dapat dipersonalisasi sesuai dengan
                            preferensi mereka.</p>
                        <p>Selain itu, para booth tenant juga dapat dengan mudah mengakses dan mengelola
                            kode-kode mereka sendiri melalui platform kami, memungkinkan mereka untuk melakukan
                            persiapan yang diperlukan dan memastikan kesiapan booth mereka untuk acara yang akan datang.</p>
                    </div>
                </div><!-- Features Item -->

            </div>
        </section><!-- End Features Section -->
        @include('frontend/layouts.footer')

    </main><!-- End #main -->
@endsection
