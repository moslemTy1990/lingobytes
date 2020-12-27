<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller {

    public function index()
    {
        $courses = auth()->guard('web')->user()->courses;
        return view('admin.pages.courses' , compact('courses'));
    }

    public function store(Request $request){

        $validate = $request->validate(
            [
                'name'=> ['required','max:12','min:4'],
                'registration_deadline'=>['date','required'],
                'start_date'=>['date','required','after:registration_deadline'],
                'end_date'=>['date','required','after:start_date'],
                'description'=>['required']
            ]);

         auth()->guard('web')->user()->courses()->create($validate);
         return back();
    }
}
