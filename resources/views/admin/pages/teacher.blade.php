@extends('admin.admin-layout.Main-content-area')
@section('page-content')
    <div class="content-wrapper">
        <!-- general form elements -->
        <div class="card card-primary ">
            <div class="card-header bg-gradient-gray ">
                <h1 class="card-title">Teacher Registration</h1>
                <div class="card-tools  ">
                    <button type="button" class="btn btn-sm btn-secondary " data-card-widget="collapse"><i
                            class="fas fa-minus"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('add-teacher')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- first row of inputs   --}}
                    <div class="row">
                        {{-- name --}}
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
                        {{-- user name --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="username">User name</label>
                                <input type="text" class="form-control" name="username" id="username"
                                       placeholder="User Name" value="{{old('username')}}">
                                @error('username')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                        {{-- email --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Email Address" required value="{{old('email')}}">
                                @error('email')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- second row of inputs   --}}
                    <div class="row">
                        {{-- phone number--}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="mobile">Phone number</label>
                                <input type="number" class="form-control" name="mobile"
                                       id="mobile"
                                       placeholder="Phone Number" required>
                                @error('mobile')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                        {{-- password --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password"
                                       placeholder="Enter Password" required>
                                @error('password')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                        {{-- password conf.--}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="password-confirm">Password confirmation</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                       id="password-confirm"
                                       placeholder="Password Confirmation" required>
                                @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- third row of inputs   --}}
                    <div class="row">
                        {{-- profile photo --}}
                        <div class="col-md-4">

                            <div class="form-group">
                             <label for="photoInput">Profile Photo</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="photoInput" name="photoInput">
                                    <label class="custom-file-label" for="photoInput">Choose Profile Photo</label>
                                    @error('photoInput')
                                    <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        {{-- bottuns --}}
                        <div class="col-md-4 mt-4 ml-5">
                            <div class="form-group">
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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-gradient-gray ">
                        <h3 class="card-title">Teachers</h3>

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
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Last Login</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)

                                <tr>
                                    <td>{{$teacher->id }}</td>
                                    <td>
                                        @if($teacher->profile_photo_path)
                                            <img src="{{asset('storage/'.$teacher->profile_photo_path)}}"
                                                 class="rounded" alt="User Image" width="25">
                                        @endif
                                    </td>
                                    <td>{{$teacher->name}}</td>
                                    <td>{{$teacher->email}}</td>
                                    <td>{{$teacher->status==1?'Active' : 'De-Active'}}</td>
                                    <td>{{$teacher->last_login}}</td>
                                    <td>
                                            <a href="#" class="btn btn-outline-info">Edit</a>
                                            <a href="{{route('activate-teacher', $teacher->id)}}"
                                               class="btn btn-outline-warning">{{$teacher->status == 1 ? 'De-Activate' : 'Activate'}}</a>
                                            <a href="{{route('delete-teacher', $teacher->id)}}"
                                               class="btn btn-outline-danger">Delete</a>
                                    </td>
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
        <!-- /.row -->


    </div>

@endsection
