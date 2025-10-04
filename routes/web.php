<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function(){
    return view('dashboard');
})
->middleware('auth')
-> name('dashboard');

Route::get('/login', [AuthController::class, 'showLogin'])
->name('login');
Route::post('/login', [AuthController::class, 'login'])
    ->name('login.attempt');

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.post');