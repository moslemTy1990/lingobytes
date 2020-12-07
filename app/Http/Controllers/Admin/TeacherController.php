<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Jetstream\HasProfilePhoto;

class TeacherController extends Controller
{
    use HasProfilePhoto;

    function index(){
        return view('admin.pages.teacher');
    }

  function create(Request $request){
      $validate = $request->validate(
          [
          'name' => ['required', 'string', 'max:255'],
          'username' => ['required', 'string','unique:users', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'string', 'min:8', 'confirmed'],
          'mobile'=> ['required','digits:11'],
          'photoInput' => 'image'
          ]);


//TODO ENUM
     $teacher= User::create([
          'name' => $validate['name'],
          'username' => $validate['username'],
          'email' => $validate['email'],
          'role'=>'teacher',
          'mobile'=>(string)$validate['mobile'],
          'password' => Hash::make($validate['password']),
      ]);
      if(request('photoInput'))
      {
          $teacher->updateProfilePhoto(request('photoInput'));
      }


      return back();
    }
}
