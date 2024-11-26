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
        {{-- <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
        <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
        <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
        <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
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
        <!-- Font Awesome CSS (for icons) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Typed.js -->
        <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
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
        <!-- Custom JS -->
        {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    </head>


    <body>

        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main class="main" id="top">
            <div class="container-fluid bg-body-tertiary dark__bg-gray-1200">
                <div class="bg-holder bg-auth-card-overlay"
                    style="background-image:url(/assets/backend/img/bg/37.png);">
                </div>
                <!--/.bg-holder-->

                <div class="row flex-center position-relative min-vh-100 g-0 py-5">
                    <div class="col-11 col-sm-10 col-xl-8">
                        <div class="card border border-translucent auth-card">
                            <div class="card-body pe-md-0">
                                <div class="row align-items-center gx-0 gy-7">
                                    <div
                                        class="col-auto bg-body-highlight dark__bg-gray-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                                        <div class="bg-holder"
                                            style="background-image:url(/assets/backend/img/bg/38.png);">
                                        </div>
                                        <!--/.bg-holder-->

                                        <div
                                            class="position-relative px-4 px-lg-7 pt-7 pb-7 pb-sm-5 text-center text-md-start pb-lg-7 pb-md-7">
                                            <h3 class="mb-3 text-body-emphasis fs-7">Phoenix Authentication</h3>
                                            <p class="text-body-tertiary">Give yourself some hassle-free development
                                                process with the uniqueness of Phoenix!</p>
                                            <ul class="list-unstyled mb-0 w-max-content w-md-auto">
                                                <li class="d-flex align-items-center"><span
                                                        class="uil uil-check-circle text-success me-2"></span><span
                                                        class="text-body-tertiary fw-semibold">Fast</span></li>
                                                <li class="d-flex align-items-center"><span
                                                        class="uil uil-check-circle text-success me-2"></span><span
                                                        class="text-body-tertiary fw-semibold">Simple</span></li>
                                                <li class="d-flex align-items-center"><span
                                                        class="uil uil-check-circle text-success me-2"></span><span
                                                        class="text-body-tertiary fw-semibold">Responsive</span></li>
                                            </ul>
                                        </div>
                                        <div
                                            class="position-relative z-n1 mb-6 d-none d-md-block text-center mt-md-15">
                                            <img class="auth-title-box-img d-dark-none"
                                                src="/assets/backend/img/spot-illustrations/auth.png"
                                                alt="" /><img class="auth-title-box-img d-light-none"
                                                src="/assets/backend/img/spot-illustrations/auth-dark.png"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="col mx-auto">

                                        {{-- conten login/register --}}
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
                    var navbarTop = document.querySelector('.navbar-top');
                    if (navbarTopStyle === 'darker') {
                        navbarTop.setAttribute('data-navbar-appearance', 'darker');
                    }

                    var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
                    var navbarVertical = document.querySelector('.navbar-vertical');
                    if (navbarVertical && navbarVerticalStyle === 'darker') {
                        navbarVertical.setAttribute('data-navbar-appearance', 'darker');
                    }
                </script>

                {{-- chat --}}
                {{-- @include('backend.layouts.chat') --}}

        </main>
        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->


        {{-- customize --}}
        @include('backend.layouts.customize')



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

    </body>

</html>
