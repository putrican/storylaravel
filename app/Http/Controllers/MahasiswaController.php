<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Telepon;
use App\Bagian;
use App\Hobi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bagians = Bagian::all();
        $daftar_hobi = Hobi::all();
        return view('mahasiswa.create', compact('bagians', 'daftar_hobi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|size:8|unique:mahasiswas',
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'bagian_id' => 'required',
            'alamat' => ''
        ]);
        $mahasiswa = Mahasiswa::create($validatedData);
        $telepon = new Telepon;
        $telepon->nomor_telepon = $request->input('nomor_telepon');
        $mahasiswa->telepon()->save($telepon);
        $mahasiswa->hobi()->attach($request->hobi);
        $request->session()->flash('pesan', "Data {$validatedData['nama']} Berhasil Disimpan"); 
        return redirect()->route('mahasiswas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        $bagians = Bagian::all();
        $daftar_hobi = Hobi::all();
        return view('mahasiswa.edit', compact('mahasiswa', 'bagians', 'daftar_hobi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validatedData = $request->validate([
            'nik' => 'required|size:8|unique:mahasiswas,nik,'.$mahasiswa->id,
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'bagian_id' => 'required',
            'alamat' => ''
        ]);
        $mahasiswa->update($validatedData);
        $telepon = $mahasiswa->telepon;
        $telepon->nomor_telepon = $request->input('nomor_telepon');
        $mahasiswa->telepon()->save($telepon);
        $mahasiswa->hobi()->sync($request->hobi);
        return redirect()->route('mahasiswas.index', ['mahasiswa' => $mahasiswa->id ])->with('pesan', "Update Data {$validatedData['nama']} Berhasil");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswas.index')->with('pesan', "Hapus data $mahasiswa->nama Berhasil");

    }
}
