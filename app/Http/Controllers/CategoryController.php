<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
         // show all products
        $categories = Category::with(all);
        //compcact() method to send data's from $products
        return view('categories.index',compact('categories')); 
        
    }
    public function create(){

        return view ('catregories.create');
    }

    public function store(Request $request ){
        $input = $request->all();

        Product :: create ($input);
        return redirect('/category');
    }
}
