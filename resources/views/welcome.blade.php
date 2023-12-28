<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="runstatistik" />
    <meta name="description"
        content="Tuntaskan tugasmu, dengan mempercayakan kepada kami dalam pengerjaan skripsi, jurnal, pengolahan data, perbaikin data, design, powerpoint, dan lain lain" />
    <meta name="keywords" content="runstatistik" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="copyright" content="runstatistik">
    <meta name="url" content="{{ Request::url() }}">
    <meta name="identifier-URL" content="{{ Request::url() }}">

    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&family=Merriweather:wght@400;700&family=Material+Symbols+Outlined&display=swap"
        rel="stylesheet">

    <!-- Core Style -->
    <link rel="stylesheet" href="{{ asset('webpage/style.css') }}">

    <!-- Font Icons -->
    <link rel="stylesheet" href="{{ asset('webpage/css/font-icons.css') }}">

    <!-- Niche Demos -->
    <link rel="stylesheet" href="{{ asset('webpage/demos/law-firm/law-firm.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('webpage/css/custom.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SITE TITLE -->
    <title>RUN Statistik</title>

    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="icon" href="{{ asset('webpage/asset/kkt-icon.png') }}" type="image/png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('webpage/asset/kkt-logo.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('webpage/asset/kkt-logo.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('webpage/asset/kkt-logo.png') }}">

    {{-- Meta --}}
    <meta name="og:title" property="og:title" content="runstatistik" />
    <meta name="og:url" property="og:url" content="{{ Request::url() }}" />
    <meta name="og:type" property="og:type" content="website" />
    <meta name="og:image" property="og:image" content="{{ asset('webpage/asset/tag-cover.jpg') }}" />
    <meta name="og:description" property="og:description"
        content="Tuntaskan tugasmu, dengan mempercayakan kepada kami dalam pengerjaan skripsi, jurnal, pengolahan data, perbaikin data, design, powerpoint, dan lain lain" />
    <meta name="twitter:card" content="runstatistik" />
    <meta name="twitter:title" property="og:title" content="runstatistik" />
    <meta name="twitter:url" property="og:url" content="{{ Request::url() }}" />
    <meta name="twitter:type" property="og:type" content="website" />
    <meta name="twitter:image" property="og:image" content="{{ asset('webpage/asset/tag-cover.jpg') }}" />
    <meta name="twitter:description" property="og:description"
        content="Tuntaskan tugasmu, dengan mempercayakan kepada kami dalam pengerjaan skripsi, jurnal, pengolahan data, perbaikin data, design, powerpoint, dan lain lain" />
    <link rel="canonical" href="{{ Request::url() }}/" />
    <link rel="shortcut icon" href="{{ asset('webpage/asset/kkt-icon.png') }}" type="image/png" sizes="64x64" />
    <meta name="og:email" content="info@runstatistik.com" />
    <meta name="og:locality" content="DKI Jakarta" />
    <meta name="og:region" content="ID" />
    <meta name="og:postal-code" content="11480" />
    <meta name="og:country-name" content="Indonesia" />

</head>

<body class="stretched">

    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper">

        <!-- Header
  ============================================= -->
        <header id="header" class="transparent-header dark">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row align-items-lg-start justify-content-between py-lg-4">

                        <!-- Logo
      ============================================= -->
                        <div id="logo" class="col-xl-2 col-md-3 col-6 align-items-lg-start py-4">
                            <a href="#">
                                <img class="logo-default" src="{{ asset('webpage/asset/kkt-logo.png') }}"
                                    alt="Canvas Logo">
                            </a>
                        </div><!-- #logo end -->

                        <!-- Primary Menu In Large Screen
      ============================================= -->
                        <div class="col-auto d-none d-lg-flex py-2">
                            <div class="row gx-5 large-device-menu-wrap">
                                <div class="col-auto large-device-menu">
                                    <a class="text-white op-09 h-op-1" href="/about">
                                        <div>Who We Are</div>
                                    </a>
                                    </a>
                                    <a class="text-white op-09 h-op-1" href="#">
                                        <div>Contact Us</div>
                                    </a>

                                </div>
                                <div class="col-auto">
                                    <a href="https://wa.me/6283121102969" data-scrollto="#section-contact"
                                        data-easing="easeInOutExpo" data-speed="1250" data-offset="88"
                                        class="btn px-3 py-2 btn-dark h-bg-light h-text-dark d-inline-block op-09 h-op-1"
                                        style="background-color: rgba(255,255,255,0.2)">Free Consultation</a>
                                </div>
                            </div>
                        </div>

                        <!-- Primary Menu Trigger for Devices
      ============================================= -->
                        <div class="primary-menu-trigger">
                            <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                                <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                            </button>
                        </div>

                        <!-- Primary Menu In Mobile
      ============================================= -->
                        <nav class="primary-menu d-block d-lg-none">

                            <ul class="menu-container">
                                <li class="menu-item"><a class="menu-link h-text-info" href="#">
                                        <div>Who We Are</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link h-text-info" href="#">
                                        <div>Recent Cases</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link h-text-info" href="#">
                                        <div>Contacts</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link text-info"
                                        href="https://wa.me/6283121102969">
                                        <div>Free Consultation</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->
                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <!-- Hero
  ============================================= -->
        <section id="slider" class="slider-element dark min-vh-md-100 min-vh-75 include-header">
            <div class="slider-inner"
                style="background-image: linear-gradient(to bottom, rgba(0,0,0,.5), rgba(0,0,0,.3)), url('{{ asset('webpage/demos/law-firm/images/hero.jpg') }}');background-position: 50% 0;">
                <div class="container">

                    <div class="vertical-middle">
                        <div class="row mt-6">
                            <div class="col-md-6">
                                <div
                                    class="before-title text-border-right position-relative text-uppercase ls-3 text-smaller overflow-hidden mb-4 op-04 b-w-50">
                                    RUN Statistik</div>
                                <h2 class="display-4 fw-bold">Solusi Data Lengkap untuk Bisnis Anda</h2>
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
                                <img src="{{ asset('webpage/demos/law-firm/images/lady-justice.jpg') }}"
                                    alt="Image" class="rounded">
                            </div>
                        </div>
                        <div class="col-lg-5 p-5">
                            <i class="material-symbols-outlined display-4 color mb-3">verified</i>
                            <h2 class="h1 fw-bold lh-sm">Tujuan RUN Statistik adalah
                                Membantu masyarakat untuk <span class="stabiloPenting">memahami data</span> dan
                                menggunakannya untuk membuat keputusan yang lebih baik.
                            </h2>
                            <h4 class="mt-4 fw-normal lh-base" style="line-height: 1.75 !important;">Data adalah aset
                                yang berharga bagi masyarakat. Dengan data yang tepat, masyarakat dapat mengetahui tren
                                yang sedang terjadi, memprediksi masa depan, dan membuat keputusan yang lebih tepat.
                            </h4>

                            <a href="https://wa.me/6283121102969"
                                class="btn py-3 px-4 mt-2 rounded-1 btn-dark bg-color h-op-09">Yuk Konsultasi <i
                                    class="material-symbols-outlined align-middle mb-0 ms-1">arrow_right_alt</i></a>
                        </div>
                    </div>

                </div>

                <div class="clear"></div>

                <div id="section-contact" class="section bg-color dark mt-0"
                    style="background-image: linear-gradient(to bottom, rgba(var(--cnvs-themecolor-rgb),.8), rgba(var(--cnvs-themecolor-rgb),1)), url('{{ asset('webpage/demos/law-firm/images/bg-1.jpg') }}'); background-attachment: fixed; background-size: cover;">
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

                                    <form class="mb-0" id="lawfirm-inline" name="lawfirm-inline"
                                        action="include/form.php" method="post" enctype="multipart/form-data">

                                        <div class="row">

                                            <div class="before-title text-uppercase ls-3 text-smaller mb-3 op-05">Cari
                                                joki?</div>

                                            <div class="col-12 mb-4">
                                                <label for="lawfirm-inline-lawyer">
                                                    Saya ingin mencari bantuan dari Statistik Batu Jaya untuk
                                                    mengerjakan data dalam bidang
                                                    <select class="required form-select" name="lawfirm-inline-lawyer"
                                                        id="lawfirm-inline-lawyer">
                                                        <option value="Instansi" selected>Instansi</option>
                                                        <option value="Swasta" selected>Swasta</option>
                                                        <option value="Negeri" selected>Negeri</option>
                                                        <option value="Akademisi" selected>Akademisi</option>
                                                    </select>
                                                    yang berlokasi di
                                                    <select class="required form-select"
                                                        name="lawfirm-inline-industry" id="lawfirm-inline-industry">
                                                        <option value="Medan" selected>Medan</option>
                                                        <option value="Jakarta">Jakarta</option>
                                                        <option value="Bandung">Bandung</option>
                                                    </select>
                                                    . Saya dapat dihubungi melalui
                                                    email

                                                    <input type="email" value=""
                                                        class="form-control required" id="lawfirm-inline-email"
                                                        name="lawfirm-inline-email" placeholder="email address">.
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
                                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis
                                    quibusdam possimus aut itaque quo ex et dignissimos fuga animi id.</p>
                            </div>

                            <div class="col-lg-7">
                                <div class="row row-cols-1 row-cols-md-2 g-4 align-items-center">
                                    <div class="col">
                                        <div class="card rounded-6 overflow-hidden mb-4">
                                            <div class="card-body p-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p class="mb-4 font-secondary">Lorem ipsum dolor sit amet
                                                            consectetur adipisicing elit. Deserunt, ipsam! Voluptas iure
                                                            explicabo blanditiis ullam neque possimus sit libero ex
                                                            alias pariatur, earum quam veniam voluptatum expedita quos
                                                            aspernatur dolor?</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <img class="rounded-circle me-3"
                                                            src="{{ asset('webpage/demos/articles/images/authors/2.jpg') }}"
                                                            width="48" height="48"
                                                            alt="Customer Testimonails">
                                                        <div>
                                                            <h4 class="h6 mb-0 fw-medium"><a
                                                                    href="https://themeforest.net/ratings/3295792">Shartois</a>
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
                                                        <p class="mb-4 font-secondary">Lorem ipsum dolor sit amet
                                                            consectetur adipisicing elit. Deserunt, ipsam! Voluptas iure
                                                            explicabo blanditiis ullam neque possimus sit libero ex
                                                            alias pariatur, earum quam veniam voluptatum expedita quos
                                                            aspernatur dolor?</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <img class="rounded-circle me-3"
                                                            src="{{ asset('webpage/demos/articles/images/authors/1.jpg') }}"
                                                            width="48" height="48"
                                                            alt="Customer Testimonails">
                                                        <div>
                                                            <h4 class="h6 mb-0 fw-medium"><a
                                                                    href="https://themeforest.net/ratings/3297954">Framex</a>
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
                                                        <p class="mb-4 font-secondary">Lorem ipsum dolor sit amet
                                                            consectetur adipisicing elit. Deserunt, ipsam! Voluptas iure
                                                            explicabo blanditiis ullam neque possimus sit libero ex
                                                            alias pariatur, earum quam veniam voluptatum expedita quos
                                                            aspernatur dolor?</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <img class="rounded-circle me-3"
                                                            src="{{ asset('webpage/demos/articles/images/authors/3.jpg') }}"
                                                            width="48" height="48"
                                                            alt="Customer Testimonails">
                                                        <div>
                                                            <h4 class="h6 mb-0 fw-medium"><a
                                                                    href="https://themeforest.net/ratings/3304063">JasonJSW</a>
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
                                <p class="mb-5"><span class="stabiloPenting">Statistik Batu Jaya</span> adalah
                                    perusahaan yang menyediakan solusi data
                                    lengkap untuk bisnis dan masyarakat. Kami memiliki tim ahli yang berpengalaman dan
                                    bersertifikat, serta menggunakan teknologi dan metodologi terbaru untuk memberikan
                                    layanan yang berkualitas.
                                    <br><br>
                                    Berikut adalah beberapa alasan mengapa pengguna/calon client harus menggunakan jasa
                                    Statistik Batu Jaya
                                </p>
                                <div class="row g-4">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <i
                                                class="material-symbols-outlined text-info fs-2 mb-0">admin_panel_settings</i>
                                            <h3 class="h6 fw-bold ms-2 mb-0">Tim ahli yang berpengalaman dan
                                                bersertifikat</h3>
                                        </div>
                                        <p class="text-white op-06">Kami memiliki tim ahli yang memiliki pengalaman dan
                                            pengetahuan yang luas di bidang statistik. Mereka telah terlatih dan
                                            tersertifikasi dalam berbagai bidang, termasuk analisis data, olah data,
                                            pemrograman data, visualisasi data, dan konsultansi data.</p>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <i
                                                class="material-symbols-outlined text-info fs-2 mb-0">qr_code_scanner</i>
                                            <h3 class="h6 fw-bold ms-2 mb-0">Teknologi dan metodologi terbaru</h3>
                                        </div>
                                        <p class="text-white op-06">Kami menggunakan teknologi dan metodologi terbaru
                                            untuk memberikan layanan yang berkualitas. Kami selalu mengikuti
                                            perkembangan terbaru di bidang statistik, sehingga kami dapat memberikan
                                            solusi yang paling sesuai dengan kebutuhan Anda.</p>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="material-symbols-outlined text-info fs-2 mb-0">support_agent</i>
                                            <h3 class="h6 fw-bold ms-2 mb-0">Layanan yang komprehensif</h3>
                                        </div>
                                        <p class="text-white op-06">Kami menawarkan berbagai layanan data yang dapat
                                            membantu Anda mencapai tujuan bisnis atau pribadi Anda. Layanan kami
                                            meliputi analisis data, olah data, pemrograman data, visualisasi data, dan
                                            konsultansi data.
                                        </p>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="material-symbols-outlined text-info fs-2 mb-0">finance_chip</i>
                                            <h3 class="h6 fw-bold ms-2 mb-0">Harga yang kompetitif</h3>
                                        </div>
                                        <p class="text-white op-06">Kami menawarkan harga yang kompetitif untuk semua
                                            layanan kami. Kami memahami bahwa anggaran adalah hal yang penting, sehingga
                                            kami berusaha untuk memberikan layanan yang berkualitas dengan harga yang
                                            terjangkau.</p>
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
                                <div class="counter color fw-normal mb-2"><span class="display-4 fw-bold"
                                        data-from="50" data-to="9859" data-refresh-interval="50"
                                        data-speed="2000"></span>+</div>
                                <h5 class="mb-0 h6 text-transform-none">Jobs Done</h5>
                            </div>

                            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                                <div class="counter color fw-normal mb-2"><span class="display-4 fw-bold"
                                        data-from="0" data-to="4" data-refresh-interval="3"
                                        data-speed="2000"></span>+</div>
                                <h5 class="mb-0 h6 text-transform-none">Years of Experience</h5>
                            </div>

                            <div class="col-lg-4 text-center">
                                <div class="counter color fw-normal mb-2"><span class="display-4 fw-bold"
                                        data-from="100" data-to="10247" data-refresh-interval="100"
                                        data-speed="2000"></span>+</div>
                                <h5 class="mb-0 h6 text-transform-none">Happy Clients</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section mt-6 mb-0" style="background-color: #f1f3f7">
                    <div class="container">
                        <div class="row align-items-center justify-content-center col-mb-30 mx-md mx-auto">
                            <div class="col-sm-12 col-md">
                                <h3 class="h3 font-secondary fw-semibold mb-0">Jangan malu untuk <span
                                        class="border-bottom border-warning border-width-3">Berdiskusi langsung</span>!
                                </h3>
                            </div>
                            <div class="col-sm-12 col-md-auto">
                                <a href="https://wa.me/6283121102969" data-scrollto="#section-contact"
                                    data-easing="easeInOutExpo" data-speed="1250" data-offset="88"
                                    class="btn py-3 px-5 rounded-1 btn-dark bg-color h-op-09 m-0">Contact Us <span
                                        class="material-symbols-outlined align-middle mb-1 ms-1">trending_flat</span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- #content end -->

        <!-- Footer
  ============================================= -->
        <footer id="footer" class="bg-color dark border-warning">
            <div class="container">

                <!-- Footer Widgets
    ============================================= -->
                <div class="footer-widgets-wrap">

                    <div class="row col-mb-50">
                        <div class="col-lg-5 col-sm-6">

                            <div class="widget">

                                <h5 class="mb-2 h6"><i
                                        class="material-symbols-outlined fs-5 text-info mb-0 align-middle me-3">share_location</i>Headquarters:
                                </h5>
                                <address class="ms-4 ps-3 font-secondary text-info">
                                    Jl. Banten Baru, No. 144<br>Tj Gusta, Medan
                                </address>

                                <h5 class="mb-3 h6"><i
                                        class="material-symbols-outlined fs-5 text-info mb-0 align-middle me-3">schedule</i>Mon
                                    - Fri: 10:00 - 18:00</h5>
                                <h5 class="mb-3 h6"><i
                                        class="material-symbols-outlined fs-5 text-info mb-0 align-middle me-3">call</i>+62
                                    831 2110 2969</h5>
                                <h5 class="mb-0 h6"><i
                                        class="material-symbols-outlined fs-5 text-info mb-0 align-middle me-3">alternate_email</i>info@runstatistik.com
                                </h5>

                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <div class="widget widget_links">

                                <h4>Supports</h4>

                                <ul>
                                    <li><a href="/contact">Contact Us</a></li>
                                    <li><a href="/about">About Us</a></li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <div class="widget widget_links widget-li-noicon">

                                <ul>
                                    {{-- <li><a href="/smm/facebook" class="d-flex align-items-center"><i
                                                class="fa-brands fa-facebook-f h5 text-info text-center mb-0 me-3"
                                                style="width: 1.5rem;"></i> Facebook</a></li> --}}
                                    <li><a href="/smm/instagram" class="d-flex align-items-center"><i
                                                class="fa-brands fa-instagram h5 text-info text-center mb-0 me-3"
                                                style="width: 1.5rem;"></i> Instagram</a></li>
                                    <li><a href="mailto:runstatistik@gmail.com" class="d-flex align-items-center"><i
                                                class="bi-envelope h5 text-info text-center mb-0 me-3"
                                                style="width: 1.5rem;"></i> Gmail</a></li>
                                </ul>

                            </div>
                        </div>

                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>

            <!-- Copyrights
   ============================================= -->
            <div id="copyrights">
                <div class="container">

                    <div class="row col-mb-30 align-items-center">

                        <div class="col-md-6 text-center text-md-start">
                            <?php $y = date('Y'); ?>
                            Copyrights &copy; {{ $y }} <a href="/"
                                style="color: #fff;">RUNStatistik</a>. All Rights Reserved by <a
                                href="https://runstatistik.com" target="_blank" style="color: #fff;">Boxity</a>.<br>
                        </div>

                        <div class="col-md-6 text-center text-md-end">
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a
                                    href="#">Privacy Policy</a></div>
                        </div>

                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
    <div id="gotoTop" class="uil uil-angle-double-up rounded-circle"></div>

    <!-- JavaScripts
 ============================================= -->
    <script src=" {{ asset('webpage/js/functions.js') }}"></script>

</body>

</html>
