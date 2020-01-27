@extends('template.app')

@section('content')

<div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
        <h3>{{$count}}</h3>

          <p>Data Kamar</p>
        </div>
        <div class="icon">
          <i class="fa fa-bed"></i>
        </div>
        <a href="/info_kamar" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
        <h3>{{$count}}</h3>

          <p>Info Promo</p>
        </div>
        <div class="icon">
          <i class="fa fa-info"></i>
        </div>
        <a href="/info_promo" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
        <h3>{{$count_res}}</h3>

          <p>Data Reservasi</p>
        </div>
        <div class="icon">
          <i class="fa fa-book"></i>
        </div>
        <a href="/reservation" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
        <h3>{{$count_pem}}</h3>

          <p>Data Pembayaran</p>
        </div>
        <div class="icon">
          <i class="fa fa-credit-card"></i>
        </div>
        <a href="/pembayaran" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>

@endsection
