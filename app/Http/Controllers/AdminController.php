<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;


class AdminController extends Controller
{
    public function index(){
        $mahasiswas = Mahasiswa::all();
        // dd($mahasiswas);
        return view('tampil.index', compact('mahasiswas'));
    }

    public function show($id){
        // dd($mahasiswa);
        $mahasiswa = Mahasiswa::find($id);
      
        return view('tampil.show', compact('mahasiswa'));
    }



}
