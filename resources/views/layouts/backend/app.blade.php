<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta section -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" >
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicons Icons -->
    <title>{{ $page_title }} &dash; {{ config('app.name') }} </title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicons/favicon-16x16.png')}}" />
    <!-- ./meta section -->
    <!-- css styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/css/default-blue-white.css')}}" id="dev-css">
    <!-- ./css styles -->
    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/css/dev-other/dev-ie-fix.css')}}">
    <![endif]-->
    <link href="https://fonts.googleapis.com/css2?family=Averia+Sans+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&amp;family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;family=Shadows+Into+Light&amp;display=swap"
          rel="stylesheet">
    <!-- javascripts -->
    <script type="text/javascript" src="{{asset('assets/backend/js/plugins/modernizr/modernizr.js')}}"></script>
    <!-- ./javascripts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="{{asset('assets/auth/js/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <style>
        .dev-page{visibility: hidden;}

        body {
            font-family: var(--agriox-font, "DM Sans", sans-serif);
            color: var(--agriox-color-1, #687469);
            line-height: 34px;
            font-weight: 400;
        }
    </style>
</head>
<body>

<!-- page wrapper -->
<div class="dev-page">
    @include('flash')
    <!-- page header -->
        <div class="dev-page-header">
            <div class="dph-logo">
                <span style="color: #fff"><img src="{{asset('assets/images/resources/logo-1.png')}}" style="width: 100px" alt=""></span>
                <a href="{{route('dashboard.index')}}">{{config('app.name')}}</a>
                <a class="dev-page-sidebar-collapse">
                    <div class="dev-page-sidebar-collapse-icon">
                        <span class="line-one"></span>
                        <span class="line-two"></span>
                        <span class="line-three"></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- ./page header -->

    <!-- page container -->
        <div class="dev-page-container">

        @include('layouts.backend.header')

    <!-- page content -->
        <div class="dev-page-content">
            <!-- page content container -->
            <div class="container">

                <!-- page title -->
                <div class="page-title">
                    <h1>{{ $page_title }}</h1>

                    <ul class="breadcrumb">
                        <li><a href="{{route('dashboard.index')}}">Dashboard</a></li>
                        <li>{{$page_title}}</li>
                    </ul>
                </div>
                <!-- ./page title -->

                @stack('main')


                <div class="wrapper wrapper-white">
                    <div class="row">
                        @stack('content')
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.backend.footer')
</div>

<!-- javascript -->
<script type="text/javascript" src="{{asset('assets/backend/js/plugins/bootstrap/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/backend/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/backend/js/plugins/moment/moment.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/backend/js/plugins/knob/jquery.knob.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/backend/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/backend/js/plugins/bootstrap-select/bootstrap-select.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/backend/js/plugins/nvd3/d3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/backend/js/plugins/nvd3/nv.d3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/backend/js/plugins/nvd3/lib/stream_layers.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/backend/js/plugins/waypoint/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/backend/js/plugins/counter/jquery.counterup.min.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/backend/js/dev-settings.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/backend/js/dev-loaders.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/backend/js/dev-layout-default.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/backend/js/demo.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/backend/js/dev-app.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/backend/js/demo-dashboard.js')}}"></script>
<!-- ./javascript -->
</body>
</html>
