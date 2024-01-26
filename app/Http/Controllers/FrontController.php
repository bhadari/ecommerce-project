<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('front.index', compact('product'));
    }
    public function viewproduct($id)
    {
        $product = Product::find($id);
        
        return view('front.layout.viewproduct', compact('product'));
    }
    
}
