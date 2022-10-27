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

    <section class="services-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="services-details__content">
                        <div class="services-details__content-img">
                            <img src="{{asset('assets/images/'.$partner->image)}}" alt="" />
                        </div>
                        <div class="services-details__content-icon">
                            <span class="icon-harvest"></span>
                        </div>
                        <h2 class="services-details__content-title">{{ ucwords($partner->name) }}</h2>
                        <p class="services-details__content-text1">{{ $partner->description }}</p>

                        <p><a href="{{route('partner-farmer.show',base64_encode($partner->id))}}" class="btn btn-outline-success">Register Here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endpush
