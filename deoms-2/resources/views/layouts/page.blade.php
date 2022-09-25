<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" type="image/x-png" href="images/favicon.png">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>DEOMS | @yield('pageTitle')</title>


        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css')}}">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }} ">
        <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

        <link href="{{ asset('css/jquery.mb.YTPlayer.min.csss') }}" media="all" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <div class="py-2" style="background-color: #183661 !important;">
            <div class="container">
                <div class="row align-items-center">
                <div class="col-lg-9 d-none d-lg-block">
                    <!-- <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a>  -->
                    <a href="#" class="small mr-3" style="color:#ffffff !important;"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a> 
                    <a href="#" class="small mr-3" style="color:#ffffff !important;"><span class="icon-envelope-o mr-2"></span> deoms@gmail.com</a> 
                </div>
                <div class="col-lg-3 text-right">
                    <a href="login.html" class="small mr-3" style="color: #ffffff;"><span class="icon-unlock-alt"></span> Log In</a>
                    <!-- <a href="register.html" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a> -->
                </div>
                </div>
            </div>
        </div>
        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
            <div class="container">
                <div class="d-flex align-items-center">
                <div class="site-logo">
                    <a href="index.html" class="d-block">
                    <img src="images/deoms_web_logo_top.png" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="mr-auto">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li class="{{ Request::path() == '/' ? 'active' : '' }}">
                            <a href="{{ url('/') }}" class="nav-link text-left">Home</a>
                        </li>
                        <li class="{{ Request::is('our-school') ? 'active' : '' }} has-children">
                            <a href="#" class="nav-link text-left">About Us</a>
                            <ul class="dropdown">
                                <!-- <li><a href="teachers.html">Our Teachers</a></li> -->
                                <li><a href="{{ route('our-school') }}">Our School</a></li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="admissions.html" class="nav-link text-left">Admissions</a>
                        </li> -->
                        <li class="{{ Request::path() == 'programs' ? 'active' : '' }}">
                            <a href="{{ route('programs') }}" class="nav-link text-left">Programs</a>
                        </li>
                        <li class="{{ Request::path() == 'contact-us' ? 'active' : '' }}">
                            <a href="{{ route('contact-us') }}" class="nav-link text-left">Contact</a>
                        </li>
                    </ul>                                                                                                                                                                                                                                                                                          </ul>
                    </nav>

                </div>
                <div class="ml-auto">
                    <div class="social-wrap">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>

                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                        class="icon-menu h3"></span></a>
                    </div>
                </div>
                
                </div>
            </div>

        </header>
        <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url(' {{ asset('images/deoms_logo.jpg') }}' )">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                    <h2 class="mb-0">@yield('page-title')</h2>
                    <p>@yield('page_desc')</p>
                </div>
            </div>
            </div>
        </div> 
        <div class="custom-breadcrumns border-bottom">
            <div class="container">
                <a href="{{ url('/') }}">Home</a>
                <span class="mx-3 icon-keyboard_arrow_right"></span>
                <span class="current">@yield('page-title')</span>
            </div>
        </div>
        
        <div  id="app">
            @yield('content')
        </div>

        <div class="section-bg style-1" style="background-image: url('images/deoms_teachers.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                        <span class="icon flaticon-mortarboard"></span>
                        <h3>Our Philosphy</h3>
                        <p>
                        The Don Emilio Osmena School, Inc. in its collaborative efforts adopt the K-12 Curriculum using the 
                        MELC(Most Essential Learning Competence) aligned with the basic modality, the Modular Strategic Method
                        of Teaching. Despite the pandemic, Education goes on with the most important protocols and guideline to follow.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                        <span class="icon flaticon-school-material"></span>
                        <h3>School Goal</h3>
                        <ol class="ul-check primary list-unstyled">
                            <li><p>Attain the highest degree of excellence despite the pandemic<p></li>
                            <li><p>Assist and assess student's capabilities and academic performace through weekly evaluation and 
quarterly evaluation.</p></li>
                            <li><p>Extend remedial instructions to those who failed to achieve a 75% of proficiency level.</p></li>
                        </ol>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                        <span class="icon flaticon-library"></span>
                        <h3>School Objectives</h3>
                        <ol class="ul-check primary list-unstyled">
                            <li><p>Produce learners who are capable of accepting sudden educational changes.</p></li>
                            <li><p>Achieve the highest degree of excellence by producing graduates who are worthy to face present
and future global competence.</p></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="row">
                <div class="col-lg-4">
                    <p class="mb-4"><img src="images/deoms_web_logo.png" alt="Image" class="img-fluid"></p>
                    <p><span class="icon-envelope mr-2"></span> deoms@gmail.com</p>  
                    <p><span class="icon-phone2 mr-2"></span> 10 20 123 456</p>  
                </div>
                <div class="col-lg-4">
                    <h3 class="footer-heading"><span>Site Links</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('our-school')}}">Our School</a></li>
                        <li><a href="{{ route('programs') }}">Programs</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h3 class="footer-heading"><span>Follow Us</span></h3>
                    <div class="social-wrap">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- loader -->
        <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>
        
        <script src="{{ mix('js/app.js') }}"></script>

        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script> 
        <script src="{{ asset('js/main.js') }}"></script>

    </body>
</html>