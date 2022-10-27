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
                            <h2 class="sec-title__title">Check Farmer Application Status</h2>
                        </div>
                    </div>
                </div>
                <!--End Contact Page Right-->

                <!--Start Contact Page Right-->
                <div class="col-xl-8 col-lg-8">
                    <div class="contact-page__right">
                        <form action="{{route('farmer.update',1)}}" method="post" class="comment-one__form "
                             >
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <label for="">Application Id</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your application id" name="application_id" id="application_id" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <button type="submit" class="thm-btn comment-form__btn">Check Status</button>
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
