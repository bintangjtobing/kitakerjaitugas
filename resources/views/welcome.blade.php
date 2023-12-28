<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="RUN Statistik by BoxityID" />
    <meta name="description"
        content="Statistik Batu Jaya: Solusi data lengkap untuk bisnis dan masyarakat. Tim ahli berpengalaman & bersertifikat, teknologi & metodologi terbaru." />
    <meta name="keywords" content="@yield('title') - RUN Statistik" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="copyright" content="RUN Statistik by BoxityID">
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
    <title>@yield('title') - RUN Statistik</title>

    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="icon" href="{{ asset('webpage/asset/kkt-icon.png') }}" type="image/png">
    <link rel="apple-touch-icon" sizes="152x152"
        href="https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1703784756/kkt-logo_exapfj.png">
    <link rel="apple-touch-icon" sizes="120x120"
        href="https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1703784756/kkt-logo_exapfj.png">
    <link rel="apple-touch-icon" sizes="76x76"
        href="https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1703784756/kkt-logo_exapfj.png">

    {{-- Meta --}}
    <meta name="og:title" property="og:title" content="@yield('title') - RUN Statistik" />
    <meta name="og:url" property="og:url" content="{{ Request::url() }}" />
    <meta name="og:type" property="og:type" content="website" />
    <meta name="og:image" property="og:image"
        content="https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1703784757/tag-cover_pxfyip.jpg" />
    <meta name="og:description" property="og:description"
        content="Statistik Batu Jaya: Solusi data lengkap untuk bisnis dan masyarakat. Tim ahli berpengalaman & bersertifikat, teknologi & metodologi terbaru." />
    <meta name="twitter:card" content="@yield('title') - RUN Statistik" />
    <meta name="twitter:title" property="og:title" content="@yield('title') - RUN Statistik" />
    <meta name="twitter:url" property="og:url" content="{{ Request::url() }}" />
    <meta name="twitter:type" property="og:type" content="website" />
    <meta name="twitter:image" property="og:image"
        content="https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1703784757/tag-cover_pxfyip.jpg" />
    <meta name="twitter:description" property="og:description"
        content="Statistik Batu Jaya: Solusi data lengkap untuk bisnis dan masyarakat. Tim ahli berpengalaman & bersertifikat, teknologi & metodologi terbaru." />
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
                            <a href="/">
                                <img class="logo-default"
                                    src="https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1703784756/kkt-logo_exapfj.png"
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

        @yield('content')

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
