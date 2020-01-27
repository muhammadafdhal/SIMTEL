<?php

namespace App\Http\Controllers;

use App\kamar;
use App\harga_jeka;
use App\front;
use App\info_promo;
use App\reservation;
use App\user;
use Auth;
use PDF;
use Illuminate\Http\Request;

class FrontController extends Controller
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
        $harga_jeka = harga_jeka::all();

        return view('front', compact('info_promo','harga_jeka'));
    }

    public function kamar($kamar)
    {
        //
        $jenis = kamar::join('harga_jekas','harga_jekas.hj_id','=','kamars.ik_hj_id')
        ->where('hj_kategori',$kamar)->whereIn('ik_status', ['kosong'])->get();

        return view('jenis_kamar.kumpul', compact('kamar','jenis'));
    }

    public function login_tamu()
    {
        //

        return view('login_tamu.template');
    }

    public function logintamu()
    {
        //

        return view('front');
    }

    public function booking(Request $request, $ik_id)
    {
        //

        $kamar = kamar::find($ik_id);

        $info_promo = info_promo::all();

        $reservation = reservation::join('info_promos','info_promos.ip_id','=','reservations.res_ip_id')
        ->join('users','users.id','=','reservations.res_us_id')
        ->join('kamars','kamars.ik_id','=','reservations.res_ik_id')
        ->join('harga_jekas','harga_jekas.hj_id','=','kamars.ik_hj_id')->get();

        return view('booking.bk_kamar', compact('kamar','reservation','info_promo'));
    }

    public function pesan(Request $request, $ik_id)
    {
        //
        $kamar = kamar::find($ik_id);
        $kamar->ik_status='ada';
        $reservation = new reservation;
        $reservation->res_ip_id=$request['res_ip_id'];
        $reservation->res_us_id=Auth::user()->id;
        $reservation->res_ik_id=$ik_id;
        $reservation->deposite=$request['deposite'];
        $reservation->res_checkin=$request['res_checkin'];
        $reservation->res_checkout=$request['res_checkout'];
        $reservation->res_status='Booking';
        $kamar->save();
        $reservation->save();


        return redirect('/faktur/'.$reservation->res_id)->with('success', 'Berhasil Menambahkan Data');
    }

    public function faktur($res_id)
    {
        //
        $reservation = reservation::join('info_promos','info_promos.ip_id','=','reservations.res_ip_id')
        ->join('users','users.id','=','reservations.res_us_id')
        ->join('kamars','kamars.ik_id','=','reservations.res_ik_id')
        ->join('harga_jekas','harga_jekas.hj_id','=','kamars.ik_hj_id')->where('reservations.res_id', $res_id)
        ->get();

        return view('booking.faktur', compact('reservation'));
    }

    public function faktur_pdf($res_id)
    {
        $reservation = reservation::join('info_promos','info_promos.ip_id','=','reservations.res_ip_id')
        ->join('users','users.id','=','reservations.res_us_id')
        ->join('kamars','kamars.ik_id','=','reservations.res_ik_id')
        ->join('harga_jekas','harga_jekas.hj_id','=','kamars.ik_hj_id')->where('reservations.res_id', $res_id)
        ->get();

        
        
    	$pdf = PDF::loadview('booking.faktur_pdf',['index'=>$reservation], compact('reservation'));
    	return $pdf->stream();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\front  $front
     * @return \Illuminate\Http\Response
     */
    public function show(front $front)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\front  $front
     * @return \Illuminate\Http\Response
     */
    public function edit(front $front)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\front  $front
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, front $front)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\front  $front
     * @return \Illuminate\Http\Response
     */
    public function destroy(front $front)
    {
        //
    }
}
