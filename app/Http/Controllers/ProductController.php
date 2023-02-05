<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $category = "Sportwears";
        $products = ['Sepatu Nuke', 'Sepatu Elang', 'Sepatu sendal'];
        return view('product.list', ['category' => $category, 'products' => $products]);
    }
}
