<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EcommerceController extends Controller
{


    public function listorders()
    {
        return view('pages.admin.orders.listorders');
    }
    public function listprofile()
    {
        return view('pages.admin.profile.listprofile');
    }

    public function listproducts()
    {
        $i = 0;
        $product = Product::all();
        return view('pages.admin.products.listproducts', compact('product', 'i'));
    }
    public function addproducts()
    {
        return view('pages.admin.products.addproducts');
    }

    public function listcategory()
    {
        $i = 0;
        $category = Category::all();
        return view('pages.admin.category.listcategory', compact('category', 'i'));
    }
    public function addcategory()
    {
        return view('pages.admin.category.addcategory');
    }

    public function listtype()
    {
        $i = 0;
        $type = Types::all();
        return view('pages.admin.type.listtype', compact('type', 'i'));
    }
    public function addtype()
    {
        $category = Category::all();
        return view('pages.admin.type.addtype', compact('category'));
    }

    public function edittype()
    {
        $category = Category::all();
        return view('pages.admin.type.addtype', compact('category'));
    }
}
