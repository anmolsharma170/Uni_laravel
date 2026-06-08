<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function loginForm(){
        return view('login');
    }

    public function login(Request $request){
        session()->put('username',$request->username);
    }

    public function profile(){
        $username = session()->get('username');
        return view(
            'profile',
            compact('username')
        );
    }

    public function logout(){
        session()->forget('username');
        return redirect('/login');
    }
}
