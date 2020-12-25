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
        if (Auth::guard('web')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
              return view('admin.main-dashboard');

        }
        return redirect()->route('admin-login')->withErrors(['Wrong Credentials.']);
    }

    public function destroy(){
        if (Auth::guard('web')->user()) {
            Auth::guard('web')->logout();
        }
        return redirect()->route('admin-login');
    }

    public function show(){
        return view('admin.main-dashboard');
    }
}
