<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard(){
        return view('pages.dashboard');
    }

    public function category(){
        return view('category.index');
    }

    public function medicine(){
        return view('medicine.index');
    }
}
