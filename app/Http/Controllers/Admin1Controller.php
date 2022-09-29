<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin1Controller extends Controller
{
    public function index(){
        return view('layouts.admin1');
    }
}
