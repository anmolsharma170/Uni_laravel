<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage($lang){
        session(['locale'=>$lang]);
        return redirect()->back();
    }
}
