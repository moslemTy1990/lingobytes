<?php

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

//Routs fot showing the admin panel and doing the login
Route::get('/login', [AdminController::class, 'index'])->name('admin-login');
Route::Post('/', [AdminController::class,'checkAdmin'])->name('admin-page');


//Admin Routes once the admin is logged in.
Route::group(['middleware' => 'admin'], function () {
    // Routes for admin dashboard and logout
    Route::get('/', [AdminController::class,'show'])->name('admin-dashboard');
    Route::get('/logout', [AdminController::class,'destroy'])->name('admin-logout');

    // Teacher related routes
    Route::get('/teacher', [TeacherController::class,'index'])->name('teacher');
    Route::post('/teacher', [TeacherController::class,'create'])->name('add-teacher');
    Route::get('/teacher/{id}', [TeacherController::class,'delete'])->name('delete-teacher');
    Route::get('/toggle-status/{id}', [TeacherController::class,'teacherUpdate'])->name('toggle-status');

    // Student related routes
    Route::get('/student', [StudentController::class,'index'])->name('admin-student');


    // Course related routes
    Route::get('/courses', [CourseController::class,'index'])->name('courses');
    Route::post('/courses', [CourseController::class,'index'])->name('add-course');








    });

