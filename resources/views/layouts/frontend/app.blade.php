<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_title ?? 'Error Page'}} &dash; {{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/resources/logo.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/resources/logo.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/resources/logo.png')}}" />
    <meta name="description" content="{{ config('app.name') }} &dash; Agriculture Farming Services" />

    <link href="https://fonts.cdnfonts.com/css/century-gothic" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/icomoon-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/twentytwenty/twentytwenty.css')}}" />
    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/agriox.css')}}" />
    <!-- RTL CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/agriox-rtl.css')}}">
    <!-- mode css -->
    <link rel="stylesheet" id="jssMode" href="{{asset('assets/frontend/css/modes/agriox-light.css')}}">
    <!-- toolbar css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/toolbar/css/toolbar.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css">
    <script src="{{asset('assets/frontend/vendors/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js?6LdqzMYiAAAAAMkmxWJwtp-qslLZarncT2KSWuqD"></script>
    <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<div class="preloader">
    <img class="preloader__image" style="width: 50%" src="{{asset('assets/images/resources/logo.png')}}" alt="" />
</div>

@include('flash')
<!-- /.preloader -->
<div class="page-wrapper">
    @include('layouts.frontend.header')

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content">

        </div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    @stack('content')

    @include('layouts.frontend.footer')

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{url('/')}}" aria-label="logo image"><img src="{{asset('assets/images/resources/mobilemenu_logo.png')}}" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="icon-phone-call"></i>
                    <a href="mailto:{{get_settings('official_email')}}">{{get_settings('official_email')}}</a>
                </li>
                <li>
                    <i class="icon-letter"></i>
                    <a href="tel:{{get_settings('office_contact')}}">{{get_settings('office_contact')}}</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow-2"></i></a>
</div>


<script src="{{asset('assets/frontend/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/jarallax/jarallax.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/nouislider/nouislider.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/odometer/odometer.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/swiper/swiper.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/wnumb/wNumb.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/wow/wow.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/isotope/isotope.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/countdown/countdown.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/twentytwenty/twentytwenty.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/twentytwenty/jquery.event.move.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/parallax/parallax.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/tilt.js/tilt.jquery.js')}}"></script>
<!-- template js -->
<script src="{{asset('assets/frontend/js/agriox.js')}}"></script>
<!-- toolbar js -->
<script src="{{asset('assets/frontend/vendors/toolbar/js/js.cookie.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/toolbar/js/jQuery.style.switcher.min.js')}}"></script>
<script src="{{asset('assets/frontend/vendors/toolbar/js/toolbar.lang.js')}}"></script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="{{asset('assets/frontend/vendors/toolbar/js/toolbar.js')}}"></script>

</body>
</html>
