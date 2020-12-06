@extends('admin.admin-layout.Main-content-area')
@section('page-content')
    <div class="content-wrapper">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header bg-gradient-gray">
                <h1 class="card-title">Teacher Registration</h1>
                <div class="card-tools">
                    <button type="button" class="btn btn-sm btn-secondary" data-card-widget="collapse"><i
                            class="fas fa-minus"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('add-teacher')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Enter email" required value="{{old('email')}}">
                                @error('email')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="photoInput">Profile photo</label>
                                <div class="input-group">
                                    {{--                                    <div class="custom-file">--}}
                                    <input type="file" class="form-control-file" id="photoInput" name="photoInput" value="{{old('photoInput')}}">
                                    {{--                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>--}}
                                    {{--                                    </div>--}}
                                    @error('photoInput')
                                    <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 mt-2">
                                    <button type="reset" class="btn btn-outline-secondary mr-3">Secondary</button>
                                    <button type="submit" class="btn btn-outline-success">Success</button>
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
    </div>

@endsection
