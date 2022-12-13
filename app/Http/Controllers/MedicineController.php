<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Category;

class MedicineController extends Controller
{

    public function index()
    {
        $medicine = Medicine::with('Category')->get();
        return view('medicine.index')
        ->with('medicines',$medicine)
        ->with('categories');
    }

    public function create()
    {
        
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
        return redirect('/medicine')->with('success', 'Medicine has been added');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        //
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
        $medicine = Medicine::find($id);
        $medicine = Medicine::update($request->all());
        $medicine->save();
        return redirect('/medicine')->with('success', 'Medicine has been updated');
    }

    public function destroy($id)
    {
        //
    }
}