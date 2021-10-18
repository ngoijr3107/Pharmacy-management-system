<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {

        $data = [
            "name" => "Valency2",
            "email" => "dickson.valency2@gmail.com",
            "username" => "RuiMaestro2",
            "password" => "Maestro10",
        ];

        User::create($data);

        $users = User::all();

        foreach ($users as $user) {
            echo $user["name"];
        }

        return view('user');
    }
}
