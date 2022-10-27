<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('page_title') &dash; {{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicons/favicon-16x16.png')}}" />
    <meta name="description" content="{{ config('app.name') }} &dash; Agriculture Farming Services" />

    <link rel="stylesheet" type="text/css" href="{{asset('assets/auth/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/auth/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/auth/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/auth/css/iofrm-theme22.css')}}">
    <style>
        .form-control, .ibtn{
            height: 45px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css">
    <script src="{{asset('assets/auth/js/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<div class="form-body without-side">
    <div class="website-logo">
        <a href="{{url('/')}}">
            <div class="logo">
                <img class="logo-size" src="{{asset('assets/images/resources/mobilemenu_logo.png')}}" alt="">
            </div>
        </a>
    </div>
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
                <img src="{{asset('assets/images/graphic3.svg')}}" alt="">
            </div>
        </div>
        @stack('content')
    </div>
</div>

<script src="{{asset('assets/auth/js/popper.min.js')}}"></script>
<script src="{{asset('assets/auth/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/auth/js/main.js')}}"></script>
</body>
</html>
