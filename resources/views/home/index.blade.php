@extends('welcome')
@section('title', 'Home')
@section('content')
    <!-- Hero
                                                                                                                                  ============================================= -->
    <section id="slider" class="slider-element dark min-vh-md-100 min-vh-75 include-header">
        <div class="slider-inner"
            style="background-image: linear-gradient(to bottom, rgba(0,0,0,.5), rgba(0,0,0,.3)), url('https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1703784802/hero_htezkm.jpg');background-position: 50% 0;">
            <div class="container">

                <div class="vertical-middle">
                    <div class="row mt-6">
                        <div class="col-md-6">
                            <div
                                class="before-title text-border-right position-relative text-uppercase ls-3 text-smaller overflow-hidden mb-4 op-04 b-w-50">
                                RUN Statistik</div>
                            <h2 class="display-4 fw-bold">Solusi Analisis Dan Pengolahan Data Anda</h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Content
                                                                                                                                ============================================= -->
    <section id="content">
        <div class="content-wrap overflow-visible py-0">

            <div class="container">

                <div class="service-feature w-100 mb-4 mt-5 mt-lg-0">

                    <div class="row justify-content-center gx-3">

                        <div class="col-lg-3 mb-4 mb-lg-0">
                            <div
                                class="grid-inner shadow-sm h-shadow bg-white p-5 overflow-hidden rounded-5 text-center shadow-ts">
                                <div class="f-b-desc">
                                    <i class="material-symbols-outlined display-5 color mb-3">gavel</i>
                                    <h3 class="h5 mb-0 fw-bold">Why choose Us</h3>
                                </div>
                                <a href="#" class="more-link fst-normal color">View Details</a>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4 mb-lg-0">
                            <div
                                class="grid-inner shadow-sm h-shadow bg-white p-5 overflow-hidden rounded-5 text-center shadow-ts">
                                <div class="f-b-desc">
                                    <i class="material-symbols-outlined display-5 color mb-3">outlined_flag</i>
                                    <h3 class="h5 mb-0 fw-bold">Our Mission</h3>
                                </div>
                                <a href="#" class="more-link fst-normal color">Learn More</a>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div
                                class="grid-inner shadow-sm h-shadow bg-white p-5 overflow-hidden rounded-5 text-center shadow-ts">
                                <div class="f-b-desc">
                                    <i class="material-symbols-outlined display-5 color mb-3">date_range</i>
                                    <h3 class="h5 mb-0 fw-bold">Contact Us</h3>
                                </div>
                                <a href="#" class="more-link fst-normal color">Get in Touch</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="clear"></div>

                <div class="row align-items-center justify-content-center mt-6 mt-lg-0 mb-4">
                    <div class="col-lg-5 col-10 px-5">
                        <div class="lady-justice-img position-relative">
                            <img src="https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1703784801/lady-justice_x6ofqv.jpg"
                                alt="Image" class="rounded">
                        </div>
                    </div>
                    <div class="col-lg-5 p-5">
                        <i class="material-symbols-outlined display-4 color mb-3">verified</i>
                        <h2 class="h1 fw-bold lh-sm">Tujuan RUN Statistik adalah
                            Membantu masyarakat untuk <span class="stabiloPenting">mengelola data</span> dan menggunakannya
                            untuk membuat keputusan yang lebih baik.
                        </h2>
                        <h4 class="mt-4 fw-normal lh-base" style="line-height: 1.75 !important;">Data adalah aset yang
                            berharga bagi masyarakat,dengan data yang tepat, masyarakat dapat mengetahui tren yang sedang
                            terjadi, memprediksi yang akan terjadi kedepannya, dan membuat keputusan yang lebih tepat.
                        </h4>

                        <a href="https://wa.me/6283121102969"
                            class="btn py-3 px-4 mt-2 rounded-1 btn-dark bg-color h-op-09">Yuk Konsultasi <i
                                class="material-symbols-outlined align-middle mb-0 ms-1">arrow_right_alt</i></a>
                    </div>
                </div>

            </div>

            <div class="clear"></div>

            <div id="section-contact" class="section bg-color dark mt-0"
                style="background-image: linear-gradient(to bottom, rgba(var(--cnvs-themecolor-rgb),.8), rgba(var(--cnvs-themecolor-rgb),1)), url('https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1703784802/bg-2_dbnoga.jpg'); background-attachment: fixed; background-size: cover;">
                <div class="container py-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="form-widget" data-alert-type="false">

                                <div class="form-result"></div>
                                <div class="lawfirm-inline-loader css3-spinner" style="position: absolute;">
                                    <div class="css3-spinner-bounce1"></div>
                                    <div class="css3-spinner-bounce2"></div>
                                    <div class="css3-spinner-bounce3"></div>
                                </div>
                                <div id="lawfirm-inline-submitted" class="text-center">
                                    <h4 class="fw-normal mb-0 h3 lh-base">Thank You for Contact Us! <br> Our Team
                                        will contact you asap on your email Address.</h4>
                                </div>

                                <form class="mb-0" id="lawfirm-inline" name="lawfirm-inline" action="include/form.php"
                                    method="post" enctype="multipart/form-data">

                                    <div class="row">

                                        <div class="before-title text-uppercase ls-3 text-smaller mb-3 op-05">Cari
                                            joki?</div>

                                        <div class="col-12 mb-4">
                                            <label for="lawfirm-inline-lawyer">
                                                Saya ingin mencari bantuan dari Run Statistik untuk mengerjakan data dalam
                                                bidang
                                                <select class="required form-select" name="lawfirm-inline-lawyer"
                                                    id="lawfirm-inline-lawyer">
                                                    <option value="Bisnis" selected>Bisnis</option>
                                                    <option value="Akademik" selected>Akademik</option>
                                                    <option value="Instansi Negeri" selected>Instansi Negeri</option>
                                                    <option value="Instansi Swasta" selected>Instansi Swasta</option>
                                                    <option value="Komunitas" selected>Komunitas</option>
                                                </select>
                                                yang berlokasi di
                                                <select class="required form-select" name="lawfirm-inline-industry"
                                                    id="lawfirm-inline-industry">
                                                    <option value="Indonesia" selected>Indonesia</option>
                                                </select>
                                                . Saya dapat dihubungi melalui
                                                email

                                                <input type="email" value="" class="form-control required"
                                                    id="lawfirm-inline-email" name="lawfirm-inline-email"
                                                    placeholder="email address">.
                                            </label>

                                        </div>

                                        <div class="col-12 d-none">
                                            <input type="text" id="lawfirm-inline-botcheck"
                                                name="lawfirm-inline-botcheck" value="">
                                        </div>
                                        <div class="col-12 text-center">
                                            <button type="submit" name="lawfirm-inline-submit"
                                                class="btn btn-lg py-3 px-6 mt-2 rounded-1 btn-light h-op-09">Send
                                                Now</button>
                                        </div>

                                        <input type="hidden" name="prefix" value="lawfirm-inline-">

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section py-6 mb-0">
                <div class="container">
                    <div class="row justify-content-between align-items-center col-mb-30">
                        <div class="col-lg-4">
                            <div class="d-flex mb-2">
                                <i class="bi-star-fill h5 me-1 text-info"></i>
                                <i class="bi-star-fill h5 me-1 text-info"></i>
                                <i class="bi-star-fill h5 me-1 text-info"></i>
                                <i class="bi-star-fill h5 me-1 text-info"></i>
                                <i class="bi-star-fill h5 me-1 text-info"></i>
                            </div>
                            <h3 class="h3 font-secondary fw-bold mb-4">Apa ya review dari teman-teman yang sudah
                                menggunakan jasa kami</h3>
                        </div>

                        <div class="col-lg-7">
                            <div class="row row-cols-1 row-cols-md-2 g-4 align-items-center">
                                <div class="col">
                                    <div class="card rounded-6 overflow-hidden mb-4">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="mb-4 font-secondary">RUN Statistik adalah penyelamat
                                                        untuk proyek akhir saya! Tim mereka sangat ramah dan sabar,
                                                        membimbing saya melalui setiap langkah analisis. Mereka bahkan
                                                        membantu saya menafsirkan hasil dengan cara yang masuk akal untuk
                                                        presentasi saya. Saya mendapat nilai A! Terima kasih, Statistik Batu
                                                        Jaya!</p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle me-3"
                                                        src="{{ asset('webpage/demos/articles/images/authors/2.jpg') }}"
                                                        width="48" height="48" alt="Customer Testimonails">
                                                    <div>
                                                        <h4 class="h6 mb-0 fw-medium"><a href="#">Hafiz
                                                                Kurniawan</a>
                                                        </h4>
                                                        <small class="text-muted">10 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-icon bi-star-fill op-02"></div>
                                    </div>

                                    <div class="card rounded-6 overflow-hidden">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="mb-4 font-secondary">Saya sudah berkecimpung di dunia data
                                                        selama bertahun-tahun, dan saya telah melihat banyak perusahaan
                                                        analisis data. RUN Statistik menonjol dari keramaian. Tim
                                                        mereka adalah yang terbaik, teknologi mereka mutakhir, dan hasil
                                                        mereka selalu dapat ditindaklanjuti. Mereka membantu kami
                                                        mengidentifikasi tren utama dalam data pelanggan kami yang akan kami
                                                        lewatkan jika tidak. Kami sudah melihat dampak positif pada laba
                                                        kami.</p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle me-3"
                                                        src="{{ asset('webpage/demos/articles/images/authors/1.jpg') }}"
                                                        width="48" height="48" alt="Customer Testimonails">
                                                    <div>
                                                        <h4 class="h6 mb-0 fw-medium"><a href="#">Yohanes</a>
                                                        </h4>
                                                        <small class="text-muted">15 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-icon bi-star-fill op-02"></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card rounded-6 overflow-hidden">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="mb-4 font-secondary">Awalnya saya ragu untuk mengalihdayakan
                                                        analisis data kami, tetapi RUN Statistik dengan cepat
                                                        memenangkan saya. Tim ahli statistik mereka memahami kompleksitas
                                                        penelitian kami dan dapat memberikan wawasan mendalam yang tidak
                                                        dapat kami capai sendiri. Mereka juga sangat teliti dalam
                                                        dokumentasi dan komunikasi mereka, memastikan bahwa kami selalu
                                                        sejalan. Saya sangat merekomendasikan RUN Statistik kepada
                                                        peneliti yang membutuhkan analisis data yang andal dan berkualitas
                                                        tinggi.</p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle me-3"
                                                        src="{{ asset('webpage/demos/articles/images/authors/3.jpg') }}"
                                                        width="48" height="48" alt="Customer Testimonails">
                                                    <div>
                                                        <h4 class="h6 mb-0 fw-medium"><a href="#">Rahmawati</a>
                                                        </h4>
                                                        <small class="text-muted">24 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-icon bi-star-fill op-02"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section my-0 dark py-6" style="background-color: #000;">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 align-self-center mb-6">
                            <h3 class="h2 font-secondary fw-bold mb-4 lh-base">Mengapa Menggunakan Jasa Statistik
                                Batu Jaya?</h3>
                            <p class="mb-5"><span class="stabiloPenting">Run Statistik</span> adalah
                                perusahaan yang menyediakan jasa pengolahan data untuk semua kebutuhan
                                Anda. Kami memiliki tim ahli yang berpengalaman dan bersertifikat, serta menggunakan
                                teknologi dan metodologi terbaru untuk memberikan layanan yang berkualitas.
                                <br><br>
                                Berikut adalah beberapa alasan mengapa pengguna/calon client harus menggunakan jasa Run
                                Statistik
                            </p>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="material-symbols-outlined text-info fs-2 mb-0">admin_panel_settings</i>
                                        <h3 class="h6 fw-bold ms-2 mb-0">Tim ahli yang berpengalaman dan
                                            bersertifikat</h3>
                                    </div>
                                    <p class="text-white op-06">Kami memiliki tim ahli yang memiliki pengalaman dan
                                        pengetahuan yang luas di bidang statistik. Mereka telah terlatih dan tersertifikasi
                                        dalam berbagai bidang, termasuk analisis dan pengolahan data, pemrograman data,
                                        visualisasi data, dan konsultansi data</p>
                                </div>

                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="material-symbols-outlined text-info fs-2 mb-0">qr_code_scanner</i>
                                        <h3 class="h6 fw-bold ms-2 mb-0">Teknologi dan metodologi terbaru</h3>
                                    </div>
                                    <p class="text-white op-06">Kami menggunakan teknologi dan metodologi terbaru untuk
                                        memberikan layanan yang berkualitas. Kami selalu mengikuti perkembangan terbaru di
                                        bidang statistik, sehingga kami dapat memberikan solusi yang paling sesuai dengan
                                        kebutuhan Anda.
                                    </p>
                                </div>

                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="material-symbols-outlined text-info fs-2 mb-0">support_agent</i>
                                        <h3 class="h6 fw-bold ms-2 mb-0">Layanan yang komprehensif</h3>
                                    </div>
                                    <p class="text-white op-06">Kami menawarkan berbagai layanan data yang dapat membantu
                                        Anda dalam mencapai tujuan bisnis atau pribadi. Layanan kami meliputi analisis data
                                        dan pengolahan data, pemrograman data, visualisasi data, dan konsultansi data.
                                    </p>
                                </div>

                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="material-symbols-outlined text-info fs-2 mb-0">finance_chip</i>
                                        <h3 class="h6 fw-bold ms-2 mb-0">Harga yang kompetitif</h3>
                                    </div>
                                    <p class="text-white op-06">Kami menawarkan harga yang kompetitif untuk semua layanan
                                        kami. Kami memahami bahwa anggaran adalah hal yang penting, sehingga kami berusaha
                                        untuk memberikan layanan yang berkualitas dengan harga yang terjangkau.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-7 mx-auto">
                            <img src="{{ asset('webpage/demos/law-firm/images/lawyer.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mw-md">
                <div class="position-relative p-5 mb-4 z-3 rounded shadow bg-white service-feature mt-5 mt-lg-0">
                    <div class="row align-items-center justify-content-center grid-border">
                        <div class="col-lg-4 text-center mb-5 mb-lg-0">
                            <div class="counter color fw-normal mb-2"><span class="display-4 fw-bold" data-from="50"
                                    data-to="9859" data-refresh-interval="50" data-speed="2000"></span>+</div>
                            <h5 class="mb-0 h6 text-transform-none">Jobs Done</h5>
                        </div>

                        <div class="col-lg-4 text-center mb-5 mb-lg-0">
                            <div class="counter color fw-normal mb-2"><span class="display-4 fw-bold" data-from="0"
                                    data-to="4" data-refresh-interval="3" data-speed="2000"></span>+</div>
                            <h5 class="mb-0 h6 text-transform-none">Years of Experience</h5>
                        </div>

                        <div class="col-lg-4 text-center">
                            <div class="counter color fw-normal mb-2"><span class="display-4 fw-bold" data-from="100"
                                    data-to="10247" data-refresh-interval="100" data-speed="2000"></span>+</div>
                            <h5 class="mb-0 h6 text-transform-none">Happy Clients</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section mt-6 mb-0" style="background-color: #f1f3f7">
                <div class="container">
                    <div class="row align-items-center justify-content-center col-mb-30 mx-md mx-auto">
                        <div class="col-sm-12 col-md">
                            <h3 class="h3 font-secondary fw-semibold mb-0">Uji Apa Aja, Uji Lebih Mudah!
                            </h3>
                        </div>
                        <div class="col-sm-12 col-md-auto">
                            <a href="https://wa.me/6283121102969" target="_blank" data-easing="easeInOutExpo"
                                data-speed="1250" data-offset="88"
                                class="btn py-3 px-5 rounded-1 btn-dark bg-color h-op-09 m-0">Contact Us <span
                                    class="material-symbols-outlined align-middle mb-1 ms-1">trending_flat</span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #content end -->
@endsection
