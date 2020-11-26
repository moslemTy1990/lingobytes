<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|w
*/

Route::get('/', function () {
   return view('welcome');
});



//admin routes
Route::get('/admin-login', [AdminController::class, 'index'])->name('admin-login');
Route::Post('/admin', [AdminController::class,'show'])->name('admin-page');
Route::get('/admin/logout', [AdminController::class,'destroy'])->name('admin-logout');





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
