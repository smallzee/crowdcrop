@extends('layouts.frontend.app')

@push('content')

    <!--Page Header Start-->
    <section class="page-header clearfix"
             style="background-image: url({{asset('assets/images/backgrounds/page-header-bg.jpg')}});">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>{{$page_title}}</li>
                </ul>
                <h2>{{$page_title}}</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--About Three Start-->
    <section class="about-three">
        <div class="about-three__shape"></div><!-- /.about-three__shape -->
        <div class="container">
            <div class="row">
                <!--Start About Three Content Box-->
                <div class="col-xl-6 col-lg-7">
                    <div class="about-three__content-box">
                        <div class="sec-title">
                            <div class="icon">
                                <img src="{{asset('assets/images/resources/sec-title-icon1.png')}}" alt="">
                            </div>
                            <span class="sec-title__tagline">get to know about us</span>
                            <h2 class="sec-title__title">We Sell High-Quality <br>Organic Products</h2>
                        </div>
                        <div class="about-three__content-box-inner">
                            <h2>We’re Leader in Agriculture Market</h2>
                            <p>There are many variations of passages of available but the majority have suffered
                                alteration in some form.</p>

                            <div class="about-three__products-list">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-investment"></span>
                                        </div>
                                        <h3><a href="#">Natural Products</a></h3>
                                        <p>Duis aute irure dolor simply free in voluptate velit.</p>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-harvest"></span>
                                        </div>
                                        <h3><a href="#">Healthy Food</a></h3>
                                        <p>Duis aute irure dolor simply free in voluptate velit.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="about-three__content-box-btn">
                            <a href="#" class="thm-btn">Discover more</a>
                        </div>
                        <div class="about-three__arrow float-bob-y"></div><!-- /.about-three__arrow -->
                    </div>
                </div>
                <!--End About Three Content Box-->

                <!--Start About Three Img Box-->
                <div class="col-xl-6 col-lg-5">
                    <div class="about-three__img-box">
                        <img src="{{asset('assets/images/resources/about-3-icon-1-1.png')}}" class="about-three__img-icon"
                             alt="">
                        <div class="about-three__img-box-img">
                            <div class="about-three__img-box-img-inner">
                                <img src="{{asset('assets/images/about/about-v3-img1.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!--End About Three Img Box-->
            </div>
        </div>
    </section>
    <!--About Three End-->


    <!--Video One Start-->
    <section class="video-one jarallax clearfix" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
             style="background-image: url({{asset('assets/images/backgrounds/video-one-bg.jpg')}});">
        <div class="video-one-border"></div>
        <div class="video-one-border video-one-border-two"></div>
        <div class="video-one-border video-one-border-three"></div>
        <div class="video-one-border video-one-border-four"></div>
        <div class="video-one-border video-one-border-five"></div>
        <div class="video-one-border video-one-border-six"></div>

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="video-one__wrpper">
                        <div class="video-one__left">
                            <div class="video-one__leaf"></div><!-- /.video-one__leaf -->
                            <h2 class="video-one__title">Agriculture Matters to <br>the Future of Development</h2>
                            <div class="video-one__btn">
                                <a href="{{route('farmer.create')}}" class="thm-btn">Farmer Registration</a>
                            </div>
                        </div>
                        <div class="video-one__right">
                            <div class="icon wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
{{--                                <a class="video-popup" title=" Video"--}}
{{--                                   href="https://www.youtube.com/watch?v=8DP4NgupAhI">--}}
{{--                                    <span class="icon-play-button-1"></span>--}}
                                </a>
                                <span class="border-animation border-1"></span>
                                <span class="border-animation border-2"></span>
                                <span class="border-animation border-3"></span>
                            </div>
                            <div class="title">
                                <h2>Watch the video</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Video One End-->

    <!--Testimonials One Start-->
    <section class="testimonials-one jarallax clearfix" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
             style="background-image: url(assets/images/backgrounds/Testimonials-v1-bg.jpg);">
        <div class="container">
            <div class="row">
                <!--Start Testimonials One Left-->
                <div class="col-xl-4">
                    <div class="testimonials-one__left">
                        <div class="testimonials-one__left-bg"></div>
                        <div class="sec-title">
                            <div class="icon">
                                <img src="{{asset('assets/images/resources/sec-title-icon1.png')}}" alt="">
                            </div>
                            <span class="sec-title__tagline">Our testimonials</span>
                            <h2 class="sec-title__title">What They’re <br>Talking About <br> Agriox</h2>
                        </div>
                    </div>
                </div>
                <!--End Testimonials One Left-->

                <!--Start Testimonials One Right-->
                <div class="col-xl-8">
                    <div class="testimonials-one__right">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="testimonials-one__carousel owl-carousel owl-theme">
                                    <!--Start Single Testimonials One-->
                                    <div class="testimonials-one__single">
                                        <p class="testimonials-one__single-text">Lorem ipsum is simply free text
                                            dolor not sit amet, consectetur notted adipisicing elit sed do eiusmod
                                            tempor incididunt ut labore et dolore text.</p>
                                        <div class="testimonials-one__single-client-info">
                                            <div class="testimonials-one__single-client-info-img">
                                                <div class="testimonials-one__single-client-info-img-inner">
                                                    <img src="{{asset('assets/images/testimonial/testimonials-v1-img1.jpg')}}"
                                                         alt="" />
                                                </div>
                                                <div class="icon">
                                                    <span class="icon-right-quotation-mark"></span>
                                                </div>
                                            </div>
                                            <div class="testimonials-one__single-client-info-title">
                                                <h4>Kevin Martin</h4>
                                                <p>Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Start Single Testimonials One-->

                                    <!--Start Single Testimonials One-->
                                    <div class="testimonials-one__single">
                                        <p class="testimonials-one__single-text">Lorem ipsum is simply free text
                                            dolor not sit amet, consectetur notted adipisicing elit sed do eiusmod
                                            tempor incididunt ut labore et dolore text.</p>
                                        <div class="testimonials-one__single-client-info">
                                            <div class="testimonials-one__single-client-info-img">
                                                <div class="testimonials-one__single-client-info-img-inner">
                                                    <img src="{{asset('assets/images/testimonial/testimonials-v1-img2.jpg')}}"
                                                         alt="" />
                                                </div>
                                                <div class="icon">
                                                    <span class="icon-right-quotation-mark"></span>
                                                </div>
                                            </div>
                                            <div class="testimonials-one__single-client-info-title">
                                                <h4>Christine Eve</h4>
                                                <p>Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Start Single Testimonials One-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Testimonials One Right-->
            </div>
        </div>
    </section>
    <!--Testimonials One End-->


@endpush
