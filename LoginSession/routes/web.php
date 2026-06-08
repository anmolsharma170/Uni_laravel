<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[SessionController::class,'loginForm']);
Route::post('/login',[SessionController::class,'login']);
Route::get('/profile',[SessionController::class,'profile']);
Route::get('/logout',[SessionController::class,'logout']);