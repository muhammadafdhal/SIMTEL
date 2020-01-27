@extends('template.upp')

@section('content')


<section class="site-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="heading-wrap  element-animate">
                    <h4 class="sub-heading">Pemesanan Hotel Anda</h4>
                    <h2 class="heading">Invoice Hotel</h2>

                    <font size="4">
                        <p class="">
                            Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                            <b>{{$reservation[0]->name}}</b></p>

                        <p>No
                            Identitas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                            <b>{{$reservation[0]->us_identitas}}</b></p>

                        <p>Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                            <b>{{$reservation[0]->us_alamat}}</b></p>

                        <p>No
                            Telp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                            <b>{{$reservation[0]->us_telp}}</b></p>
                        <p>No
                            Kamar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                            <b>{{$reservation[0]->ik_nomor}}</b></p>
                        <p>Kategori Kamar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                            <b>{{$reservation[0]->hj_kategori}}</b></p>

                        <p>Deposite&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                            <b>Rp. {{$reservation[0]->deposite}}</b></p>
                        <p>Check
                            IN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                            <b>{{$reservation[0]->res_checkin}}</b></p>

                        <p>Check
                            Out&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                            <b>{{$reservation[0]->res_checkout}}</b></p>
                    </font>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <a href="/faktur/faktur_pdf/{{ $reservation[0]->res_id }}"><button type="button"
                                    class="btn btn-info">Cetak</button></a>
                        </div>

                        <div class="col-md-6 form-group">
                            <a href="/"><button type="button" class="btn btn-info">Home</button></a>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <img src="/gambar/kamar/{{$reservation[0]->ik_gambar }}" alt="Image placeholder" class="img-md-fluid">
            </div>
        </div>
    </div>
</section>


@endsection
