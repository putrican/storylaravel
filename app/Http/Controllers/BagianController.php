<?php

namespace App\Http\Controllers;

use App\Bagian;
use Illuminate\Http\Request;

class BagianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bagians = Bagian::all();
        return view('bagian.index', compact('bagians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bagian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Batasi hak akses untuk proses store
        // $this->authorize('create', Bagian::class);



        $validatedData = $request->validate([
            'nama_bagian' => 'required',
            'nama_supervisor' => 'required',
            'jumlah_bagian' => 'required|min:10|integer',
        ]);
        Bagian::create($validatedData);
        return redirect('/')->with('pesan', "Bagian $request->nama_bagian Berhasil Disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bagian  $bagian
     * @return \Illuminate\Http\Response
     */
    public function show(Bagian $bagian)
    {
        return view('bagian.show', compact('bagian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bagian  $bagian
     * @return \Illuminate\Http\Response
     */
    public function edit(Bagian $bagian)
    {
        return view('bagian.edit', compact('bagian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bagian  $bagian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bagian $bagian)
    {
        $validatedData = $request->validate([
            'nama_bagian' => 'required',
            'nama_supervisor' => 'required',
            'jumlah_bagian' => 'required|min:10|integer',
        ]);
        $bagian->update($validatedData);
        return redirect('/bagians/'.$bagian->id)->with('pesan', "Bagian $request->nama_bagian Berhasil Diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bagian  $bagian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bagian $bagian)
    {
        // $this->authorize('delete', $bagian);

        $bagian->delete();
        return redirect('/')->with('pesan',"Bagian $bagian->nama_bagian Berhasil di Hapus");
    }
}
