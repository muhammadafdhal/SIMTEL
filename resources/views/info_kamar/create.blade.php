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
                <form id="form-tambah" action="/info_kamar/tambah/save" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nomor Kamar</label>
                            <input type="number" required name="ik_nomor" class="form-control" id="exampleInputEmail1"
                                placeholder="">
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-12"><label for=""><strong class="card-title">Tentukan
                                        Kategori Kamar</strong></label></div>
                            <div class="col-12 col-md-12">
                                <select class="form-control" name="ik_hj_id" id="perusahaan" required>
                                    <option value="" disable="true" selected="true">Silahkan Pilih</option>
                                    @foreach ($harga_jeka as $key => $value)
                                    <option value="{{$value->hj_id}}">{{ $value->hj_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleInputEmail1">Harga Kamar</label>
                            <input type="number" name="ik_harga" class="form-control" id="exampleInputEmail1"
                                placeholder="">
                        </div> -->

                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" required name="ik_gambar" id="exampleInputFile">
                        </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Fasilitas</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="ik_fasilitas[]" value="TV">TV
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="ik_fasilitas[]" value="Wifi">Wifi
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="ik_fasilitas[]" value="Bathtub">Bathtub
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="ik_fasilitas[]" value="Kolam Renang">Kolam Renang
                                    </label>
                                </div>
                            </div>

                       

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Save</button>

                        <a href="/info_kamar" class="btn btn-danger">
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
