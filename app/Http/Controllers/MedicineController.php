<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicineController extends Controller
{

    public function index()
    {
        $medicine = Medicine::all();
        return view('medicine.index')->with('medicines',$medicine);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
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
            'category' => 'required',
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
        return view('medicine.index')->with('success', 'Medicine has been updated');
    }

    public function destroy($id)
    {
        //
    }
}
