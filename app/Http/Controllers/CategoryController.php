<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;


class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::latest()->paginate(10);
        return view('admin.category.category')->with('categories', $category);
    }


    public function create()
    {
        return view('admin.category.category_create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'description' => 'required',
        ]);

        $category = Category::create($request->all());
        $category->save();

        Alert::success('Success', 'Category has been added!');
        return redirect('/dashboard/category')->with('success', 'Category has been added');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.category_edit', ['category' => $category]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
            'description' => 'required'
        ]);

        $category = Category::findOrFail($id);
        $category->fill($request->all());
        $category->save();

        return redirect()->route('admin.category')
            ->with('success', 'Category updated successfully');
    }



    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.category')
            ->with('success', 'Category deleted successfully');
    }

}
