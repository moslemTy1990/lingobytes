<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'lInGoByTeS') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    {{--        //////////////////////////////////////////////////////////--}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-jvectormap-2.0.3.css')}}">
    <link rel="stylesheet" href="{{asset('css/notika-custom-icon.css')}}">
    <link rel="stylesheet" href="{{asset('css/waves.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <script src="{{asset('js/modernizr-2.8.3.min.js')}}"></script>
    {{--/////////////////////////////////////////////////////////////////--}}

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    @livewire('navigation-dropdown')

    <!-- Page Heading -->

    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Dashboard</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.html">Status</a>
                                        </li>
                                        <li><a href="index-3.html">Completed Course</a>
                                        </li>
                                        <li><a href="index-4.html">Failed Course</a></li>
                                        </li>
                                        <li><a href="analytics.html">Assessment Tests</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Class</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="normal-table.html">Ongoing Classes</a>
                                        </li>
                                        <li><a href="data-table.html">Tests</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">invoice</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="animations.html">cart</a> </li>
                                        <li><a href="data-map.html">successful Transactions</a>
                                        </li>
                                        <li><a href="code-editor.html">Failed Transactions</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Courses</a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="flot-charts.html">New courses</a>
                                        </li>
                                        <li><a href="bar-charts.html">Archived</a>
                                        </li>
                                        <li><a href="line-charts.html">All courses</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Email</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="inbox.html">Inbox</a>
                                        </li>
                                        <li><a href="view-email.html">View Email</a>
                                        </li>
                                        <li><a href="compose-email.html">Compose Email</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Podcasts</a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="form-elements.html">Weekly Podcast</a>
                                        </li>
                                        <li><a href="form-components.html">All Podcasts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Help</a>
                                    <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                        <li><a href="contact.html">Web Guide</a>
                                        </li>
                                        <li><a href="invoice.html">Contact us</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->

    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="{{ Route::IS('dashboard') ? 'active' : ''}}"><a href="{{route('dashboard')}}"><i class="notika-icon notika-house"></i> Dashboard</a>
                        </li>
                        <li class="{{ Route::IS('student.class') ? 'active' : ''}}"><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> Class</a>
                        </li>
                        <li class="{{ Route::IS('student.cart') ? 'active' : ''}}"><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> invoice</a>
                        </li>
                        <li class="{{ Route::IS('student.courses') ? 'active' : ''}}"><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-bar-chart"></i> Courses</a>
                        </li>
                        <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-mail"></i> Email</a>
                        </li>
                        <li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-form"></i> Podcasts</a>
                        </li>
                       <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i> Help</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
{{--                        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">--}}
{{--                            <ul class="notika-main-menu-dropdown">--}}
{{--                                <li><a href="{{route('dashboard')}}">Status</a>--}}
{{--                                </li>--}}
{{--                                <li><a href="index-3.html">Completed Course</a>--}}
{{--                                </li>--}}
{{--                                <li><a href="index-4.html">Failed Course</a></li>--}}
{{--                                </li>--}}
{{--                                <li><a href="analytics.html">Assessment Tests</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="inbox.html">Inbox</a>
                                </li>
                                <li><a href="view-email.html">View Email</a>
                                </li>
                                <li><a href="compose-email.html">Compose Email</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX {{ Route::IS('student.cart') ? 'in active' : ''}}">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{route('student.cart')}}">Cart</a> </li>
                                <li><a href="data-map.html">successful Transactions</a>
                                </li>
                                <li><a href="code-editor.html">Failed Transactions</a>
                                </li>
                            </ul>
                        </div>

                        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX {{ Route::IS('student.courses') ? 'in active' : ''}}">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{route('student.courses')}}">New courses</a>
                                </li>
                                <li><a href="bar-charts.html">Archived</a>
                                </li>
                                <li><a href="line-charts.html">All courses</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX {{ Route::IS('student.class') ? 'in active' : ''}}">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{route('student.class')}}">Ongoing Classes</a>
                                </li>
                                <li><a href="data-table.html">Tests</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="form-elements.html">Weekly Podcast</a>
                                </li>
                                <li><a href="form-components.html">All Podcasts</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="contact.html">Web Guide</a>
                                </li>
                                <li><a href="invoice.html">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>


    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018
                            . All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stack('modals')

@livewireScripts
{{--    ///////////////////////////////////////////////--}}

<script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
{{--        to check J q--}}
<!-- bootstrap JS
            ============================================ -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- wow JS
    ============================================ -->
<script src="{{asset('js/wow.min.js')}}"></script>
<!-- price-slider JS
    ============================================ -->
<script src="{{asset('js/jquery-price-slider.js')}}"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{asset('js/jquery.meanmenu.js')}}"></script>
<!-- counterup JS
    ============================================ -->
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/counterup-active.js')}}"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<!-- sparkline JS
    ============================================ -->
<script src="{{asset('js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('js/sparkline-active.js')}}"></script>
<!-- sparkline JS
    ============================================ -->
<script src="{{asset('js/jquery.flot.js')}}"></script>
<script src="{{asset('js/jquery.flot.resize.js')}}"></script>
<script src="{{asset('js/curvedLines.js')}}"></script>
<script src="{{asset('js/flot-active.js')}}"></script>
<!-- knob JS
    ============================================ -->
<script src="{{asset('js/jquery.knob.js')}}"></script>
<script src="{{asset('js/jquery.appear.js')}}"></script>
<script src="{{asset('js/knob-active.js')}}"></script>
<!--  wave JS
    ============================================ -->
<script src="{{asset('js/waves.min.js')}}"></script>
<script src="{{asset('js/wave-active.js')}}"></script>

<script src="{{asset('js/jquery.todo.js')}}"></script>
<!-- plugins JS
    ============================================ -->
<script src="{{asset('js/plugins.js')}}"></script>
<!--  Chat JS
    ============================================ -->
<script src="{{asset('js/moment.min.js')}}"></script>
<script src="{{asset('js/jquery.chat.js')}}"></script>
<!-- main JS
    ============================================ -->
<script src="{{asset('js/main.js')}}"></script>
<!-- tawk chat JS
    ============================================ -->
<script src="{{asset('js/tawk-chat.js')}}"></script>
{{--    ///////////////////////////////////////////////--}}
</body>
</html>
