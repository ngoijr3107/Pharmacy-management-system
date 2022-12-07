<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::get();
        return view('category.index')->with($category);
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
            
             Category::create($request->all());
             $category -> save();
            
             return redirect('/category')->with('success','Category has been added');
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
