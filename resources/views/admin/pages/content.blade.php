@extends('admin.admin-layout.Main-content-area')
@section('styles')
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@stop
@section('page-content')
    <div class="content-wrapper">

        <div style="height: 600px;">
            <div id="fm"></div>
        </div>
    </div>

@stop
@section('scripts')
       <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@stop
