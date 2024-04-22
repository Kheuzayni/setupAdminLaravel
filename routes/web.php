<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [ UserController::class, 'homePage']); 
Route::get('/contact/page', [ UserController::class, 'ContactPage']); 
Route::get('/registration/form', [ AuthController::class, 'loadRegisterForm']); 