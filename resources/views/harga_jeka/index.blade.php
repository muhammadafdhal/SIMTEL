@extends('template.app')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Table Promo</h3>
        <br>
        <br>
        @if(Auth::user()->level == 'Resepsionis')

        <div class="col-md-2">
            <!-- <td>
                <a href="/harga_jeka/tambah"><button type="button" class="btn btn-block btn-info">Tambah</button></a>
            </td> -->

        </div>
        @endif
    </div>


    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Kategori Kamar</th>
                    <th>Harga Kamar</th>
                    @if(Auth::user()->level == 'Resepsionis')
                    <th>Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($harga_jeka as $key => $p)
                <tr>
                    <td>{{$p->hj_kategori}}</td>
                    <td>Rp. {{$p->hj_harga}}</td>
                    @if(Auth::user()->level == 'Resepsionis')
                    <td>
                        <a class="btn btn-primary btn-sm" href="/harga_jeka/edit/{{ $p->hj_id }}">
                            <i class="fa fa-dot-circle-o"></i> Edit
                        </a>
                        <br />
                        <br />
                        <form id="form-delete-{{$key}}" method="POST" action="/harga_jeka/delete/{{ $p->hj_id }}">
                            {{csrf_field()}} {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Delete
                            </button>
                        </form>
                    </td>
                    @endif
                </tr>

                @endforeach


                </tfoot>
        </table>
    </div>
    <!-- /.box-body -->
</div>
@endsection
