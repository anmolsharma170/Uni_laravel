<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/products/1', function () {
    return view('product1');
});

Route::get('/products/2', function () {
    return view('product2');
});

Route::get('/products/3', function () {
    return view('product3');
});

Route::get('/products/4', function () {
    return view('product4');
});

Route::get('/products/5', function () {
    return view('product5');
});




















// Route::get('/home', function () {
//     return view('home');
// })->name('home');

// Route::get('/{name}',function($name){
//     return view('student',["n"=>$name]);
// })->where('name','[A-Za-z]+');

// Route::get('/user/{id}',function($id){
//     return "user id is ".$id;
// })->where('id','[0-9]+');

// Route::get('student/{id}',function($id){
//     if(!ctype_digit($id)){
//         return "Only integers are accepted";
//     }
//     else{
//         return "user id is ".$id;
//     }
// });

// Route::get('user/{id?}',function($id=null){
//     if($id === null){
//         return "Guest User";
//     }
//     return "User id is ".$id;
// });

// Route::get("/student1", function () {
//     $name = "Anmol";
//     $roll = 123;
//     $section = "323BA";

//     return view('Student1', [
//         'n' => $name,
//         'r' => $roll,
//         's' => $section
//     ]);
// });

// Route::get("/student2", function () {
//     $name = "Anmol";
//     $roll = 123;
    

//     return view('student2')
//             ->with('name', $name)
//             ->with('roll', $roll)
//             ->with('section', $section);
// });

// use App\Http\Controllers\HomeController;
// Route::get('home',[HomeController::class,'home']);



// function userdetails(Request $req){
//     $name = $req.name;
//     $id=$req.id;
//     return view('user',compact('name','id'));
// }



// function userage($age){
//     if($age<18){

//     }
// }
Route::get('set-cookie2',function(){
    $cookie = cookie('name','Anmol',60);
    return response("Cookie has been set")->cookie($cookie);
});

Route::get('setcookie',function(){
    return response("Cookie has been set")->cookie('name','Anmol',60);
});

Route::get('getcookie',function(Request $req){
    $value = $req->cookie('name');
    return "Cookie value is ".$value;
});

Route::get('deletecookie',function(){
    return response("Cookie has been deleted")->cookie('name',null,-1);
});










use App\Http\Controllers\StudentController;





















































