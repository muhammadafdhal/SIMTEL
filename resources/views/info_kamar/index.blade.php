@extends('template.app')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Table User</h3>
        <br>
        <br>
        @if(Auth::user()->level == 'Resepsionis')
        <div class="col-md-2">
            <td>
                <a href="/info_kamar/tambah"><button type="button" class="btn btn-block btn-info">Tambah</button></a>
            </td>

        </div>
        @endif
    </div>


    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nomor Kamar</th>
                    <th>Jenis Kamar</th>
                    <th>Harga Kamar</th>
                    <th>Fasilitas</th>
                    <th>Status Kamar</th>
                    <th>Gambar</th>
                    @if(Auth::user()->level == 'Resepsionis')
                    <th>Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($kamar as $key => $p)
                <tr>
                    <td>{{$p->ik_nomor}}</td>
                    <td>{{$p->hj_kategori}}</td>

                    <td>Rp. {{$p->hj_harga}}</td>
                    <td>{{$p->ik_fasilitas}}</td>

                    <td>{{$p->ik_status}}</td>
                    <td><img src="/gambar/kamar/{{$p->ik_gambar }}" class="img-fluid img-thumbnail"
                            alt="Responsive image"></td>
                    @if(Auth::user()->level == 'Resepsionis')
                    <td>
                        <a class="btn btn-primary btn-sm" href="/info_kamar/edit/{{ $p->ik_id }}">
                            <i class="fa fa-dot-circle-o"></i> Edit
                        </a>
                        <br />
                        <br />
                        <form id="form-delete-{{$key}}" method="POST" action="/info_kamar/delete/{{ $p->ik_id }}">
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
