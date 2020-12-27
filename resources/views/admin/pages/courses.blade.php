@extends('admin.admin-layout.Main-content-area')
@section('page-content')
    <div class="content-wrapper">
        <!-- general form elements -->
        <div class="card card-primary ">
            <div class="card-header bg-gradient-gray ">
                <h1 class="card-title">Create New Course</h1>
                <div class="card-tools  ">
                    <button type="button" class="btn btn-sm btn-secondary " data-card-widget="collapse"><i
                            class="fas fa-minus"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('add-course')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- first row of inputs   --}}
                    <div class="row">
                        {{-- Course Name --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                       required autofocus value="{{old('name')}}">
                                @error('name')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                    {{-- Registration Deadline --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="reg-deadline">Registration Deadline</label>
                                <input type="datetime-local" class="form-control" id="reg-deadline" name="registration_deadline">
                                @error('registration_deadline')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                        {{--Start Date--}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="start-date">Start Date</label>
                                <input type="datetime-local" class="form-control" id="start-date" name="start_date">
                                @error('start_date')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- second row of inputs   --}}
                    <div class="row">

                        {{-- End Date --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="end-date">End Date</label>
                                <input type="datetime-local" class="form-control" id="end-date" name="end_date">
                                @error('end_date')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- third row of inputs   --}}
                    <div class="row justify-content-center">

                        {{-- bottuns --}}
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-sm-10 mt-2">
                                    <button type="reset" class="btn btn-outline-secondary mr-3">Clear</button>
                                    <button type="submit" class="btn btn-outline-success">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                {{--end of the form--}}
            </div>
            <!-- /.card-body -->
            <div class="card-footer"></div>
        </div>
        <!-- /.row -->
        {{-- Table --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-gradient-gray ">
                        <h3 class="card-title">Courses</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                       placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Registration Deadline</th>
                                <th>Material</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->start_date }}</td>
                                    <td>{{ $course->end_date }}</td>
                                    <td>{{ $course->registration_deadline }}</td>
                                    <td>
                                        <a href="{{route('material', $course->id)}}" class="btn btn-success btn-s">Add Material</a>
                                        <a href="#" class="btn btn-default btn-s" data-toggle="modal" data-target="#add_material">Browse</a>
                                        <a href="#" class="btn btn-info btn-s" data-toggle="modal" data-target="#show_material">View</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-outline-info btn-s">Edit</a>
                                        <a href="#" class="btn btn-outline-warning btn-s">De-Activate</a>
                                        <a href="#" class="btn btn-outline-danger btn-s">Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>



                        <div class="modal fade" id="add_material" tabindex="-1" role="dialog" aria-labelledby="add_material" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    {{-- HEADER--}}
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addModalLabel">Import Material</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    {{-- /HEADER--}}

                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="photoInput">Profile photo</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control-file" id="photoInput" name="photoInput">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="show_material" tabindex="-1" role="dialog" aria-labelledby="show_material" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    {{-- HEADER--}}
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="showModalLabel">Materials</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    {{-- /HEADER--}}

                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
