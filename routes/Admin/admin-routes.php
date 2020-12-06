<?php

use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AdminController::class, 'index'])->name('admin-login');
Route::Post('/', [AdminController::class,'checkAdmin'])->name('admin-page');


//Admin Routes once the admin is logged in.
Route::group(['middleware' => 'admin'], function () {

    Route::get('/', [AdminController::class,'show'])->name('admin-dashboard');
    Route::get('/logout', [AdminController::class,'destroy'])->name('admin-logout');

    Route::get('/teacher', [TeacherController::class,'index'])->name('admin-teacher');

    Route::post('/teacher', [TeacherController::class,'create'])->name('add-teacher');






    Route::get('/student', [StudentController::class,'index'])->name('admin-student');

    });

