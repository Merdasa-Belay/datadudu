<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function registration()
    {

        $name = 'eyob';
        return view('register', compact('name'));
    }
}
