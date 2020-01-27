<?php

namespace App\Http\Controllers;

use App\reservation;
use App\pembayaran;
use App\info_promo;
use App\user;
use App\kamar;
use App\Auth;
use PDF;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reservation = reservation::join('info_promos','info_promos.ip_id','=','reservations.res_ip_id')
        ->join('users','users.id','=','reservations.res_us_id')
        ->join('kamars','kamars.ik_id','=','reservations.res_ik_id')
        ->join('harga_jekas','harga_jekas.hj_id','=','kamars.ik_hj_id')->get();

        return view('reservation.index', compact('reservation'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reservation.create');
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
        $reservation = new reservation;
        $reservation->res_id=$request['res_id'];
        $reservation->res_ip_id=$request['res_ip_id'];
        $reservation->res_us_id=$request['res_us_id'];
        $reservation->res_ik_id=$request['res_ik_id'];
        $reservation->res_checkin=$request['res_checkin'];
        $reservation->res_checkout=$request['res_checkout'];
        $reservation->res_status=$request['res_status'];
        $reservation->save();

        return redirect('/reservation')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit( $reservation)
    {
        //
        $reservation = user::find($reservation);

        return view('reservation.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $reservation)
    {
        //
        $reservation = reservation::find($reservation);

        $reservation->res_id=$request['res_id'];
        $reservation->res_ip_id=$request['res_ip_id'];
        $reservation->res_us_id=$request['res_us_id'];
        $reservation->res_ik_id=$request['res_ik_id'];
        $reservation->res_checkin=$request['res_checkin'];
        $reservation->res_checkout=$request['res_checkout'];
        $reservation->res_status=$request['res_status'];
        $reservation->save();

        return redirect('/reservation')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy( $reservation)
    {
        //
        $reservation = reservation::find($reservation);
        $reservation->delete();
        return redirect('/reservation')->with('success', 'Berhasil Menghapus Data');
    }
   
    public function verified( $id)
    {
        $reservation = reservation::find($id);
        $reservation->res_status='Dipakai';
        $reservation->save();

        return redirect('/reservation')->with('success', 'Data Telah Diverifikasi');
    }

    public function notverified( $id)
    {
        $reservation = reservation::find($id);
        $reservation->res_status='Selesai';
        $reservation->save();
        $pembayaran = new pembayaran;
        $pembayaran->pb_res_id=$id;
        $pembayaran->save();

        return redirect('/pembayaran')->with('success', 'Berhasil Menambahkan Data');

    }

    public function status_kamar( $id)
    {
        $kamar = kamar::find($id);
        $kamar->ik_status='kosong';
        $kamar->save();
        

        return redirect('/info_kamar')->with('success', 'Data Telah Diverifikasi');
    }

    public function cetak_pdf()
    {
        $reservation = reservation::join('info_promos','info_promos.ip_id','=','reservations.res_ip_id')
        ->join('users','users.id','=','reservations.res_us_id')
        ->join('kamars','kamars.ik_id','=','reservations.res_ik_id')
        ->join('harga_jekas','harga_jekas.hj_id','=','kamars.ik_hj_id')
        ->whereDate('reservations.res_checkin', date('Y-m-d'))
        ->get();
        
    	$pdf = PDF::loadview('reservation.reservation_pdf',['index'=>$reservation], compact('reservation'));
    	return $pdf->stream();
    }

    public function laporan()
    {
        return view('reservation.laporan');
    }

    public function pilih(Request $request)
    {
        $pilih_awal = $request['awal'];
        $pilih_akhir = $request['akhir'];

        $reservation = reservation::join('info_promos','info_promos.ip_id','=','reservations.res_ip_id')
        ->join('users','users.id','=','reservations.res_us_id')
        ->join('kamars','kamars.ik_id','=','reservations.res_ik_id')
        ->join('harga_jekas','harga_jekas.hj_id','=','kamars.ik_hj_id')
        ->whereBetween('reservations.res_checkin',  [$pilih_awal, $pilih_akhir] )->get();
        $pdf = PDF::loadview('reservation.reservation_pdf',['index'=>$reservation], compact('reservation'));
    	return $pdf->stream();
    }

    // public function pilih2(Request $request)
    // {
    //     $month = $request['bulan'];
    //     $reservation = reservation::join('info_promos','info_promos.ip_id','=','reservations.res_ip_id')
    //     ->join('users','users.id','=','reservations.res_us_id')
    //     ->join('kamars','kamars.ik_id','=','reservations.res_ik_id')
    //     ->whereMonth('reservations.res_checkin', [$month])->get();
    //     dd($reservation);
    //     // $pdf = PDF::loadview('reservation.reservation_pdf',['index'=>$reservation], compact('reservation'));
    // 	// return $pdf->stream();
    // }

    public function pilih3(Request $request)
    {
        $pilih_tahun = $request['tahun'];

        $reservation = reservation::join('info_promos','info_promos.ip_id','=','reservations.res_ip_id')
        ->join('users','users.id','=','reservations.res_us_id')
        ->join('kamars','kamars.ik_id','=','reservations.res_ik_id')
        ->join('harga_jekas','harga_jekas.hj_id','=','kamars.ik_hj_id')
        ->whereYear('reservations.res_checkin', [$pilih_tahun])->get();
       
        $pdf = PDF::loadview('reservation.reservation_pdf',['index'=>$reservation], compact('reservation'));
    	return $pdf->stream();
    }
}
