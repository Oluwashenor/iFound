<?php

use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/loginAction', [UserController::class, 'login']);

Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/registerAction', [UserController::class, 'register']);