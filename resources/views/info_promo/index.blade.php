@extends('template.app')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Table Promo</h3>
        <br>
        <br>
        @if(Auth::user()->level == 'Resepsionis')

        <div class="col-md-2">
            <td>
                <a href="/info_promo/tambah"><button type="button" class="btn btn-block btn-info">Tambah</button></a>
            </td>

        </div>
        @endif
    </div>


    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Keterangan Promo</th>
                    <th>Kode Promo</th>
                    <th>Harga Promo/Potongan</th>
                    <th>Gambar</th>
                    @if(Auth::user()->level == 'Resepsionis')
                    <th>Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($info_promo as $key => $p)
                <tr>
                    <td>{{$p->ip_keterangan}}</td>
                    <td>{{$p->ip_kode}}</td>
                    <td>{{$p->ip_hargapromo}}</td>
                    <td><img src="/gambar/promo/{{$p->ip_gambar }}" class="img-fluid img-thumbnail"
                            alt="Responsive image"></td>
                            @if(Auth::user()->level == 'Resepsionis')
                    <td>
                        <a class="btn btn-primary btn-sm" href="/info_promo/edit/{{ $p->ip_id }}">
                            <i class="fa fa-dot-circle-o"></i> Edit
                        </a>
                        <br />
                        <br />
                        <form id="form-delete-{{$key}}" method="POST" action="/info_promo/delete/{{ $p->ip_id }}">
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
