@extends('template.app')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Table User</h3>
        <br>
        <br>

        <div class="col-md-2">
            <td>
                <a href="/user/tambah"><button type="button" class="btn btn-block btn-info">Tambah</button></a>
            </td>

        </div>
    </div>


    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>No Identitas</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $key => $p)
                <tr>
                    <td>{{$p->name}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->level}}</td>
                    <td>{{$p->us_identitas}}</td>
                    <td>{{$p->us_alamat}}</td>
                    <td>{{$p->us_telp}}</td>
                    <td>
                            <a class="btn btn-primary btn-sm" href="/user/edit/{{ $p->id }}">
                                <i class="fa fa-dot-circle-o"></i> Edit
                            </a>
                            <br />
                            <br />
                        <form id="form-delete-{{$key}}" method="POST" action="/user/delete/{{ $p->id }}">
                                {{csrf_field()}} {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Delete
                                </button>
                            </form>
                        </td>
                </tr>

                @endforeach


                </tfoot>
        </table>
    </div>
    <!-- /.box-body -->
</div>
@endsection
