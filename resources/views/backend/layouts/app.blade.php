<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <!-- ===============================================-->
        <!--    Document Title-->
        <!-- ===============================================-->
        <title>@yield('title')</title>

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
        <link href="{{ asset('assets/backend/vendors/choices/choices.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/backend/vendors/dhtmlx-gantt/dhtmlxgantt.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/backend/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
            rel="stylesheet">
        <link href="{{ asset('assets/backend/vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
        <link href="/assets/backend/css/theme-rtl.css" type="text/css" rel="stylesheet" id="style-rtl">
        <link href="/assets/backend/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
        <link href="/assets/backend/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
        <link href="/assets/backend/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">

        @stack('css')
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


        <link href="/assets/backend/vendors/leaflet/leaflet.css" rel="stylesheet">
        <link href="/assets/backend/vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
        <link href="/assets/backend/vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
    </head>


    <body>

        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->

        <main class="main" id="top">

            {{-- sidebar --}}
            @include('backend.layouts.sidebar')
            {{-- end sidebar --}}

            {{-- navbar --}}
            @include('backend.layouts.navbar')
            {{-- end navbar --}}

            <div class="content">
                @yield('content')

                {{-- footer --}}
                @include('backend.layouts.footer')
                {{-- end footer --}}
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

            {{-- chat demo --}}
            @include('backend.layouts.chat')
            {{-- end chat demo --}}
        </main>
        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->

        {{-- customizer --}}
        @include('backend.layouts.customize')
        {{-- end customizer --}}


        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="{{ asset('assets/backend/vendors/popper/popper.min.js') }}"></script>
        <script src="{{ asset('assets/backend/vendors/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/backend/vendors/anchorjs/anchor.min.js') }}"></script>
        <script src="{{ asset('assets/backend/vendors/is/is.min.js') }}"></script>
        <script src="{{ asset('assets/backend/vendors/fontawesome/all.min.js') }}"></script>
        <script src="{{ asset('assets/backend/vendors/lodash/lodash.min.js') }}"></script>
        <script src="{{ asset('assets/backend/vendors/list.js/list.min.js') }}"></script>
        <script src="{{ asset('assets/backend/vendors/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('assets/backend/vendors/dayjs/dayjs.min.js') }}"></script>
        <script src="{{ asset('assets/backend/vendors/choices/choices.min.js') }}"></script>
        <script src="{{ asset('assets/backend/vendors/echarts/echarts.min.js') }}"></script>
        <script src="{{ asset('assets/backend/vendors/dhtmlx-gantt/dhtmlxgantt.js') }}"></script>
        <script src="{{ asset('assets/backend/vendors/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ asset('assets/backend/vendors/prism/prism.js') }}"></script>
        <script src="{{ asset('assets/backend/js/phoenix.js') }}"></script>
        <script src="{{ asset('assets/backend/js/projectmanagement-dashboard.js') }}"></script>

        @stack('js')

    </body>

</html>
