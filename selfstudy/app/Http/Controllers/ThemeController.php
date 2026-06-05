<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
class ThemeController extends Controller
{
    public function setTheme($theme){
        session(['theme'=>$theme]);
        $minutes = 60*24*7;
        return redirect('/')->cookie('theme',$theme,$minutes);
    }

    public function home(Request $request){
        $theme = session('theme');
        if(!$theme){
            $theme= $request->cookie('theme','light');
            session(['theme'=>$theme]);
        }
        return view('home',compact('theme'));
    }
}
