<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseMaterial extends Controller
{
    public function index($id)
    {
        $course =auth()->guard('web')->user()->courses()->findOrFail($id);
        $course->load('materials');
        return view('admin.pages.add-material',compact('course'));
    }

    public function store(Request $request,$id)
    {
//TODO the validation
        $validate = $request->validate(
            [
                'path' => ['required:filepath','unique:course_materials']
            ]);

       $course= auth()->guard('web')->user()->courses()->findOrFail($id);
        $course->materials()->create(array_merge($validate,[
            'user_id'=>$course->user_id
        ]));
        return back();
    }
}
