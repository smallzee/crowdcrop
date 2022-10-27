<!--Start Footer One-->
<footer class="footer-one">
    <div class="footer-one__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer-one__top-wrapper">
                        <div class="footer-one__bg"><img src="{{asset('assets/images/backgrounds/footer-one-bg.png')}}" alt="" /></div>
                        <div class="row">
                            <!--Start Footer Widget Column-->
                            <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="footer-widget__column footer-widget__about">
                                    <div class="footer-widget__about-logo">
                                        <a href="{{url('/')}}"><img src="{{asset('assets/images/resources/footer-logo.png')}}" alt=""></a>
                                    </div>
                                    <div class="footer-widget__about-contact-box">
                                        <p><a href="mailto:{{get_settings('official_email')}}"><i class="fa fa-envelope"></i>{{get_settings('official_email')}}</a></p>
                                        <p class="text"><i class="fas fa-map-marker-alt"></i>{{get_settings('office_address')}}</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Footer Widget Column-->

                            <!--Start Footer Widget Column-->
                            <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                                <div class="footer-widget__column footer-widget__explore">
                                    <h2 class="footer-widget__title">Explore</h2>
                                    <ul class="footer-widget__explore-list">
                                        <li class="footer-widget__explore-list-item"><a href="{{route('contact-us.index')}}">Get in Touch</a></li>
                                        <li class="footer-widget__explore-list-item"><a href="{{route('farmer.create')}}">Farmer Registration</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Footer Widget Column-->

                            <!--Start Footer Widget Column-->
                            <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.7s">
                                <div class="footer-widget__column footer-widget__newletter">
                                    <h2 class="footer-widget__title">Newsletter</h2>
                                    <p class="footer-widget__newletter-text">Sign up now to get daily latest
                                        news & updates from us</p>
                                    <form class="subscribe-form" action="#">
                                        <input type="email" name="email" required placeholder="Email address">
                                        <button type="submit">Go</button>
                                    </form>
                                </div>
                            </div>
                            <!--End Footer Widget Column-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Start Footer One Bottom-->
    <div class="footer-one__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer-one__bottom-inner">
                        <div class="footer-one__bottom-text">
                            <p>&copy; Copyright 2022 &dash; {{ date('Y') }} by <a href="#">{{ config('app.name') }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer One Bottom-->
</footer>
<!--End Footer One-->
