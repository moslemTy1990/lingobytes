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
                                    <input class="custom-control-input" type="radio" id="Radio2"
                                           name="exercise_type" checked>
                                    <label for="Radio2" class="custom-control-label">Online Exercise</label>
                                </div>
                            </div>
                        </div>
                        <div class="justify-content-around">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="Radio1"
                                           name="exercise_type">
                                    <label for="Radio1" class="custom-control-label">Home Work</label>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- 2nd row --}}
                    <div class="row">
                        {{-- question title --}}
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                                       required autofocus value="{{old('title')}}">
                                @error('title')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                        {{--QUESTION TYPE --}}
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select class="form-control" style="width: 100%;" required name="type" id="type">
                                    <option selected="selected" value="text">Text</option>
                                    <option value="multiple">Multiple</option>
                                    <option value="voice">Voice</option>
                                </select>
                            </div>
                        </div>

                        {{--parrent --}}
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="parent">Parent</label>
                                <input type="number" class="form-control" id="parent" name="parent" placeholder="Parent"
                                       value="{{old('parent')}}">
                                @error('parent')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row" id="htmlForQtype">

                    </div>
                    {{-- 3rd row --}}
                    <div class="row">
                        {{--QUESTION TYPE --}}
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="ans_type">Answer Type</label>
                                <select class="form-control" style="width: 100%;" required name="ans_type"
                                        id="ans_type">
                                    <option selected="selected" value="text">Text</option>
                                    <option value="multiple">Multiple</option>
                                    <option value="voice">Voice</option>
                                </select>
                            </div>
                        </div>
                        {{-- correct andwer --}}
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="answer">Correct answer</label>
                                <input type="text" class="form-control" id="answer" name="answer"
                                       placeholder="Answer if needed" value="{{old('answer')}}">
                                @error('answer')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
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

@section('scripts')
    <script src="{{asset('js/questioninput.js')}}"></script>
@stop
