<?php

namespace App\Http\Controllers;

use App\harga_jeka;
use App\kamar;
use Illuminate\Http\Request;

class HargaJekaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $harga_jeka = harga_jeka::all();
        return view('harga_jeka.index', compact('harga_jeka'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kamar = kamar::all();
        
        return view('harga_jeka.create', compact('kamar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $harga_jeka = new harga_jeka;
        $harga_jeka->hj_kategori=$request['hj_kategori'];
        $harga_jeka->hj_harga=$request['hj_harga'];
        $harga_jeka->hj_fasilitas=$request['hj_fasilitas'];
        $harga_jeka->save();

        return redirect('/harga_jeka')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\harga_jeka  $harga_jeka
     * @return \Illuminate\Http\Response
     */
    public function show(harga_jeka $harga_jeka)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\harga_jeka  $harga_jeka
     * @return \Illuminate\Http\Response
     */
    public function edit( $harga_jeka)
    {
        //
        $harga_jeka = harga_jeka::find($harga_jeka);

        return view('harga_jeka.edit', compact('harga_jeka'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\harga_jeka  $harga_jeka
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $harga_jeka)
    {
        //
        $harga_jeka = harga_jeka::find($harga_jeka);
        $harga_jeka->hj_kategori=$request['hj_kategori'];
        $harga_jeka->hj_harga=$request['hj_harga'];
        $harga_jeka->hj_fasilitas=$request['hj_fasilitas'];
        $harga_jeka->save();

        return redirect('/harga_jeka')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\harga_jeka  $harga_jeka
     * @return \Illuminate\Http\Response
     */
    public function destroy( $harga_jeka)
    {
        //
        $harga_jeka = harga_jeka::find($harga_jeka);
        $harga_jeka->delete();
        return redirect('/harga_jeka')->with('success', 'Berhasil Menghapus Data');
    }
}
