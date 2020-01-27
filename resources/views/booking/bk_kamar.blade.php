@extends('template.upp')

@section('content')


<section class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-5">Reservation Form</h2>
                <form action="/booking/{{$kamar->ik_id}}/save" method="post">
                    @csrf
                    <div class="row">

                        <div class="col-sm-6 form-group">

                            <label for="">Nomor Kamar</label>
                            <div style="position: relative;">
                                <input type='number' readonly name="res_ik_id" required value="{{ $kamar->ik_nomor }}"
                                    class="form-control" id='arrival_date' />
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">

                            <label for="">Kode Promo</label>
                            <div style="position: relative;">
                                <select class="form-control" name="res_ip_id" id="promo">
                                    <option value="" disable="true" required selected="true">Silahkan Pilih Kode
                                    </option>
                                    @foreach ($info_promo as $key => $value)
                                    <option value="{{$value->ip_id}}">{{ $value->ip_kode }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">

                            <label for="">Masukan Deposite</label>
                            <div style="position: relative;">
                                <input type="number" name="deposite" required
                                    class="form-control" />
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">

                            <label for="">Check In</label>
                            <div style="position: relative;">
                                <input type="date" name="res_checkin" required class="form-control" id='arrival_date' />
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">

                            <label for="">Check Out</label>
                            <div style="position: relative;">

                                <input type="date" name="res_checkout" required class="form-control"
                                    id='departure_date' />
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="submit" value="Pesan Sekarang" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <h3 class="mb-5">Ruangan Kamar</h3>
                <div class="media d-block room mb-0">
                    <figure>
                        <img src="/gambar/kamar/{{$kamar->ik_gambar }}" class="img-fluid img-thumbnail"
                            alt="Responsive image">
                    </figure>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
