@extends('layouts.frontend.app')

@push('content')
    <!--Page Header Start-->
    <section class="page-header clearfix"
             style="background-image: url({{asset('assets/images/backgrounds/page-header-bg.jpg')}});">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>{{$page_title ?? 'Page Not Found'}}</li>
                </ul>
                <h2>{{$page_title ?? 'Page Not Found'}}</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Start Error Page One-->
    <section class="error-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="error-page__wrapper text-center">
                        <div class="error-page__big-title">
                            <h3>{{$page_title ?? 'Page Not Found'}}</h3>
                        </div>
                        <div class="error-page__content">
                            <h2>Sorry, We Can't Find that Page!</h2>
                            <p>The page you are looking for was moved, removed, renamed or never existed.</p>
                        </div>
                        <div class="error-page__search">
                            <form class="search-form" action="#">
                                <input placeholder="Search here" type="text">
                                <button type="submit"><i class="icon-search"></i></button>
                            </form>
                        </div>
                        <div class="error-page__btn">
                            <a href="{{url('/')}}" class="thm-btn">Back to home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Error Page One-->
@endpush
