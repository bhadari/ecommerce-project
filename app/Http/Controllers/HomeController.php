<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    public function home(){
        $product= Product::all();
    
     return view('layout.user-layout.home.home',compact('product'));
    }

    public function single(){
       
        $product= Product::all();
    
     return view('layout.user-layout.home.singleproducts',compact('product'));
    }
    
}
