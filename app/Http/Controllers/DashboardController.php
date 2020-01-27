<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kamar;
use App\info_promo;
use App\reservation;
use App\pembayaran;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $kamar = kamar::all();

        $count = kamar::count();

        $count_info = info_promo::count();

        $count_res = reservation::count();

        $count_pem = pembayaran::count();
        return view('dashboard', compact('kamar','count','count_info','count_res','count_pem'));
    }
}
