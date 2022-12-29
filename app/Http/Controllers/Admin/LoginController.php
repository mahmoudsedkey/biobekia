<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{


    public function showlogin(){
        return view('admin.login');
    }

    public function login(Request $request){
       $remember_me=$request->has('remember_me')?true:false;
       if(auth()->guard('user')->attempt(['email'=>$request->input('username'),'password'=>$request->input('password')]))
          return redirect()->route('admin.dashboard');

          return redirect()->route('admin.login');

    }
}
