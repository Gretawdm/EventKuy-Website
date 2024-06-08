@extends('frontend/layouts.template')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2 style="font-weight: 1000">About Us</h2>
                            <p style="font-weight: 600">My Event Merupakan Sebuah Platform Yang Dibangun Guna Mendorong
                                Peningkatan Ekonomi. Kami
                                Menghadirkan Inovasi Modern Yang Memungkinkan Pengguna untuk Menemukan Peluang dan
                                Mengembangkan Tenant Yang Di Miliki.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html" style="font-weight: 1000">Home</a></li>
                        <li style="font-weight: 1000">About Us</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                        <img src="{{ asset('frontend/assets/img/kananabout.png') }}" class="img-fluid" alt=""
                            style="max-width: none; max-height: 650px; width: auto; height: auto;">

                    </div>
                    <div class="col-lg-6 content order-last  order-lg-first">
                        <h3 style="font-weight: 1000">About Us</h3>
                        <p style="font-weight: 600">
                            Dengan Platform yang Mudah Digunakan dan Berorientasi Pengguna, My Event Memberdayakan Komunitas
                            untuk Para Pemilik Tenant Dapat Dengan Mudah Menemukan Event Di Sekitar Mereka dan Meraih Sukses
                            dalam Era Digital.
                        </p>

                        <ul>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-card-text"></i>
                                <div>
                                    <h5 style="font-weight: 900">Perekonomian</h5>
                                    <p style="font-weight: 600">Melalui platform kami, masyarakat dapat menemukan
                                        event-event menarik, termasuk acara-acara perekonomian, festival budaya, seminar,
                                        dan lainnya. Dengan begitu, My Event tidak hanya memudahkan akses informasi, tetapi
                                        juga membantu masyarakat untuk terlibat dalam berbagai kegiatan yang dapat
                                        memperkaya pengalaman dan memperluas jaringan sosial serta profesional mereka.</p>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-globe2"></i>
                                <div>
                                    <h5 style="font-weight: 900">Era Digital</h5>
                                    <p style="font-weight: 600">Saat ini, EventKuy hadir sebagai solusi yang memudahkan
                                        masyarakat untuk menemukan event terdekat di sekitar mereka. Tidak lagi perlu
                                        khawatir tentang ketinggalan informasi tentang rekrutmen tenant pada event besar.
                                        Dengan My Event, Anda dapat dengan mudah mengetahui event-event yang sedang
                                        berlangsung dan memiliki kesempatan untuk bergabung sebagai tenant. </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->


        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span style="font-weight: 1000">Beberapa Pertanyaan Terkait</span>
                    <h2 style="font-weight: 1000">Beberapa Pertanyaan Terkait</h2>

                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-10">

                        <div class="accordion accordion-flush" id="faqlist">

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        <i class="bi bi-question question-icon" style="font-weight: 900"></i>
                                        Bagaimana Cara Mendaftarkan Event Anda Pada Platform Kami?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body" style="font-weight: 600">
                                        jika anda ingin membuat event anda menjadi public/dapat ditemukan oleh semua orang
                                        ,anda cukup mendaftarkannya melalui website ini,buatlah akun terlebih dahulu sebelum
                                        anda login.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        <i class="bi bi-question question-icon " style="font-weight: 900"></i>
                                        Bagaimana Jika Saya Ingin Mendaftar Sebagai Tenant Di Event-Event Yang Tersedia?
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body" style="font-weight: 600">
                                        jika anda ingin mendaftar sebagai tenant,maka anda harus mendowload aplikasi
                                        My Event yang tersedia di playstore. Disana anda bisa melakukan pendaftaran booth
                                        tenant serta mencari event-event terdekat disekitar anda.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        <i class="bi bi-question question-icon" style="font-weight: 900"></i>
                                        Apakah Ada Validasi Agar Tidak Terjadi Penipuan Terhadap Acara Yang Terselanggar?
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body" style="font-weight: 600">
                                        tentu saja ada,EventKuy sebelum mempublic suatu event tentunya memastikan apakah
                                        event tersebut benar adanya. Jadi jangan ragu untuk menggunakan platform kami.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

    </main><!-- End #main -->

    @include('frontend/layouts.footer')
@endsection
