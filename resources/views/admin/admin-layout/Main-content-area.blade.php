@extends('admin.admin-layout.main-Layout')
@section('body-content')
    <div class="wrapper">
        <!-- navbar -->
        @include('admin.admin-layout.admin-navbar')
        <!-- End navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.admin-layout.admin-sidebar')
        <!-- Main Sidebar Container -->

        {{-- main content of the page--}}
            @yield('page-content')
        {{-- content-wrapper --}}

        @include('admin.admin-layout.admin-footer')
    </div>
@endsection
