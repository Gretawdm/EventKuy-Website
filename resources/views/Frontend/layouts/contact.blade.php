@extends('frontend/layouts.template')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Contact</h2>
                            <p>Kami berkomitmen untuk menyediakan layanan yang berkualitas dan responsif kepada pelanggan
                                kami.
                                Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan lebih lanjut tentang
                                layanan kami, ingin memulai proyek baru, atau ingin berdiskusi tentang potensi kerja sama
                                bisnis. Tim kami siap membantu Anda dengan senang hati dan akan berusaha untuk merespons
                                setiap pesan dengan cepat dan efisien.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div>
                    <iframe style="border:0; width: 100%; height: 340px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.4241018885855!2d113.72049837513613!3d-8.15995509187069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b617d8f623%3A0xf6c4437632474338!2sPoliteknik%20Negeri%20Jember!5e0!3m2!1sid!2sid!4v1711858083280!5m2!1sid!2sid"
                        frameborder="0" allowfullscreen></iframe>
                </div><!-- End Google Maps -->




            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
    @include('Frontend/layouts.footer')
@endsection
