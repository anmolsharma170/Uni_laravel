<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class languageController extends Controller
{
    public function changeLanguage($lang){
        session(['locale'=>$lang]);
        return redirect()->back();
    }
}
