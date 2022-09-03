<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Klinik;
use Illuminate\Support\Facades\Validator;

class KlinikController extends Controller
{

    public function index(){
        $products = Klinik::all();
        return response()->json([
            'products' => $products
        ]);
    }
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_obat' => 'required',
            'harga_obat' => 'required|numeric',
            'keterangan' => 'required|max:100'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ]);
        }

        Klinik::create([
            'nama_obat' => $request->nama_obat,
            'harga_obat' => $request->harga_obat,
            'keterangan' => $request->keterangan
        ]);
        return response()->json([
            'message' => "Sukses menambahkan data"
        ]);
    }

    public function show($id){
        $products = Klinik::findOrFail($id);
        return response()->json([
            'products' => $products
        ]);
    }

    public function search(Request $request){
        $products = Klinik::where('nama_obat', 'LIKE', '%'.$request->nama_obat. '%')->get();
        return response()->json([
            'products' => $products
        ]);
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'nama_obat' => 'required',
            'harga_obat' => 'required|numeric',
            'keterangan' => 'required|max:100'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ]);
        }
        
        Klinik ::findOrFail($id)->update([
            'nama_obat' => $request->nama_obat,
            'harga_obat' => $request->harga_obat,
            'keterangan' => $request->keterangan
        ]);

        return response()->json([
            'message' => "Update data berhasil"
        ]);
    }

    public function delete($id){
        Klinik::destroy($id);
        return response()->json([
            'message' => 'Data berhasil di hapus'
        ]);
    }
}