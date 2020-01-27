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
                <form id="form-tambah" action="/info_kamar/edit/{{ $kamar->ik_id }}/save" method="post"
                    enctype="multipart/form-data">
                    @csrf {{ method_field('patch')}}
                    <div class="box-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nomor Kamar</label>
                            <input type="text" name="ik_nomor" class="form-control" id="exampleInputEmail1"
                                placeholder="" value="{{ $kamar->ik_nomor }}" required>
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

                        <!-- <div class="form-group">
                            <label>Jenis Kamar</label>
                            <select name="ik_jenis" class="form-control">
                                <option value="Mewah" <?php if ($kamar->ik_jenis=="Mewah") {echo "selected";} ?>>Deluxe Double</option>
                                <option value="Menengah" <?php if ($kamar->ik_jenis=="Menengah") {echo "selected";} ?>>Deluxe Single</option>
                                <option value="Reguler" <?php if ($kamar->ik_jenis=="Reguler") {echo "selected";} ?>>Standart Budget</option>
                
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Harga Kamar</label>
                            <select name="ik_harga" class="form-control">
                            <option value="">Pilih Harga Kamar </option>
                                <option value="100000" <?php if ($kamar->ik_harga=="100000") {echo "selected";} ?>>Rp. 100.000</option>
                                <option value="150000" <?php if ($kamar->ik_harga=="150000") {echo "selected";} ?>>Rp. 150.000</option>
                                <option value="200000" <?php if ($kamar->ik_harga=="200000") {echo "selected";} ?>>Rp. 200.000</option>
                                <option value="250000" <?php if ($kamar->ik_harga=="250000") {echo "selected";} ?>>Rp. 250.000</option>
                                <option value="300000" <?php if ($kamar->ik_harga=="300000") {echo "selected";} ?>>Rp. 300.000</option>
                            </select>
                        </div> -->

                        <!-- <div class="form-group">
                            <label for="exampleInputEmail1">Harga Kamar</label>
                            <input type="number" name="ik_harga" class="form-control" id="exampleInputEmail1"
                                placeholder="" value="{{ $kamar->ik_harga }}" required>
                        </div> -->

                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" required name="ik_gambar" id="exampleInputFile">

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
