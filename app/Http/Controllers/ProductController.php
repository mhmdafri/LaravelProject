<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function index()
    {
         // show all products
        $products = Products::with(category)->get();
        //compcact() method to send data's from $products
        return view('welcome',compact('products')); 
        
    }
    public function create(){
        $categories = Category:: all();
        return view ('product.create',compact('categories'));
    }

    public function store(Request $request ){
        $input = $request->all();

        Product :: create ($input);
        return redirect('/');
    }

    public function edit ($product){

        $categories = Category:: all();
        $product = Product::find($product)->get();
        return view ('product.edit',compact('products','categories'));

    }
    public function update(Request $request,$product){
        $input = $request->all();

        $product = Product ::find($product);
        $product -> title = $input['title'];
        $product -> price = $input['price'];
        $product -> category = $input['category_id'];
        $product -> save();
        return redirect('/');
    }

    public function delete(){
        Product :: find($product)-> delete();
        return redirect()->back();
    }
}
