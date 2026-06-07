<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

Route::get('/student/register',[studentController::class,'create']);
Route::post('/student/register',[studentController::class,'store']);