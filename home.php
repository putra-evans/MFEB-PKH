<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/img/slide/kiarafm.png)">
                <div class="carousel-container">
                    <div class="container">
                        <h3 class="animate__animated animate__fadeInDown">“Sistem Pedukung Keputusan Pada Penyiar PT Radio Kiara
                            Indah Berjaya Padang Dengan Metode Multifactor Evaluation Process (MFEP)</h3>
                        <!-- <p class="animate__animated animate__fadeInUp">Menjadikan Lembaga Pendidikan Pelatihan Kejuruan bertaraf Nasional dan berwawasan lingkungan yang menghasilkan tamatan beriman dan bertaqwa kepada Tuhan Yang Maha Esa, profesional, mampu berwirausaha, handal, siap pakai, terampil dan siap berkompetensi.</p> -->
                        <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Baca</a> -->
                    </div>
                </div>
            </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About Us</h2>
                <p>TENTANG KAMI</p>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        Radio Satu-satunya yang ber format Minang di Kota Padang
                        Yang memberikan hiburan,imformasi dan ulasan buadaya Minangkabau
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">





        </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->

    <!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Board</h2>
                <p>Informasi</p>
            </div>

            <div class="row">
                <?php $berita = $db->tampilBerita();
                foreach ($berita as $pecah) :
                    #

                ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <img class="img-fluid mb-2" style="max-width: 100%;height: auto;" src="admin/images/berita/<?php echo $pecah['berita_gambar'] ?>" alt="kosong">
                            <h4><a href=""><?= $pecah['berita_judul'] ?></a></h4>
                            <p><?= substr($pecah['berita_isi'], 0, 50) ?>...</p>
                        </div>
                    </div>
                <?php endforeach; ?>



            </div>

        </div>
    </section><!-- End Services Section -->



    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="text-center">
                <h3>KIARA 96.7 FM</h3>

            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact Us</h2>
                <p>Kontak Kami</p>
            </div>

            <div class="row">

                <div class="col-lg-12">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Alamat</h3>
                                <p>Jl.Raya Lubuk Begalung No.6 Kota Padang, Sumatera Barat</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>kiarafm@yahoo.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>082389486309</p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->