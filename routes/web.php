<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', function () {
    return view('new');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/create', function () {
    return view('create');
});

Route::get('/report', function () {
    return view('report');
});


Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/loginAction', [UserController::class, 'login']);

Route::post('/createFoundAction', [ItemController::class, 'create']);

Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/registerAction', [UserController::class, 'register']);