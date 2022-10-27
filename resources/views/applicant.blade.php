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


                <!--Start Contact Page Right-->
                <div class="col-xl-8 offset-md-3 col-lg-8">
                    <div class="contact-page__right">
                        <table class="table table-bordered">
                            <tr>
                                <td>Application Id</td>
                                <td>{{ $farmer->application_id }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $farmer->email }}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $farmer->name }}</td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td>{{ $farmer->phone_number }}</td>
                            </tr>
                            <tr>
                                <td>LGA</td>
                                <td>{{ $farmer->lga }}</td>
                            </tr>
                            <tr>
                                <td>Volume Sold</td>
                                <td>{{ $farmer->volume_sold }}</td>
                            </tr>
                            <tr>
                                <td>Amount Due</td>
                                <td>{{ $farmer->amount_due }}</td>
                            </tr>
                            <tr>
                                <td>Price Per Kg</td>
                                <td>{{ $farmer->price_per_kg }}</td>
                            </tr>
                            <tr>
                                <td>Bank Name</td>
                                <td>{{ $farmer->bank->name }}</td>
                            </tr>
                            <tr>
                                <td>Account Name</td>
                                <td>{{ $farmer->account_name }}</td>
                            </tr>
                            <tr>
                                <td>Account Number</td>
                                <td>{{ $farmer->account_number }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{ ucfirst($farmer->status) }}</td>
                            </tr>
                            <tr>
                                <td>Authorized By</td>
                                <td>{{ ($farmer->authorized_by_id != 0) ? \App\User::find($farmer->authorized_by_id)->name : 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td>Approved By</td>
                                <td>{{ ($farmer->approved_by_id != 0) ? \App\User::find($farmer->approved_by_id)->name : 'N/A' }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!--End Contact Page Right-->
            </div>
        </div>
    </section>
    <!--End Contact Page-->
@endpush
