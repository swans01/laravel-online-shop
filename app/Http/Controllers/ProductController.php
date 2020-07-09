<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use App\Product;

class ProductController extends Controller
{
    public function ShowProduct(){
        $products = Product::all();
        return view('product', ['products' => $products]);
    }

    public function ListProduct(){
        $products = Product::all();
        return view('home', ['products' => $products]);
    }

    public function AddProduct(Request $request){
        $product = new Product;
        $product->name = $request->name ? $request->name : "-";
        $product->code = $request->code ? $request->code : "-";
        $product->price = $request->price ? $request->price : 0;

        $file = $request->file('image');
        $filename = $request->name . '-' . $request->code . '.jpg';
        if($file){
            Storage::disk('local')->put($filename, File::get($file));
        }
        

        $product->image = $file ? $filename : "-";
        $product->save();

        return redirect()->route('product');
    }

    public function ShowEditProduct($product_id){
        return view('editProduct', ['product_id' => $product_id]);
    }

    public function EditProduct(Request $request, $product_id){
        $product = Product::where('id', $product_id)->first();
        $product->name = $request->name ? $request->name : "-";
        $product->code = $request->code ? $request->code : "-";
        $product->price = $request->price ? $request->price : 0;

        $file = $request->file('image');
        $filename = $request->name . '-' . $request->code . '.jpg';
        if($file){
            Storage::disk('local')->put($filename, File::get($file));
        }

        $product->image = $file ? $filename : "-";
        $product->update();

        return redirect()->route('product');
    }

    public function DeleteProduct($product_id){
        $product = Product::where('id', $product_id)->first();
        $product->delete();
        return redirect()->route('product');
    }

    public function ProductImage($filename)
    {
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }
}
