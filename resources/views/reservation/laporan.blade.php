@extends('template.app')

@section('content')

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Rekap Laporan Reservation</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="/reservation/laporan/pilih_hari" method="post">
                    @csrf
                    <div class="col-md-6">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Input Tanggal</label>
                                <input type="date" name="awal" class="form-control" id="exampleInputEmail1">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Input Tanggal</label>
                                <input type="date" name="akhir" class="form-control" id="exampleInputEmail1">
                            </div>
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

            {{-- <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Rekap Laporan Reservation perbulan</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="/reservation/laporan/pilih_bulan" method="post">
                    @csrf
                    <div class="form-group col-md-6">
                        <label>Input Bulan</label>
                        <select name="bulan" class="form-control">
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="12">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div> --}}

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Rekap Laporan Reservation pertahun</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="/reservation/laporan/pilih_tahun" method="post">
                    @csrf

                    <div class="form-group col-md-12">
                        <label>Input Tahun</label>
                        <select name="tahun" class="form-control">
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

            <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
    </div>
    <!-- /.row -->
</section>

@endsection
