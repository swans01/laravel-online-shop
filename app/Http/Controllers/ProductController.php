<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function ShowProduct(){
        $products = new Product;
        return view('product', ['products' => $products->selectProduct()]);
    }
}
