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
                        <div class="col-md-3">
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
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="reg-deadline">Registration Deadline</label>
                                <input type="datetime-local" class="form-control" id="reg-deadline"
                                       name="registration_deadline" value="{{old('registration_deadline')}}" required>
                                @error('registration_deadline')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                        {{--Start Date--}}
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="start-date">Start Date</label>
                                <input type="datetime-local" class="form-control" id="start-date" name="start_date" value="{{old('start_date')}}" required>
                                @error('start_date')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                        {{-- End Date --}}
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="end-date">End Date</label>
                                <input type="datetime-local" class="form-control" id="end-date" name="end_date" value="{{old('end_date')}}" required>
                                @error('end_date')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- 2ns row of inputs   --}}
                    <div class="row">
                        {{-- Course berief description --}}
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="brief">Short Description</label>
                                <input type="text" class="form-control" id="brief" name="brief" placeholder="Brief Description"
                                       required autofocus value="{{old('brief')}}">
                                @error('brief')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                        {{-- level --}}
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="level">Level of the course</label>
                                <input type="text" class="form-control" id="level" name="level" placeholder="Course Level"
                                       required autofocus value="{{old('level')}}">
                                @error('level')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                        {{--price--}}
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="price">Course Price</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="Price"
                                       required autofocus value="{{old('price')}}">
                                @error('price')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                        {{-- course_logo --}}
                        <div class="col-md-3">

                            <div class="form-group">
                                <label for="course_logo">Logo</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="course_logo" name="course_logo">
                                    <label class="custom-file-label" for="course_logo">Choose Course Logo</label>
                                    @error('course_logo')
                                    <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- 4th row of inputs  DESCRIPTION --}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Description
                                    </h3>
                                    <!-- tools box -->
                                    <div class="card-tools bg-gradient-gray">
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                                title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pad">
                                    <div class="mb-3">
                                        <textarea class="textarea" placeholder="Place some text here" name="description"
                                             style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" >{{old('description')}}</textarea>
                                        @error('description')
                                        <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>

                    {{-- 5th row of inputs Bottons   --}}
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
                        <table class="table table-hover text-nowrap text-center">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Logo</th>
                                <th>Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Registration Deadline</th>
                                <th>Level</th>
                                <th>Price</th>
                                <th>Material</th>
                                <th>Exercise</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td>
                                        @if($course->course_logo)
                                            <img src="{{asset('storage/'.$course->course_logo)}}"
                                                 class="rounded" alt="User Image" width="25">
                                        @endif
                                    </td>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->start_date }}</td>
                                    <td>{{ $course->end_date }}</td>
                                    <td>{{ $course->registration_deadline }}</td>
                                    <td>{{ $course->level }}</td>
                                    <td>{{ $course->price }}</td>
                                    <td>
                                        <a href="{{route('material', $course->id)}}" class="btn btn-success btn-s">Add</a>
                                        <a href="#" class="btn btn-info btn-s" data-toggle="modal"
                                           data-target="#show_material">View</a>
                                    </td>
                                    <td><a href="{{route('exercise', $course->id)}}" class="btn btn-outline-success btn-s">Add</a></td>

                                    <td>
                                        <a href="#" class="btn btn-outline-info btn-s">Edit</a>
                                        <a href="#" class="btn btn-outline-warning btn-s">De-Activate</a>
                                        <a href="#" class="btn btn-outline-danger btn-s">Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        {{--View Material on the course page--}}
                        <div class="modal fade" id="show_material" tabindex="-1" role="dialog"
                             aria-labelledby="show_material" aria-hidden="true">
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
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
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
@section('scripts')
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
@stop
