<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=[
            'laptop',
            'mobile',
            'keyboard',
            'mouse'
        ];
        return view('product',compact('products'));
    }
}
