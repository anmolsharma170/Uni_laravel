<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function protectedPage(){
        return "Welcome to protected page";
    }
    public function denied(){
        return "You must be above 18 to access this website.";
    }
}
