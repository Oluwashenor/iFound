<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;


Route::get('/new', function () {
    return view('new');
})->middleware('auth');

// Route::get('/search', function () {
//     return view('search');
// })->middleware('auth');

Route::get('/search/{search?}',[ItemController::class, 'search'])->middleware('auth');

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/create', function () {
    return view('create');
})->middleware('auth');

Route::get('/report', function () {
    return view('report');
})->middleware('auth');

Route::post('/sendMessage',[MessageController::class, 'create'])->middleware('auth');
Route::get('/inbox',[MessageController::class, 'index'])->middleware('auth');


Route::get('/', [ItemController::class, 'dashboard'])->middleware('auth');
Route::get('/my-items', [ItemController::class, 'index'])->middleware('auth')->name('my-items');
Route::get('/contactfinder/{id}', [ItemController::class, 'contactfinder'])->middleware('auth');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/loginAction', [UserController::class, 'login']);

Route::post('/createFoundAction', [ItemController::class, 'create'])->middleware('auth');

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/delete/{id}',[ItemController::class, 'delete'])->middleware('auth');

Route::post('/registerAction', [UserController::class, 'register']);