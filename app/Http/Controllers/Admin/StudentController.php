<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(){
        $students = User::where('role','student')->get();
        return view('admin.pages.student',compact('students'));
    }
}
