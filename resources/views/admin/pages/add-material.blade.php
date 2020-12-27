@extends('admin.admin-layout.Main-content-area')
@section('styles')
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@stop
@section('page-content')

    <div class="content-wrapper">
        <!-- /.File Manager-->
        <div style="height: 400px;">
            <div id="fm"></div>
            <!-- /.File Manager-->

        </div>
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add File to the course............. from the library</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="Post" action="{{route('add-material',$course->id)}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="filePath">File Path</label>
                                <input type="text" class="form-control" id="path" name="path"
                                       placeholder="Enter File Path" required>
                                @error('path')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->

        </div>
        {{-- Table --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-gradient-gray ">
                        <h3 class="card-title">Files assigned to this course</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                       placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID course</th>
                                <th>Course name</th>
                                <th>File ID</th>
                                <th>File Name</th>
                                <th>Type</th>
                                <th>Path</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($course->materials as $material)
                                <tr>
                                    <td>{{$course->id}}</td>
                                    <td>{{$course->name}}</td>
                                    <td></td>
                                    <td></td>
                                    <td>{{$material->type}}</td>
                                    <td>{{$material->path}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- /.card -->

    <!-- /.row -->



@stop
@section('scripts')
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@stop
