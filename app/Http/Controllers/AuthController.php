<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    public function login(){

    if(Auth::check()){
            return redirect('dashboard');
    }

        return view('auth.login');
    }

    public function authenticate(Request $request){

        $validate=$request->validate([
            'email' => ['required','exists:users'],
            'password' => ['required']
        ]);

        if(Auth::attempt($validate)){
          return redirect('dashboard');
        }else{
            return redirect('/')->with("message", "Sorry Wrong id and password");
        }

    }
}
