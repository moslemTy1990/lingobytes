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
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>183</td>
                                <td>.......</td>
                                <td>John</td>
                                <td>shima@gmail.com</td>
                                <td>001253652485</td>
                                <td>M</td>
                                <td>23</td>
                                <td>Active</td>
                                <td>Starter</td>
                                <td>11-7-2014</td>
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
