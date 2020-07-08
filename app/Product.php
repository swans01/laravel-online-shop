<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function selectProduct(){
        $products = Product::orderBy('created_at', 'desc')->get();
        return $products;
    }
}
