<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function admin_login(){

        
        if(!empty(Auth::check()) && Auth::user()->is_admin == 1)
        {
            return redirect('admin/dashboard'); 
        }
       
        return view('admin.auth.login');
    }
    public function auth_admin_login(Request $request){
       $remember = !empty($request->remember) ? true :false;
       if(Auth::attempt(['email' => $request->email,'password'=>$request->password,'is_admin' =>1,'status' =>0],$remember))
       {
        return redirect('admin/dashboard');
       }
       else
       {
        return redirect()->back()->with('error',"please enter currect email and password");
       }
    }
    public function admin_logout()
    {
        Auth::logout();
        return redirect('admin');
    }
}