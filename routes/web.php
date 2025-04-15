<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::match(['get', 'post'], '/', [NavController::class, 'home']);

Route::post('/auth', [UserController::class, 'register']);

Route::get('auth', function () {
    return view('auth');
});

