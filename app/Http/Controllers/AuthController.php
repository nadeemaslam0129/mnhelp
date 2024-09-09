<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    function admin_login(){
        return view('admin.login');
    }
    function admin_login_post(Request $request)
    {
      
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password], true)) {
                return Redirect::to('/admindashboard'); 
        } else {
            return redirect()->back()->with('message', 'Incorrect Login Details');

        }

    }
    public function logout(Request $request){
        if(Auth::user()){
            Auth::logout();
            return Redirect::to('/admin/login');
        }
    }
}
