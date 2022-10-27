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


    <!--Start Contact Page-->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <!--Start Contact Page Left-->
                <div class="col-xl-4 col-lg-4">
                    <div class="contact-page__left">
                        <div class="sec-title">
                            <div class="icon">
                                <img src="{{asset('assets/images/resources/sec-title-icon1.png')}}" alt="">
                            </div>
                            <span class="sec-title__tagline">Contact now</span>
                            <h2 class="sec-title__title">Get in Touch <br>with Us</h2>
                        </div>
                        <p class="contact-page__left-text">We are committed to providing our customers with
                            exceptional service while offering our employees the best training.</p>
                        <div class="contact-page__social-link">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Contact Page Right-->

                <!--Start Contact Page Right-->
                <div class="col-xl-8 col-lg-8">
                    <div class="contact-page__right">
                        <form action="{{route('contact-us.store')}}" method="post" class="comment-one__form"
                              novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" value="{{old('name')}}" placeholder="Your name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" value="{{old('email')}}" placeholder="Email address" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Phone number" value="{{old('phone')}}" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Subject" name="subject" value="{{old('subject')}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="comment-form__input-box">
                                        <textarea name="message" placeholder="Write message" required style="resize: none">{{old('message')}}</textarea>
                                    </div>
                                    <div style="margin-bottom: 20px;">
                                        <div class="g-recaptcha" data-sitekey="{{get_settings('site_key')}}"></div>
                                    </div>
                                    <button type="submit" class="thm-btn">Send a message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--End Contact Page Right-->
            </div>
        </div>
    </section>
    <!--End Contact Page-->


    <!--Start Contact Page Contact Info-->
    <section class="contact-page__contact-info clearfix">
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-page__contact-info-wrapper">
                        <div class="contact-page__contact-info-title">
                            <h2>Get in Touch</h2>
                        </div>

                        <div class="contact-page__contact-info-list">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <span class="icon-map"></span>
                                    </div>
                                    <div class="title">
                                        <span>Visit Our Store</span>
                                        <p>{{get_settings('office_address')}}</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <span class="icon-email-1"></span>
                                    </div>
                                    <div class="title">
                                        <span>Send Email</span>
                                        <p><a href="mailto:{{get_settings('official_email')}}">{{get_settings('official_email')}}</a></p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon phone">
                                        <span class="icon-phone-call-2"></span>
                                    </div>
                                    <div class="title">
                                        <span>Call Anytime</span>
                                        <p><a href="tel:{{get_settings('office_contact')}}">{{get_settings('office_contact')}}</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Page Contact Info-->
@endpush
