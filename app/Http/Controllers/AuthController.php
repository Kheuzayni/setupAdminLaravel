<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        try {
            $user = new User;
            $user -> name = $request->name;
            $user -> email = $request->email;
            $user -> username = $request->username;
            $user -> password = Hash::make($request->username);
            $user -> save();
            return redirect('/registration/form')->with('success', 'Great!!! You have successfully registered');
        } catch (\Exception $e) {
            //throw $th;
            return redirect('/registration/form')->with('error', $e->getMessage());
        }
        
    }
    public function loadLoginPage (){
        return view('login-page');
    }
    
    public function loginUser (Request $request){
        $request->validate([
            'username' => 'required|min:6|max:8',
            'password' => 'required',
        ]);
        
    }

}
