@extends('template.app')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Table Reservation</h3>
        <br>
        <br>

        {{-- <div class="col-md-2">
            <td>
                <a href="/reservation/tambah"><button type="button" class="btn btn-block btn-info">Tambah</button></a>
            </td>

        </div> --}}

        <td>
            <a href="/reservation/cetak_pdf"><button type="button" class="btn btn-info">Cetak Laporan</button></a>
        </td>
    </div>


    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Tamu</th>
                    <th>Nomor Kamar</th>
                    <th>Harga Promo/Potongan</th>
                    <th>Status</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Lama Menginap</th>
                    @if(Auth::user()->level == 'Resepsionis')
                    <th>Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($reservation as $key => $p)
                <tr>
                    <td>{{$p->name}}</td>
                    <td>{{$p->ik_nomor}}</td>
                    <td>{{$p->ip_hargapromo}}</td>
                    <td>{{$p->res_status}}</td>
                    <td>{{$p->res_checkin}}</td>
                    <td>{{$p->res_checkout}}</td>
                    <td><?php 
                        $start_date = new DateTime($p->res_checkin);
                        $end_date = new DateTime($p->res_checkout);
                        $interval = $start_date->diff($end_date);
                        echo "$interval->days hari "; // hasil : 217 hari
                        ?>
                        </td>
                        @if(Auth::user()->level == 'Resepsionis')
                    <td>
                        {{-- <a class="btn btn-primary btn-sm" href="/reservation/edit/{{ $p->res_id }}">
                            <i class="fa fa-dot-circle-o"></i> Edit
                        </a>
                        <br />
                        <br /> --}}
                        @if($p->res_status=="Booking")
                        <a class="btn btn-success btn-sm" href="/reservation/save/{{ $p->res_id }}">
                            <i class="fa fa-check"></i> Check IN
                        </a>
                        @elseif($p->res_status=="Dipakai")
                        <a class="btn btn-danger btn-sm" href="/reservation/batal/{{ $p->res_id }}">
                            <i class="fa fa-ban"></i> Check Out
                        </a>
                        @elseif($p->res_status=="Selesai")
                        <a class="btn btn-danger btn-sm" href="/reservation/kosongkan/{{ $p->ik_id }}">
                            <i class="fa fa-ban"></i> Promosikan Kamar
                        </a>
                        @else
                        <form id="form-delete-{{$key}}" method="POST" action="/reservation/delete/{{ $p->res_id }}">
                            {{csrf_field()}} {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Delete
                            </button>
                        </form>
                        @endif
                        <br />
                        <br />
                    </td>
                    @endif
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>
@endsection
