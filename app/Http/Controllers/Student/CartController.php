<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('student.cart');
    }

    public function store(Course $course)
    {
        //TODO if we add another times, the order is aded to the cart without considering if it exist or no.
        $student = auth()->guard('student')->user();
       // $student->carts()->where('course_id' , $course->id )->get();
        $student->carts()->create([
            'course_id'=>$course->id,
            'price'=>$course->price,
        ]);
        return  back();

            }
}
