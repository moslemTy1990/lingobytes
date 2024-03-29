<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\Student\CartController;
use App\Http\Controllers\Student\ClassController;
use App\Http\Controllers\Student\CourseController;
use Illuminate\Support\Facades\Route;
//Student Routes once the Student is logged in.

Route::get('/dashboard', function () { return view('dashboard');  })->name('dashboard');


Route::get('/courses', [CourseController::class , 'index'])->name('student.courses');



Route::get('/cart', [CartController::class , 'index'])->name('student.cart');
Route::post('/cart/{course}', [CartController::class,'store'])->name('cart.course');


Route::get('/classes', [ClassController::class , 'index'])->name('student.class');



