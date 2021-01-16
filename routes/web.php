<?php

use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class,'index'])->name('welcome');

//admin routes file
Route::prefix('admin')->group(base_path('routes/Admin/admin-routes.php'));

//student routes file
Route::prefix('student')->group(base_path('routes/Student/student-routes.php'));


//TODO
/*
 * GUEST middleware for admin
 * CSRF for loqout
 * Web Pack
 * ENUM creation for user types
 * TokenBased Auth
 * when doing the admin login from user login page, there is no information about the errors
 * TODO course
 * picture
 * price
 * brief
 * level
 *
 * */
