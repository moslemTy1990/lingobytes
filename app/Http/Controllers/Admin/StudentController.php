<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(){
        $students = Student::all();
        return view('admin.pages.student',compact('students'));
    }

    function delete(Student $student){
        if($student->profile_photo_path && file_exists(public_path() . '/storage/' . $student->profile_photo_path))
        {
            unlink(public_path() . '/storage/' . $student->profile_photo_path);
            $student->delete();
            //  Session::flash('deleted_user','The user has been deleted');
            return back();
        } else
        {
            $student->delete();
            // Session::flash('deleted_user','The user has been deleted');
            return back();
        } }

}
