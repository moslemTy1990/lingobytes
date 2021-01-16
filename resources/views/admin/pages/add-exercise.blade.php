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
                <form action="{{route('store-exercise',$course->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- first row of inputs   --}}
                    <div class="row justify-content-around">
                        <div class="justify-content-around">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="Radio2"
                                           name="exercise_type" value="class" checked>

                                    <label for="Radio2" class="custom-control-label">Online Exercise</label>
                                </div>
                            </div>
                        </div>
                        <div class="justify-content-around">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="Radio1"
                                           name="exercise_type" value="home">

                                    <label for="Radio1" class="custom-control-label">Home Work</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    @error('exercise_type')
                    <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                    @enderror
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
                                <label for="question_type">Type</label>
                                <select class="form-control" style="width: 100%;" required name="question_type" id="question_type">
                                    <option selected="selected" value="text">Text</option>
                                    <option value="multiple">Multiple</option>
                                    <option value="voice">Voice</option>
                                </select>
                                @error('question_type')
                                <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                                @enderror
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
                    @error('voiceInput')
                    <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                    @enderror
                    @error('choices')
                    <p class="text-red-500 text-xs mt-2 text-danger"> {{$message}} </p>
                    @enderror

                    {{-- 3rd row --}}
                    <div class="row">
                        {{--QUESTION TYPE --}}
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="answer_type">Answer Type</label>
                                <select class="form-control" style="width: 100%;" required name="answer_type"
                                        id="answer_type">
                                    <option selected="selected" value="text">Text</option>
                                    <option value="voice">Voice</option>
                                </select>
                            </div>
                        </div>
                        {{-- correct andwer --}}
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="correct_answer">Correct answer</label>
                                <input type="text" class="form-control" id="correct_answer" name="correct_answer"
                                       placeholder="Answer if needed" value="{{old('correct_answer')}}">
                                @error('correct_answer')
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

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-gradient-gray ">
                        <h3 class="card-title">Questions related to ................. course name</h3>
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
                                <th>Title</th>
                                <th>Course Name</th>
                                <th>Exercise Type</th>
                                <th>Question Type</th>
                                <th>Answer Type</th>
                                <th>Value</th>
                                <th>Correct Answer</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($course->questions as $question)
                               <tr>
                                    <td>{{$question->id}}</td>
                                    <td>{{$question->title}}</td>
                                   <td>{{$course->name}}</td>
                                    <td>{{$question->exercise_type}}</td>
                                    <td>{{$question->question_type}}</td>
                                    <td>{{$question->answer_type}}</td>
                                    <td class="text-center">
                                        <ul class="{{$question->question_type=='text' ? '': 'list-group list-group-horizontal-sm'}}">
                                            @if($question->question_type == 'text')
                                                {{$question->value}}
                                            @elseif($question->question_type == 'voice')
                                                <li class="list-group-item">{{$question->value}}</li>
                                            @else()
                                            @foreach ($question['value'] as $value)
                                                <li class="list-group-item">{{$value}}</li>
                                            @endforeach
                                            @endif
                                        </ul>

                                       </td>
                                    <td>{{$question->correct_answer}}</td>

                                    <td>
                                        <a href="#" class="btn btn-outline-info btn-s">Edit</a>
                                        <a href="#" class="btn btn-outline-danger btn-s">Delete</a>
                                    </td>
                                </tr>
                               @endforeach()

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
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/questioninput.js')}}"></script>
@stop
