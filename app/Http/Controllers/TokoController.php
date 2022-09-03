<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Toko;

class TokoController extends Controller
{
    public function create(Request $request){
        Toko::create([
            'name' => $request->name,
            'price' => $request->price,
            'desc' => $request->desc,
        ]);
        return response()->json([
            'message' => "Sukses menambahkan data"
        ]);
    }
}
