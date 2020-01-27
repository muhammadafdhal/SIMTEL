<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="adminlte/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

    </style>

    <center>
        <h5>Rekap Laporan Reservation Hotel</h4>
        </h5>
    </center>
    <br>
    <br>


    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Tamu</th>
                <th>Nomor Kamar</th>
                <th>Harga Promo/Potongan</th>
                <th>Status</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Lama Menginap</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($reservation as $key => $p)
            <tr>

                <td>{{ $i++ }}</td>
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

            </tr>

            @endforeach

        </tbody>
    </table>

</body>

</html>
