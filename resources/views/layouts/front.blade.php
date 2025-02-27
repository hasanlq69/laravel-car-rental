<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" c>
    <meta name="viewport" c>
    <meta name="description" c>
    <title>@yield('title', 'Car Rental')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/assets/media/user/favicon.png') }}">

    <!-- All CSS files -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/smoothScorllbar.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/classic.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/classic.date.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/app.css') }}">
</head>

<body class="x-hidden">
    <!-- PRELOADER START -->
    <div id="preloader">
        <div class="spinner"></div>
        <div id="content"></div>
    </div>
    <!-- PRELOADER END -->

    <!-- HEADER MENU START -->
    @include('partials.header')
    <!-- HEADER MENU END -->

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER START -->
    @include('partials.footer')
    <!-- FOOTER END -->
    <button class="scrollToTopBtn"><i class="fa fa-arrow-up"></i></button>

    <!-- Mobile Menu Start -->
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index-2.html" aria-label="logo image"><img src="{{ asset('front/assets/media/user/logo.png')}}" alt=""></a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:example@company.com">example@company.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+12345678">+123 (4567) -890</a>
                </li>
            </ul>
            <div class="mobile-nav__social">
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <!-- All JS files -->


    <script src="{{ asset('front/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/vendor/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/vendor/smooth-scrollbar.js') }}"></script>
    <script src="{{ asset('front/assets/js/vendor/picker.js') }}"></script>
    <script src="{{ asset('front/assets/js/vendor/picker.date.js') }}"></script>
    <script src="{{ asset('front/assets/js/date.js') }}"></script>
    <script src="{{ asset('front/assets/js/app.js') }}"></script>

</body>
</html>

