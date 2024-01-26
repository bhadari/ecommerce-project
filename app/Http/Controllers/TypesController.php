<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Types;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('type.addtype', compact('addtype'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function list()
    {
        $type = Types::all();
        $i = 1;

        return view('pages.admin.category.addtype', compact('addtype'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function storet(Request $request)
    {
        $type = new Types();
        $type->name = $request->name;
        $type->cate_id = $request->cate_id;

        $type->save();
        return redirect('listtype');
    }

    /**
     * Display the specified resource.
     */
    public function showt($id)
    {
        $category = Category::all();
        $type = Types::findOrFail($id);
        return view('pages.admin.type.edittype', compact('type'), compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Types $types)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatet(Request $request, $id)
    {
        $type = Types::Find($id);
        $type->name = $request->name;
        $type->cate_id = $request->cate_id;


        $type->update();
        return redirect('listtype');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroyt($id)
    {
        $type = Types::FindOrFail($id);
        $type->delete();
        return  redirect('listtype');
    }
}
