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
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                   placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="Familyname">Family name</label>
                            <input type="text" class="form-control" name="familyname" id="Familyname"
                                   placeholder="Family Name">
                        </div>
                        <div class="form-group">
                            <label for="password-confirmed">Password confirmation</label>
                            <input type="password" class="form-control" name="password-confirmed"
                                   id="password-confirmed"
                                   placeholder="Password Confirmation">
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Profile photo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer"></div>
        </div>
    </div>

@endsection
