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
                <form id="form-tambah" action="/user/edit/{{ $user->id }}/save" method="post" enctype="multipart/form-data">
                    @csrf {{ method_field('patch')}}
                    <div class="box-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                placeholder="Enter Nama" value="{{ $user->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                placeholder="Enter email" value="{{ $user->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password" value="{{ $user->password }}" required>
                        </div>

                        <div class="form-group">
                            <label>Level</label>
                            <select name="level" class="form-control" required>
                                <option value="Tamu">Tamu</option>
                                <option value="Resepsionis">Resepsionis</option>
                                <option value="Manajer">Manajer</option>
                                <option value="Admin">Admin</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">No Identitas</label>
                            <input type="number" name="us_identitas" class="form-control" id="exampleInputEmail1"
                                placeholder="Enter email" value="{{ $user->us_identitas }}" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" name="us_alamat" class="form-control" id="exampleInputEmail1"
                                placeholder="Enter email" value="{{ $user->us_alamat }}" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">No Telp</label>
                            <input type="number" name="us_telp" class="form-control" id="exampleInputEmail1"
                                placeholder="Enter email" value="{{ $user->us_telp }}" required>
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

                        <a href="/user" class="btn btn-danger">
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
