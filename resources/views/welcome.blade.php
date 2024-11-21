<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- ===============================================-->
        <!--    Document Title-->
        <!-- ===============================================-->
        <title>Phoenix</title>

        {{-- favicon rsud --}}
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/backend/img/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/backend/img/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/backend/img/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/backend/img/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/backend/img/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/backend/img/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/backend/img/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/backend/img/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"
            href="/assets/backend/img/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/backend/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/backend/img/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/backend/img/favicons/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">


        <!-- ===============================================-->
        <!--    Favicons-->
        <!-- ===============================================-->
        {{-- <link rel="apple-touch-icon" sizes="180x180" href="/assets/backend/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/backend/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/backend/img/favicons/favicon-16x16.png">
        <link rel="shortcut icon" type="image/x-icon" href="/assets/backend/img/favicons/favicon.ico">
        <link rel="manifest" href="/assets/backend/img/favicons/manifest.json">
        <meta name="msapplication-TileImage" content="/assets/backend/img/favicons/mstile-150x150.png">
        <meta name="theme-color" content="#ffffff"> --}}
        <script src="/assets/backend/vendors/simplebar/simplebar.min.js"></script>
        <script src="/assets/backend/js/config.js"></script>


        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
            rel="stylesheet">
        <link href="/assets/backend/vendors/simplebar/simplebar.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
        <link href="/assets/backend/css/theme-rtl.css" type="text/css" rel="stylesheet" id="style-rtl">
        <link href="/assets/backend/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
        <link href="/assets/backend/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
        <link href="/assets/backend/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
        <script>
            var phoenixIsRTL = window.config.config.phoenixIsRTL;
            if (phoenixIsRTL) {
                var linkDefault = document.getElementById('style-default');
                var userLinkDefault = document.getElementById('user-style-default');
                linkDefault.setAttribute('disabled', true);
                userLinkDefault.setAttribute('disabled', true);
                document.querySelector('html').setAttribute('dir', 'rtl');
            } else {
                var linkRTL = document.getElementById('style-rtl');
                var userLinkRTL = document.getElementById('user-style-rtl');
                linkRTL.setAttribute('disabled', true);
                userLinkRTL.setAttribute('disabled', true);
            }
        </script>
        <link href="/assets/backend/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    </head>


    <body class="bg-body-emphasis" style="--phoenix-scroll-margin-top: 1.2rem;">

        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main class="main" id="top">
            <div class="bg-body-emphasis sticky-top" data-navbar-shadow-on-scroll="data-navbar-shadow-on-scroll">
                <nav class="navbar navbar-landing navbar-expand-lg container-medium"><a
                        class="navbar-brand flex-1 flex-lg-grow-0 me-lg-8 me-xl-13" href="../../index.html">
                        <div class="d-flex align-items-center"><img
                                src="/assets/backend/img/icons/logo-rsud-removebg.png" alt="phoenix"
                                width="47" />
                            <h5 class="logo-text ms-2">RSUD KAWALI</h5>
                        </div>
                    </a>
                    <div class="d-flex align-items-center gap-2 gap-sm-3 gap-md-4 my-2 order-lg-1">

                        @if (Route::has('login'))
                            <ul class="navbar-nav">
                                @auth
                                    <li class="nav-item border-bottom border-translucent border-bottom-lg-0">
                                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                                    </li>
                                @else
                                    <li class="nav-item border-bottom border-translucent border-bottom-lg-0">
                                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item border-bottom border-translucent border-bottom-lg-0">
                                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                                        </li>
                                    @endif
                                @endauth
                            </ul>
                        @endif

                    </div>
                    <button class="navbar-toggler fs-8 ps-1 ps-sm-3 pe-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mt-3 mt-lg-0">
                            <li class="nav-item border-bottom border-translucent border-bottom-lg-0"><a
                                    class="nav-link"
                                    href="../../apps/travel-agency/hotel/customer/homepage.html">Hotel</a></li>
                            <li class="nav-item border-bottom border-translucent border-bottom-lg-0"><a
                                    class="nav-link" href="../../apps/travel-agency/flight/homepage.html">Flight</a>
                            </li>
                            <li class="nav-item border-bottom border-translucent border-bottom-lg-0"><a
                                    class="nav-link" href="../../apps/travel-agency/trip/homepage.html">Trip</a></li>
                            <li class="nav-item border-bottom border-translucent border-bottom-lg-0"><a
                                    class="nav-link" href="../../apps/events/event-detail.html">Event</a></li>
                            <li class="nav-item border-bottom border-translucent border-bottom-lg-0"><a
                                    class="nav-link" href="#!">Package</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Trending</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="booking-hero-header d-flex align-items-center">
                <div class="bg-holder bg-holder overlay bg-opacity-50"
                    style="background-image:url(/assets/backend/video/travel.png);">
                    <video class="bg-video" autoplay="autoplay" loop="loop" muted="muted"
                        playsinline="playsinline">
                        <source src="/assets/backend/video/RSUDKawali.mp4" type="video/mp4" />
                    </video>
                </div>
                <!--/.bg-holder-->

                <div class="container-medium position-relative z-5">
                    <h2 class="text-secondary-lighter fs-5 fs-md-3 fw-normal mb-3">Where is your</h2>
                    <h1 class="fs-4 fs-md-1 text-white fw-normal mb-6 overflow-hidden">NEXT <span
                            class="typed-text text-primary"
                            data-typed-text="[&quot;&lt;span class=text-primary&gt;TRIP!&lt;/span&gt;&quot;,&quot;&lt;span class=text-warning&gt;TOUR?&lt;/span&gt;&quot;, &quot;&lt;span class=text-info&gt;SOJOURN?&lt;/span&gt;&quot;, &quot;&lt;span class=text-success&gt;VACAY?&lt;/span&gt;&quot;]"></span>
                    </h1>
                    <div class="input-group rounded-2 py-1 ps-2 w-lg-50 border border-light">
                        <div class="form-icon-container flex-1 d-flex align-items-center" data-fa-transform="down-1">
                            <span class="fa-solid fa-location-dot form-icon text-danger-light"></span>
                            <input
                                class="form-control form-icon-input bg-transparent border-0 outline-none fs-8 fs-md-7 text-secondary-light"
                                type="text" placeholder="Search Destination" />
                        </div>
                        <div class="dropdown d-flex align-items-center">
                            <button
                                class="btn py-0 bg-transparent text-secondary-light fs-8 fs-md-7 fw-semibold border-0 border-start border-light rounded-0"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent">Flight<span
                                    class="fa-solid fa-chevron-down ms-2"
                                    data-fa-transform="down-1 shrink-4"></span></button>
                            <div class="dropdown-menu dropdown-menu-end" data-bs-theme="dark"><a
                                    class="dropdown-item" href="#!">Flight</a><a class="dropdown-item"
                                    href="#!">Trip</a><a class="dropdown-item" href="#!">Hotel</a></div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="pt-6 pt-md-10 pb-10">

                <div class="container-medium">
                    <div class="bg-holder d-none d-xl-block"
                        style="background-image:url(/assets/backend/img/bg/bg-left-27.png);background-size:auto;background-position:left;">
                    </div>
                    <!--/.bg-holder-->

                    <div class="bg-holder d-none d-xl-block"
                        style="background-image:url(/assets/backend/img/bg/bg-right-27.png);background-size:auto;background-position:right;">
                    </div>
                    <!--/.bg-holder-->

                    <div class="row g-3 position-relative">
                        <div class="col-lg-6">
                            <div class="row g-3">
                                <div class="col-md-7">
                                    <h4 class="fw-semibold mb-3">Season of</h4>
                                    <h2 class="fs-4 fw-semibold mb-3 mb-md-4">Tour & <span
                                            class="text-primary-light fw-bold">Travel</span></h2>
                                    <p class="mb-3 mb-md-0 text-body-tertiary">This is the perfect season for tours and
                                        travels. At Phoenix, you can easily select the best travel option for your next
                                        vacation<span class="d-none d-lg-inline-block d-xl-none">... </span><span
                                            class="d-lg-none d-xl-inline">This will help you with the pricing that
                                            you’ll need, the accommodation facilities, food and beverages, and water
                                            rides.</span></p>
                                </div>
                                <div class="col-6 col-md-5">
                                    <div class="img-zoom-hover position-relative h-100 rounded-3 overflow-hidden"><a
                                            href="#!"><img class="w-100 h-100 object-fit-cover"
                                                src="/assets/backend/img/gallery/35.png" alt="" /></a>
                                        <div class="backdrop-faded"><a class="fw-bold fs-7 text-white stretched-link"
                                                href="#!">New Zealand</a>
                                            <p class="mb-0 text-white fs-9">17 Hotels</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-5">
                                    <div class="img-zoom-hover position-relative h-100 rounded-3 overflow-hidden"><a
                                            href="#!"> <img class="w-100 h-100 object-fit-cover"
                                                src="/assets/backend/img/gallery/36.png" alt="" /></a>
                                        <div class="backdrop-faded"><a class="fw-bold fs-7 text-white"
                                                href="#!">London</a>
                                            <p class="mb-0 text-white fs-9">17 Hotels</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="img-zoom-hover position-relative h-100 rounded-3 overflow-hidden"><a
                                            href="#!"> <img class="w-100 h-md-100 object-fit-cover"
                                                src="/assets/backend/img/gallery/37.png" alt=""
                                                height="220" /></a>
                                        <div class="backdrop-faded"><a class="fw-bold fs-7 text-white"
                                                href="#!">Maui</a>
                                            <p class="mb-0 text-white fs-9">14 Hotels</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gap-3 h-100">
                                <div class="img-zoom-hover position-relative h-100 rounded-3 overflow-hidden"><a
                                        href="#!"> <img class="w-100 h-lg-100 object-fit-cover"
                                            src="/assets/backend/img/gallery/38.png" alt=""
                                            height="220" /></a>
                                    <div class="backdrop-faded"><a class="fw-bold fs-7 text-white"
                                            href="#!">Bali, Indonesia</a>
                                        <p class="mb-0 text-white fs-9">51 Hotels</p>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100 py-3 fs-8">Explore more<span
                                        class="fa-solid fa-chevron-right ms-2"
                                        data-fa-transform="down-2"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->


            <section class="pb-10 pt-0">
                <div class="bg-holder d-none d-md-block"
                    style="background-image:url(/assets/backend/img/bg/bg-left-28.png);background-size:7%;background-position:left 27%;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder d-none d-md-block"
                    style="background-image:url(/assets/backend/img/bg/bg-right-28.png);background-size:16%;background-position:right -25px;">
                </div>
                <!--/.bg-holder-->

                <div class="container-medium text-center mb-11 position-relative">
                    <h3 class="mb-2 text-body-emphasis">Travel more, spend less</h3>
                    <p class="text-body-tertiary mb-0">Working with Phoenix means you’ll have all the plans and the
                        perfect price list to help you plan.</p>
                </div>
                <div class="container-fluid px-sm-0">
                    <div class="swiper-theme-container swiper-slide-nav-top">
                        <div class="swiper-nav">
                            <div class="swiper-button-next"><span class="fas fa-chevron-right text-primary"
                                    data-fa-transform="shrink-3"></span></div>
                            <div class="swiper-button-prev"><span class="fas fa-chevron-left text-primary"
                                    data-fa-transform="shrink-3"></span></div>
                        </div>
                        <div class="swiper theme-slider"
                            data-swiper='{"loop":true,"centeredSlides":true,"autoplay":true,"centeredSlidesBounds":true,"spaceBetween":16,"slidesPerView":1,"speed":1500,"breakpoints":{"576":{"slidesPerView":"auto"}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide w-sm-auto"><a
                                        class="position-relative rounded-3 overflow-hidden d-block"
                                        href="#!"><img class="w-100 w-sm-auto object-fit-cover"
                                            src="/assets/backend/img/gallery/39.png" alt="" height="220" />
                                        <div class="img-backdrop-faded">
                                            <div class="image-reveal-content mb-3">
                                                <div class="d-flex align-items-center gap-2 mb-2"><span
                                                        class="fa-solid fa-hotel text-secondary-lighter"></span>
                                                    <h6 class="mb-0 text-secondary-lighter fw-semibold">17 Hotels</h6>
                                                </div>
                                                <div class="d-flex align-items-center gap-2"><span
                                                        class="fa-solid fa-tree-city text-secondary-lighter"></span>
                                                    <h6 class="mb-0 text-secondary-lighter fw-semibold">22 Tour Package
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2"><img
                                                    src="/assets/backend/img/country/thailand.png" alt="" />
                                                <h4 class="mb-0 text-white">Thailand</h4>
                                            </div>
                                        </div>
                                    </a></div>
                                <div class="swiper-slide w-sm-auto"><a
                                        class="position-relative rounded-3 overflow-hidden d-block"
                                        href="#!"><img class="w-100 w-sm-auto object-fit-cover"
                                            src="/assets/backend/img/gallery/40.png" alt="" height="220" />
                                        <div class="img-backdrop-faded">
                                            <div class="image-reveal-content mb-3">
                                                <div class="d-flex align-items-center gap-2 mb-2"><span
                                                        class="fa-solid fa-hotel text-secondary-lighter"></span>
                                                    <h6 class="mb-0 text-secondary-lighter fw-semibold">15 Hotels</h6>
                                                </div>
                                                <div class="d-flex align-items-center gap-2"><span
                                                        class="fa-solid fa-tree-city text-secondary-lighter"></span>
                                                    <h6 class="mb-0 text-secondary-lighter fw-semibold">24 Tour Package
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2"><img
                                                    src="/assets/backend/img/country/switzerland.png"
                                                    alt="" />
                                                <h4 class="mb-0 text-white">Switzerland</h4>
                                            </div>
                                        </div>
                                    </a></div>
                                <div class="swiper-slide w-sm-auto"><a
                                        class="position-relative rounded-3 overflow-hidden d-block"
                                        href="#!"><img class="w-100 w-sm-auto object-fit-cover"
                                            src="/assets/backend/img/gallery/42.png" alt="" height="220" />
                                        <div class="img-backdrop-faded">
                                            <div class="image-reveal-content mb-3">
                                                <div class="d-flex align-items-center gap-2 mb-2"><span
                                                        class="fa-solid fa-hotel text-secondary-lighter"></span>
                                                    <h6 class="mb-0 text-secondary-lighter fw-semibold">44 Hotels</h6>
                                                </div>
                                                <div class="d-flex align-items-center gap-2"><span
                                                        class="fa-solid fa-tree-city text-secondary-lighter"></span>
                                                    <h6 class="mb-0 text-secondary-lighter fw-semibold">123 Tour
                                                        Package</h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2"><img
                                                    src="/assets/backend/img/country/turkey.png" alt="" />
                                                <h4 class="mb-0 text-white">Turkey</h4>
                                            </div>
                                        </div>
                                    </a></div>
                                <div class="swiper-slide w-sm-auto"><a
                                        class="position-relative rounded-3 overflow-hidden d-block"
                                        href="#!"><img class="w-100 w-sm-auto object-fit-cover"
                                            src="/assets/backend/img/gallery/41.png" alt="" height="220" />
                                        <div class="img-backdrop-faded">
                                            <div class="image-reveal-content mb-3">
                                                <div class="d-flex align-items-center gap-2 mb-2"><span
                                                        class="fa-solid fa-hotel text-secondary-lighter"></span>
                                                    <h6 class="mb-0 text-secondary-lighter fw-semibold">55 Hotels</h6>
                                                </div>
                                                <div class="d-flex align-items-center gap-2"><span
                                                        class="fa-solid fa-tree-city text-secondary-lighter"></span>
                                                    <h6 class="mb-0 text-secondary-lighter fw-semibold">41 Tour Package
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2"><img
                                                    src="/assets/backend/img/country/new-zealand.png"
                                                    alt="" />
                                                <h4 class="mb-0 text-white">New Zealand</h4>
                                            </div>
                                        </div>
                                    </a></div>
                                <div class="swiper-slide w-sm-auto"><a
                                        class="position-relative rounded-3 overflow-hidden d-block"
                                        href="#!"><img class="w-100 w-sm-auto object-fit-cover"
                                            src="/assets/backend/img/gallery/43.png" alt="" height="220" />
                                        <div class="img-backdrop-faded">
                                            <div class="image-reveal-content mb-3">
                                                <div class="d-flex align-items-center gap-2 mb-2"><span
                                                        class="fa-solid fa-hotel text-secondary-lighter"></span>
                                                    <h6 class="mb-0 text-secondary-lighter fw-semibold">17 Hotels</h6>
                                                </div>
                                                <div class="d-flex align-items-center gap-2"><span
                                                        class="fa-solid fa-tree-city text-secondary-lighter"></span>
                                                    <h6 class="mb-0 text-secondary-lighter fw-semibold">22 Tour Package
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2"><img
                                                    src="/assets/backend/img/country/sweden.png" alt="" />
                                                <h4 class="mb-0 text-white">Sweden</h4>
                                            </div>
                                        </div>
                                    </a></div>
                                <div class="swiper-slide w-sm-auto"><a
                                        class="position-relative rounded-3 overflow-hidden d-block"
                                        href="#!"><img class="w-100 w-sm-auto object-fit-cover"
                                            src="/assets/backend/img/gallery/44.png" alt="" height="220" />
                                        <div class="img-backdrop-faded">
                                            <div class="image-reveal-content mb-3">
                                                <div class="d-flex align-items-center gap-2 mb-2"><span
                                                        class="fa-solid fa-hotel text-secondary-lighter"></span>
                                                    <h6 class="mb-0 text-secondary-lighter fw-semibold">44 Hotels</h6>
                                                </div>
                                                <div class="d-flex align-items-center gap-2"><span
                                                        class="fa-solid fa-tree-city text-secondary-lighter"></span>
                                                    <h6 class="mb-0 text-secondary-lighter fw-semibold">123 Tour
                                                        Package</h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2"><img
                                                    src="/assets/backend/img/country/turkey.png" alt="" />
                                                <h4 class="mb-0 text-white">Turkey</h4>
                                            </div>
                                        </div>
                                    </a></div>
                                <div class="swiper-slide w-sm-auto"><a
                                        class="position-relative rounded-3 overflow-hidden d-block"
                                        href="#!"><img class="w-100 w-sm-auto object-fit-cover"
                                            src="/assets/backend/img/gallery/58.png" alt="" height="220" />
                                        <div class="img-backdrop-faded">
                                            <div class="image-reveal-content mb-3">
                                                <div class="d-flex align-items-center gap-2 mb-2"><span
                                                        class="fa-solid fa-hotel text-secondary-lighter"></span>
                                                    <h6 class="mb-0 text-secondary-lighter fw-semibold">54 Hotels</h6>
                                                </div>
                                                <div class="d-flex align-items-center gap-2"><span
                                                        class="fa-solid fa-tree-city text-secondary-lighter"></span>
                                                    <h6 class="mb-0 text-secondary-lighter fw-semibold">123 Tour
                                                        Package</h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2"><img
                                                    src="/assets/backend/img/country/vietnam.png" alt="" />
                                                <h4 class="mb-0 text-white">Vietnam</h4>
                                            </div>
                                        </div>
                                    </a></div>
                                <div class="swiper-slide w-sm-auto"><a
                                        class="position-relative rounded-3 overflow-hidden d-block"
                                        href="#!"><img class="w-100 w-sm-auto object-fit-cover"
                                            src="/assets/backend/img/gallery/57.png" alt="" height="220" />
                                        <div class="img-backdrop-faded">
                                            <div class="image-reveal-content mb-3">
                                                <div class="d-flex align-items-center gap-2 mb-2"><span
                                                        class="fa-solid fa-hotel text-secondary-lighter"></span>
                                                    <h6 class="mb-0 text-secondary-lighter fw-semibold">17 Hotels</h6>
                                                </div>
                                                <div class="d-flex align-items-center gap-2"><span
                                                        class="fa-solid fa-tree-city text-secondary-lighter"></span>
                                                    <h6 class="mb-0 text-secondary-lighter fw-semibold">22 Tour Package
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2"><img
                                                    src="/assets/backend/img/country/japan.png" alt="" />
                                                <h4 class="mb-0 text-white">Japan</h4>
                                            </div>
                                        </div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-0">
                <div class="bg-holder d-none d-xl-block"
                    style="background-image:url(/assets/backend/img/bg/bg-left-29.png);background-size:auto;background-position:-15%;">
                </div>
                <!--/.bg-holder-->

                <div class="container-medium position-relative">
                    <h3 class="mb-2 text-body-emphasis text-center text-xl-start">The best of our hotel</h3>
                    <div class="d-xl-flex justify-content-between mb-5 text-center">
                        <p class="mb-0 text-body-tertiary">This list will help you get insights into how much you’ll
                            need to spend to afford accommodation.</p>
                        <button class="btn btn-link p-0 fs-8">View all<span class="fa-solid fa-chevron-right ms-2"
                                data-fa-transform="shrink-3"></span></button>
                    </div>
                    <div class="row g-0 justify-content-center">
                        <div class="col-sm-11 col-md-8 col-lg-6 col-xl-12">
                            <div class="row gy-5 gx-xl-7 justify-content-between pe-4">
                                <div class="col-xl-4">
                                    <div class="card card-img-shift border-0 mx-auto">
                                        <div class="rounded-3 overflow-hidden w-100 position-relative z-5"><img
                                                class="w-100" src="/assets/backend/img/gallery/45.png"
                                                alt="" height="250" />
                                            <button class="btn btn-wish position-absolute top-0 end-0 mt-3 me-3"><span
                                                    class="far fa-heart"></span></button>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="card-content">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
                                                    <div><span
                                                            class="badge badge-phoenix px-1 me-2 badge-phoenix-warning">promoted</span><span
                                                            class="badge badge-phoenix px-1 badge-phoenix-info">Couple
                                                            package</span></div>
                                                    <h6><span class="fa-solid fa-star text-warning me-1"></span>4.8
                                                        (1.4k stay)</h6>
                                                </div><a
                                                    class="fw-bold fs-7 text-body-emphasis mb-2 text-primary-hover"
                                                    href="#!">Royal Mansour Marrakech</a><a
                                                    class="fw-semibold text-body-tertiary mb-3 d-block"
                                                    href="#!"><span class="me-1"
                                                        data-feather="map-pin"></span>Morocco</a>
                                                <h6
                                                    class="fe-semibold text-body-tertiary d-flex align-items-center gap-1 mb-4">
                                                    From <span
                                                        class="fw-bolder fs-7 text-body-highlight">$60.00</span>/ per
                                                    night</h6>
                                                <button class="btn btn-primary px-5">Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card card-img-shift border-0 mx-auto">
                                        <div class="rounded-3 overflow-hidden w-100 position-relative z-5"><img
                                                class="w-100" src="/assets/backend/img/gallery/46.png"
                                                alt="" height="250" />
                                            <button class="btn btn-wish position-absolute top-0 end-0 mt-3 me-3"><span
                                                    class="far fa-heart"></span></button>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="card-content">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
                                                    <div><span
                                                            class="badge badge-phoenix px-1 me-2 badge-phoenix-warning">promoted</span><span
                                                            class="badge badge-phoenix px-1 badge-phoenix-info">Couple
                                                            package</span></div>
                                                    <h6><span class="fa-solid fa-star text-warning me-1"></span>4.8
                                                        (1.4k stay)</h6>
                                                </div><a
                                                    class="fw-bold fs-7 text-body-emphasis mb-2 text-primary-hover"
                                                    href="#!">Mandarin Oriental Jumeira</a><a
                                                    class="fw-semibold text-body-tertiary mb-3 d-block"
                                                    href="#!"><span class="me-1"
                                                        data-feather="map-pin"></span>Abu dhabi</a>
                                                <h6
                                                    class="fe-semibold text-body-tertiary d-flex align-items-center gap-1 mb-4">
                                                    From <span
                                                        class="fw-bolder fs-7 text-body-highlight">$90.00</span>/ per
                                                    night</h6>
                                                <button class="btn btn-primary px-5">Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card card-img-shift border-0 mx-auto">
                                        <div class="rounded-3 overflow-hidden w-100 position-relative z-5"><img
                                                class="w-100" src="/assets/backend/img/gallery/47.png"
                                                alt="" height="250" />
                                            <button class="btn btn-wish position-absolute top-0 end-0 mt-3 me-3"><span
                                                    class="far fa-heart"></span></button>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="card-content">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
                                                    <div><span
                                                            class="badge badge-phoenix px-1 me-2 badge-phoenix-warning">promoted</span><span
                                                            class="badge badge-phoenix px-1 badge-phoenix-info">Couple
                                                            package</span></div>
                                                    <h6><span class="fa-solid fa-star text-warning me-1"></span>4.8
                                                        (1.4k stay)</h6>
                                                </div><a
                                                    class="fw-bold fs-7 text-body-emphasis mb-2 text-primary-hover"
                                                    href="#!">Swissotel Bangkok</a><a
                                                    class="fw-semibold text-body-tertiary mb-3 d-block"
                                                    href="#!"><span class="me-1"
                                                        data-feather="map-pin"></span>Bangkok</a>
                                                <h6
                                                    class="fe-semibold text-body-tertiary d-flex align-items-center gap-1 mb-4">
                                                    From <span
                                                        class="fw-bolder fs-7 text-body-highlight">$70.00</span>/ per
                                                    night</h6>
                                                <button class="btn btn-primary px-5">Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-10 overflow-hidden">
                <div class="bg-holder d-none d-xl-block"
                    style="background-image:url(/assets/backend/img/bg/bg-left-30.png);background-size:40%;background-position:left;z-index:1;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder d-none d-xl-block"
                    style="background-image:url(/assets/backend/img/bg/bg-right-30.png);background-size:26%;background-position:right 25px;z-index:1;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-booking-gallery"></div>
                <div class="container-medium position-relative z-2">
                    <h3 class="mb-2 text-body-emphasis text-center">Popular Attractions</h3>
                    <p class="mb-0 text-body-tertiary text-center mb-5">Explore the most popular and frequently visited
                        destinations around the world</p>
                    <ul class="nav mb-6 justify-content-center flex-wrap mx-auto w-max-content"
                        data-filter-nav="data-filter-nav">
                        <li class="nav-item"><a class="isotope-nav cursor-pointer active"
                                data-filter=".tokyo">Tokyo</a></li>
                        <li class="nav-item"><a class="isotope-nav cursor-pointer" data-filter=".bali">Bali</a></li>
                        <li class="nav-item"><a class="isotope-nav cursor-pointer" data-filter=".sydney">Sydney</a>
                        </li>
                        <li class="nav-item"> <a class="isotope-nav cursor-pointer" data-filter=".paris">Paris</a>
                        </li>
                    </ul>
                    <div class="row g-0 justify-content-center">
                        <div class="col-md-9 col-lg-7 col-xl-5">
                            <div class="row gx-0 gy-3" id="image_gallery"
                                data-sl-isotope='{"layoutMode":"packery","filter":".tokyo"}'>
                                <div class="col-12 isotope-item w-100 tokyo">
                                    <div class="img-zoom-hover-lg rounded-2 overflow-hidden"><a href="#!"> <img
                                                class="w-100 object-fit-cover"
                                                src="/assets/backend/img/gallery/tokyo-1.png" alt=""
                                                height="220" /></a>
                                        <button class="btn btn-wish position-absolute top-0 end-0 mt-4 me-4"><span
                                                class="far fa-heart"></span></button>
                                        <div class="backdrop-faded"><a
                                                class="text-white fw-bolder fs-7 stretched-link" href="#!">King
                                                Power Mahanakhon</a>
                                            <h5 class="text-light mb-0"><span
                                                    class="fa-solid fa-star text-warning me-1"
                                                    data-fa-transform="shrink-2"></span>4.8<span class="fs-10">/5
                                                </span>(1.4k review)</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 isotope-item w-100 tokyo">
                                    <div class="img-zoom-hover-lg rounded-2 overflow-hidden"><a href="#!"> <img
                                                class="w-100 object-fit-cover"
                                                src="/assets/backend/img/gallery/tokyo-2.png" alt=""
                                                height="220" /></a>
                                        <button class="btn btn-wish position-absolute top-0 end-0 mt-4 me-4"><span
                                                class="far fa-heart"></span></button>
                                        <div class="backdrop-faded"><a
                                                class="text-white fw-bolder fs-7 stretched-link" href="#!">Meiji
                                                Jingu</a>
                                            <h5 class="text-light mb-0"><span
                                                    class="fa-solid fa-star text-warning me-1"
                                                    data-fa-transform="shrink-2"></span>5<span class="fs-10">/5
                                                </span>(2.2k review)</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 isotope-item w-100 tokyo">
                                    <div class="img-zoom-hover-lg rounded-2 overflow-hidden"><a href="#!"> <img
                                                class="w-100 object-fit-cover"
                                                src="/assets/backend/img/gallery/tokyo-3.png" alt=""
                                                height="220" /></a>
                                        <button class="btn btn-wish position-absolute top-0 end-0 mt-4 me-4"><span
                                                class="far fa-heart"></span></button>
                                        <div class="backdrop-faded"><a
                                                class="text-white fw-bolder fs-7 stretched-link"
                                                href="#!">Imperial Palace</a>
                                            <h5 class="text-light mb-0"><span
                                                    class="fa-solid fa-star text-warning me-1"
                                                    data-fa-transform="shrink-2"></span>4.5<span class="fs-10">/5
                                                </span>(1.2k review)</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 isotope-item w-100 bali">
                                    <div class="img-zoom-hover-lg rounded-2 overflow-hidden"><a href="#!"> <img
                                                class="w-100 object-fit-cover"
                                                src="/assets/backend/img/gallery/bali-1.png" alt=""
                                                height="220" /></a>
                                        <button class="btn btn-wish position-absolute top-0 end-0 mt-4 me-4"><span
                                                class="far fa-heart"></span></button>
                                        <div class="backdrop-faded"><a
                                                class="text-white fw-bolder fs-7 stretched-link" href="#!">Nusa
                                                Lembongan</a>
                                            <h5 class="text-light mb-0"><span
                                                    class="fa-solid fa-star text-warning me-1"
                                                    data-fa-transform="shrink-2"></span>4.7<span class="fs-10">/5
                                                </span>(1.2k review)</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 isotope-item w-100 bali">
                                    <div class="img-zoom-hover-lg rounded-2 overflow-hidden"><a href="#!"> <img
                                                class="w-100 object-fit-cover"
                                                src="/assets/backend/img/gallery/bali-2.png" alt=""
                                                height="220" /></a>
                                        <button class="btn btn-wish position-absolute top-0 end-0 mt-4 me-4"><span
                                                class="far fa-heart"></span></button>
                                        <div class="backdrop-faded"><a
                                                class="text-white fw-bolder fs-7 stretched-link"
                                                href="#!">Waterbom Bali</a>
                                            <h5 class="text-light mb-0"><span
                                                    class="fa-solid fa-star text-warning me-1"
                                                    data-fa-transform="shrink-2"></span>4.5<span class="fs-10">/5
                                                </span>(1.8k review)</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 isotope-item w-100 bali">
                                    <div class="img-zoom-hover-lg rounded-2 overflow-hidden"><a href="#!"> <img
                                                class="w-100 object-fit-cover"
                                                src="/assets/backend/img/gallery/bali-3.png" alt=""
                                                height="220" /></a>
                                        <button class="btn btn-wish position-absolute top-0 end-0 mt-4 me-4"><span
                                                class="far fa-heart"></span></button>
                                        <div class="backdrop-faded"><a
                                                class="text-white fw-bolder fs-7 stretched-link" href="#!">Kuta
                                                Beach</a>
                                            <h5 class="text-light mb-0"><span
                                                    class="fa-solid fa-star text-warning me-1"
                                                    data-fa-transform="shrink-2"></span>5<span class="fs-10">/5
                                                </span>(4.1k review)</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 isotope-item w-100 sydney">
                                    <div class="img-zoom-hover-lg rounded-2 overflow-hidden"><a href="#!"> <img
                                                class="w-100 object-fit-cover"
                                                src="/assets/backend/img/gallery/sydney-1.png" alt=""
                                                height="220" /></a>
                                        <button class="btn btn-wish position-absolute top-0 end-0 mt-4 me-4"><span
                                                class="far fa-heart"></span></button>
                                        <div class="backdrop-faded"><a
                                                class="text-white fw-bolder fs-7 stretched-link" href="#!">The
                                                Rocks</a>
                                            <h5 class="text-light mb-0"><span
                                                    class="fa-solid fa-star text-warning me-1"
                                                    data-fa-transform="shrink-2"></span>4.8<span class="fs-10">/5
                                                </span>(1.9k review)</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 isotope-item w-100 sydney">
                                    <div class="img-zoom-hover-lg rounded-2 overflow-hidden"><a href="#!"> <img
                                                class="w-100 object-fit-cover"
                                                src="/assets/backend/img/gallery/sydney-2.png" alt=""
                                                height="220" /></a>
                                        <button class="btn btn-wish position-absolute top-0 end-0 mt-4 me-4"><span
                                                class="far fa-heart"></span></button>
                                        <div class="backdrop-faded"><a
                                                class="text-white fw-bolder fs-7 stretched-link" href="#!">Manly
                                                Beach</a>
                                            <h5 class="text-light mb-0"><span
                                                    class="fa-solid fa-star text-warning me-1"
                                                    data-fa-transform="shrink-2"></span>4.7<span class="fs-10">/5
                                                </span>(1.1k review)</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 isotope-item w-100 sydney">
                                    <div class="img-zoom-hover-lg rounded-2 overflow-hidden"><a href="#!"> <img
                                                class="w-100 object-fit-cover"
                                                src="/assets/backend/img/gallery/sydney-3.png" alt=""
                                                height="220" /></a>
                                        <button class="btn btn-wish position-absolute top-0 end-0 mt-4 me-4"><span
                                                class="far fa-heart"></span></button>
                                        <div class="backdrop-faded"><a
                                                class="text-white fw-bolder fs-7 stretched-link"
                                                href="#!">Darling Harbour</a>
                                            <h5 class="text-light mb-0"><span
                                                    class="fa-solid fa-star text-warning me-1"
                                                    data-fa-transform="shrink-2"></span>5<span class="fs-10">/5
                                                </span>(3.2k review)</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 isotope-item w-100 paris">
                                    <div class="img-zoom-hover-lg rounded-2 overflow-hidden"><a href="#!"> <img
                                                class="w-100 object-fit-cover"
                                                src="/assets/backend/img/gallery/paris-1.png" alt=""
                                                height="220" /></a>
                                        <button class="btn btn-wish position-absolute top-0 end-0 mt-4 me-4"><span
                                                class="far fa-heart"></span></button>
                                        <div class="backdrop-faded"><a
                                                class="text-white fw-bolder fs-7 stretched-link" href="#!">Louvre
                                                Museum</a>
                                            <h5 class="text-light mb-0"><span
                                                    class="fa-solid fa-star text-warning me-1"
                                                    data-fa-transform="shrink-2"></span>4.4<span class="fs-10">/5
                                                </span>(4.3k review)</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 isotope-item w-100 paris">
                                    <div class="img-zoom-hover-lg rounded-2 overflow-hidden"><a href="#!"> <img
                                                class="w-100 object-fit-cover"
                                                src="/assets/backend/img/gallery/paris-2.png" alt=""
                                                height="220" /></a>
                                        <button class="btn btn-wish position-absolute top-0 end-0 mt-4 me-4"><span
                                                class="far fa-heart"></span></button>
                                        <div class="backdrop-faded"><a
                                                class="text-white fw-bolder fs-7 stretched-link"
                                                href="#!">Montmartre</a>
                                            <h5 class="text-light mb-0"><span
                                                    class="fa-solid fa-star text-warning me-1"
                                                    data-fa-transform="shrink-2"></span>5<span class="fs-10">/5
                                                </span>(5k review)</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 isotope-item w-100 paris">
                                    <div class="img-zoom-hover-lg rounded-2 overflow-hidden"><a href="#!"> <img
                                                class="w-100 object-fit-cover"
                                                src="/assets/backend/img/gallery/paris-3.png" alt=""
                                                height="220" /></a>
                                        <button class="btn btn-wish position-absolute top-0 end-0 mt-4 me-4"><span
                                                class="far fa-heart"></span></button>
                                        <div class="backdrop-faded"><a
                                                class="text-white fw-bolder fs-7 stretched-link"
                                                href="#!">Tuileries Garden</a>
                                            <h5 class="text-light mb-0"><span
                                                    class="fa-solid fa-star text-warning me-1"
                                                    data-fa-transform="shrink-2"></span>4.1<span class="fs-10">/5
                                                </span>(4.5k review)</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center gap-3 mt-4">
                        <h5 class="mb-0">Explore more popular destination</h5>
                        <div class="btn-ping">
                            <div class="btn-ping-bg"></div>
                            <button
                                class="btn border p-0 fs-8 text-primary d-flex align-items-center justify-content-center"><span
                                    class="fa-solid fa-arrow-right"></span></button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pb-7 pt-0 overflow-x-hidden">
                <div class="bg-holder d-none d-xl-block"
                    style="background-image:url(/assets/backend/img/bg/bg-left-31.png);background-size:22%;background-position:left;z-index:1;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder d-none d-xl-block"
                    style="background-image:url(/assets/backend/img/bg/bg-right-31.png);background-size:15%;background-position:right bottom;z-index:1;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-latest-posts"></div>
                <div class="container-medium text-center position-relative z-2">
                    <h3 class="mb-2 text-body-emphasis">Our Latest Posts For Travellers</h3>
                    <p class="mb-0 text-body-tertiary mb-13">Find the best travel memories from our past tours and get
                        a clear idea of what we do.</p>
                </div>
                <div class="swiper-theme-container swiper-zooming-slider">
                    <div class="swiper-container theme-slider"
                        data-swiper='{"loop":true,"slidesPerView":1.3,"spaceBetween":32,"speed":2000,"autoplay":true,"centeredSlides":true,"simulateTouch":false,"breakpoints":{"540":{"slidesPerView":1.5},"768":{"slidesPerView":1.8},"1200":{"slidesPerView":2},"1530":{"slidesPerView":2.8}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide rounded-3 overflow-hidden">
                                <div class="position-relative w-100 h-100"><img class="w-100 h-100 object-fit-cover"
                                        src="/assets/backend/img/gallery/48.png" alt="" />
                                    <div class="backdrop-faded p-4 p-md-6">
                                        <div class="d-flex align-items-center mb-2"><span
                                                class="text-secondary-lighter me-2" data-feather="calendar"></span>
                                            <h6 class="mb-0 fw-semibold text-secondary-lighter pe-3 me-3 border-end">
                                                Monday, Nov 07, 2022</h6><span
                                                class="fa-solid fa-star text-warning fs-9 me-2"></span>
                                            <h6 class="mb-0 text-secondary-lighter fw-semibold">4.8</h6>
                                        </div><a class="text-white fw-bold fs-7" href="#!">Beautiful Frence,
                                            Let's Travelling!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide rounded-3 overflow-hidden">
                                <div class="position-relative w-100 h-100"><img class="w-100 h-100 object-fit-cover"
                                        src="/assets/backend/img/gallery/49.png" alt="" />
                                    <div class="backdrop-faded p-4 p-md-6">
                                        <div class="d-flex align-items-center mb-2"><span
                                                class="text-secondary-lighter me-2" data-feather="calendar"></span>
                                            <h6 class="mb-0 fw-semibold text-secondary-lighter pe-3 me-3 border-end">
                                                Monday, Nov 06, 2022</h6><span
                                                class="fa-solid fa-star text-warning fs-9 me-2"></span>
                                            <h6 class="mb-0 text-secondary-lighter fw-semibold">4.5</h6>
                                        </div><a class="text-white fw-bold fs-7" href="#!">Man Standing on
                                            Watching Mountain</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide rounded-3 overflow-hidden">
                                <div class="position-relative w-100 h-100"><img class="w-100 h-100 object-fit-cover"
                                        src="/assets/backend/img/gallery/50.png" alt="" />
                                    <div class="backdrop-faded p-4 p-md-6">
                                        <div class="d-flex align-items-center mb-2"><span
                                                class="text-secondary-lighter me-2" data-feather="calendar"></span>
                                            <h6 class="mb-0 fw-semibold text-secondary-lighter pe-3 me-3 border-end">
                                                Monday, Nov 05, 2022</h6><span
                                                class="fa-solid fa-star text-warning fs-9 me-2"></span>
                                            <h6 class="mb-0 text-secondary-lighter fw-semibold">4.2</h6>
                                        </div><a class="text-white fw-bold fs-7" href="#!">Beautiful Bali
                                            Indonesia, Let's Travelling!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide rounded-3 overflow-hidden">
                                <div class="position-relative w-100 h-100"><img class="w-100 h-100 object-fit-cover"
                                        src="/assets/backend/img/gallery/64.png" alt="" />
                                    <div class="backdrop-faded p-4 p-md-6">
                                        <div class="d-flex align-items-center mb-2"><span
                                                class="text-secondary-lighter me-2" data-feather="calendar"></span>
                                            <h6 class="mb-0 fw-semibold text-secondary-lighter pe-3 me-3 border-end">
                                                Monday, Nov 04, 2022</h6><span
                                                class="fa-solid fa-star text-warning fs-9 me-2"></span>
                                            <h6 class="mb-0 text-secondary-lighter fw-semibold">4.5</h6>
                                        </div><a class="text-white fw-bold fs-7" href="#!">Chasing sunsets,
                                            making memories worldwide.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-nav">
                        <div class="swiper-button-next"><span class="fas fa-chevron-right text-primary"
                                data-fa-transform="shrink-3"></span></div>
                        <div class="swiper-button-prev"><span class="fas fa-chevron-left text-primary"
                                data-fa-transform="shrink-3"></span></div>
                    </div>
                </div>
                <div class="text-center mt-12 position-relative z-2">
                    <button class="btn btn-link p-0 fs-8">View all<span class="fa-solid fa-chevron-right ms-2"
                            data-fa-transform="shrink-1"></span></button>
                </div>
            </section>
            <section class="pb-10 pt-3">
                <div class="bg-holder d-none d-xl-block"
                    style="background-image:url(/assets/backend/img/bg/bg-left-32.png);background-size:26%;background-position:left 115px;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder d-none d-xl-block"
                    style="background-image:url(/assets/backend/img/bg/bg-right-32.png);background-size:28%;background-position:right -25px;">
                </div>
                <!--/.bg-holder-->

                <div class="container-medium position-relative">
                    <div class="row g-0 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="d-md-flex align-items-center gap-7 text-center text-md-start"><img
                                    class="mb-4 mb-md-0 d-dark-none"
                                    src="/assets/backend/img/spot-illustrations/40.png" width="260"
                                    alt="" /><img class="mb-4 mb-md-0 d-light-none"
                                    src="/assets/backend/img/spot-illustrations/dark_40.png" width="260"
                                    alt="" />
                                <div class="flex-1">
                                    <h3 class="mb-0">Get Updates & More</h3>
                                    <p class="mb-4 text-body-tertiary">Subscribe to our newsletter to stay updated.</p>
                                    <form class="d-flex justify-content-center">
                                        <input class="form-control me-3" id="ctaEmail1" type="email"
                                            placeholder="Email" aria-describedby="ctaEmail1" />
                                        <button class="btn btn-primary d-flex align-items-center" type="submit">
                                            Subscribe<span class="fa-solid fa-chevron-right ms-2 fs-9"></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="pb-7 pt-0">

                <div class="container-medium">
                    <div class="text-center mb-5">
                        <h3 class="mb-2 text-body-emphasis">Latest photos from tourists</h3>
                        <p class="mb-0 text-body-tertiary">See how our tourists enjoyed their trip from images captured
                            by them with Team Phoenix!</p>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6 col-xl-4">
                            <div class="img-zoom-hover rounded-3 overflow-hidden position-relative"><a
                                    href="#!"><img class="latest-img w-100 object-fit-cover"
                                        src="/assets/backend/img/gallery/51.png" alt="" /></a>
                                <div class="backdrop-faded"><a
                                        class="fw-semibold mb-0 text-secondary-lighter stretched-link"
                                        href="#!"><span
                                            class="fa-solid fa-location-dot text-secondary-lighter me-2"></span>Bali
                                        Indonesia</a></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="img-zoom-hover rounded-3 overflow-hidden position-relative"><a
                                    href="#!"><img class="latest-img w-100 object-fit-cover"
                                        src="/assets/backend/img/gallery/52.png" alt="" /></a>
                                <div class="backdrop-faded"><a
                                        class="fw-semibold mb-0 text-secondary-lighter stretched-link"
                                        href="#!"><span
                                            class="fa-solid fa-location-dot text-secondary-lighter me-2"></span>Barcelona</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="img-zoom-hover rounded-3 overflow-hidden position-relative"><a
                                    href="#!"><img class="latest-img w-100 object-fit-cover"
                                        src="/assets/backend/img/gallery/53.png" alt="" /></a>
                                <div class="backdrop-faded"><a
                                        class="fw-semibold mb-0 text-secondary-lighter stretched-link"
                                        href="#!"><span
                                            class="fa-solid fa-location-dot text-secondary-lighter me-2"></span>Bali
                                        Indonesia</a></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="img-zoom-hover rounded-3 overflow-hidden position-relative"><a
                                    href="#!"><img class="latest-img w-100 object-fit-cover"
                                        src="/assets/backend/img/gallery/54.png" alt="" /></a>
                                <div class="backdrop-faded"><a
                                        class="fw-semibold mb-0 text-secondary-lighter stretched-link"
                                        href="#!"><span
                                            class="fa-solid fa-location-dot text-secondary-lighter me-2"></span>Sydney</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="img-zoom-hover rounded-3 overflow-hidden position-relative"><a
                                    href="#!"><img class="latest-img w-100 object-fit-cover"
                                        src="/assets/backend/img/gallery/55.png" alt="" /></a>
                                <div class="backdrop-faded"><a
                                        class="fw-semibold mb-0 text-secondary-lighter stretched-link"
                                        href="#!"><span
                                            class="fa-solid fa-location-dot text-secondary-lighter me-2"></span>Great
                                        Barrier Reef</a></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="img-zoom-hover rounded-3 overflow-hidden position-relative"><a
                                    href="#!"><img class="latest-img w-100 object-fit-cover"
                                        src="/assets/backend/img/gallery/56.png" alt="" /></a>
                                <div class="backdrop-faded"><a
                                        class="fw-semibold mb-0 text-secondary-lighter stretched-link"
                                        href="#!"><span
                                            class="fa-solid fa-location-dot text-secondary-lighter me-2"></span>Grand
                                        Canyon</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->


            <section class="pt-9 pb-10">
                <div class="bg-holder d-none d-xl-block"
                    style="background-image:url(/assets/backend/img/bg/bg-left-33.png);background-size:auto;background-position:-8% 38px;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder d-none d-xl-block"
                    style="background-image:url(/assets/backend/img/bg/bg-right-33.png);background-size:18%;background-position:right;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-get-app"></div>
                <div class="container-medium position-relative">
                    <div class="row g-0 justify-content-center">
                        <div class="col-lg-10 col-xl-8 col-xxl-7">
                            <div class="d-md-flex align-items-center gap-5 text-center text-md-start"><img
                                    class="img-fluid d-dark-none"
                                    src="/assets/backend/img/spot-illustrations/i-phone.png" alt=""
                                    style="max-height: 540px" /><img class="img-fluid d-light-none"
                                    src="/assets/backend/img/spot-illustrations/i-phone-dark.png" alt=""
                                    style="max-height: 540px" />
                                <div class="mt-5 mt-md-0">
                                    <div class="d-none d-md-block"><img class="d-dark-none"
                                            src="/assets/backend/img/spot-illustrations/41.png" alt=""
                                            width="200" /><img class="d-light-none"
                                            src="/assets/backend/img/spot-illustrations/dark_41.png" alt=""
                                            width="200" /></div>
                                    <h3 class="fw-bolder mt-4">Get The App Now</h3>
                                    <p class="text-body-tertiary">Designed to provide the best user experience possible
                                        to all our customers with activities ranging from anything thinkable to the
                                        unthinkables.</p><a class="me-2" href="#!"><img
                                            src="/assets/backend/img/generic/play-store.png" alt=""
                                            height="32" /></a><a href="#!"><img
                                            src="/assets/backend/img/generic/app-store.png" alt=""
                                            height="32" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="booking-footer pb-6 pb-md-11 pt-15">

                <div class="container-medium">
                    <div class="row gy-3 justify-content-between align-items-center">
                        <div class="col-auto"><a href="#!"><img src="/assets/backend/img/icons/logo-1.png"
                                    alt="" /></a></div>
                        <div class="col-auto">
                            <ul class="mb-0 list-unstyled d-flex flex-wrap">
                                <li class="me-3 me-sm-5"><a class="fs-8 fw-bold text-white" href="#!">Home</a>
                                </li>
                                <li class="me-3 me-sm-5"><a class="fs-8 fw-bold text-white" href="#!">About</a>
                                </li>
                                <li class="me-3 me-sm-5"><a class="fs-8 fw-bold text-white"
                                        href="#!">Contact</a></li>
                                <li class="me-3 me-sm-5"><a class="fs-8 fw-bold text-white" href="#!">FAQ</a>
                                </li>
                                <li><a class="fs-8 fw-bold text-white" href="#!">Gallery</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <div class="row gy-3 justify-content-between">
                        <div class="col-auto"> <a class="text-white me-4" href="#!"><span
                                    class="fa-brands fa-facebook-f"> </span></a><a class="text-white me-4"
                                href="#!"><span class="fa-brands fa-twitter"></span></a><a
                                class="text-white me-4" href="#!"><span
                                    class="fa-brands fa-linkedin-in"></span></a><a class="text-white"
                                href="#!"><span class="fa-brands fa-behance"></span></a></div>
                        <div class="col-auto">
                            <p class="mb-0 text-white">Thank you for creating with Phoenix | 2023 © <a
                                    class="text-white" href="https://themewagon.com/">Themewagon</a></p>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->


        </main>
        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->


        <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1"
            aria-labelledby="settings-offcanvas">
            <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
                <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
                    <div>
                        <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-8"></span>Theme Customizer
                        </h5>
                        <p class="mb-0 fs-9">Explore different styles according to your preferences</p>
                    </div>
                    <button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas"
                        aria-label="Close"><span class="fas fa-times fs-8"> </span></button>
                </div>
                <button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span
                        class="fas fa-arrows-rotate me-2 fs-10"></span>Reset to default</button>
            </div>
            <div class="offcanvas-body scrollbar px-card" id="themeController">
                <div class="setting-panel-item mt-0">
                    <h5 class="setting-panel-item-title">Color Scheme</h5>
                    <div class="row gx-2">
                        <div class="col-4">
                            <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio"
                                value="light" data-theme-control="phoenixTheme" />
                            <label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherLight"> <span
                                    class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                        src="/assets/backend/img/generic/default-light.png"
                                        alt="" /></span><span class="label-text">Light</span></label>
                        </div>
                        <div class="col-4">
                            <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio"
                                value="dark" data-theme-control="phoenixTheme" />
                            <label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherDark"> <span
                                    class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                        src="/assets/backend/img/generic/default-dark.png"
                                        alt="" /></span><span class="label-text"> Dark</span></label>
                        </div>
                        <div class="col-4">
                            <input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio"
                                value="auto" data-theme-control="phoenixTheme" />
                            <label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherAuto"> <span
                                    class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                        src="/assets/backend/img/generic/auto.png" alt="" /></span><span
                                    class="label-text"> Auto</span></label>
                        </div>
                    </div>
                </div>
                <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="setting-panel-item-title mb-1">RTL </h5>
                        <div class="form-check form-switch mb-0">
                            <input class="form-check-input ms-auto" type="checkbox"
                                data-theme-control="phoenixIsRTL" />
                        </div>
                    </div>
                    <p class="mb-0 text-body-tertiary">Change text direction</p>
                </div>
                <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="setting-panel-item-title mb-1">Support Chat </h5>
                        <div class="form-check form-switch mb-0">
                            <input class="form-check-input ms-auto" type="checkbox"
                                data-theme-control="phoenixSupportChat" />
                        </div>
                    </div>
                    <p class="mb-0 text-body-tertiary">Toggle support chat</p>
                </div>
                <div class="setting-panel-item">
                    <h5 class="setting-panel-item-title">Navigation Type</h5>
                    <div class="row gx-2">
                        <div class="col-6">
                            <input class="btn-check" id="navbarPositionVertical" name="navigation-type"
                                type="radio" value="vertical" data-theme-control="phoenixNavbarPosition"
                                data-page-url="../../documentation/layouts/vertical-navbar.html"
                                disabled="disabled" />
                            <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionVertical">
                                <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                        src="/assets/backend/img/generic/default-light.png" alt="" /><img
                                        class="img-fluid img-prototype d-light-none"
                                        src="/assets/backend/img/generic/default-dark.png"
                                        alt="" /></span><span class="label-text">Vertical</span></label>
                        </div>
                        <div class="col-6">
                            <input class="btn-check" id="navbarPositionHorizontal" name="navigation-type"
                                type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition"
                                data-page-url="../../documentation/layouts/horizontal-navbar.html"
                                disabled="disabled" />
                            <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionHorizontal">
                                <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                        src="/assets/backend/img/generic/top-default.png" alt="" /><img
                                        class="img-fluid img-prototype d-light-none"
                                        src="/assets/backend/img/generic/top-default-dark.png"
                                        alt="" /></span><span class="label-text"> Horizontal</span></label>
                        </div>
                        <div class="col-6">
                            <input class="btn-check" id="navbarPositionCombo" name="navigation-type"
                                type="radio" value="combo" data-theme-control="phoenixNavbarPosition"
                                disabled="disabled" data-page-url="../../documentation/layouts/combo-navbar.html" />
                            <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionCombo"> <span
                                    class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                        src="/assets/backend/img/generic/nav-combo-light.png" alt="" /><img
                                        class="img-fluid img-prototype d-light-none"
                                        src="/assets/backend/img/generic/nav-combo-dark.png"
                                        alt="" /></span><span class="label-text"> Combo</span></label>
                        </div>
                        <div class="col-6">
                            <input class="btn-check" id="navbarPositionTopDouble" name="navigation-type"
                                type="radio" value="dual-nav" data-theme-control="phoenixNavbarPosition"
                                disabled="disabled" data-page-url="../../documentation/layouts/dual-nav.html" />
                            <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionTopDouble">
                                <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                        src="/assets/backend/img/generic/dual-light.png" alt="" /><img
                                        class="img-fluid img-prototype d-light-none"
                                        src="/assets/backend/img/generic/dual-dark.png"
                                        alt="" /></span><span class="label-text"> Dual nav</span></label>
                        </div>
                    </div>
                    <p class="text-warning-dark font-medium"> <span
                            class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update
                        navigation type in this page</p>
                </div>
                <div class="setting-panel-item">
                    <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
                    <div class="row gx-2">
                        <div class="col-6">
                            <input class="btn-check" id="navbar-style-default" type="radio" name="config.name"
                                value="default" data-theme-control="phoenixNavbarVerticalStyle"
                                disabled="disabled" />
                            <label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-default"> <img
                                    class="img-fluid img-prototype d-dark-none"
                                    src="/assets/backend/img/generic/default-light.png" alt="" /><img
                                    class="img-fluid img-prototype d-light-none"
                                    src="/assets/backend/img/generic/default-dark.png" alt="" /><span
                                    class="label-text d-dark-none"> Default</span><span
                                    class="label-text d-light-none">Default</span></label>
                        </div>
                        <div class="col-6">
                            <input class="btn-check" id="navbar-style-dark" type="radio" name="config.name"
                                value="darker" data-theme-control="phoenixNavbarVerticalStyle"
                                disabled="disabled" />
                            <label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-dark"> <img
                                    class="img-fluid img-prototype d-dark-none"
                                    src="/assets/backend/img/generic/vertical-darker.png" alt="" /><img
                                    class="img-fluid img-prototype d-light-none"
                                    src="/assets/backend/img/generic/vertical-lighter.png" alt="" /><span
                                    class="label-text d-dark-none"> Darker</span><span
                                    class="label-text d-light-none">Lighter</span></label>
                        </div>
                    </div>
                    <p class="text-warning-dark font-medium"> <span
                            class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update
                        vertical navbar appearance in this page</p>
                </div>
                <div class="setting-panel-item">
                    <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
                    <div class="row gx-2">
                        <div class="col-6">
                            <input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio"
                                value="default" data-theme-control="phoenixNavbarTopShape"
                                data-page-url="../../documentation/layouts/horizontal-navbar.html"
                                disabled="disabled" />
                            <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeDefault"> <span
                                    class="mb-2 rounded d-block"><img
                                        class="img-fluid img-prototype d-dark-none mb-0"
                                        src="/assets/backend/img/generic/top-default.png" alt="" /><img
                                        class="img-fluid img-prototype d-light-none mb-0"
                                        src="/assets/backend/img/generic/top-default-dark.png"
                                        alt="" /></span><span class="label-text">Default</span></label>
                        </div>
                        <div class="col-6">
                            <input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio"
                                value="slim" data-theme-control="phoenixNavbarTopShape"
                                data-page-url="../../documentation/layouts/horizontal-navbar.html#horizontal-navbar-slim"
                                disabled="disabled" />
                            <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeSlim"> <span
                                    class="mb-2 rounded d-block"><img
                                        class="img-fluid img-prototype d-dark-none mb-0"
                                        src="/assets/backend/img/generic/top-slim.png" alt="" /><img
                                        class="img-fluid img-prototype d-light-none mb-0"
                                        src="/assets/backend/img/generic/top-slim-dark.png"
                                        alt="" /></span><span class="label-text"> Slim</span></label>
                        </div>
                    </div>
                    <p class="text-warning-dark font-medium"> <span
                            class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update
                        horizontal navbar shape in this page</p>
                </div>
                <div class="setting-panel-item">
                    <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
                    <div class="row gx-2">
                        <div class="col-6">
                            <input class="btn-check" id="navbarTopDefault" name="navbar-top-style"
                                type="radio" value="default" data-theme-control="phoenixNavbarTopStyle"
                                disabled="disabled" />
                            <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDefault"> <span
                                    class="mb-2 rounded d-block"><img
                                        class="img-fluid img-prototype d-dark-none mb-0"
                                        src="/assets/backend/img/generic/top-default.png" alt="" /><img
                                        class="img-fluid img-prototype d-light-none mb-0"
                                        src="/assets/backend/img/generic/top-style-darker.png"
                                        alt="" /></span><span class="label-text">Default</span></label>
                        </div>
                        <div class="col-6">
                            <input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio"
                                value="darker" data-theme-control="phoenixNavbarTopStyle" disabled="disabled" />
                            <label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDarker"> <span
                                    class="mb-2 rounded d-block"><img
                                        class="img-fluid img-prototype d-dark-none mb-0"
                                        src="/assets/backend/img/generic/navbar-top-style-light.png"
                                        alt="" /><img class="img-fluid img-prototype d-light-none mb-0"
                                        src="/assets/backend/img/generic/top-style-lighter.png"
                                        alt="" /></span><span
                                    class="label-text d-dark-none">Darker</span><span
                                    class="label-text d-light-none">Lighter</span></label>
                        </div>
                    </div>
                    <p class="text-warning-dark font-medium"> <span
                            class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update
                        horizontal navbar appearance in this page</p>
                </div><a class="bun btn-primary d-grid mb-3 text-white mt-5 btn btn-primary"
                    href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/"
                    target="_blank">Purchase template</a>
            </div>
        </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
            <div class="card-body d-flex align-items-center px-2 py-1">
                <div class="position-relative rounded-start" style="height:34px;width:28px">
                    <div class="settings-popover"><span class="ripple"><span
                                class="fa-spin position-absolute all-0 d-flex flex-center"><span
                                    class="icon-spin position-absolute all-0 d-flex flex-center">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="#ffffff"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                                            fill="#2A7BE4"></path>
                                    </svg></span></span></span></div>
                </div><small
                    class="text-uppercase text-body-tertiary fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
            </div>
        </a>


        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="/assets/backend/vendors/popper/popper.min.js"></script>
        <script src="/assets/backend/vendors/bootstrap/bootstrap.min.js"></script>
        <script src="/assets/backend/vendors/anchorjs/anchor.min.js"></script>
        <script src="/assets/backend/vendors/is/is.min.js"></script>
        <script src="/assets/backend/vendors/fontawesome/all.min.js"></script>
        <script src="/assets/backend/vendors/lodash/lodash.min.js"></script>
        <script src="/assets/backend/vendors/list.js/list.min.js"></script>
        <script src="/assets/backend/vendors/feather-icons/feather.min.js"></script>
        <script src="/assets/backend/vendors/dayjs/dayjs.min.js"></script>
        <script src="/assets/backend/js/phoenix.js"></script>
        <script src="/assets/backend/vendors/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="/assets/backend/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="/assets/backend/vendors/isotope-packery/packery-mode.pkgd.min.js"></script>
        <script src="/assets/backend/vendors/bigpicture/BigPicture.js"></script>
        <script src="/assets/backend/vendors/typed.js/typed.umd.js"></script>
        <script src="/assets/backend/vendors/swiper/swiper-bundle.min.js"></script>

    </body>

</html>


{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
            *,
            ::after,
            ::before {
                box-sizing: border-box;
                border-width: 0;
                border-style: solid;
                border-color: #e5e7eb
            }

            ::after,
            ::before {
                --tw-content: ''
            }

            :host,
            html {
                line-height: 1.5;
                -webkit-text-size-adjust: 100%;
                -moz-tab-size: 4;
                tab-size: 4;
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
                font-feature-settings: normal;
                font-variation-settings: normal;
                -webkit-tap-highlight-color: transparent
            }

            body {
                margin: 0;
                line-height: inherit
            }

            hr {
                height: 0;
                color: inherit;
                border-top-width: 1px
            }

            abbr:where([title]) {
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-size: inherit;
                font-weight: inherit
            }

            a {
                color: inherit;
                text-decoration: inherit
            }

            b,
            strong {
                font-weight: bolder
            }

            code,
            kbd,
            pre,
            samp {
                font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                font-feature-settings: normal;
                font-variation-settings: normal;
                font-size: 1em
            }

            small {
                font-size: 80%
            }

            sub,
            sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline
            }

            sub {
                bottom: -.25em
            }

            sup {
                top: -.5em
            }

            table {
                text-indent: 0;
                border-color: inherit;
                border-collapse: collapse
            }

            button,
            input,
            optgroup,
            select,
            textarea {
                font-family: inherit;
                font-feature-settings: inherit;
                font-variation-settings: inherit;
                font-size: 100%;
                font-weight: inherit;
                line-height: inherit;
                color: inherit;
                margin: 0;
                padding: 0
            }

            button,
            select {
                text-transform: none
            }

            [type=button],
            [type=reset],
            [type=submit],
            button {
                -webkit-appearance: button;
                background-color: transparent;
                background-image: none
            }

            :-moz-focusring {
                outline: auto
            }

            :-moz-ui-invalid {
                box-shadow: none
            }

            progress {
                vertical-align: baseline
            }

            ::-webkit-inner-spin-button,
            ::-webkit-outer-spin-button {
                height: auto
            }

            [type=search] {
                -webkit-appearance: textfield;
                outline-offset: -2px
            }

            ::-webkit-search-decoration {
                -webkit-appearance: none
            }

            ::-webkit-file-upload-button {
                -webkit-appearance: button;
                font: inherit
            }

            summary {
                display: list-item
            }

            blockquote,
            dd,
            dl,
            figure,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            hr,
            p,
            pre {
                margin: 0
            }

            fieldset {
                margin: 0;
                padding: 0
            }

            legend {
                padding: 0
            }

            menu,
            ol,
            ul {
                list-style: none;
                margin: 0;
                padding: 0
            }

            dialog {
                padding: 0
            }

            textarea {
                resize: vertical
            }

            input::placeholder,
            textarea::placeholder {
                opacity: 1;
                color: #9ca3af
            }

            [role=button],
            button {
                cursor: pointer
            }

            :disabled {
                cursor: default
            }

            audio,
            canvas,
            embed,
            iframe,
            img,
            object,
            svg,
            video {
                display: block;
                vertical-align: middle
            }

            img,
            video {
                max-width: 100%;
                height: auto
            }

            [hidden] {
                display: none
            }

            *,
            ::before,
            ::after {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / 0.5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia:
            }

            ::backdrop {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / 0.5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia:
            }

            .absolute {
                position: absolute
            }

            .relative {
                position: relative
            }

            .-left-20 {
                left: -5rem
            }

            .top-0 {
                top: 0px
            }

            .-bottom-16 {
                bottom: -4rem
            }

            .-left-16 {
                left: -4rem
            }

            .-mx-3 {
                margin-left: -0.75rem;
                margin-right: -0.75rem
            }

            .mt-4 {
                margin-top: 1rem
            }

            .mt-6 {
                margin-top: 1.5rem
            }

            .flex {
                display: flex
            }

            .grid {
                display: grid
            }

            .hidden {
                display: none
            }

            .aspect-video {
                aspect-ratio: 16 / 9
            }

            .size-12 {
                width: 3rem;
                height: 3rem
            }

            .size-5 {
                width: 1.25rem;
                height: 1.25rem
            }

            .size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .h-12 {
                height: 3rem
            }

            .h-40 {
                height: 10rem
            }

            .h-full {
                height: 100%
            }

            .min-h-screen {
                min-height: 100vh
            }

            .w-full {
                width: 100%
            }

            .w-\[calc\(100\%\+8rem\)\] {
                width: calc(100% + 8rem)
            }

            .w-auto {
                width: auto
            }

            .max-w-\[877px\] {
                max-width: 877px
            }

            .max-w-2xl {
                max-width: 42rem
            }

            .flex-1 {
                flex: 1 1 0%
            }

            .shrink-0 {
                flex-shrink: 0
            }

            .grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .flex-col {
                flex-direction: column
            }

            .items-start {
                align-items: flex-start
            }

            .items-center {
                align-items: center
            }

            .items-stretch {
                align-items: stretch
            }

            .justify-end {
                justify-content: flex-end
            }

            .justify-center {
                justify-content: center
            }

            .gap-2 {
                gap: 0.5rem
            }

            .gap-4 {
                gap: 1rem
            }

            .gap-6 {
                gap: 1.5rem
            }

            .self-center {
                align-self: center
            }

            .overflow-hidden {
                overflow: hidden
            }

            .rounded-\[10px\] {
                border-radius: 10px
            }

            .rounded-full {
                border-radius: 9999px
            }

            .rounded-lg {
                border-radius: 0.5rem
            }

            .rounded-md {
                border-radius: 0.375rem
            }

            .rounded-sm {
                border-radius: 0.125rem
            }

            .bg-\[\#FF2D20\]\/10 {
                background-color: rgb(255 45 32 / 0.1)
            }

            .bg-white {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity))
            }

            .bg-gradient-to-b {
                background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
            }

            .from-transparent {
                --tw-gradient-from: transparent var(--tw-gradient-from-position);
                --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
            }

            .via-white {
                --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .to-white {
                --tw-gradient-to: #fff var(--tw-gradient-to-position)
            }

            .stroke-\[\#FF2D20\] {
                stroke: #FF2D20
            }

            .object-cover {
                object-fit: cover
            }

            .object-top {
                object-position: top
            }

            .p-6 {
                padding: 1.5rem
            }

            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .py-10 {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem
            }

            .px-3 {
                padding-left: 0.75rem;
                padding-right: 0.75rem
            }

            .py-16 {
                padding-top: 4rem;
                padding-bottom: 4rem
            }

            .py-2 {
                padding-top: 0.5rem;
                padding-bottom: 0.5rem
            }

            .pt-3 {
                padding-top: 0.75rem
            }

            .text-center {
                text-align: center
            }

            .font-sans {
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
            }

            .text-sm {
                font-size: 0.875rem;
                line-height: 1.25rem
            }

            .text-sm\/relaxed {
                font-size: 0.875rem;
                line-height: 1.625
            }

            .text-xl {
                font-size: 1.25rem;
                line-height: 1.75rem
            }

            .font-semibold {
                font-weight: 600
            }

            .text-black {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity))
            }

            .text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .underline {
                -webkit-text-decoration-line: underline;
                text-decoration-line: underline
            }

            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale
            }

            .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
                --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
                --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .ring-transparent {
                --tw-ring-color: transparent
            }

            .ring-white\/\[0\.05\] {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .transition {
                transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                transition-duration: 150ms
            }

            .duration-300 {
                transition-duration: 300ms
            }

            .selection\:bg-\[\#FF2D20\] *::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity))
            }

            .selection\:text-white *::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .selection\:bg-\[\#FF2D20\]::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity))
            }

            .selection\:text-white::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .hover\:text-black:hover {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity))
            }

            .hover\:text-black\/70:hover {
                color: rgb(0 0 0 / 0.7)
            }

            .hover\:ring-black\/20:hover {
                --tw-ring-color: rgb(0 0 0 / 0.2)
            }

            .focus\:outline-none:focus {
                outline: 2px solid transparent;
                outline-offset: 2px
            }

            .focus-visible\:ring-1:focus-visible {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
            }

            @media (min-width: 640px) {
                .sm\:size-16 {
                    width: 4rem;
                    height: 4rem
                }

                .sm\:size-6 {
                    width: 1.5rem;
                    height: 1.5rem
                }

                .sm\:pt-5 {
                    padding-top: 1.25rem
                }
            }

            @media (min-width: 768px) {
                .md\:row-span-3 {
                    grid-row: span 3 / span 3
                }
            }

            @media (min-width: 1024px) {
                .lg\:col-start-2 {
                    grid-column-start: 2
                }

                .lg\:h-16 {
                    height: 4rem
                }

                .lg\:max-w-7xl {
                    max-width: 80rem
                }

                .lg\:grid-cols-3 {
                    grid-template-columns: repeat(3, minmax(0, 1fr))
                }

                .lg\:grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr))
                }

                .lg\:flex-col {
                    flex-direction: column
                }

                .lg\:items-end {
                    align-items: flex-end
                }

                .lg\:justify-center {
                    justify-content: center
                }

                .lg\:gap-8 {
                    gap: 2rem
                }

                .lg\:p-10 {
                    padding: 2.5rem
                }

                .lg\:pb-10 {
                    padding-bottom: 2.5rem
                }

                .lg\:pt-0 {
                    padding-top: 0px
                }

                .lg\:text-\[\#FF2D20\] {
                    --tw-text-opacity: 1;
                    color: rgb(255 45 32 / var(--tw-text-opacity))
                }
            }

            @media (prefers-color-scheme: dark) {
                .dark\:block {
                    display: block
                }

                .dark\:hidden {
                    display: none
                }

                .dark\:bg-black {
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 0 0 / var(--tw-bg-opacity))
                }

                .dark\:bg-zinc-900 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(24 24 27 / var(--tw-bg-opacity))
                }

                .dark\:via-zinc-900 {
                    --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
                }

                .dark\:to-zinc-900 {
                    --tw-gradient-to: #18181b var(--tw-gradient-to-position)
                }

                .dark\:text-white\/50 {
                    color: rgb(255 255 255 / 0.5)
                }

                .dark\:text-white {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity))
                }

                .dark\:text-white\/70 {
                    color: rgb(255 255 255 / 0.7)
                }

                .dark\:ring-zinc-800 {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
                }

                .dark\:hover\:text-white:hover {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity))
                }

                .dark\:hover\:text-white\/70:hover {
                    color: rgb(255 255 255 / 0.7)
                }

                .dark\:hover\:text-white\/80:hover {
                    color: rgb(255 255 255 / 0.8)
                }

                .dark\:hover\:ring-zinc-700:hover {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
                }

                .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
                }

                .dark\:focus-visible\:ring-white:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
                }
            }
        </style>
    </head>

    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div className="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]"
                src="https://laravel.com/assets/img/welcome/background.svg" />
            <div
                class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z"
                                    fill="currentColor" />
                            </svg>
                            @if (Route::has('login'))
                                <nav class="-mx-3 flex flex-1 justify-end">
                                    @auth
                                        <a href="{{ url('/dashboard') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                            Dashboard
                                        </a>
                                    @else
                                        <a href="{{ route('login') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                            Log in
                                        </a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                                Register
                                            </a>
                                        @endif
                                    @endauth
                                </nav>
                            @endif
                    </header>

                    <main class="mt-6">
                        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                            <a href="https://laravel.com/docs" id="docs-card"
                                class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                    <img src="https://laravel.com/assets/img/welcome/docs-light.svg"
                                        alt="Laravel documentation screenshot"
                                        class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] dark:hidden"
                                        onerror="
                                            document.getElementById('screenshot-container').classList.add('!hidden');
                                            document.getElementById('docs-card').classList.add('!row-span-1');
                                            document.getElementById('docs-card-content').classList.add('!flex-row');
                                            document.getElementById('background').classList.add('!hidden');
                                        " />
                                    <img src="https://laravel.com/assets/img/welcome/docs-dark.svg"
                                        alt="Laravel documentation screenshot"
                                        class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block" />
                                    <div
                                        class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900">
                                    </div>
                                </div>
                                <div id="app">

                                    <div class="relative flex items-center gap-6 lg:items-end">
                                        <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                            <div
                                                class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                                <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path fill="#FF2D20"
                                                        d="M23 4a1 1 0 0 0-1.447-.894L12.224 7.77a.5.5 0 0 1-.448 0L2.447 3.106A1 1 0 0 0 1 4v13.382a1.99 1.99 0 0 0 1.105 1.79l9.448 4.728c.14.065.293.1.447.1.154-.005.306-.04.447-.105l9.453-4.724a1.99 1.99 0 0 0 1.1-1.789V4ZM3 6.023a.25.25 0 0 1 .362-.223l7.5 3.75a.251.251 0 0 1 .138.223v11.2a.25.25 0 0 1-.362.224l-7.5-3.75a.25.25 0 0 1-.138-.22V6.023Zm18 11.2a.25.25 0 0 1-.138.224l-7.5 3.75a.249.249 0 0 1-.329-.099.249.249 0 0 1-.033-.12V9.772a.251.251 0 0 1 .138-.224l7.5-3.75a.25.25 0 0 1 .362.224v11.2Z" />
                                                    <path fill="#FF2D20"
                                                        d="m3.55 1.893 8 4.048a1.008 1.008 0 0 0 .9 0l8-4.048a1 1 0 0 0-.9-1.785l-7.322 3.706a.506.506 0 0 1-.452 0L4.454.108a1 1 0 0 0-.9 1.785H3.55Z" />
                                                </svg>
                                            </div>

                                            <div class="pt-3 sm:pt-5 lg:pt-0">
                                                <h2 class="text-xl font-semibold text-black dark:text-white">
                                                    Documentation
                                                </h2>

                                                <p class="mt-4 text-sm/relaxed">
                                                    Laravel has wonderful documentation covering every aspect of the
                                                    framework. Whether you are a newcomer or have prior experience with
                                                    Laravel, we recommend reading our documentation from beginning to
                                                    end.
                                                </p>
                                            </div>
                                        </div>

                                        <svg class="size-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                        </svg>
                                    </div>
                            </a>

                            <a href="https://laracasts.com"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                <div
                                    class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24">
                                        <g fill="#FF2D20">
                                            <path
                                                d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z" />
                                        </g>
                                    </svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Laracasts</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                                        development. Check them out, see for yourself, and massively level up your
                                        development skills in the process.
                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <a href="https://laravel-news.com"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                <div
                                    class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24">
                                        <g fill="#FF2D20">
                                            <path
                                                d="M8.75 4.5H5.5c-.69 0-1.25.56-1.25 1.25v4.75c0 .69.56 1.25 1.25 1.25h3.25c.69 0 1.25-.56 1.25-1.25V5.75c0-.69-.56-1.25-1.25-1.25Z" />
                                            <path
                                                d="M24 10a3 3 0 0 0-3-3h-2V2.5a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2V20a3.5 3.5 0 0 0 3.5 3.5h17A3.5 3.5 0 0 0 24 20V10ZM3.5 21.5A1.5 1.5 0 0 1 2 20V3a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v17c0 .295.037.588.11.874a.5.5 0 0 1-.484.625L3.5 21.5ZM22 20a1.5 1.5 0 1 1-3 0V9.5a.5.5 0 0 1 .5-.5H21a1 1 0 0 1 1 1v10Z" />
                                            <path
                                                d="M12.751 6.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 7.3v-.5a.75.75 0 0 1 .751-.753ZM12.751 10.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 11.3v-.5a.75.75 0 0 1 .751-.753ZM4.751 14.047h10a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-10A.75.75 0 0 1 4 15.3v-.5a.75.75 0 0 1 .751-.753ZM4.75 18.047h7.5a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-7.5A.75.75 0 0 1 4 19.3v-.5a.75.75 0 0 1 .75-.753Z" />
                                        </g>
                                    </svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Laravel News</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laravel News is a community driven portal and newsletter aggregating all of the
                                        latest and most important news in the Laravel ecosystem, including new package
                                        releases and tutorials.
                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <div
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800">
                                <div
                                    class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24">
                                        <g fill="#FF2D20">
                                            <path
                                                d="M16.597 12.635a.247.247 0 0 0-.08-.237 2.234 2.234 0 0 1-.769-1.68c.001-.195.03-.39.084-.578a.25.25 0 0 0-.09-.267 8.8 8.8 0 0 0-4.826-1.66.25.25 0 0 0-.268.181 2.5 2.5 0 0 1-2.4 1.824.045.045 0 0 0-.045.037 12.255 12.255 0 0 0-.093 3.86.251.251 0 0 0 .208.214c2.22.366 4.367 1.08 6.362 2.118a.252.252 0 0 0 .32-.079 10.09 10.09 0 0 0 1.597-3.733ZM13.616 17.968a.25.25 0 0 0-.063-.407A19.697 19.697 0 0 0 8.91 15.98a.25.25 0 0 0-.287.325c.151.455.334.898.548 1.328.437.827.981 1.594 1.619 2.28a.249.249 0 0 0 .32.044 29.13 29.13 0 0 0 2.506-1.99ZM6.303 14.105a.25.25 0 0 0 .265-.274 13.048 13.048 0 0 1 .205-4.045.062.062 0 0 0-.022-.07 2.5 2.5 0 0 1-.777-.982.25.25 0 0 0-.271-.149 11 11 0 0 0-5.6 2.815.255.255 0 0 0-.075.163c-.008.135-.02.27-.02.406.002.8.084 1.598.246 2.381a.25.25 0 0 0 .303.193 19.924 19.924 0 0 1 5.746-.438ZM9.228 20.914a.25.25 0 0 0 .1-.393 11.53 11.53 0 0 1-1.5-2.22 12.238 12.238 0 0 1-.91-2.465.248.248 0 0 0-.22-.187 18.876 18.876 0 0 0-5.69.33.249.249 0 0 0-.179.336c.838 2.142 2.272 4 4.132 5.353a.254.254 0 0 0 .15.048c1.41-.01 2.807-.282 4.117-.802ZM18.93 12.957l-.005-.008a.25.25 0 0 0-.268-.082 2.21 2.21 0 0 1-.41.081.25.25 0 0 0-.217.2c-.582 2.66-2.127 5.35-5.75 7.843a.248.248 0 0 0-.09.299.25.25 0 0 0 .065.091 28.703 28.703 0 0 0 2.662 2.12.246.246 0 0 0 .209.037c2.579-.701 4.85-2.242 6.456-4.378a.25.25 0 0 0 .048-.189 13.51 13.51 0 0 0-2.7-6.014ZM5.702 7.058a.254.254 0 0 0 .2-.165A2.488 2.488 0 0 1 7.98 5.245a.093.093 0 0 0 .078-.062 19.734 19.734 0 0 1 3.055-4.74.25.25 0 0 0-.21-.41 12.009 12.009 0 0 0-10.4 8.558.25.25 0 0 0 .373.281 12.912 12.912 0 0 1 4.826-1.814ZM10.773 22.052a.25.25 0 0 0-.28-.046c-.758.356-1.55.635-2.365.833a.25.25 0 0 0-.022.48c1.252.43 2.568.65 3.893.65.1 0 .2 0 .3-.008a.25.25 0 0 0 .147-.444c-.526-.424-1.1-.917-1.673-1.465ZM18.744 8.436a.249.249 0 0 0 .15.228 2.246 2.246 0 0 1 1.352 2.054c0 .337-.08.67-.23.972a.25.25 0 0 0 .042.28l.007.009a15.016 15.016 0 0 1 2.52 4.6.25.25 0 0 0 .37.132.25.25 0 0 0 .096-.114c.623-1.464.944-3.039.945-4.63a12.005 12.005 0 0 0-5.78-10.258.25.25 0 0 0-.373.274c.547 2.109.85 4.274.901 6.453ZM9.61 5.38a.25.25 0 0 0 .08.31c.34.24.616.561.8.935a.25.25 0 0 0 .3.127.631.631 0 0 1 .206-.034c2.054.078 4.036.772 5.69 1.991a.251.251 0 0 0 .267.024c.046-.024.093-.047.141-.067a.25.25 0 0 0 .151-.23A29.98 29.98 0 0 0 15.957.764a.25.25 0 0 0-.16-.164 11.924 11.924 0 0 0-2.21-.518.252.252 0 0 0-.215.076A22.456 22.456 0 0 0 9.61 5.38Z" />
                                        </g>
                                    </svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Vibrant Ecosystem</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laravel's robust library of first-party tools and libraries, such as <a
                                            href="https://forge.laravel.com"
                                            class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white dark:focus-visible:ring-[#FF2D20]">Forge</a>,
                                        <a href="https://vapor.laravel.com"
                                            class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Vapor</a>,
                                        <a href="https://nova.laravel.com"
                                            class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Nova</a>,
                                        <a href="https://envoyer.io"
                                            class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Envoyer</a>,
                                        and <a href="https://herd.laravel.com"
                                            class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Herd</a>
                                        help you take your projects to the next level. Pair them with powerful open
                                        source libraries like <a href="https://laravel.com/docs/billing"
                                            class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Cashier</a>,
                                        <a href="https://laravel.com/docs/dusk"
                                            class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Dusk</a>,
                                        <a href="https://laravel.com/docs/broadcasting"
                                            class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Echo</a>,
                                        <a href="https://laravel.com/docs/horizon"
                                            class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Horizon</a>,
                                        <a href="https://laravel.com/docs/sanctum"
                                            class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Sanctum</a>,
                                        <a href="https://laravel.com/docs/telescope"
                                            class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Telescope</a>,
                                        and more.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>
                </div>
            </div>
        </div>
    </body>

</html> --}}
