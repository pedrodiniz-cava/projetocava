<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return auth()->check() ? redirect('/home') : redirect('/login');
});

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index']);
});

Route::post("/logout",[AuthController::class, "logout"]);


