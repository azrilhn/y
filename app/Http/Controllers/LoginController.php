<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function HalamanLogin(){
        return view('Login.Login-aplikasi');
    }


    public function PostLogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/Home');
        }
        return redirect('/');
    }
}
