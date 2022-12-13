<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::all();
        return view('category.index')->with('categories',$category);
    }

    
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'description' => 'required',
             ]);
            
             $category = Category::create($request->all());
             $category -> save();
            
             return redirect('/category')->with('success','Category has been added');
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $category = Category::find($id);

        return view('category.index')->with('categories',$category);
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

    return redirect()->route('category.index')
              ->with('success', 'Cetegory updated successfully');
    }

    
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
    }
}