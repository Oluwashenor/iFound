<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MessageController;

use Illuminate\Support\Facades\Route;


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

Route::post('/sendMessage',[MessageController::class, 'create'])->middleware('auth');


Route::get('/', [ItemController::class, 'dashboard'])->middleware('auth');
Route::get('/contactfinder/{id}', [ItemController::class, 'contactfinder'])->middleware('auth');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/loginAction', [UserController::class, 'login']);

Route::post('/createFoundAction', [ItemController::class, 'create']);

Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/registerAction', [UserController::class, 'register']);