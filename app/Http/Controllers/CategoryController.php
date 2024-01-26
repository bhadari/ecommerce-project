<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.addcategory');
    }

    public function list()
    {
        $category = Category::all();
        $i = 1;

        return view('pages.admin.category.addcategory', compact('addcategory'));
    }

    public function store3(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->details = $request->details;

        $category->save();
        return redirect('listcategory');
    }
    public function showc($id)
    {
        $category = Category::findOrFail($id);
        return view('pages.admin.category.editcategory', compact('category'));
    }
    public function table()
    {

        $category = Category::all();
        dd($category);
        return view('category.table');
    }

    public function update(Request $request, $id)
    {
        $category = Category::Find($id);
        $category->name = $request->name;
        $category->details = $request->details;


        $category->update();
        return redirect('listcategory');
    }

    public function destroyc($id)
    {
        $category = Category::FindOrFail($id);
        $category->delete();
        return  redirect('listcategory');
    }
}
