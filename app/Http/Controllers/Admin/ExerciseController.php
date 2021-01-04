<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ExerciseController extends Controller
{

    public function index($id)
    {
        $course=Course::findOrFail($id);
        return view('admin.pages.add-exercise',compact('course'));
    }
    public function store(Request $request)
    {
        $validated= $request->validate([
            'exercise_type' => ['required'],
            'title' => ['required','string'],
            'type' => ['required',Rule::in(['text','multiple','voice'])],

            'voiceInput'=>['required_if:type,voice','mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav'],
            'choices'=>['required_if:type,multiple'],

            'ans_type'=>['required',Rule::in(['text','multiple','voice'])],
            'answer'=>['required_if:ans_type,text','required_if:ans_type,multiple'],
        ]);
      //  return $request;
    }
}
