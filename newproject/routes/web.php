<?php

use Illuminate\Support\Facades\Route;
use App\Models\StudentTable;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/age-students',function(){
    return StudentTable::where('age'>18)->get();
});

Route::get('/grade-students',function(){
    return StudentTable::whereIn('grade'>['A','B'])->get();
});

Route::get('/date-students',function(){
    return StudentTable::whereBetween('registration_date'>['12-11-25','20-11-25'])->get();
});