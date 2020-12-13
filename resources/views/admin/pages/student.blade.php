@extends('admin.admin-layout.Main-content-area')
@section('page-content')

    <div class="content-wrapper">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-gradient-gray ">
                        <h3 class="card-title">Students</h3>

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
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Status</th>
                                <th>Level</th>
                                <th>Last Login</th>
                                <th>Registration Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>
                                        @if($student->profile_photo_path)
                                            <img src="{{asset('storage/'.$student->profile_photo_path)}}" class="rounded" alt="User Image" width="25">
                                        @endif
                                    </td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->gender}}</td>
                                    <td>{{$student->age}}</td>
                                    <td>{{$student->status}}</td>
                                    <td>..................</td>
                                    <td>........</td>
                                    <td>{{$student->created_at}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-outline-info">Edit</a>
                                            <a href="#" class="btn btn-outline-warning">De-Activate</a>
                                            <a href="#" class="btn btn-outline-danger">Delete</a>
                                        </div>
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
