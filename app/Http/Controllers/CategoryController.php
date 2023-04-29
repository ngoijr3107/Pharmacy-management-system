<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::latest()->paginate(10);
        return view('admin.category')->with('categories', $category);
    }


    public function create()
    {
        return view('admin.category_create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'description' => 'required',
             ]);

             $category = Category::create($request->all());
             $category -> save();

             return redirect('/dashboard/category')->with('success','Category has been added');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.category')->with('categories',$category);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
            'description' => 'required'
    ]);

    $category = Category::find($id);
    $category = Category::update($request->all());
    $category->save();

    return redirect()->route('admin.category')
              ->with('success', 'Cetegory updated successfully');
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
    }
}
