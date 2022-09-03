<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;

class WisataController extends Controller
{
    public function index(Request $request){
        $wisata = Wisata::where('tempat_wisata', 'LIKE', '%'.$request->search.'%')->orWhere('provinsi', 'LIKE', '%'.$request->search.'%')->orWhere('jumlah_pengunjung', 'LIKE', '%'.$request->search.'%')->get();
        return view('wisata', compact('wisata'));
    }
}
