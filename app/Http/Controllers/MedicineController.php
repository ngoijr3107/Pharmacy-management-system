<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Category;

class MedicineController extends Controller
{

    public function index()
    {
        $medicine = Medicine::with('Category')->latest()->paginate(10);
        return view('admin.medicines.medicine')->with('medicines',$medicine)->with('categories');
    }

    public function create()
    {
        return view('admin.medicines.medicine_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'store_box' => 'required',
            'purchase_price' => 'required',
            'sell_price' => 'required',
            'qty' => 'required',
            'generic_name' => 'required',
            'company' => 'required',
            'effects' => 'required',
            'expiry_date' => 'required',
        ]);
        $medicine = Medicine::create($request->all());
        $medicine->save();
        return redirect('/dashboard/medicine')->with('success', 'Medicine has been added');
    }

    public function show($id)
    {

    }

    public function edit($id)
{
    $medicine = Medicine::findOrFail($id);
    $categories = Category::all(); // if you want to retrieve all categories
    return view('admin.medicines.medicine_edit', compact('medicine', 'categories'));
}


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'store_box' => 'required',
            'purchase_price' => 'required',
            'sell_price' => 'required',
            'qty' => 'required',
            'generic_name' => 'required',
            'company' => 'required',
            'effects' => 'required',
            'expiry_date' => 'required',
        ]);

        $medicine = Medicine::findOrFail($id);
        $medicine->fill($request->all());
        $medicine->save();
        return redirect('/dashboard/medicine')->with('success', 'Medicine has been updated successfully!');
    }

    public function destroy($id)
    {
        $medicine = Medicine::findOrFail($id);
        $medicine->delete();

        return redirect('/dashboard/medicine')->with('success', 'Medicine has been deleted successfully!');
    }
}
