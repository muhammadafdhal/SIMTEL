@extends('template.app')

@section('content')

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Quick Example</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form id="form-tambah" action="/harga_jeka/tambah/save" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label>Ketegori Kamar</label>
                            <select name="hj_kategori" required class="form-control">
                                <option value="">Pilih Kategori kamar </option>
                                <option value="Deluxe Double">Deluxe Double</option>
                                <option value="Deluxe Single">Deluxe Single</option>
                                <option value="Standart Budget">Standart Budget</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Harga Kamar</label>
                            <select name="hj_harga" required class="form-control">
                            <option value="">Pilih Harga Kamar </option>
                                <option value="100000">Rp. 100.000</option>
                                <option value="150000">Rp. 150.000</option>
                                <option value="200000">Rp. 200.000</option>
                                <option value="250000">Rp. 250.000</option>
                                <option value="300000">Rp. 300.000</option>
                            </select>
                        </div>

                        <!-- <div class="form-group">
                            <label for="exampleInputPassword1">Harga Promo/Potongan</label>
                            <input type="number" name="ip_hargapromo" class="form-control" id="exampleInputPassword1"
                                placeholder="">
                        </div> -->

                        
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Save</button>

                        <a href="/harga_jeka" class="btn btn-danger">
                            <i class="fa fa-arrow-circle-left"></i> Kembali
                        </a>

                    </div>
                </form>
            </div>
            <!-- /.box -->





        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>


@endsection
