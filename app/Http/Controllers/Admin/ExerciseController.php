<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ExerciseController extends Controller
{
    public function index($id)
    {
        $course=auth()->guard('web')->user()->courses()->findOrFail($id);
        $course->load('questions');
        return view('admin.pages.add-exercise',compact('course'));
    }
    public function store(Request $request,$id)
    {
        $course=auth()->guard('web')->user()->courses()->findOrFail($id);
        $validated= $request->validate([
            'exercise_type' => ['required'],
            'title' => ['required','string'],
            'question_type' => ['required',Rule::in(['text','multiple','voice'])],
            //TODO PHP INI FILE SIZE
            'voiceInput'=>['required_if:question_type,voice','mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav'],
            'value'=>['required_if:question_type,multiple'],
            'answer_type'=>['required',Rule::in(['text','voice'])],
            'correct_answer'=>['required_if:answer_type,text'],
        ]);

        $path = null;
        if($validated['question_type']=='voice'){
            $path = Storage::disk('public')->put('podcasts',$validated['voiceInput']);
        }

        $course->questions()->create([
                'exercise_type'=>$validated['exercise_type'],
                'title'=>$validated['title'],
                'question_type'=>$validated['question_type'],
                'value'=> $validated['question_type'] == 'multiple' ? $validated['value'] : $path,
                'answer_type'=>$validated['answer_type'],
                'correct_answer'=>$validated['correct_answer'],
            ]);

        return back();
    }
}
