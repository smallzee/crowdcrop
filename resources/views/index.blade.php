@extends('layouts.frontend.app')

@push('content')

    <!--Main Slider Start-->
    <section class="main-slider main-slider-one">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 7000
            }}'>

            <div class="swiper-wrapper">
                <!--Start Single Swiper Slide-->
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{asset('assets/images/backgrounds/main-slider-v1-1.jpg')}});"></div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider-inner">
                                    <div class="main-slider__content">
                                        <span class="main-slider-tagline">We’re producing natural goods</span>
                                        <h2 class="main-slider__title">Welcome to <br> {{config('app.name')}} <span><span class="leaf"><img src="{{asset('assets/images/resources/leaf.png')}}" alt="" /></span>Farm</span></h2>
                                    </div>
                                    <div class="main-slider__button-box">
                                        <div class="arrow-icon"><img src="{{asset('assets/images/icon/main-slider__button-arrow.png')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Swiper Slide-->

                <!--Start Single Swiper Slide-->
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{asset('assets/images/backgrounds/main-slider-v1-3.jpg')}});"></div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider-inner">
                                    <div class="main-slider__content">
                                        <span class="main-slider-tagline">We’re producing natural goods</span>
                                        <h2 class="main-slider__title">Welcome to <br> {{config('app.name')}} <span><span class="leaf"><img src="{{asset('assets/images/resources/leaf.png')}}" alt="" /></span>Farm</span></h2>
                                    </div>
                                    <div class="main-slider__button-box">
                                        <div class="arrow-icon"><img src="{{asset('assets/images/icon/main-slider__button-arrow.png')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Swiper Slide-->
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-pagination" id="main-slider-pagination"></div>

            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <span class="icon-right-arrow-2"></span>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <span class="icon-right-arrow-2"></span>
                </div>
            </div>
        </div>
    </section>
    <!--Main Slider End-->

    <!--Services One Start-->
    <section class="services-one">
        <div class="services-one__bg wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms"></div>
        <div class="container">
            <div class="sec-title text-center">
                <div class="icon">
                    <img src="{{asset('assets/images/resources/logo.png')}}" style="width: 150px" alt="">
                </div>
                <h2 class="sec-title__title">{{  config('app.name')  }} Background</h2>
            </div>
            <div class="row">

                @foreach(\App\Partners::whereStatus(1)->orderBy('name')->paginate(10) as $value)

                <!--Start Single Services One-->
                <div class="col-xl-4 col-lg-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="services-one__single">
                        <div class="services-one__single-img">
                            <div class="services-one__single-img-inner">
                                <img src="{{asset('assets/images/'.$value->image)}}" alt="" />
                            </div>
                        </div>
                        <div class="services-one__single-content text-center">
                            <div class="services-one__single-img-icon">
                                <span class="icon-harvest"></span>
                            </div>

                            <h1>{{ $value->name }}</h1>
                            <p class="mt-2 mb-2">{{ $value->description }}</p>

                            <a href="{{route('partner-farmer.show',base64_encode($value->id))}}" class="btn btn-outline-success btn-md">Farmer Registration</a>
                        </div>
                    </div>
                </div>
                <!--End Single Services One-->

                @endforeach

        </div>
    </section>
    <!--Services One End-->

    <!--Services One Start-->
    <section class="services-one">
        <div class="services-one__bg wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms"></div>
        <div class="container">
            <div class="sec-title text-center">
                <div class="icon">
                    <img src="{{asset('assets/images/resources/logo.png')}}" style="width: 150px" alt="">
                </div>
                <h2 class="sec-title__title">{{  config('app.name')  }} Our Solution</h2>
            </div>
            <div class="row">

                <!--Start Single Services One-->
                <div class="col-xl-4 col-lg-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="services-one__single">
                        <div class="services-one__single-img">
                            <div class="services-one__single-img-inner">
                                <img src="{{asset('assets/images/services/services-v1-img2.jpg')}}" alt="" />
                            </div>
                        </div>
                        <div class="services-one__single-content text-center">
                            <div class="services-one__single-img-icon">
                                <span class="icon-harvest"></span>
                            </div>
                            <p>Create an online portal to initiate, manage and approve cash payment requests</p>
                        </div>
                    </div>
                </div>
                <!--End Single Services One-->

                <!--Start Single Services One-->
{{--                nothing change--}}
                <div class="col-xl-4 col-lg-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="services-one__single">
                        <div class="services-one__single-img">
                            <div class="services-one__single-img-inner">
                                <img src="{{asset('assets/images/services/services-v1-img3.jpg')}}" alt="" />
                            </div>

                        </div>
                        <div class="services-one__single-content text-center">
                            <div class="services-one__single-img-icon">
                                <span class="icon-growth"></span>
                            </div>
                            <p>Deploy on-site agents to initiate requests and disburse bulk cash upon approval</p>
                        </div>
                    </div>
                </div>
                <!--End Single Services One-->

                <!--Start Single Services One-->
                <div class="col-xl-4 col-lg-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="services-one__single">
                        <div class="services-one__single-img">
                            <div class="services-one__single-img-inner">
                                <img src="{{asset('assets/images/services/farm.png')}}" alt="" />
                            </div>
                        </div>
                        <div class="services-one__single-content text-center">
                            <div class="services-one__single-img-icon">
                                <span class="icon-dairy-products"></span>
                            </div>
                            <p>Earn a percentage (2%) on each transaction as processing fees</p>
                        </div>
                    </div>
                </div>
                <!--End Single Services One-->
            </div>
        </div>
    </section>
    <!--Services One End-->


    <!--Services One Start-->
    <section class="services-one">
        <div class="services-one__bg wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms"></div>
        <div class="container">
            <div class="sec-title text-center">
                <div class="icon">
                    <img src="{{asset('assets/images/resources/logo.png')}}" style="width: 150px" alt="">
                </div>
                <h2 class="sec-title__title">How It Works</h2>
            </div>
            <div class="row">

                <!--Start Single Services One-->
                <div class="col-xl-3 col-lg-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="services-one__single">
                        <div class="services-one__single-img">
                            <div class="services-one__single-img-inner">
                                <img src="{{asset('assets/images/services/services-v1-img1.jpg')}}" alt="" />
                            </div>
                        </div>
                        <div class="services-one__single-content text-center">
                            <div class="services-one__single-img-icon">
                                1
                            </div>
                            <p>AgroEknor buyer requests cash payment for products purchased by AgroEknor</p>
                        </div>
                    </div>
                </div>
                <!--End Single Services One-->

                <!--Start Single Services One-->
                <div class="col-xl-3 col-lg-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="services-one__single">
                        <div class="services-one__single-img">
                            <div class="services-one__single-img-inner">
                                <img src="{{asset('assets/images/services/services-v1-img2.jpg')}}" alt="" />
                            </div>

                        </div>
                        <div class="services-one__single-content text-center">
                            <div class="services-one__single-img-icon">
                                2
                            </div>
                            <p>{{config('app.name')}} agent initiates request and obtains approval from AgroEknor via the online portal</p>
                        </div>
                    </div>
                </div>
                <!--End Single Services One-->

                <!--Start Single Services One-->
                <div class="col-xl-3 col-lg-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="services-one__single">
                        <div class="services-one__single-img">
                            <div class="services-one__single-img-inner">
                                <img src="{{asset('assets/images/services/services-v1-img3.jpg')}}" alt="" />
                            </div>
                        </div>
                        <div class="services-one__single-content text-center">
                            <div class="services-one__single-img-icon">
                                3
                            </div>
                            <p>Once approval is obtained, {{config('app.name')}} agent disburses cash to AgroEknor buyer</p>
                        </div>
                    </div>
                </div>
                <!--End Single Services One-->

                <!--Start Single Services One-->
                <div class="col-xl-3 col-lg-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="services-one__single">
                        <div class="services-one__single-img">
                            <div class="services-one__single-img-inner">
                                <img src="{{asset('assets/images/services/services-v1-img4.jpg')}}" alt="" />
                            </div>
                        </div>
                        <div class="services-one__single-content text-center">
                            <div class="services-one__single-img-icon">
                                4
                            </div>
                            <p>AgroEknor settles all liability schedules and processing fees per agreed conditions</p>
                        </div>
                    </div>
                </div>
                <!--End Single Services One-->
            </div>
        </div>
    </section>
    <!--Services One End-->

    <section class="meet-farmers-one meet-farmers-one--about">
        <div class="container">
            <div class="sec-title text-center">
                <div class="icon">
                    <img src="{{asset('assets/images/resources/logo.png')}}" style="width: 150px" alt="">
                </div>
                <h2 class="sec-title__title">Management Team</h2>
            </div>
            <div class="row">
                <!--Start Single Meet Farmers One-->
                <div class="col-xl-4 col-lg-6  wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="meet-farmers-one__single">
                        <div class="meet-farmers-one__single-img">
                            <center>
                                <img src="{{asset('assets/images/team1.png')}}" style="width: 250px" alt="" />
                            </center>
                        </div>
                        <div class="meet-farmers-one__single-title text-center">
                            <p style="font-size: 20px; margin-bottom: 10px; font-weight:bold; color: #000">CEO</p>
                            <h2><a href="#">Babajide Ajijola</a></h2>
                            <p style="text-transform: capitalize; margin: 20px;color: #000">10+ years in Financial Services Strategy, Problem Solving & Operations Finance, Agriculture, Technology & Real Estate Enthusiast</p>
                        </div>
                    </div>
                </div>
                <!--End Single Meet Farmers One-->

                <!--Start Single Meet Farmers One-->
                <div class="col-xl-4 col-lg-6  wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="meet-farmers-one__single">
                        <div class="meet-farmers-one__single-img">
                            <center>
                                <img src="{{asset('assets/images/team2.png')}}" style="width: 350px" alt="" />
                            </center>
                        </div>
                        <div class="meet-farmers-one__single-title text-center">
                            <p style="font-size: 20px; margin-bottom: 10px; font-weight:bold; color: #000">COO</p>
                            <h2><a href="#">Yimika Fagbenro</a></h2>
                            <p style="text-transform: capitalize; margin: 20px; color: #000">7+ years in Hospitality, Travel & Media Commercial Growth, Strategy & Analytics Booking.com, Adyen, Hotels.ng, BudgIT, Bytesize</p>
                        </div>
                    </div>
                </div>
                <!--End Single Meet Farmers One-->

                <!--Start Single Meet Farmers One-->
                <div class="col-xl-4 col-lg-6  wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="meet-farmers-one__single">
                        <div class="meet-farmers-one__single-img">
                            <center>
                                <img src="{{asset('assets/images/team3.png')}}" style="width: 350px" alt="" />
                            </center>
                        </div>
                        <div class="meet-farmers-one__single-title text-center">
                            <p style="font-size: 20px; margin-bottom: 10px; font-weight:bold; color: #000">CTO</p>
                            <h2><a href="#">Banji Agbeniga</a></h2>
                            <p style="text-transform: capitalize; margin: 20px; color: #000">7+ years in Information Technology Full Stack Web Development
                                Laravel, Codeigniter, HTML5, CSS3/SASS, JavaScript,/JQuery, MySQL, Fluuter.</p>
                        </div>
                    </div>
                </div>
                <!--End Single Meet Farmers One-->
            </div>
        </div>
    </section>
    <!--Meet Farmers One End-->



@endpush
