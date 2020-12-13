<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Laravel\Jetstream\HasProfilePhoto;

class TeacherController extends Controller {

    use HasProfilePhoto;

    //list of teachers
    function index()
    {
        $teachers = User::with('teacher')->where('role', 'teacher')->get();


        return view('admin.pages.teacher', compact('teachers'));
    }

    //    delete teacher //TOTO FLASH MEssages
    function delete($id)
    {
        $teacher = User::findOrFail($id);
        if(file_exists(public_path() . '/storage/' . $teacher->profile_photo_path))
        {
            unlink(public_path() . '/storage/' . $teacher->profile_photo_path);
            $teacher->delete();

            //  Session::flash('deleted_user','The user has been deleted');
            return back();
        } else
        {
            $teacher->delete();

            // Session::flash('deleted_user','The user has been deleted');
            return back();
        }
    }

//    create teacher //TOTO FLASH MEssages
    function create(Request $request)
    {
        $validate = $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'username' => ['required', 'string', 'unique:users', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'mobile' => ['required', 'digits:11'],
                'photoInput' => 'image'
            ]);


//TODO ENUM
        $teacher = User::create([
            'name' => $validate['name'],
            'username' => $validate['username'],
            'email' => $validate['email'],
            'role' => 'teacher',
            'mobile' => (string)$validate['mobile'],
            'password' => Hash::make($validate['password']),
        ]);
        if(request('photoInput'))
        {
            $teacher->updateProfilePhoto(request('photoInput'));
        }

        return back();
    }

//Status update for teacher by admin
    public function teacherUpdate($id)
    {
        $user = User::findOrFail($id);
        if($user->teacher && $user->teacher->status == 1)
        {
            $user->teacher()->updateOrCreate(['user_id' => $id], [
                //TODO Lasr Login
                'last_login' => Carbon::now(),
                'status' => 0
            ]);
        } else
        {
            $user->teacher()->updateOrCreate(['user_id' => $id], [
                'last_login' => Carbon::now(),
                'status' => 1
            ]);
        }
        return back();
    }
}
