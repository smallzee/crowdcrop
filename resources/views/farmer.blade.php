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
                            <h2 class="sec-title__title">{{ $partner->name }}</h2>
                        </div>
                        <p class="contact-page__left-text">{{$partner->description}}</p>
                    </div>
                </div>
                <!--End Contact Page Right-->

                <!--Start Contact Page Right-->
                <div class="col-xl-8 col-lg-8">
                    <div class="contact-page__right">
                        <form action="{{route('partner-farmer.store')}}" method="post" class="comment-one__form "
                              novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <label for="">Buyer's Email Address</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" value="{{old('buyer_email')}}" placeholder="Buyer Email Address" name="buyer_email" id="email" required>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <label for="">Buyer's Name</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" value="{{old('buyer_name')}}" placeholder="Buyer Name" name="buyer_name" id="buyer_name" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <label for="">Farmer Name</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" value="{{old('farmer_name')}}" placeholder="Farmer Name" name="farmer_name" id="farmer_name" required>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <label for="">Farmer Phone Number</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Phone number" value="{{old('phone_number')}}" name="phone_number" id="phone_number" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <label for="">Local Government</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Local Government" name="lga" value="{{old('lga')}}" id="lga" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <label for="">Volume Sold (in Kg)</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Volume Sold (in Kg)" name="volume_sold" id="volume_sold" value="{{old('volume_sold')}}" id="volume_sold" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <label for="">Price Per Kg</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Price Per Kg" name="price_per_kg" value="{{old('price_per_kg')}}"  id="price_per_kg" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <label for="">Amount Due</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Amount Due" readonly name="amount" value="{{old('amount')}}" id="amount">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
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

                                <div class="col-xl-12 col-lg-12">
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

                                <div class="col-xl-6 col-lg-6">
                                    <label for="">Witness By</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Witness Name" name="witness_name" value="{{old('witness_name')}}"  id="account_name" required>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12">
                                    <label for="">Date Of Delivery</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" data-toggle="datepicker"  placeholder="Date Of Delivery" name="delivery_date" value="{{old('delivery_date')}}"  id="delivery_date" required>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <label for="">Payment type</label>
                                    <div class="comment-form__input-box">
                                        <select name="payment_type" class="form-control" required id="payment_type" >
                                            <option value="">Select</option>
                                            @foreach(array('cash','transfer') as $value)
                                                <option value="{{$value}}">{{ ucwords($value) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <label for="">Point Of Delivery</label>
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Point of delivery" name="point_of_delivery" value="{{old('point_of_delivery')}}"  id="point_of_delivery" required>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="partner_id" value="{{ $partner->id }}" id="">
                            <div style="margin-bottom: 20px;">
                                <div class="g-recaptcha" data-sitekey="{{get_settings('site_key')}}"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <button type="submit" class="thm-btn">Submit</button>
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

    <script>
        $(function () {
            $("#price_per_kg, #volume_sold").blur(function () {
                var price_per_kg = parseFloat($("#price_per_kg").val());
                var volume_sold = parseFloat($("#volume_sold").val());

                if (price_per_kg >= 0 && volume_sold >= 0) {
                    var total_amount = price_per_kg  * volume_sold;
                    $("#amount").val(total_amount);
                }
            });
        });
    </script>
@endpush
