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
                            <h2 class="sec-title__title">Register Now</h2>
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
                        <form action="{{route('farmer.store')}}" method="post" class="comment-one__form "
                              novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <label for="">Email</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" value="{{old('email')}}" placeholder="Your email" name="email" id="email" required>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <label for="">Name</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" value="{{old('name')}}" placeholder="Your name" name="name" id="name" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <label for="">Phone Number</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Phone number" value="{{old('phone_number')}}" name="phone_number" id="phone_number" required>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <label for="">Local Government</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Local Government" name="lga" value="{{old('lga')}}" id="lga" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <label for="">Volume Sold</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Volume Sold" name="volume_sold" value="{{old('volume_sold')}}" id="volume_sold" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <label for="">Amount Due</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Amount Due" name="amount" value="{{old('amount')}}" id="amount" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <label for="">Price Per Kg</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Price Per Kg" name="price_per_kg" value="{{old('price_per_kg')}}"  id="price_per_kg" required>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <label for="">Bank Name</label>
                                    <div class="comment-form__input-box">
                                        <select name="bank" class="form-control" required id="bank" >
                                            <option value="">Select</option>
                                            @foreach(\App\Banks::orderBy('name')->get() as $value)
                                                <option value="{{$value->id}}">{{ ucwords($value->name) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <label for="">Account Number</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Account Number" name="account_number" value="{{old('account_number')}}"  id="account_number" required>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <label for="">Account Name</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Account Name" name="account_name" value="{{old('account_name')}}"  id="account_name" required>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <div class="g-recaptcha" data-sitekey="{{get_settings('site_key')}}"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <button type="submit" class="thm-btn">Apply Now</button>
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
@endpush
