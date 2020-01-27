<?php

namespace App\Http\Controllers;

use App\info_promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InfoPromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $info_promo = info_promo::all();
        return view('info_promo.index', compact('info_promo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('info_promo.create');
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
        $info_promo = new info_promo;
        $info_promo->ip_keterangan=$request['ip_keterangan'];
        $info_promo->ip_kode=$request['ip_kode'];
        $info_promo->ip_hargapromo=$request['ip_hargapromo'];
        $berkas1 = $request->file('ip_gambar');
        $namaFile1 = $berkas1->getClientOriginalName();
        $request->file('ip_gambar')->move('gambar/promo/', $namaFile1);
        $info_promo->ip_gambar=$namaFile1;
        $info_promo->save();

        return redirect('/info_promo')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\info_promo  $info_promo
     * @return \Illuminate\Http\Response
     */
    public function show(info_promo $info_promo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\info_promo  $info_promo
     * @return \Illuminate\Http\Response
     */
    public function edit($info_promo)
    {
        //
        $info_promo = info_promo::find($info_promo);

        return view('info_promo.edit', compact('info_promo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\info_promo  $info_promo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $info_promo)
    {
        //
        $info_promo = info_promo::find($info_promo);
        $info_promo->ip_keterangan=$request['ip_keterangan'];
        $info_promo->ip_kode=$request['ip_kode'];
        $info_promo->ip_hargapromo=$request['ip_hargapromo'];
        $hps = $info_promo->ip_gambar;
        File::delete('gambar/promo/'. $hps);
        $berkas1 = $request->file('ip_gambar');
        $namaFile1 = $berkas1->getClientOriginalName();
        $request->file('ip_gambar')->move('gambar/promo/', $namaFile1);
        $info_promo->ip_gambar=$namaFile1;
        $info_promo->save();

        return redirect('/info_promo')->with('info', 'Berhasil Mengubah Data');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\info_promo  $info_promo
     * @return \Illuminate\Http\Response
     */
    public function destroy( $info_promo)
    {
        //
        $info_promo = info_promo::find($info_promo);
        $info_promo->delete();
        return redirect('/info_promo')->with('success', 'Berhasil Menghapus Data');
    }
}
