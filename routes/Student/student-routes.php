<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\Student\ClassController;
use App\Http\Controllers\Student\CourseController;
use App\Http\Controllers\Student\InvoiceController;
use Illuminate\Support\Facades\Route;
//Student Routes once the Student is logged in.

Route::get('/dashboard', function () { return view('dashboard');  })->name('dashboard');


Route::get('/courses', [CourseController::class , 'index'])->name('student.courses');
Route::get('/cart', [InvoiceController::class , 'index'])->name('student.cart');

Route::get('/classes', [ClassController::class , 'index'])->name('student.class');
