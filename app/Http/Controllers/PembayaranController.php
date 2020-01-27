<?php

namespace App\Http\Controllers;

use App\pembayaran;
use Illuminate\Http\Request;
use PDF;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pembayaran = pembayaran::join('reservations','reservations.res_id','=','pembayarans.pb_res_id')
        ->join('info_promos','info_promos.ip_id','=','reservations.res_ip_id')
        ->join('users','users.id','=','reservations.res_us_id')
        ->join('kamars','kamars.ik_id','=','reservations.res_ik_id')
        ->join('harga_jekas','harga_jekas.hj_id','=','kamars.ik_hj_id')
        ->get();
        return view('pembayaran.index', compact('pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pembayaran.create');
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
        $pembayaran = new pembayaran;
        $pembayaran->nominal=$request['nominal'];
        $pembayaran->save();

        return redirect('/pembayaran')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit( $pembayaran)
    {
        //
        $pembayaran = pembayaran::find($pembayaran);

        return view('pembayaran.edit', compact('pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $pembayaran)
    {
        //
        $pembayaran = pembayaran::find($pembayaran);
        $pembayaran->nominal=$request['nominal'];
        $pembayaran->save();

        return redirect('/pembayaran')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy( $pembayaran)
    {
        //
        $pembayaran = pembayaran::find($pembayaran);
        $pembayaran->delete();
        return redirect('/pembayaran')->with('success', 'Berhasil Menghapus Data');
    }

    public function cetak_pdf()
    {
        $pembayaran = pembayaran::join('reservations','reservations.res_id','=','pembayarans.pb_res_id')
        ->join('info_promos','info_promos.ip_id','=','reservations.res_ip_id')
        ->join('users','users.id','=','reservations.res_us_id')
        ->join('kamars','kamars.ik_id','=','reservations.res_ik_id')
        ->join('harga_jekas','harga_jekas.hj_id','=','kamars.ik_hj_id')
        ->whereDate('pembayarans.created_at', date('Y-m-d'))
        ->get();

        

 
    	$pdf = PDF::loadview('pembayaran.pembayaran_pdf',['index'=>$pembayaran], compact('pembayaran'));
    	return $pdf->stream();
    }

    public function laporan()
    {
        return view('pembayaran.laporan');
    }

    public function pilih(Request $request)
    {
        $pilih_awal = $request['awal'];
        $pilih_akhir = $request['akhir'];

        $pembayaran = pembayaran::join('reservations','reservations.res_id','=','pembayarans.pb_res_id')
        ->join('info_promos','info_promos.ip_id','=','reservations.res_ip_id')
        ->join('users','users.id','=','reservations.res_us_id')
        ->join('kamars','kamars.ik_id','=','reservations.res_ik_id')
        ->join('harga_jekas','harga_jekas.hj_id','=','kamars.ik_hj_id')
        ->whereBetween('pembayarans.created_at',  [$pilih_awal, $pilih_akhir] )->get();
        
        $pdf = PDF::loadview('pembayaran.pembayaran_pdf',['index'=>$pembayaran], compact('pembayaran'));
    	return $pdf->stream();
    }

    public function pilih3(Request $request)
    {
        $pilih_tahun = $request['tahun'];

        $pembayaran = pembayaran::join('reservations','reservations.res_id','=','pembayarans.pb_res_id')
        ->join('info_promos','info_promos.ip_id','=','reservations.res_ip_id')
        ->join('users','users.id','=','reservations.res_us_id')
        ->join('kamars','kamars.ik_id','=','reservations.res_ik_id')
        ->join('harga_jekas','harga_jekas.hj_id','=','kamars.ik_hj_id')
        ->whereYear('pembayarans.created_at', [$pilih_tahun])->get();
        // dd($pembayaran);
        $pdf = PDF::loadview('pembayarans.pembayaran_pdf',['index'=>$pembayaran], compact('pembayaran'));
    	return $pdf->stream();
    }
}
