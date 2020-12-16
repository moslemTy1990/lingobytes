<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(){
        $students = User::with('student')->where('role','student')->get();
        return view('admin.pages.student',compact('students'));
    }

    function delete($id){
        $student = User::findOrFail($id);
        if($student->profile_photo_path && file_exists(public_path() . '/storage/' . $student->profile_photo_path))
        {
            unlink(public_path() . '/storage/' . $student->profile_photo_path);
            $student->delete();
            //  Session::flash('deleted_user','The user has been deleted');
            return back();
        } else
        {
            $student->delete();
            // Session::flash('deleted_user','The user has been deleted');
            return back();
        } }

    function studentStatusUpdate($id){
        $user = User::findOrFail($id);
        if($user->student && $user->student->status == 1)
        {
            $user->student()->updateOrCreate(['user_id' => $id], [
                //TODO Last Login
                'last_login' => Carbon::now(),
                'status' => 0
            ]);
        } else
        {
            $user->student()->updateOrCreate(['user_id' => $id], [
                'last_login' => Carbon::now(),
                'status' => 1
            ]);
        }

        return back();
    }


}
