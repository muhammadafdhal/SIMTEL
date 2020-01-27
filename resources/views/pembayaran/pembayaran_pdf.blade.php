<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="adminlte/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

{{-- https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css --}}

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

    </style>

    <center>
        <h5>Rekap Laporan Pembayaran Hotel</h4>
        </h5>
    </center>
    <br>
    <br>


    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                    <th>NO</th>
                <th>Nama Tamu</th>
                <th>Nomor Kamar</th>
                <th>Harga/malam</th>
                <th>Harga Promo</th>
                <th>Lama Menginap</th>
                <th>Total Harga</th>
                <th>Total Bayar</th>

            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($pembayaran as $key => $p)
            <tr>
                <td>{{$no++}}</td>
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
                        echo "$jumlah";
                        ?>
                </td>



                <td><?php 
                        $total = $jumlah - $p->ip_hargapromo;
                        echo "Rp. $total";
                        ?></td>

            </tr>

            @endforeach


        </tbody>
    </table>

</body>

</html>
