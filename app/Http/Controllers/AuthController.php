<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loadRegisterForm (){
        return view("register-form");
    }
}
