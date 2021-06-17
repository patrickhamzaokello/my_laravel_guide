<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = "welcome to my laravel 8 course";
        $description = "with patrick";

        $data = [
            'productOne'=>'iphone',
            'producttwo'=>'sumsung',
        ];

        //compact method
        // return view('products.index', compact('title','description'));


        //with method [good for passing one variable]
        // return view('products.index')->with('title',$title);
        // return view('products.index')->with('data',$data);


        //directly in the view
        return view('products.index',[
            'data' => $data
        ]);
    }

    public function about(){
        return "About us page";
    }
}
