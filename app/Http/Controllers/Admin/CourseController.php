<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller {

    public function index()
    {
        $courses = auth()->guard('web')->user()->courses;
        return view('admin.pages.courses' , compact('courses'));
    }

    public function store(Request $request){

        $validated = $request->validate(
            [
                'name'=> ['required','max:25','min:4'],
                'registration_deadline'=>['date','required'],
                'start_date'=>['date','required','after:registration_deadline'],
                'end_date'=>['date','required','after:start_date'],
                'brief'=>['required','min:20','max:150'],
                'course_logo'=>['image'],
                'level'=>['required','string'],
                'price'=>['required','numeric'],
                'description'=>['required']
            ]);
        $path = null;
        if($validated['course_logo'] && request('course_logo')){
            $validated['course_logo']  = Storage::disk('public')->put('logos',$validated['course_logo']);
        }
         auth()->guard('web')->user()->courses()->create($validated);
         return back();
    }
}
