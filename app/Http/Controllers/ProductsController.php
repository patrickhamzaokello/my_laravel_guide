<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
     
        print_r(route('products'));
        //directly in the view
        return view('products.index');
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
