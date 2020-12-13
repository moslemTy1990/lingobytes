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
                        {{-- Teacher ID --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="teacher-id">Teacher ID</label>
                                <select class="form-control">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                </select>
                                @error('teacher-id')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                        {{-- Registration Deadline --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="teacher-id">Registration Deadline</label>
                                <input type="datetime-local" class="form-control" id="birthday" name="birthday">
                                @error('teacher-id')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- second row of inputs   --}}
                    <div class="row">
                        {{--Start Date--}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="teacher-id">Start Date</label>
                                <input type="datetime-local" class="form-control" id="birthday" name="birthday">
                                @error('teacher-id')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                        {{-- End Date --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="teacher-id">End Date</label>
                                <input type="datetime-local" class="form-control" id="birthday" name="birthday">
                                @error('teacher-id')
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
                                <th>Teacher</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>183</td>
                                <td>IELTS Writing</td>
                                <td>12/08/2020</td>
                                <td>12/08/2021</td>
                                <td>12/09/2020</td>
                                <td>Shima Ghandi</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-outline-info">Edit</a>
                                        <a href="#" class="btn btn-outline-warning">De-Activate</a>
                                        <a href="#" class="btn btn-outline-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>

@endsection
