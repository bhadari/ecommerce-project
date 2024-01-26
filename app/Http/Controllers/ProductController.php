<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        return view('products.addproducts');
    }

    public function list()
    {
        $products = Product::all();
        $i = 1;

        return view('pages.admin.products.addproducts', compact('addproducts'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'required',
            'price'=>'required',
            'stock'=>'required',
            'description'=>'required',
        ]);
        $product = new Product();
        $product->name = $request->name;
        $image = $request->file('image');
        $image_new_name = time(). $image->getClientOriginalName();
        $image->move('images/personImage/',$image_new_name);  
        $product->image ='images/personImage/'.$image_new_name;     
         $product->price = $request->price;
        $product->stock = $request->stock;
        $product->description = $request->description;

        $product->save();
        return redirect('/listproducts');
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.admin.products.editproducts', compact('product'));
    }
    public function table()
    {
        
        $products = Product::all();
        dd($products);
        return view('produts.table');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


        $request->validate([
            'name'=>'required',
            'image'=>'required',
            'price'=>'required',
            'stock'=>'required',
            'description'=>'required',
        ]);



        $product = Product::Find($id);

        $product->name = $request->name;
       if ($request->hasFile('image')){
        $image = $request->file('image');
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('images/personImage/',$image_new_name);
        $product->image ='images/personImage/'.$image_new_name;
       }
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->description = $request->description;




        $product->update();
        return redirect('/listproducts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/listproducts');
    }
}
