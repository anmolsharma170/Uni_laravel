<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\languageController;
Route::get('/',function(){
    return view('home');
})->middleware('locale');

Route::get('/lang/{lang}',[languageController::class,'changeLanguage']);
