<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- ===============================================-->
        <!--    Document Title-->
        <!-- ===============================================-->
        <title>Home</title>


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
        {{-- <link rel="apple-touch-icon" sizes="180x180" href="assets/backend/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/backend/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicons/favicon-16x16.png">
        <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
        <link rel="manifest" href="../../assets/img/favicons/manifest.json">
        <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
        <meta name="theme-color" content="#ffffff"> --}}
        <script src="/assets/backend/vendors/simplebar/simplebar.min.js"></script>
        <script src="/assets/backend/js/config.js"></script>


        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link href="/assets/backend/vendors/mapbox-gl/mapbox-gl.css" rel="stylesheet">
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
    </head>


    <body style="--phoenix-scroll-margin-top: 1.2rem;">

        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main class="main" id="top">
            <div class="bg-body-emphasis sticky-top" data-navbar-shadow-on-scroll="data-navbar-shadow-on-scroll">
                <nav class="navbar navbar-expand-lg container-small px-3 px-lg-7 px-xxl-3">
                    <a class="navbar-brand flex-1 flex-lg-grow-0" href="../../index.html">
                        <div class="d-flex align-items-center">
                            <img src="/assets/backend/img/icons/logo-rsud-removebg.png" alt="phoenix"
                                width="47" />
                            <h5 class="logo-text ms-2">RSUD KAWALI</h5>
                        </div>
                    </a>
                    <div class="d-lg-none">
                        <div class="theme-control-toggle fa-icon-wait px-2">
                            <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                                data-theme-control="phoenixTheme" value="dark" id="themeControlToggleSm" />
                            <label class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                for="themeControlToggleSm" data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-title="Switch theme" style="height:32px;width:32px;">
                                <span class="icon" data-feather="moon"></span>
                            </label>
                            <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                for="themeControlToggleSm" data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-title="Switch theme" style="height:32px;width:32px;">
                                <span class="icon" data-feather="sun"></span>
                            </label>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="border-bottom border-translucent border-bottom-lg-0 mb-2">
                            <div class="search-box d-inline d-lg-none">
                                <form class="position-relative">
                                    <input class="form-control search-input search rounded-pill my-4" type="search"
                                        placeholder="Search" aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>
                                </form>
                            </div>
                        </div>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item border-bottom border-translucent border-bottom-lg-0">
                                <a class="nav-link lh-1 py-0 fs-9 fw-bold py-3" aria-current="page"
                                    href="#">Beranda</a>
                            </li>
                            <li class="nav-item border-bottom border-translucent border-bottom-lg-0">
                                <a class="nav-link lh-1 py-0 fs-9 fw-bold py-3" href="#feature">Rekrutmen Pegawai</a>
                            </li>
                            <li class="nav-item border-bottom border-translucent border-bottom-lg-0">
                                <a class="nav-link lh-1 py-0 fs-9 fw-bold py-3" href="#blog">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link lh-1 py-0 fs-9 fw-bold py-3" href="#team">Fasilitas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link lh-1 py-0 fs-9 fw-bold py-3" href="#team">Laporan</a>
                            </li>
                        </ul>
                        <div class="d-grid d-lg-flex align-items-center">
                            <div class="nav-item d-flex align-items-center d-none d-lg-block pe-2">
                                <div class="theme-control-toggle fa-icon-wait px-2">
                                    <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                                        data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" />
                                    <label class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                        data-bs-title="Switch theme" style="height:32px;width:32px;">
                                        <span class="icon" data-feather="moon"></span>
                                    </label>
                                    <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                        data-bs-title="Switch theme" style="height:32px;width:32px;">
                                        <span class="icon" data-feather="sun"></span>
                                    </label>
                                </div>
                            </div>
                            @if (Route::has('login'))
                                <ul class="navbar-nav">
                                    @auth
                                        <li class="nav-item">
                                            <a href="{{ url('/dashboard') }}"
                                                class="nav-link lh-1 py-0 fs-9 fw-bold py-3">Dashboard</a>
                                        </li>
                                    @else
                                        <li class="nav-item">
                                            <a href="{{ route('login') }}"
                                                class="nav-link lh-1 py-0 fs-9 fw-bold py-3">Log in</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a href="{{ route('register') }}"
                                                    class="nav-link lh-1 py-0 fs-9 fw-bold py-3">Register</a>
                                            </li>
                                        @endif
                                    @endauth
                                </ul>
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
            <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true"
                data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
                <div class="modal-dialog">
                    <div class="modal-content mt-15 rounded-pill">
                        <div class="modal-body p-0">
                            <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}'
                                style="width: auto;">
                                <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                                    <input class="form-control search-input fuzzy-search rounded-pill form-control-lg"
                                        type="search" placeholder="Search..." aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>

                                </form>
                                <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                                    data-bs-dismiss="search">
                                    <button class="btn btn-link p-0" aria-label="Close"></button>
                                </div>
                                <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                                    <div class="scrollbar-overlay" style="max-height: 30rem;">
                                        <div class="list pb-3">
                                            <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span
                                                    class="text-body-quaternary">results</span></h6>
                                            <hr class="my-0" />
                                            <h6
                                                class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                                Recently Searched </h6>
                                            <div class="py-2"><a class="dropdown-item"
                                                    href="../../apps/e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">

                                                        <div class="fw-normal text-body-highlight title"><span
                                                                class="fa-solid fa-clock-rotate-left"
                                                                data-fa-transform="shrink-2"></span> Store Macbook
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item"
                                                    href="../../apps/e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">

                                                        <div class="fw-normal text-body-highlight title"> <span
                                                                class="fa-solid fa-clock-rotate-left"
                                                                data-fa-transform="shrink-2"></span> MacBook Air - 13″
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                            <hr class="my-0" />
                                            <h6
                                                class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                                Products</h6>
                                            <div class="py-2"><a
                                                    class="dropdown-item py-2 d-flex align-items-center"
                                                    href="../../apps/e-commerce/landing/product-details.html">
                                                    <div class="file-thumbnail me-2"><img
                                                            class="h-100 w-100 object-fit-cover rounded-3"
                                                            src="/assets/backend/img/products/60x60/3.png"
                                                            alt="" /></div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″
                                                        </h6>
                                                        <p class="fs-10 mb-0 d-flex text-body-tertiary"><span
                                                                class="fw-medium text-body-tertiary text-opactity-85">8GB
                                                                Memory - 1.6GHz - 128GB Storage</span></p>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item py-2 d-flex align-items-center"
                                                    href="../../apps/e-commerce/landing/product-details.html">
                                                    <div class="file-thumbnail me-2"><img class="img-fluid"
                                                            src="/assets/backend/img/products/60x60/3.png"
                                                            alt="" /></div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″
                                                        </h6>
                                                        <p class="fs-10 mb-0 d-flex text-body-tertiary"><span
                                                                class="fw-medium text-body-tertiary text-opactity-85">30
                                                                Sep at 12:30 PM</span></p>
                                                    </div>
                                                </a>

                                            </div>
                                            <hr class="my-0" />
                                            <h6
                                                class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                                Quick Links</h6>
                                            <div class="py-2"><a class="dropdown-item"
                                                    href="../../apps/e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">

                                                        <div class="fw-normal text-body-highlight title"><span
                                                                class="fa-solid fa-link text-body"
                                                                data-fa-transform="shrink-2"></span> Support MacBook
                                                            House</div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item"
                                                    href="../../apps/e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">

                                                        <div class="fw-normal text-body-highlight title"> <span
                                                                class="fa-solid fa-link text-body"
                                                                data-fa-transform="shrink-2"></span> Store MacBook″
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                            <hr class="my-0" />
                                            <h6
                                                class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                                Files</h6>
                                            <div class="py-2"><a class="dropdown-item"
                                                    href="../../apps/e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">

                                                        <div class="fw-normal text-body-highlight title"><span
                                                                class="fa-solid fa-file-zipper text-body"
                                                                data-fa-transform="shrink-2"></span> Library MacBook
                                                            folder.rar</div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item"
                                                    href="../../apps/e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">

                                                        <div class="fw-normal text-body-highlight title"> <span
                                                                class="fa-solid fa-file-lines text-body"
                                                                data-fa-transform="shrink-2"></span> Feature MacBook
                                                            extensions.txt</div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item"
                                                    href="../../apps/e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">

                                                        <div class="fw-normal text-body-highlight title"> <span
                                                                class="fa-solid fa-image text-body"
                                                                data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                            <hr class="my-0" />
                                            <h6
                                                class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                                Members</h6>
                                            <div class="py-2"><a
                                                    class="dropdown-item py-2 d-flex align-items-center"
                                                    href="../../pages/members.html">
                                                    <div class="avatar avatar-l status-online  me-2 text-body">
                                                        <img class="rounded-circle "
                                                            src="/assets/backend/img/team/40x40/10.webp"
                                                            alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                                                        <p class="fs-10 mb-0 d-flex text-body-tertiary">
                                                            anna@technext.it</p>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item py-2 d-flex align-items-center"
                                                    href="../../pages/members.html">
                                                    <div class="avatar avatar-l  me-2 text-body">
                                                        <img class="rounded-circle "
                                                            src="/assets/backend/img/team/40x40/12.webp"
                                                            alt="" />

                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                                                        <p class="fs-10 mb-0 d-flex text-body-tertiary">
                                                            smith@technext.it</p>
                                                    </div>
                                                </a>

                                            </div>
                                            <hr class="my-0" />
                                            <h6
                                                class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                                                Related Searches</h6>
                                            <div class="py-2"><a class="dropdown-item"
                                                    href="../../apps/e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">

                                                        <div class="fw-normal text-body-highlight title"><span
                                                                class="fa-brands fa-firefox-browser text-body"
                                                                data-fa-transform="shrink-2"></span> Search in the Web
                                                            MacBook</div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item"
                                                    href="../../apps/e-commerce/landing/product-details.html">
                                                    <div class="d-flex align-items-center">

                                                        <div class="fw-normal text-body-highlight title"> <span
                                                                class="fa-brands fa-chrome text-body"
                                                                data-fa-transform="shrink-2"></span> Store MacBook″
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="bg-body-emphasis pb-8" id="home">
                <div class="container-small hero-header-container px-lg-7 px-xxl-3">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-auto order-0 order-md-1 text-end order-1">
                            <div class="position-relative p-5 p-md-7 d-lg-none">
                                <div class="bg-holder"
                                    style="background-image:url(/assets/backend/img/bg/bg-23.png);background-size:contain;">
                                </div>
                                <!--/.bg-holder-->

                                <div class="position-relative"><img class="w-100 shadow-lg d-dark-none rounded-2"
                                        src="/assets/backend/img/bg/bg-Kawali28.png" alt="hero-header" /><img
                                        class="w-100 shadow-lg d-light-none rounded-2"
                                        src="/assets/backend/img/bg/bg-Kawali29d.png" alt="hero-header" />
                                </div>
                            </div>
                            <div class="hero-image-container position-absolute top-0 bottom-0 end-0 d-none d-lg-block">
                                <div class="position-relative h-100 w-100">
                                    <div
                                        class="position-absolute h-100 top-0 d-flex align-items-center end-0 hero-image-container-bg">
                                        <img class="pt-7 pt-md-0 w-100" src="/assets/backend/img/bg/bg-1-2.png"
                                            alt="hero-header" />
                                    </div>
                                    <div class="position-absolute h-100 top-0 d-flex align-items-center end-0"><img
                                            class="pt-7 pt-md-0 w-100 shadow-lg d-dark-none rounded-2"
                                            src="/assets/backend/img/bg/bg-Kawali28.png" alt="hero-header" /><img
                                            class="pt-7 pt-md-0 w-100 shadow-lg d-light-none rounded-2"
                                            src="/assets/backend/img/bg/bg-Kawali29d.png" alt="hero-header" /></div>
                                    {{-- light = isi gambar gelap --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 text-lg-start text-center pt-8 pb-6 order-0 position-relative">
                            <h1 class="fs-3 fs-lg-2 fs-md-1 fs-lg-2 fs-xl-1 fs fw-black mb-4"><span
                                    class="text-primary me-3">Selamat</span>Datang Di<br />RSUD Kawali</h1>
                            <p class="mb-5">“Sahabat Masyarakat Menuju Sehat”</p><a
                                class="btn btn-lg btn-primary rounded-pill me-3"
                                href="https://antrean.rsudkawali.com/" role="button">Antrian Online
                            </a><a class="btn btn-link me-2 fs-8 p-0" href="#!" role="button">Survey
                                Kepuasan<span class="fa-solid fa-angle-right ms-2 fs-9"></span></a>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-5 pt-xl-13 bg-body-emphasis">

                <div class="container-small px-lg-7 px-xxl-3">
                    <div class="row g-0">
                        <div class="col-6 col-md-3">
                            <div
                                class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-translucent border-end">
                                <img class="w-100" src="/assets/backend/img/brand2/netflix-n.png" alt="" />
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div
                                class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-translucent border-end-md">
                                <img class="w-100" src="/assets/backend/img/brand2/blender.png" alt="" />
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div
                                class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-translucent border-end border-end-md">
                                <img class="w-100" src="assets/backend/img/brand2/upwork.png" alt="" />
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div
                                class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-translucent border-end-lg-0">
                                <img class="w-100" src="assets/backend/img/brand2/facebook-f.png" alt="" />
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div
                                class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end border-bottom border-translucent border-bottom-md-0">
                                <img class="w-100" src="assets/backend/img/brand2/pocket.png" alt="" />
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div
                                class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end-md border-bottom border-translucent border-bottom-md-0">
                                <img class="w-100" src="assets/backend/img/brand2/mail-bluster-1.png"
                                    alt="" />
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div
                                class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end border-translucent">
                                <img class="w-100" src="assets/backend/img/brand2/discord.png" alt="" />
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div
                                class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end-lg-0 border-translucent">
                                <img class="w-100" src="/assets/backend/img/brand2/google-g.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->




            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="pt-15 pb-0" id="feature">

                <div class="container-small px-lg-7 px-xxl-3">
                    <div class="position-relative z-2">
                        <div class="row">
                            <div class="col-lg-6 text-center text-lg-start pe-xxl-3">
                                <h4 class="text-primary fw-bolder mb-4">Features</h4>
                                <h2 class="mb-3 text-body-emphasis lh-base">Seamless Payments: A Fully <br
                                        class="d-md-none" />Integrated Suite</h2>
                                <p class="mb-5">With the power of Phoenix, you can now focus only on functionaries
                                    for your digital products, while leaving the UI design on us!With the power of
                                    Phoenix, you can now focus only on functionaries for your digital products, while
                                    leaving the UI design on us!</p><a
                                    class="btn btn-lg btn-outline-primary rounded-pill me-2" href="#!"
                                    role="button">Find out more<i class="fa-solid fa-angle-right ms-2"></i></a>
                            </div>
                            <div class="col-sm-6 col-lg-3 mt-7 text-center text-lg-start">
                                <div class="h-100 d-flex flex-column justify-content-between">
                                    <div class="border-start-lg border-translucent border-dashed ps-4"><img
                                            class="mb-4" src="/assets/backend/img/icons/illustrations/bolt.png"
                                            width="48" height="48" alt="" />
                                        <div>
                                            <h5 class="fw-bolder mb-2">Lightning Speed</h5>
                                            <p class="fw-semibold lh-sm">Present everything you need in one place
                                                within minutes! Grow with Phoenix!</p>
                                        </div>
                                        <div><a class="btn btn-link me-2 p-0 fs-9" href="#!"
                                                role="button">Check Demo<span
                                                    class="fa-solid fa-angle-right ms-2"></span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mt-7 text-center text-lg-start">
                                <div class="h-100 d-flex flex-column">
                                    <div class="border-start-lg border-translucent border-dashed ps-4"><img
                                            class="mb-4" src="/assets/backend/img/icons/illustrations/pie.png"
                                            width="48" height="48" alt="" />
                                        <div>
                                            <h5 class="fw-bolder mb-2">All-in-one solution</h5>
                                            <p class="fw-semibold lh-sm">Show your production and growth graph in one
                                                place with Phoenix!</p>
                                        </div>
                                        <div><a class="btn btn-link me-2 p-0 fs-9" href="#!"
                                                role="button">Check Demo<i
                                                    class="fa-solid fa-angle-right ms-2"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="row mt-12 align-items-center justify-content-between text-center text-lg-start mb-6 mb-lg-0">
                            <div class="col-lg-5"><img class="feature-image img-fluid mb-9 mb-lg-0 d-dark-none"
                                    src="/assets/backend/img/spot-illustrations/22_2.png" alt="" /><img
                                    class="feature-image img-fluid mb-9 mb-lg-0 d-light-none"
                                    src="/assets/backend/img/spot-illustrations/dark_22.png" alt="" /></div>
                            <div class="col-lg-6">
                                <h6 class="text-primary mb-2 ls-2">SIGNAL</h6>
                                <h3 class="fw-bolder mb-3">Recieve the signals instantly</h3>
                                <p class="mb-4 px-md-7 px-lg-0">Phoenix makes it possible for you to quickly and
                                    effectively receive every signal. No need for drawn-out waiting.</p><a
                                    class="btn btn-link me-2 p-0 fs-9" href="#!" role="button">Check Demo<i
                                        class="fa-solid fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                        <div
                            class="row mt-2 align-items-center justify-content-between text-center text-lg-start mb-6 mb-lg-0">
                            <div class="col-lg-5 order-0 order-lg-1"><img
                                    class="feature-image img-fluid mb-9 mb-lg-0 d-dark-none"
                                    src="/assets/backend/img/spot-illustrations/23_2.png" height="394"
                                    alt="" /><img class="feature-image img-fluid mb-9 mb-lg-0 d-light-none"
                                    src="/assets/backend/img/spot-illustrations/dark_23.png" height="394"
                                    alt="" /></div>
                            <div class="col-lg-6">
                                <h6 class="text-primary mb-2 ls-2">REVENUE</h6>
                                <h3 class="fw-bolder mb-3">See Your Revenue Grow</h3>
                                <p class="mb-4 px-md-7 px-lg-0">Grow with Phoenix. We help you with everything you
                                    might need., We make it easy and keep it simple.</p><a
                                    class="btn btn-link me-2 p-0 fs-9" href="#!" role="button">Check Demo<i
                                        class="fa-solid fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                        <div
                            class="row mt-2 align-items-center justify-content-between text-center text-lg-start mb-6 mb-lg-0">
                            <div class="col-lg-5"><img class="feature-image img-fluid mb-9 mb-lg-0 d-dark-none"
                                    src="/assets/backend/img/spot-illustrations/24_2.png" height="394"
                                    alt="" /><img class="feature-image img-fluid mb-9 mb-lg-0 d-light-none"
                                    src="/assets/backend/img/spot-illustrations/dark_24.png" height="394"
                                    alt="" /></div>
                            <div class="col-lg-6 text-center text-lg-start">
                                <h6 class="text-primary mb-2 ls-2">REPORTS</h6>
                                <h3 class="fw-bolder mb-3">Get Reports Ready</h3>
                                <p class="mb-4 px-md-7 px-lg-0">With Phoenix, you can get ready reports on your growth
                                    analysis anytime. This dashboard also has all filters accessible according to your
                                    needs.</p><a class="btn btn-link me-2 p-0 fs-9" href="#!"
                                    role="button">Check Demo<i class="fa-solid fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->


            <div class="position-relative">
                <div class="bg-holder z-2 d-none d-md-block"
                    style="background-image:url(/assets/backend/img/bg/13.png);background-size:auto;background-position:right;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder z-2 d-none d-md-block d-lg-none d-xl-block"
                    style="background-image:url(/assets/backend/img/bg/bg-12.png);background-size:auto;background-position:left;">
                </div>
                <!--/.bg-holder-->

                <div class="bottom-0 start-0 end-0 bg-body-emphasis">
                    <svg class="w-100" viewBox="0 0 1920 368" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-body-bg" d="M1920 0.44L0 367.74V0H1920V0.44Z"></path>
                    </svg>
                </div>
                <section class="pb-0 bg-body-emphasis overflow-hidden position-static">
                    <div class="container-small px-lg-7 px-xxl-3">
                        <div class="row">
                            <div class="col-lg-6 mb-6 text-center text-lg-start z-2">
                                <h4 class="text-primary fw-bolder mb-3">Testimonial</h4>
                                <h2 class="mb-3 text-body-emphasis">More than 2 Millions happy<br />Customers and
                                    counting</h2>
                                <p class="mb-5">You may now concentrate on the functionality and other <br
                                        class="d-none d-sm-block" />aspects of your web products thanks to Phoenix's
                                    strength<br class="d-none d-sm-block" />before leaving the UI design to us. It is
                                    simple to complete<br class="d-none d-sm-block" />the work after checking and
                                    double-checking.</p>
                            </div>
                            <div class="col-lg-6 z-2">
                                <div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row g-1 g-lg-0 g-xl-1 pb-lg-3 pb-xl-0 ps-lg-1 ps-xl-0">
                                                <div class="col-lg-6 col-xl-5 text-center">
                                                    <div
                                                        class="testimonial-avatar-container d-inline-block position-relative">
                                                        <div class="bg-holder"
                                                            style="background-image:url(/assets/backend/img/bg/bg-2.png);background-size:contain;">
                                                        </div>
                                                        <!--/.bg-holder-->
                                                        <img class="rounded-3 mb-lg-0 opacity-100 position-relative"
                                                            src="/assets/backend/img/team/61.webp" width="153"
                                                            height="153" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-xl-7 text-center text-lg-start">
                                                    <div class="mb-4" data-bs-theme="light"><span
                                                            class="fa fa-star text-primary"></span><span
                                                            class="fa fa-star text-primary"></span><span
                                                            class="fa fa-star text-primary"></span><span
                                                            class="fa fa-star text-primary"></span><span
                                                            class="fa fa-star text-primary"></span>
                                                    </div>
                                                    <h3 class="fs-7 fs-xl-6 mb-5 lh-sm me-md-7 me-lg-0">Brilliant app!
                                                        Will definitely going to be my first choice starting from today
                                                    </h3>
                                                    <h6>Monica Gomez</h6>
                                                    <h6 class="fw-normal">UX designer, Google</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row g-1 g-lg-0 g-xl-1 pb-lg-3 pb-xl-0 ps-lg-1 ps-xl-0">
                                                <div class="col-lg-6 col-xl-5 text-center">
                                                    <div
                                                        class="testimonial-avatar-container d-inline-block position-relative">
                                                        <div class="bg-holder"
                                                            style="background-image:url(/assets/backend/img/bg/bg-2.png);background-size:contain;">
                                                        </div>
                                                        <!--/.bg-holder-->
                                                        <img class="rounded-3 mb-lg-0 opacity-100 position-relative"
                                                            src="/assets/backend/img/team/8.webp" width="154"
                                                            alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-xl-7 text-center text-lg-start">
                                                    <div class="mb-4" data-bs-theme="light"><span
                                                            class="fa fa-star text-primary"></span><span
                                                            class="fa fa-star text-primary"></span><span
                                                            class="fa fa-star text-primary"></span><span
                                                            class="fa fa-star text-primary"></span><span
                                                            class="fa fa-star text-primary"></span>
                                                    </div>
                                                    <h3 class="fs-7 fs-xl-6 mb-5 lh-sm me-md-7 me-lg-0">“Excellent to
                                                        work with and comfortable to customize. This is what I was
                                                        looking for till the date!”</h3>
                                                    <h6>Marc Chiasson</h6>
                                                    <h6 class="fw-normal">UX designer, Adobe</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row g-1 g-lg-0 g-xl-1 pb-lg-3 pb-xl-0 ps-lg-1 ps-xl-0">
                                                <div class="col-lg-6 col-xl-5 text-center">
                                                    <div
                                                        class="testimonial-avatar-container d-inline-block position-relative">
                                                        <div class="bg-holder"
                                                            style="background-image:url(/assets/backend/img/bg/bg-2.png);background-size:contain;">
                                                        </div>
                                                        <!--/.bg-holder-->
                                                        <img class="rounded-3 mb-lg-0 opacity-100 position-relative"
                                                            src="/assets/backend/img/team/35.webp" width="154"
                                                            alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-xl-7 text-center text-lg-start">
                                                    <div class="mb-4" data-bs-theme="light"><span
                                                            class="fa fa-star text-primary"></span><span
                                                            class="fa fa-star text-primary"></span><span
                                                            class="fa fa-star text-primary"></span><span
                                                            class="fa fa-star text-primary"></span><span
                                                            class="fa fa-star text-primary"></span>
                                                    </div>
                                                    <h3 class="fs-7 fs-xl-6 mb-5 lh-sm me-md-7 me-lg-0">“Phoenix is all
                                                        you can ask for. This is perfect fit for everything you might
                                                        want to work on!”</h3>
                                                    <h6>Axel Barry</h6>
                                                    <h6 class="fw-normal">UX designer, Apple</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="position-relative">
                <div class="bg-holder world-map-bg" style="background-image:url(/assets/backend/img/bg/bg-13.png);">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder z-2 opacity-25 "
                    style="background-image:url(/assets/backend/img/bg/bg-right-21.png);background-size:auto;background-position:right;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder z-2 mt-9 opacity-25"
                    style="background-image:url(/assets/backend/img/bg/bg-left-21.png);background-size:auto;background-position:left;">
                </div>
                <!--/.bg-holder-->

                <svg class="w-100 position-relative" preserveAspectRatio="none" viewBox="0 0 1920 368"
                    xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-emphasis-bg" d="M1920 0.44L0 367.74V0H1920V0.44Z"></path>
                </svg>
                <section class="overflow-hidden z-2">
                    <div class="container-small px-lg-7 px-xxl-3" data-bs-theme="light">
                        <div class="position-relative">
                            <div class="row mb-6">
                                <div class="col-xl-6 text-center text-md-start">
                                    <h2 class="text-white mb-2">Being used by millions of users</h2>
                                    <h1
                                        class="fs-md-3 fs-xl-2 fw-black text-gradient-info text-uppercase mb-4 mb-md-0">
                                        WORLDWIDE</h1>
                                </div>
                                <div class="col-xl-6 text-center text-md-start">
                                    <p class="text-white">You can get all the reports, data analysis, and growth maps
                                        you need with the help of Phoenix's power, and you may review and modify them
                                        whenever you want. These features make this dashboard outstanding.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-8 text-center text-md-start mb-6 mb-xl-0">
                                    <div class="d-md-flex justify-content-md-between">
                                        <div class="mb-6 mb-md-0 me-4">
                                            <h1 class="display-1 text-white fw-bolder"
                                                data-countup='{"endValue":125,"duration":10,"suffix":"+"}'>0
                                                <span>+</span>
                                            </h1>
                                            <p class="text-white">Every month, there are more<br
                                                    class="d-md-none d-lg-block" />than 125+ sales.</p>
                                        </div>
                                        <div class="mb-6 mb-md-0 me-4">
                                            <h1 class="display-1 text-white fw-bolder"
                                                data-countup='{"endValue":308,"duration":10,"suffix":"k"}'>0</h1>
                                            <p class="text-white">We have 308+ active paid.<br
                                                    class="d-md-none d-lg-block" />subscribers.</p>
                                        </div>
                                        <div class="mb-6 mb-md-0 me-4">
                                            <h1 class="display-1 text-white fw-bolder"
                                                data-countup='{"endValue":12,"duration":0.5}'>0</h1>
                                            <p class="text-white">We have won 12 awards so<br
                                                    class="d-md-none d-lg-block" />far with great success. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 text-center text-md-start"><img class="img-fluid"
                                        src="/assets/backend/img/generic/capterra.png" alt="" /></div>
                            </div>
                        </div>
                    </div>
                </section>
                <svg class="w-100 position-relative" viewBox="0 0 1920 368" xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-emphasis-bg" d="M0 368L1920 0.730011L1920 368L0 368Z"></path>
                </svg>
            </div>
            <section class="bg-body-emphasis pb-lg-6 pb-xl-8">
                <div class="bg-holder d-dark-none"
                    style="background-image:url(/assets/backend/img/bg/bg-5.png);background-size:auto;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder d-light-none"
                    style="background-image:url(/assets/backend/img/bg/bg-dark-5.png);background-size:auto;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder"
                    style="background-image:url(/assets/backend/img/bg/bg-left-5.png);background-position:left;background-size:auto;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder"
                    style="background-image:url(/assets/backend/img/bg/bg-right-6.png);background-position:right;background-size:auto;">
                </div>
                <!--/.bg-holder-->

                <div class="container-small position-relative px-lg-7 px-xxl-3">
                    <div class="mb-8 text-center text-sm-start">
                        <h4 class="text-primary fw-bolder mb-3">Gallery</h4>
                        <h2>Some of Our Best Works</h2>
                    </div>
                    <p class="column-lg-2">Rise like Phoenix focusing only on functionalities for your digital products
                        leaving the design for us. Show what you do, with our latest admin dashboard. Check our best
                        works and let us know what you want to find. Want to tell your customers about the details of
                        how and what? Tell them with all the posts at one place without them ridirecting to another page
                        or site.</p>
                    <ul class="nav mb-6 justify-content-center justify-content-sm-start w-max-content"
                        data-filter-nav="data-filter-nav">
                        <li class="nav-item"><a class="isotope-nav cursor-pointer active" data-filter="*">First</a>
                        </li>
                        <li class="nav-item"><a class="isotope-nav cursor-pointer" data-filter=".second">Second</a>
                        </li>
                        <li class="nav-item"><a class="isotope-nav cursor-pointer" data-filter=".third">Third</a>
                        </li>
                        <li class="nav-item"> <a class="isotope-nav cursor-pointer" data-filter=".fourth">Fourth</a>
                        </li>
                    </ul>
                    <div class="row g-3" id="image_gallery" style="min-height: 948px"
                        data-sl-isotope='{"layoutMode":"packery"}'>
                        <div class="col-6 col-md-4 col-lg-3 px-2 isotope-item fourth"><a href="#!"
                                data-bigpicture='{"gallery":"#image_gallery"}'
                                data-bp="/assets/backend/img/gallery/1.png"><img class="rounded img-fluid w-100"
                                    src="/assets/backend/img/gallery/1.png" alt="" /></a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 px-2 isotope-item third"><a href="#!"
                                data-bigpicture='{"gallery":"#image_gallery"}'
                                data-bp="/assets/backend/img/gallery/2.png"><img class="rounded img-fluid w-100"
                                    src="/assets/backend/img/gallery/2.png" alt="" /></a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 px-2 isotope-item second"><a href="#!"
                                data-bigpicture='{"gallery":"#image_gallery"}'
                                data-bp="/assets/backend/img/gallery/3.png"><img class="rounded img-fluid w-100"
                                    src="/assets/backend/img/gallery/3.png" alt="" /></a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 px-2 isotope-item third"><a href="#!"
                                data-bigpicture='{"gallery":"#image_gallery"}'
                                data-bp="assets/backend/img/gallery/5.png"><img class="rounded img-fluid w-100"
                                    src="assets/backend/img/gallery/5.png" alt="" /></a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 px-2 isotope-item third second"><a href="#!"
                                data-bigpicture='{"gallery":"#image_gallery"}'
                                data-bp="/assets/backend/img/gallery/4.png"><img class="rounded img-fluid w-100"
                                    src="/assets/backend/img/gallery/4.png" alt="" /></a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 px-2 isotope-item second"><a href="#!"
                                data-bigpicture='{"gallery":"#image_gallery"}'
                                data-bp="/assets/backend/img/gallery/6.png"><img class="rounded img-fluid w-100"
                                    src="/assets/backend/img/gallery/6.png" alt="" /></a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 px-2 isotope-item second"><a href="#!"
                                data-bigpicture='{"gallery":"#image_gallery"}'
                                data-bp="/assets/backend/img/gallery/7.png"><img class="rounded img-fluid w-100"
                                    src="/assets/backend/img/gallery/7.png" alt="" /></a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-6 px-2 isotope-item second"><a href="#!"
                                data-bigpicture='{"gallery":"#image_gallery"}'
                                data-bp="/assets/backend/img/gallery/9.png"><img class="rounded img-fluid w-100"
                                    src="/assets/backend/img/gallery/9.png" alt="" /></a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 px-2 isotope-item fourth"><a href="#!"
                                data-bigpicture='{"gallery":"#image_gallery"}'
                                data-bp="/assets/backend/img/gallery/8.png"><img class="rounded img-fluid w-100"
                                    src="/assets/backend/img/gallery/8.png" alt="" /></a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-6 px-2 isotope-item second"><a href="#!"
                                data-bigpicture='{"gallery":"#image_gallery"}'
                                data-bp="/assets/backend/img/gallery/10.png"><img class="rounded img-fluid w-100"
                                    src="/assets/backend/img/gallery/10.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-body-emphasis pt-lg-0 pt-xl-8">
                <div class="bg-holder d-none d-md-block"
                    style="background-image:url(/assets/backend/img/bg/bg-left-15.png);background-position:left;background-size:auto;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder d-none d-md-block"
                    style="background-image:url(/assets/backend/img/bg/bg-right-15.png);background-position:right;background-size:auto;">
                </div>
                <!--/.bg-holder-->

                <div class="container-small position-relative px-lg-7 px-xxl-3">
                    <div class="mb-4 text-center text-sm-start">
                        <h4 class="text-primary fw-bolder mb-3">Pricing</h4>
                        <h2>Choose the best deal for you</h2>
                    </div>
                    <p class="column-md-2 text-center text-sm-start">Entice your customers with Phoenix admin
                        dashboard. Show your best deal in this section to help customers choose from your best offers
                        and place them all in one place with this efficient template. If you are availing more than one
                        offer to your customers, let them compare among them and search for what they need to get. Show
                        offer details here and entice them to buy.</p>
                    <div class="row pt-9 g-3 g-xl-0">
                        <div class="col-md-6 col-xl-3">
                            <div class="card h-100 rounded-end-xl-0 rounded-start">
                                <div class="card-body px-6">
                                    <div class="px-5">
                                        <div class="text-center pt-5"><img
                                                src="/assets/backend/img/icons/illustrations/pie.png" width="48"
                                                height="48" alt="" />
                                            <h3 class="fw-semibold my-4">Starter</h3>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="fw-semibold text-primary">$<span
                                                    class="fw-bolder">6</span><span
                                                    class="text-body-emphasis fs-7 ms-1 fw-bolder">USD</span></h1>
                                            <h5 class="mb-4 text-body"></h5>
                                            <button class="btn btn-lg mb-6 w-100 btn-outline-primary">Buy</button>
                                        </div>
                                    </div>
                                    <ul class="fa-ul pricing-list">
                                        <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span><span
                                                class="text-body-secondary"
                                                style="--phoenix-text-opacity:1;">Timeline</span>
                                        </li>
                                        <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span><span
                                                class="text-body-secondary" style="--phoenix-text-opacity:1;">Advanced
                                                Search</span>
                                        </li>
                                        <li class="mb-4 d-flex align-items-center"><span class="text-body-secondary"
                                                style="--phoenix-text-opacity:.5;">Custom fields</span><span
                                                class="badge badge-phoenix badge-phoenix-warning ms-2 fs-10 opacity-50">New</span>
                                        </li>
                                        <li class="mb-4 d-flex align-items-center"><span class="text-body-secondary"
                                                style="--phoenix-text-opacity:.5;">Task dependencies</span>
                                        </li>
                                        <li class="mb-4 d-flex align-items-center"><span class="text-body-secondary"
                                                style="--phoenix-text-opacity:.5;">Private teams &amp; projects</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div
                                class="card h-100  rounded-top-0 rounded-xl-0 border border-2 border-primary mt-5 mt-md-0">
                                <div
                                    class="position-absolute d-flex flex-center bg-primary-subtle rounded-top py-1 end-0 start-0 badge-pricing">
                                    <p class="text-primary-dark mb-0">Most popular</p>
                                </div>
                                <div class="card-body px-6">
                                    <div class="px-5">
                                        <div class="text-center pt-5"><img
                                                src="assets/backend/img/icons/illustrations/bolt.png" width="48"
                                                height="48" alt="" />
                                            <h3 class="fw-semibold my-4">Team</h3>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="fw-semibold text-primary">$<span
                                                    class="fw-bolder">12</span><span
                                                    class="text-body-emphasis fs-7 ms-1 fw-bolder">USD</span></h1>
                                            <h5 class="mb-4 text-body"></h5>
                                            <button class="btn btn-lg mb-6 w-100 btn-primary">Buy</button>
                                        </div>
                                    </div>
                                    <ul class="fa-ul pricing-list">
                                        <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span><span
                                                class="text-body-secondary"
                                                style="--phoenix-text-opacity:1;">Timeline</span>
                                        </li>
                                        <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span><span
                                                class="text-body-secondary" style="--phoenix-text-opacity:1;">Advanced
                                                Search</span>
                                        </li>
                                        <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span><span
                                                class="text-body-secondary" style="--phoenix-text-opacity:1;">Custom
                                                fields</span><span
                                                class="badge badge-phoenix badge-phoenix-warning ms-2 fs-10">New</span>
                                        </li>
                                        <li class="mb-4 d-flex align-items-center"><span class="text-body-secondary"
                                                style="--phoenix-text-opacity:.5;">Task dependencies</span>
                                        </li>
                                        <li class="mb-4 d-flex align-items-center"><span class="text-body-secondary"
                                                style="--phoenix-text-opacity:.5;">Private teams &amp; projects</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card h-100 rounded-start rounded-start-xl-0 mt-5 mt-md-0">
                                <div class="card-body px-6">
                                    <div class="px-5">
                                        <div class="text-center pt-5"><img
                                                src="/assets/backend/img/icons/illustrations/edit.png" width="48"
                                                height="48" alt="" />
                                            <h3 class="fw-semibold my-4">Business</h3>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="fw-semibold text-primary">$<span
                                                    class="fw-bolder">23</span><span
                                                    class="text-body-emphasis fs-7 ms-1 fw-bolder">USD</span></h1>
                                            <h5 class="mb-4 text-body"></h5>
                                            <button class="btn btn-lg mb-6 w-100 btn-outline-primary">Buy</button>
                                        </div>
                                    </div>
                                    <ul class="fa-ul pricing-list">
                                        <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span><span
                                                class="text-body-secondary"
                                                style="--phoenix-text-opacity:1;">Timeline</span>
                                        </li>
                                        <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span><span
                                                class="text-body-secondary" style="--phoenix-text-opacity:1;">Advanced
                                                Search</span>
                                        </li>
                                        <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span><span
                                                class="text-body-secondary" style="--phoenix-text-opacity:1;">Custom
                                                fields</span><span
                                                class="badge badge-phoenix badge-phoenix-warning ms-2 fs-10">New</span>
                                        </li>
                                        <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                    class="fas fa-star text-primary"></span></span><span
                                                class="text-body-secondary" style="--phoenix-text-opacity:1;">Task
                                                dependencies</span>
                                        </li>
                                        <li class="mb-4 d-flex align-items-center"><span class="text-body-secondary"
                                                style="--phoenix-text-opacity:.5;">Private teams &amp; projects</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3 ps-xl-3">
                            <div class="row g-0 h-100 justify-content-center">
                                <div class="col-xl-12">
                                    <div class="card h-100 mt-5 mt-md-0">
                                        <div class="card-body">
                                            <div class="px-5">
                                                <div class="text-center pt-5"><img
                                                        src="/assets/backend/img/icons/illustrations/shield.png"
                                                        width="48" height="48" alt="" />
                                                    <h3 class="fw-semibold my-4">Enterprise</h3>
                                                </div>
                                                <div class="text-center">
                                                    <h1 class="fw-semibold text-primary">$<span
                                                            class="fw-bolder">40</span><span
                                                            class="text-body-emphasis fs-7 ms-1 fw-bolder">USD</span>
                                                    </h1>
                                                    <h5 class="mb-4 text-body"></h5>
                                                    <button
                                                        class="btn btn-lg mb-6 w-100 btn-outline-primary">Buy</button>
                                                </div>
                                            </div>
                                            <ul class="fa-ul pricing-list">
                                                <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                            class="fas fa-check text-primary"></span></span><span
                                                        class="text-body-secondary"
                                                        style="--phoenix-text-opacity:1;">Timeline</span>
                                                </li>
                                                <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                            class="fas fa-check text-primary"></span></span><span
                                                        class="text-body-secondary"
                                                        style="--phoenix-text-opacity:1;">Advanced Search</span>
                                                </li>
                                                <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                            class="fas fa-check text-primary"></span></span><span
                                                        class="text-body-secondary"
                                                        style="--phoenix-text-opacity:1;">Custom fields</span><span
                                                        class="badge badge-phoenix badge-phoenix-warning ms-2 fs-10">New</span>
                                                </li>
                                                <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                            class="fas fa-star text-primary"></span></span><span
                                                        class="text-body-secondary"
                                                        style="--phoenix-text-opacity:1;">Task dependencies</span>
                                                </li>
                                                <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                            class="fas fa-star text-primary"></span></span><span
                                                        class="text-body-secondary"
                                                        style="--phoenix-text-opacity:1;">Private teams &amp;
                                                        projects</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center mt-8">
                            <p>For Enterprise Solution with Managed SMTP, Custom API setup, Dedicated Support, and more
                                - <a href="#!"> Contact us</a></p>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="bg-body-emphasis" id="blog">

                <div class="container-small px-lg-7 px-xxl-3">
                    <div class="mb-4 text-center text-sm-start">
                        <h4 class="text-primary fw-bolder mb-3">Blog</h4>
                        <h2>Latest articles</h2>
                    </div>
                    <p class="column-md-2">See the latest articles we published with this dashboard. Your customers
                        will be happy to find all the latest posts in one place. This menu efficiently shows all related
                        topics from search filters and provides the customers with what they need. Also you can just
                        educate your customers about everything they need to know and follow to avail a service with
                        you. This menu is the one to show them that.</p>
                    <div class="row h-100 g-3 justify-content-center">
                        <div class="col-sm-6 col-lg-3 mb-3 mb-md-0">
                            <div class="card text-white dark__text-gray-1100 h-100"><img
                                    class="rounded-top h-100 object-fit-cover"
                                    src="assets/backend/img/blog/blog-1.png" alt="..." />
                                <div class="card-body rounded-top">
                                    <div class="d-flex align-items-cente mb-3">
                                        <div class="d-flex align-items-center me-3"><a
                                                class="btn-link text-decoration-none d-flex align-items-center"
                                                href="#!"><span
                                                    class="fa-solid fa-eye text-body-quaternary me-1"></span><span
                                                    class="text-body fs-10 lh-1">2563</span></a></div>
                                        <div class="d-flex align-items-center me-3"><a
                                                class="btn-link text-decoration-none d-flex align-items-center"
                                                href="#!"><span
                                                    class="fa-solid fa-heart text-body-quaternary me-1"></span><span
                                                    class="text-body fs-10 lh-1">125</span></a></div>
                                        <div class="d-flex align-items-center"><a
                                                class="btn-link text-decoration-none d-flex align-items-center"
                                                href="#!"><span
                                                    class="fa-solid fa-comment text-body-quaternary me-1"></span><span
                                                    class="text-body fs-10 lh-1">125</span></a></div>
                                    </div><span class="badge badge-phoenix badge-phoenix-primary mb-2">SEO</span>
                                    <h4 class="fw-bold mb-3 lh-sm line-clamp-2">Top 10 ways to Ace SEO for your
                                        business</h4><a class="btn-link px-0 d-flex align-items-center fs-9 fw-bold"
                                        href="#!" role="button">Read more<span
                                            class="fa-solid fa-angle-right ms-2"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-3 mb-md-0">
                            <div class="card text-white dark__text-gray-1100 h-100"><img
                                    class="rounded-top h-100 object-fit-cover"
                                    src="/assets/backend/img/blog/blog-2.png" alt="..." />
                                <div class="card-body rounded-top">
                                    <div class="d-flex align-items-cente mb-3">
                                        <div class="d-flex align-items-center me-3"><a
                                                class="btn-link text-decoration-none d-flex align-items-center"
                                                href="#!"><span
                                                    class="fa-solid fa-eye text-body-quaternary me-1"></span><span
                                                    class="text-body fs-10 lh-1">1256</span></a></div>
                                        <div class="d-flex align-items-center me-3"><a
                                                class="btn-link text-decoration-none d-flex align-items-center"
                                                href="#!"><span
                                                    class="fa-solid fa-heart text-body-quaternary me-1"></span><span
                                                    class="text-body fs-10 lh-1">325</span></a></div>
                                        <div class="d-flex align-items-center"><a
                                                class="btn-link text-decoration-none d-flex align-items-center"
                                                href="#!"><span
                                                    class="fa-solid fa-comment text-body-quaternary me-1"></span><span
                                                    class="text-body fs-10 lh-1">32</span></a></div>
                                    </div><span class="badge badge-phoenix badge-phoenix-primary mb-2">Marketing</span>
                                    <h4 class="fw-bold mb-3 lh-sm line-clamp-2">Top 12 Marketing strategies you can
                                        take</h4><a class="btn-link px-0 d-flex align-items-center fs-9 fw-bold"
                                        href="#!" role="button">Read more<span
                                            class="fa-solid fa-angle-right ms-2"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-3 mb-md-0">
                            <div class="card text-white dark__text-gray-1100 h-100"><img
                                    class="rounded-top h-100 object-fit-cover"
                                    src="/assets/backend/img/blog/blog-3.png" alt="..." />
                                <div class="card-body rounded-top">
                                    <div class="d-flex align-items-cente mb-3">
                                        <div class="d-flex align-items-center me-3"><a
                                                class="btn-link text-decoration-none d-flex align-items-center"
                                                href="#!"><span
                                                    class="fa-solid fa-eye text-body-quaternary me-1"></span><span
                                                    class="text-body fs-10 lh-1">142</span></a></div>
                                        <div class="d-flex align-items-center me-3"><a
                                                class="btn-link text-decoration-none d-flex align-items-center"
                                                href="#!"><span
                                                    class="fa-solid fa-heart text-body-quaternary me-1"></span><span
                                                    class="text-body fs-10 lh-1">123</span></a></div>
                                        <div class="d-flex align-items-center"><a
                                                class="btn-link text-decoration-none d-flex align-items-center"
                                                href="#!"><span
                                                    class="fa-solid fa-comment text-body-quaternary me-1"></span><span
                                                    class="text-body fs-10 lh-1">22</span></a></div>
                                    </div><span
                                        class="badge badge-phoenix badge-phoenix-primary mb-2">Marketing</span>
                                    <h4 class="fw-bold mb-3 lh-sm line-clamp-2">The top 7 methods to improve as a
                                        marketer</h4><a class="btn-link px-0 d-flex align-items-center fs-9 fw-bold"
                                        href="#!" role="button">Read more<span
                                            class="fa-solid fa-angle-right ms-2"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-3 mb-md-0">
                            <div class="card text-white dark__text-gray-1100 h-100"><img
                                    class="rounded-top h-100 object-fit-cover"
                                    src="/assets/backend/img/blog/blog-4.png" alt="..." />
                                <div class="card-body rounded-top">
                                    <div class="d-flex align-items-cente mb-3">
                                        <div class="d-flex align-items-center me-3"><a
                                                class="btn-link text-decoration-none d-flex align-items-center"
                                                href="#!"><span
                                                    class="fa-solid fa-eye text-body-quaternary me-1"></span><span
                                                    class="text-body fs-10 lh-1">2563</span></a></div>
                                        <div class="d-flex align-items-center me-3"><a
                                                class="btn-link text-decoration-none d-flex align-items-center"
                                                href="#!"><span
                                                    class="fa-solid fa-heart text-body-quaternary me-1"></span><span
                                                    class="text-body fs-10 lh-1">325</span></a></div>
                                        <div class="d-flex align-items-center"><a
                                                class="btn-link text-decoration-none d-flex align-items-center"
                                                href="#!"><span
                                                    class="fa-solid fa-comment text-body-quaternary me-1"></span><span
                                                    class="text-body fs-10 lh-1">112</span></a></div>
                                    </div><span class="badge badge-phoenix badge-phoenix-primary mb-2">Tech</span>
                                    <h4 class="fw-bold mb-3 lh-sm line-clamp-2">Best places for a tech job in U.S</h4>
                                    <a class="btn-link px-0 d-flex align-items-center fs-9 fw-bold" href="#!"
                                        role="button">Read more<span
                                            class="fa-solid fa-angle-right ms-2"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-6"><a class="btn btn-outline-primary" href="#!">View All<span
                                class="fa-solid fa-angle-right ms-2"></span></a></div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->




            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="bg-body-emphasis">

                <div class="container-small px-lg-7 px-xxl-3">
                    <div class="mb-3 text-center text-sm-start">
                        <h4 class="text-primary fw-bolder mb-3">Address</h4>
                        <h2>If you need to find us:</h2>
                    </div>
                    <p class="column-md-2">Do not lose your potential customers to others. Tell them exactly where you
                        are with Geolocation enabled Phoenix admin dashboard, No need to take the burden of
                        communicating directly. You can easily tell your customers where to find you with precise
                        location map. Getting closer was never easier!</p>
                    <div class="row">
                        <div class="col-12 mb-15">
                            <div class="mapbox-container rounded-3 border overflow-hidden mt-3 mb-6">
                                <div id="mapbox"
                                    data-mapbox='{"attributionControl":false,"center":[-74.0020158,40.7228022],"zoom":14,"scrollZoom":false}'
                                    style="height: 381px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5 g-lg-5">
                        <div class="col-md-6 mb-5 mb-md-0 text-center text-md-start">
                            <h3 class="mb-3">Stay connected</h3>
                            <p class="mb-5">Stay connected with Phoenix's Help Center; Phoenix is available for your
                                necessities at all times.</p>
                            <div class="d-flex flex-column align-items-center align-items-md-start gap-3 gap-md-0">
                                <div class="d-md-flex align-items-center">
                                    <div class="icon-wrapper shadow-info"><span
                                            class="uil uil-phone text-primary fs-4 z-1 ms-2"
                                            data-bs-theme="light"></span></div>
                                    <div class="flex-1 ms-3"><a class="link-900" href="tel:+871406-7509">(871)
                                            406-7509</a></div>
                                </div>
                                <div class="d-md-flex align-items-center">
                                    <div class="icon-wrapper shadow-info"><span
                                            class="uil uil-envelope text-primary fs-4 z-1 ms-2"
                                            data-bs-theme="light"></span></div>
                                    <div class="flex-1 ms-3"><a class="fw-semibold text-body"
                                            href="mailto:phoenix@email.com">phoenix@email.com</a></div>
                                </div>
                                <div class="mb-6 d-md-flex align-items-center">
                                    <div class="icon-wrapper shadow-info"><span
                                            class="uil uil-map-marker text-primary fs-4 z-1 ms-2"
                                            data-bs-theme="light"></span></div>
                                    <div class="flex-1 ms-3"><a class="fw-semibold text-body" href="#!">39163
                                            Amir Drive Suite 802</a></div>
                                </div>
                                <div class="d-flex"><a href="#!"><span
                                            class="fa-brands fa-facebook fs-6 text-primary me-3"></span></a><a
                                        href="#!"><span
                                            class="fa-brands fa-twitter fs-6 text-primary me-3"></span></a><a
                                        href="#!"><span
                                            class="fa-brands fa-linkedin-in fs-6 text-primary"></span></a></div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center text-md-start">
                            <h3 class="mb-3">Drop us a line</h3>
                            <p class="mb-7">If you have any query or suggestion , we are open to learn from you,
                                Lets talk, reach us anytime.</p>
                            <form class="row g-4">
                                <div class="col-12">
                                    <input class="form-control bg-body-emphasis" type="text" name="name"
                                        placeholder="Name" required="required" />
                                </div>
                                <div class="col-12">
                                    <input class="form-control bg-body-emphasis" type="email" name="email"
                                        placeholder="Email" required="required" />
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-body-emphasis" rows="6" name="message" placeholder="Message"
                                        required="required"></textarea>
                                </div>
                                <div class="col-12 d-grid">
                                    <button class="btn btn-outline-primary" type="submit">Submit</button>
                                </div>
                                <div class="feedback"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->


            <section id="team">
                <div class="bg-holder z-2"
                    style="background-image:url(/assets/backend/img/bg/bg-left-17.png);background-size:auto;background-position:left center;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder z-2"
                    style="background-image:url(/assets/backend/img/bg/bg-right-17.png);background-size:auto;background-position:right center;">
                </div>
                <!--/.bg-holder-->

                <div class="position-absolute top-0 end-0 start-0">
                    <svg class="w-100 text-white" preserveAspectRatio="none" viewBox="0 0 1920 368"
                        xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-emphasis-bg" d="M1920 0.44L0 367.74V0H1920V0.44Z"></path>
                    </svg>
                </div>
                <div class="position-absolute bottom-0 end-0 start-0">
                    <svg class="text-white w-100" viewBox="0 0 1920 368" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-emphasis-bg" d="M0 368L1920 0.730011L1920 368L0 368Z"></path>
                    </svg>
                </div>
                <div class="container-small position-relative py-1 px-lg-7 px-xxl-3" style="z-index:10">
                    <div class="mb-4 text-center text-sm-start">
                        <h4 class="text-primary fw-bolder mb-3">Team</h4>
                        <h2>Our small team behind our success</h2>
                    </div>
                    <p class="column-md-2 text-center text-sm-start">We have a small but strong development team to
                        follow up on the development process. Reach out to us for further information. The team is ready
                        to answer all your questions within minutes. The efficient team is always at your beck and call.
                    </p>
                    <div class="row align-items-center ps-lg-11 pe-lg-9">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="text-center mt-5 position-relative">
                                <div class="team-avatar-container d-inline-block position-relative">
                                    <div class="bg-holder"
                                        style="background-image:url(/assets/backend/img/bg/bg-21.png);background-size:contain;">
                                    </div>
                                    <!--/.bg-holder-->
                                    <img class="img-fluid rounded mb-3 position-relative"
                                        src="/assets/backend/img/team/62.webp" alt="..." />
                                </div>
                                <h4>John Smith</h4>
                                <h6 class="mb-3 fw-semibold">CEO, Global Cheat</h6><a href="#!"><span
                                        class="fa-brands fa-facebook text-primary me-3"></span></a><a
                                    href="#!"><span
                                        class="fa-brands fa-twitter text-primary me-3"></span></a><a
                                    href="#!"><span class="fa-brands fa-linkedin-in text-primary"></span></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="text-center mt-5 position-relative">
                                <div class="team-avatar-container d-inline-block position-relative">
                                    <div class="bg-holder"
                                        style="background-image:url(/assets/backend/img/bg/bg-21.png);background-size:contain;">
                                    </div>
                                    <!--/.bg-holder-->
                                    <img class="img-fluid rounded mb-3 position-relative"
                                        src="/assets/backend/img/team/63.webp" alt="..." />
                                </div>
                                <h4>Marc Chiasson</h4>
                                <h6 class="mb-3 fw-semibold">Vice President</h6><a href="#!"><span
                                        class="fa-brands fa-facebook text-primary me-3"></span></a><a
                                    href="#!"><span
                                        class="fa-brands fa-twitter text-primary me-3"></span></a><a
                                    href="#!"><span class="fa-brands fa-linkedin-in text-primary"></span></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="text-center mt-5 position-relative">
                                <div class="team-avatar-container d-inline-block position-relative">
                                    <div class="bg-holder"
                                        style="background-image:url(/assets/backend/img/bg/bg-21.png);background-size:contain;">
                                    </div>
                                    <!--/.bg-holder-->
                                    <img class="img-fluid rounded mb-3 position-relative"
                                        src="/assets/backend/img/team/64.webp" alt="..." />
                                </div>
                                <h4>Lilah Lola</h4>
                                <h6 class="mb-3 fw-semibold">Marketing Manager</h6><a href="#!"><span
                                        class="fa-brands fa-facebook text-primary me-3"></span></a><a
                                    href="#!"><span
                                        class="fa-brands fa-twitter text-primary me-3"></span></a><a
                                    href="#!"><span class="fa-brands fa-linkedin-in text-primary"></span></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="text-center mt-5 position-relative">
                                <div class="team-avatar-container d-inline-block position-relative">
                                    <div class="bg-holder"
                                        style="background-image:url(/assets/backend/img/bg/bg-21.png);background-size:contain;">
                                    </div>
                                    <!--/.bg-holder-->
                                    <img class="img-fluid rounded mb-3 position-relative"
                                        src="/assets/backend/img/team/65.webp" alt="..." />
                                </div>
                                <h4>Thomas Doe</h4>
                                <h6 class="mb-3 fw-semibold">UX Designer</h6><a href="#!"><span
                                        class="fa-brands fa-facebook text-primary me-3"></span></a><a
                                    href="#!"><span
                                        class="fa-brands fa-twitter text-primary me-3"></span></a><a
                                    href="#!"><span class="fa-brands fa-linkedin-in text-primary"></span></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="text-center mt-5 position-relative">
                                <div class="team-avatar-container d-inline-block position-relative">
                                    <div class="bg-holder"
                                        style="background-image:url(/assets/backend/img/bg/bg-21.png);background-size:contain;">
                                    </div>
                                    <!--/.bg-holder-->
                                    <img class="img-fluid rounded mb-3 position-relative"
                                        src="/assets/backend/img/team/66.webp" alt="..." />
                                </div>
                                <h4>Alan Casey</h4>
                                <h6 class="mb-3 fw-semibold">Front End Developer</h6><a href="#!"><span
                                        class="fa-brands fa-facebook text-primary me-3"></span></a><a
                                    href="#!"><span
                                        class="fa-brands fa-twitter text-primary me-3"></span></a><a
                                    href="#!"><span class="fa-brands fa-linkedin-in text-primary"></span></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="text-center mt-5 position-relative">
                                <div class="team-avatar-container d-inline-block position-relative">
                                    <div class="bg-holder"
                                        style="background-image:url(/assets/backend/img/bg/bg-21.png);background-size:contain;">
                                    </div>
                                    <!--/.bg-holder-->
                                    <img class="img-fluid rounded mb-3 position-relative"
                                        src="/assets/backend/img/team/67.webp" alt="..." />
                                </div>
                                <h4>Narokin Hijita</h4>
                                <h6 class="mb-3 fw-semibold">CEO, Global Cheat</h6><a href="#!"><span
                                        class="fa-brands fa-facebook text-primary me-3"></span></a><a
                                    href="#!"><span
                                        class="fa-brands fa-twitter text-primary me-3"></span></a><a
                                    href="#!"><span class="fa-brands fa-linkedin-in text-primary"></span></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="text-center mt-5 position-relative">
                                <div class="team-avatar-container d-inline-block position-relative">
                                    <div class="bg-holder"
                                        style="background-image:url(/assets/backend/img/bg/bg-21.png);background-size:contain;">
                                    </div>
                                    <!--/.bg-holder-->
                                    <img class="img-fluid rounded mb-3 position-relative"
                                        src="/assets/backend/img/team/68.webp" alt="..." />
                                </div>
                                <h4>Narokin Hijita</h4>
                                <h6 class="mb-3 fw-semibold">CEO, Global Cheat</h6><a href="#!"><span
                                        class="fa-brands fa-facebook text-primary me-3"></span></a><a
                                    href="#!"><span
                                        class="fa-brands fa-twitter text-primary me-3"></span></a><a
                                    href="#!"><span class="fa-brands fa-linkedin-in text-primary"></span></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="text-center mt-5 position-relative">
                                <div class="team-avatar-container d-inline-block position-relative">
                                    <div class="bg-holder"
                                        style="background-image:url(/assets/backend/img/bg/bg-21.png);background-size:contain;">
                                    </div>
                                    <!--/.bg-holder-->
                                    <img class="img-fluid rounded mb-3 position-relative"
                                        src="/assets/backend/img/team/69.webp" alt="..." />
                                </div>
                                <h4>Narokin Hijita</h4>
                                <h6 class="mb-3 fw-semibold">CEO, Global Cheat</h6><a href="#!"><span
                                        class="fa-brands fa-facebook text-primary me-3"></span></a><a
                                    href="#!"><span
                                        class="fa-brands fa-twitter text-primary me-3"></span></a><a
                                    href="#!"><span class="fa-brands fa-linkedin-in text-primary"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="bg-body-emphasis pb-0">

                <div class="container-small px-lg-7 px-xxl-3">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="card py-md-9 px-md-13 border-0 z-1 shadow-lg cta-card">
                                <div class="bg-holder"
                                    style="background-image:url(/assets/backend/img/bg/bg-18.png);background-position:right;background-size:auto;">
                                </div>
                                <!--/.bg-holder-->

                                <div class="card-body position-relative"><img class="img-fluid mb-5 d-dark-none"
                                        src="/assets/backend/img/spot-illustrations/27.png" width="210"
                                        alt="..." /><img class="img-fluid mb-5 d-light-none"
                                        src="/assets/backend/img/spot-illustrations/dark_27.png" width="210"
                                        alt="..." />
                                    <div class="d-flex align-items-center fw-bold justify-content-center mb-3">
                                        <p class="mb-0">2008 Premium Icons </p><span
                                            class="text-primary fa-solid fa-circle"
                                            data-fa-transform="shrink-12"></span>
                                        <p class="mb-0">Included FREE with it</p>
                                    </div>
                                    <h1 class="fs-6 fs-sm-4 fs-lg-2 fw-bolder lh-sm mb-3">Join<span
                                            class="gradient-text-primary mx-2">Phoenix</span><span>Today</span></h1>
                                    <form class="d-flex justify-content-center mb-3 px-xxl-12">
                                        <div class="d-grid d-sm-block"></div>
                                        <input class="form-control me-3" id="ctaEmail1" type="email"
                                            placeholder="Email" aria-describedby="ctaEmail1" />
                                        <button class="btn btn-primary" type="submit">Subscribe</button>
                                    </form>
                                    <p>Best support in the world, Only Phoenix can ensure </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->


            <div class="position-relative">
                <div class="bg-holder footer-bg"
                    style="background-image:url(//assets/backend/img/bg/bg-19.png);background-size:auto;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder"
                    style="background-image:url(//assets/backend/img/bg/bg-right-20.png);background-position:right;background-size:auto;">
                </div>
                <!--/.bg-holder-->

                <div class="bg-holder"
                    style="background-image:url(//assets/backend/img/bg/bg-left-20.png);background-position:left;background-size:auto;">
                </div>
                <!--/.bg-holder-->

                <div class="position-relative">
                    <svg class="w-100 text-white dark__text-gray-1100" preserveAspectRatio="none"
                        viewBox="0 0 1920 368" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
                    </svg>


                    <!-- ============================================-->
                    <!-- <section> begin ============================-->
                    <section class="footer-default">

                        <div class="container-small px-lg-7 px-xxl-3">
                            <div class="row position-relative">
                                <div class="col-12 col-sm-12 col-lg-5 mb-4 order-0 order-sm-0"><a
                                        href="#"><img class="mb-3"
                                            src="/assets/backend/img/icons/logo-white.png" height="48"
                                            alt="" /></a>
                                    <h3 class="text-white">phoenix</h3>
                                    <p class="text-white opacity-50">All over the world. Alice in <br />wonderland and
                                        other places.</p>
                                </div>
                                <div class="col-lg-7">
                                    <div class="row justify-content-between">
                                        <div class="col-6 col-sm-4 col-lg-3 mb-3 order-2 order-sm-1">
                                            <div class="border-dashed border-start border-primary-light ps-3"
                                                style="--phoenix-border-opacity: .2;">
                                                <h5 class="fw-bolder mb-2 text-light">Help</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li class="mb-1"><a class="text-body-quaternary"
                                                            href="#!" data-bs-theme="light">About</a></li>
                                                    <li class="mb-1"><a class="text-body-quaternary"
                                                            href="#!" data-bs-theme="light">Contact</a></li>
                                                    <li class="mb-1"><a class="text-body-quaternary"
                                                            href="#!" data-bs-theme="light">Developers</a></li>
                                                </ul>
                                            </div>
                                            <div class="border-dashed border-start border-primary-light ps-3"
                                                style="--phoenix-border-opacity: .2;">
                                                <h5 class="lh-lg fw-bolder mb-2 text-light">Follow</h5>
                                                <ul class="list-unstyled mb-2">
                                                    <li class="mb-1"><a class="text-body-quaternary"
                                                            href="#!" data-bs-theme="light">Facebook</a></li>
                                                    <li class="mb-1"><a class="text-body-quaternary"
                                                            href="#!" data-bs-theme="light">Twitter</a></li>
                                                    <li class="mb-1"><a class="text-body-quaternary"
                                                            href="#!" data-bs-theme="light">Linkedin</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
                                            <div class="border-dashed border-start border-primary-light ps-3"
                                                style="--phoenix-border-opacity: .2;">
                                                <h5 class="lh-lg fw-bold text-light mb-2">Support</h5>
                                                <ul class="list-unstyled mb-md-2">
                                                    <li class="mb-1"><a class="text-body-quaternary"
                                                            href="#!" data-bs-theme="light">Privacy</a></li>
                                                    <li class="mb-1"><a class="text-body-quaternary"
                                                            href="#!" data-bs-theme="light">Community</a></li>
                                                    <li class="mb-1"><a class="text-body-quaternary"
                                                            href="#!" data-bs-theme="light">Contact</a></li>
                                                    <li class="mb-1"><a class="text-body-quaternary"
                                                            href="#!" data-bs-theme="light">Blog</a></li>
                                                    <li class="mb-1"><a class="text-body-quaternary"
                                                            href="#!" data-bs-theme="light">FAQ</a></li>
                                                    <li class="mb-1"><a class="text-body-quaternary"
                                                            href="#!" data-bs-theme="light">Project</a></li>
                                                    <li class="mb-1"><a class="text-body-quaternary"
                                                            href="#!" data-bs-theme="light">Team</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
                                            <div class="border-dashed border-start border-primary-light ps-3"
                                                style="--phoenix-border-opacity: .2;">
                                                <h5 class="lh-lg fw-bold text-light mb-2"> Info</h5>
                                                <ul class="list-unstyled mb-md-2">
                                                    <li class="mb-1"><a class="text-body-quaternary"
                                                            href="#!" data-bs-theme="light">Personal</a></li>
                                                    <li class="mb-1"><a class="text-body-quaternary"
                                                            href="#!" data-bs-theme="light">NFT System</a></li>
                                                    <li class="mb-1"><a class="text-body-quaternary"
                                                            href="#!" data-bs-theme="light">Agency</a></li>
                                                    <li class="mb-1"><a class="text-body-quaternary"
                                                            href="#!" data-bs-theme="light">Contact</a></li>
                                                    <li class="mb-1"><a class="text-body-quaternary"
                                                            href="#!" data-bs-theme="light">About</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of .container-->

                    </section>
                    <!-- <section> close ============================-->
                    <!-- ============================================-->


                </div>
            </div>

            {{-- chat demo --}}
            {{-- @include('backend.layouts.chat') --}}
            {{-- chat demo --}}

        </main>
        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->/

        {{-- customizer --}}
        @include('backend.layouts.customize')
        {{-- end of customizer --}}


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
        <script src="/assets/backend/vendors/mapbox-gl/mapbox-gl.js"></script>
        <script src="/assets/backend/js/phoenix.js"></script>
        <script src="/assets/backend/vendors/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="/assets/backend/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="/assets/backend/vendors/isotope-packery/packery-mode.pkgd.min.js"></script>
        <script src="/assets/backend/vendors/bigpicture/BigPicture.js"></script>
        <script src="/assets/backend/vendors/countup/countUp.umd.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbaQGvhe7Af-uOMJz68NWHnO34UjjE7Lo&callback=initMap"
            async></script>
        <script src="https://smtpjs.com/v3/smtp.js"></script>

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
