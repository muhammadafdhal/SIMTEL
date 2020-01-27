<?php

namespace App\Http\Controllers;

use App\kamar;
use App\harga_jeka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kamar = kamar::join('harga_jekas','harga_jekas.hj_id','=','kamars.ik_hj_id')->get();
        return view('info_kamar.index', compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $harga_jeka = harga_jeka::all();
        return view('info_kamar.create', compact('harga_jeka'));
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
        $kamar = new kamar;
        $kamar->ik_nomor=$request['ik_nomor'];
        $kamar->ik_hj_id=$request['ik_hj_id'];
        $kamar->ik_fasilitas = implode(", ",$request->ik_fasilitas);
        $berkas1 = $request->file('ik_gambar');
        $namaFile1 = $berkas1->getClientOriginalName();
        $request->file('ik_gambar')->move('gambar/kamar/', $namaFile1);
        $kamar->ik_gambar=$namaFile1;
        $kamar->save();

        return redirect('/info_kamar')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function show(kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function edit( $kamar)
    {
        //
        $harga_jeka = harga_jeka::all();
        $kamar = kamar::find($kamar);

        return view('info_kamar.edit', compact('kamar','harga_jeka'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $kamar)
    {
        //
        $kamar = kamar::find($kamar);
        $kamar->ik_nomor=$request['ik_nomor'];
        $kamar->ik_hj_id=$request['ik_hj_id'];
        $kamar->ik_fasilitas=implode(", ",$request->ik_fasilitas);
        $hps = $kamar->ik_gambar;
        File::delete('gambar/kamar/'. $hps);
        $berkas1 = $request->file('ik_gambar');
        $namaFile1 = $berkas1->getClientOriginalName();
        $request->file('ik_gambar')->move('gambar/kamar/', $namaFile1);
        $kamar->ik_gambar=$namaFile1;
        
        $kamar->save();

        return redirect('/info_kamar')->with('info', 'Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function destroy( $kamar)
    {
        //
        $kamar = kamar::find($kamar);
        $kamar->delete();
        return redirect('/info_kamar')->with('success', 'Berhasil Menghapus Data');
    }
}
