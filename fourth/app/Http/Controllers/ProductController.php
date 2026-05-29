<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products');
    }

    public function show($id)
    {
        if (in_array($id, [1, 2, 3, 4, 5])) {
            return view('product' . $id);
        }
        abort(404);
    }
}
