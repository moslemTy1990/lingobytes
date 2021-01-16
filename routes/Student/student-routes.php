<?php

use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ExerciseController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\Admin\CourseMaterial;
use Illuminate\Support\Facades\Route;
//Student Routes once the Student is logged in.
Route::group(['middleware' => 'auth:student','verified'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

