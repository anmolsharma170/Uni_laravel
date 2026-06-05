<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student1;

class StudentController1 extends Controller
{
    public function create(){
        return view('student-form');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'age'=>'required|numeric'
        ]);
        Student1::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age
        ]);
        return back()->with(
            'success',
            'Student registration successful'
        );
    }
}
