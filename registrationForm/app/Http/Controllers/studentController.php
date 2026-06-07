<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class studentController extends Controller
{
    public function create(){
        return view('StudentForm');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'age'=>'required|numeric'
        ]);
        Student::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age
        ]);
        return back()->with(
            'Success',
            'Student registration Successful'
        );
    }
}
