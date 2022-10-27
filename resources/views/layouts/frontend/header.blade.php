<header class="main-header main-header--one  clearfix">
    <div class="main-header--one__wrapper">
        <div class="main-header--one__top clearfix">
            <div class="auto-container">

                <div class="main-header--one__top-left">
                    <div class="text">
                        <p>Welcome to {{ config('app.name') }}</p>
                    </div>
                </div>

                <div class="main-header--one__top-right clearfix">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="text">
                                <p><a href="mailto:{{get_settings('official_email')}}">{{get_settings('official_email')}}</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="main-header--one__bottom clearfix">
            <div class="auto-container">
                <div class="main-header--one__bottom-inner">
                    <nav class="main-menu main-menu--1">
                        <div class="main-menu__inner">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                            <div class="stricky-one-logo">
                                <div class="logo">
                                    <a href="{{url('/')}}">
                                        <img class="dark-logo" src="{{asset('assets/images/resources/logo-1.png')}}" style="width: 120px; height: 60px"  alt="">
                                        <img class="light-logo" src="{{asset('assets/images/resources/logo-2.png')}}" style="width: 120px; height: 60px"  alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="main-header--one__bottom-left">
                                <ul class="main-menu__list">
                                    <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                                    <li><a href="{{route('farmer.create')}}">Farmer Registration</a></li>
                                    <li><a href="{{route('farmer.index')}}">Check Status</a></li>
                                    <li><a href="{{route('contact-us.index')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <div class="main-header--one__bottom-middel">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img class="dark-logo" src="{{asset('assets/images/resources/logo-1.png')}}"  style="width: 120px; height: 60px" alt="">
                                <img class="light-logo" src="{{asset('assets/images/resources/logo-2.png')}}"  style="width: 120px; height: 60px" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="main-header--one__bottom-right clearfix">
                        <div class="contact-box">
                            <div class="icon">
                                <span class="icon-phone-call-2"></span>
                            </div>
                            <div class="text">
                                <p>Call Anytime</p>
                                <a href="tel:{{get_settings('office_contact')}}">{{get_settings('office_contact')}}</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</header>
