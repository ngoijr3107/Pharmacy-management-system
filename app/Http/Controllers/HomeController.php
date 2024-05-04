<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Customer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product_count = Medicine::get()->count();
        $customer_count = Customer::get()->count();

        return view('admin.index')->with([
            'product_count' => $product_count,
            'customer_count' => $customer_count,
        ]);
    }
}
