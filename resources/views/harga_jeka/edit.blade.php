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
            <form id="form-tambah" action="/harga_jeka/edit/{{ $harga_jeka->hj_id }}/save" method="post" enctype="multipart/form-data">
                    @csrf {{ method_field('patch')}}
                    <div class="box-body">

                        <div class="form-group">
                            <label>Ketegori Kamar</label>
                            <select name="hj_kategori" required class="form-control">
                                <option value="">Pilih Kategori kamar </option>

                                <option value="Deluxe Double" <?php if ($harga_jeka->hj_kategori=="Deluxe Double") {echo "selected";} ?>>Deluxe Double</option>
                                <option value="Deluxe Single" <?php if ($harga_jeka->hj_kategori=="Deluxe Single") {echo "selected";} ?>>Deluxe Single</option>
                                <option value="Standart Budget" <?php if ($harga_jeka->hj_kategori=="Standart Budget") {echo "selected";} ?>>Standart Budget</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Harga Kamar</label>
                            <select name="hj_harga" required class="form-control">
                            <option value="">Pilih Harga Kamar </option>
                                <option value="100000" <?php if ($harga_jeka->hj_harga=="100000") {echo "selected";} ?>>Rp. 100.000</option>
                                <option value="150000" <?php if ($harga_jeka->hj_harga=="150000") {echo "selected";} ?>>Rp. 150.000</option>
                                <option value="200000" <?php if ($harga_jeka->hj_harga=="200000") {echo "selected";} ?>>Rp. 200.000</option>
                                <option value="250000" <?php if ($harga_jeka->hj_harga=="250000") {echo "selected";} ?>>Rp. 250.000</option>
                                <option value="300000" <?php if ($harga_jeka->hj_harga=="300000") {echo "selected";} ?>>Rp. 300.000</option>
                            </select>
                        </div>


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
