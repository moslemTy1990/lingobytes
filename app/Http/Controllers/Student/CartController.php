<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('student.cart');
    }

    public function store(Course $course)
    {

    }
}
