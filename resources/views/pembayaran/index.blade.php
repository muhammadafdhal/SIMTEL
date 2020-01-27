@extends('template.app')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Table Pembayaran</h3>
        <br>
        <br>

        {{-- <div class="col-md-2">
            <td>
                <a href="/pembayaran/tambah"><button type="button" class="btn btn-block btn-info">Tambah</button></a>
            </td>

        </div> --}}

        <td>
            <a href="/pembayaran/cetak_pdf"><button type="button" class="btn btn-info">Cetak Laporan</button></a>
        </td>
    </div>


    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama Tamu</th>
                    <th>Nomor Kamar</th>
                    <th>Harga/malam</th>
                    <th>Harga Promo</th>
                    <th>Lama Menginap</th>
                    <th>Total Harga</th>
                    <th>Total Bayar</th>
                    @if(Auth::user()->level == 'Resepsionis')
                    <th>Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($pembayaran as $key => $p)
                <tr>
                    <td>{{$p->name}}</td>
                    <td>{{$p->ik_nomor}}</td>
                    <td>Rp. {{$p->hj_harga}}</td>
                    <td>Rp. {{$p->ip_hargapromo}}</td>

                    <td><?php 
                    $start_date = new DateTime($p->res_checkin);
                    $end_date = new DateTime($p->res_checkout);
                    $interval = $start_date->diff($end_date);
                    echo "$interval->days hari "; // hasil : 217 hari
                    ?>
                    </td>

                    <td><?php 
                        $jumlah = $interval->days * $p->hj_harga;
                        echo "Rp. $jumlah";
                        ?>
                    </td>



                    <td><?php 
                        $total = $jumlah - $p->ip_hargapromo;
                        echo "Rp. $total";
                        ?></td>
                         @if(Auth::user()->level == 'Resepsionis')

                    <td>
                        {{-- <a class="btn btn-primary btn-sm" href="/pembayaran/edit/{{ $p->pb_id }}">
                        <i class="fa fa-dot-circle-o"></i> Edit
                        </a>
                        <br />
                        <br /> --}}
                        <form id="form-delete-{{$key}}" method="POST" action="/pembayaran/delete/{{ $p->pb_id }}">
                            {{csrf_field()}} {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Delete
                            </button>
                        </form>
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
