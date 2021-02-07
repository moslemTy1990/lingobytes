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
    {{--//////////////////////////////////////////////////////////--}}
    <nav x-data="{ open: false }" class="header-top-area border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">

                        <div class="flex-shrink-0 flex items-center">
                            @auth
                            <a href="{{ route('dashboard') }}"><x-jet-application-mark class="block h-9 w-auto"/></a>
                            @else
                                <x-jet-application-mark class="block h-9 w-auto"/>
                            @endif
                        </div>
                    </div>
                    <div class="space-x-8  sm:-my-px sm:ml-10 sm:flex inline-flex items-center px-1 pt-1 text-lg">
                        Lingobytes
                    </div>
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden-xs sm:flex sm:items-center sm:ml-6">
                    @auth
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                        <img class="h-8 w-8 rounded-full object-cover"
                                             src="{{ Auth::user()->profile_photo_url }}"
                                             alt="{{ Auth::user()->name }}"/>
                                    </button>
                                @else
                                    <button
                                        class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                    </button>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>


                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                                         onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                        {{ __('Logout') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login |</a>
                        <a href="{{ route('admin-login') }}" class="text-sm text-gray-700 underline">Admin Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                  stroke-linecap="round"
                                  stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-4 pb-1 border-t border-gray-200">
                     <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-jet-responsive-nav-link href="{{ route('admin-login') }}">
                        {{ __('admin-login') }}
                    </x-jet-responsive-nav-link>

                         <x-jet-responsive-nav-link href="{{ route('login') }}">
                             {{ __('login') }}
                         </x-jet-responsive-nav-link>

                        <x-jet-responsive-nav-link href="{{ route('register')  }}">
                            {{ __('register') }}
                        </x-jet-responsive-nav-link>
                    </form>

                </div>
            </div>



{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--              --}}
{{--                    <ul class="mobile-menu-nav">--}}
{{--                        <li><a href="{{ route('login') }}" class="text-sm underline">Login </a></li>--}}
{{--                        <li><a href="{{ route('admin-login') }}" class="text-sm  underline">Admin Login</a></li>--}}
{{--                        <li>@if (Route::has('register'))--}}
{{--                                <a href="{{ route('register') }}" class="text-sm underline">Register</a>--}}
{{--                            @endif</li>--}}
{{--                    </ul>--}}
{{--                --}}
{{--                </div>--}}
{{--           --}}
{{--            </div>--}}

        </div>
    </nav>
{{--//////////////////////////////////////////////////////////--}}
<!-- Page Heading -->

    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Podcasts</a></li>
                                <li><a href="#">Help | About us</a></li>
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
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 float-right">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a href="#"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <li><a href="#"><i class="notika-icon notika-bar-chart"></i> Courses</a></li>
                        <li><a href="#"><i class="notika-icon notika-form"></i> Podcasts</a>
                        </li>
                        <li><a href="#"><i class="notika-icon notika-support"></i> Help | About us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Page Content -->
    <main>
        <div class="container">
            <div class="mt-4 row">
                @foreach($courses as $course)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-3">
                        <div class="animation-single-int bg-white rounded">
                            <div class="animation-ctn-hd">
                                <h2>{{$course->name}}</h2>
                                <p class="mt-4">{{$course->brief}}</p>
                            </div>
                            <div class="animation-img mg-b-15">
                                <img class="animate-one img-circle" src="storage/{{$course->course_logo}}" alt=""/>
                            </div>
                            <div class="text-center">
                                {{$course->price}} T
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="animation-btn">
                                        <button class="btn bg-info btn-reco-mg btn-button-mg">Buy</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </main>

    <!-- Start Footer area-->
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


<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login |</a>
                <a href="{{ route('admin-login') }}" class="text-sm text-gray-700 underline">Admin Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endif
        </div>

    @endif

</div>
{
