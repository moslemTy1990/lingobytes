<?php

use App\Http\Controllers\Admin\ContentController;
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
    Route::get('/teacher', [TeacherController::class,'index'])->name('admin-teacher');
    Route::post('/teacher', [TeacherController::class,'create'])->name('add-teacher');
    Route::get('/teacher/{id}', [TeacherController::class,'delete'])->name('delete-teacher');
    Route::get('/toggle-teacher-status/{id}', [TeacherController::class,'teacherStatusUpdate'])->name('activate-teacher');

    // Student related routes
    Route::get('/student', [StudentController::class,'index'])->name('admin-student');
    Route::get('/student/{id}', [StudentController::class,'delete'])->name('delete-student');
    Route::get('/toggle-student-status/{id}', [StudentController::class,'studentStatusUpdate'])->name('activate-student');


    // Course related routes
    Route::get('/courses', [CourseController::class,'index'])->name('courses');
    Route::post('/courses', [CourseController::class,'index'])->name('add-course');

// content routes
    Route::get('/content', [ContentController::class,'index'])->name('contents');






    });

