<?php

use App\Http\Controllers\forgotPasswordController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/login', 'users');
Route::get('/users', [UserController::class, 'login']);
