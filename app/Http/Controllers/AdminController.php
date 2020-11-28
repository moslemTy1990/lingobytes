<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
       return view('admin.login');
    }

    public function checkAdmin(Request $request){
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role' => 'admin'])) {
            return view('admin.admin');
        }
        return redirect()->route('admin-login')->withErrors(['Wrong Credentials.']);
    }

    public function destroy(){
        if (Auth::user() && auth()->user()->role == 'admin') {
            Auth::logout();
        }
        return redirect()->route('admin-login');
    }
    public function show(){
        return view('admin.admin');
    }
}
