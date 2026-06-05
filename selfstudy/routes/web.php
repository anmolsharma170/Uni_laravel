<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentController1;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\LanguageController;
// Route::get('/', function () {
//     return view('welcome');
// });


// if we go to browser and do localhost:8000/post we will get this view
// Route::get('/post',function(){
//     return view('post');
// });

// Route::get('/post/firstpost',function(){
//     return view('firstpost');
// });


// optional parameters with question mark sign
// Route::get('/post/{id?}/comment/{commentid?}',function(string $id=null,string $comment=null){
//     if($id){
//         return "<h1>Post ID: ". $id ."</h1><h2>". $comment ."</h2>";
//     }
//     else{
//         return "<h1>No ID found</h1>";
//     }
// });

Route::get('/post/{id}',function(string $id){
    if($id){
        return "<h1>Post ID: ". $id ."</h1>";
    }
    else{
        return "<h1>No ID found</h1>";
    }
})->whereNumber('id');

Route::get('/age18',[StudentController::class,'ageGreaterThan18']);
Route::get('/gradeAB',[StudentController::class,'gradeAorB']);
Route::get('/registered',[StudentController::class,'registeredBetween']);
Route::get('/protected',[UserController::class,'protectedPage'])->middleware('age');
Route::get('/denied',[UserController::class,'denied']);
// Route::get('/',[ThemeController::class,'home']);
Route::get('/theme/{theme}',[ThemeController::class,'setTheme']);
Route::get('/',function(){
    return view('home1');
})->middleware('locale');
Route::get('/lang/{lang}',[LanguageController::class,'changeLanguage']);
Route::get('/student/register',[StudentController1::class,'create']);
Route::post('/student/register',[StudentController1::class,'store']);