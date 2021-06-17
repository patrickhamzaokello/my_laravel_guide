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

        //directly in the view
        return view('products.index',[
            'data' => $data
        ]);
    }

    public function about(){
        return "About us page";
    }


    public function show($name){
        
        $data = [
            'iphone'=>'iphone',
            'sumsung'=>'sumsung',
        ];

        return view('products.index', [
            'products'=>$data[$name] ?? 'products '.$name.' does not exists'
        ]);
    }
}
