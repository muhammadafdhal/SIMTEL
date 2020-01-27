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
                <form id="form-tambah" action="/info_promo/edit/{{ $info_promo->ip_id }}/save" method="post"
                    enctype="multipart/form-data">
                    @csrf {{ method_field('patch')}}
                    <div class="box-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Keterangan Promo</label>
                            <textarea type="text" name="ip_keterangan" class="form-control" id="exampleInputEmail1"
                                placeholder="" required>{{ $info_promo->ip_keterangan }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Promo</label>
                            <input type="number" name="ip_kode" class="form-control" id="exampleInputEmail1"
                                placeholder="" value="{{ $info_promo->ip_kode }}" required>
                        </div>

                        <div class="form-group">
                            <label>Harga Promo</label>
                            <select name="ip_hargapromo" required class="form-control">
                                <option value="">Pilih Harga Promo </option>
                                <option value="50000"
                                    <?php if ($info_promo->ip_hargapromo=="50000") {echo "selected";} ?>>Rp. 50.000
                                </option>
                                <option value="100000"
                                    <?php if ($info_promo->ip_hargapromo=="100000") {echo "selected";} ?>>Rp. 100.000
                                </option>
                                <option value="150000"
                                    <?php if ($info_promo->ip_hargapromo=="150000") {echo "selected";} ?>>Rp. 150.000
                                </option>
                            </select>
                        </div>

                        <!-- <div class="form-group">
                            <label for="exampleInputPassword1">Harga Promo/Potongan</label>
                            <input type="number" name="ip_hargapromo" class="form-control" id="exampleInputPassword1"
                                placeholder="" value="{{ $info_promo->ip_hargapromo }}" required>
                        </div> -->

                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" required name="ip_gambar" id="exampleInputFile">

                            <p class="help-block">Example block-level help text here.</p>
                        </div>


                        {{-- <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">

                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div> --}}
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Save</button>

                        <a href="/info_promo" class="btn btn-danger">
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
