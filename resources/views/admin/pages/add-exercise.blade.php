@extends('admin.admin-layout.Main-content-area')
@section('page-content')
    <div class="content-wrapper">
        <!-- general form elements -->
        <div class="card card-primary ">
            <div class="card-header bg-gradient-gray ">
                <h1 class="card-title">Exercise</h1>
                <div class="card-tools">
                    <button type="button" class="btn btn-sm btn-secondary " data-card-widget="collapse"><i
                            class="fas fa-minus"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- first row of inputs   --}}
                    <div class="row justify-content-around">
                        <div class="justify-content-around">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio2"
                                           name="customRadio" checked>
                                    <label for="customRadio2" class="custom-control-label">Online Exercise</label>
                                </div>
                            </div>
                        </div>
                        <div class="justify-content-around">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio1"
                                           name="customRadio">
                                    <label for="customRadio1" class="custom-control-label">Home Work</label>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- 4th row of inputs   --}}
                    <div class="row justify-content-center">
                        {{-- bottuns --}}
                        <div class="col-md-4">
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
    </div>
@endsection
