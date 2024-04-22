<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loadRegisterForm (){
        return view("register-form");
    }

    public function registerUser (Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'password' => 'required|min:6|max:8|confirmed'
        ]);
    }
}
