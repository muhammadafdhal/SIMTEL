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
        <h5>Invoice Hotel The Nancy's Home Stay</h4>
        </h5>
    </center>
    <br>
    <br>


    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama Lengkap :</th>
                <td>{{$reservation[0]->name}}</td>
            </tr>

            <tr>
                <th>No Identitas :</th>
                <td>{{$reservation[0]->us_identitas}}</td>
            </tr>

            <tr>
                <th>Alamat :</th>
                <td>{{$reservation[0]->us_alamat}}</td>
            </tr>

            <tr>
                <th>No Telp :</th>
                <td>{{$reservation[0]->us_telp}}</td>
            </tr>

            <tr>
                <th>No Kamar :</th>
                <td>{{$reservation[0]->ik_nomor}}</td>
            </tr>

            <tr>
                <th>Kategori Kamar :</th>
                <td>{{$reservation[0]->hj_kategori}}</td>
            </tr>

            <tr>
                <th>Jumlah Deposite :</th>
                <td>Rp. {{$reservation[0]->deposite}}</td>
            </tr>

            <tr>
                <th>Check In :</th>
                <td>{{$reservation[0]->res_checkin}}</td>
            </tr>

            <tr>
                <th>Check Out :</th>
                <td>{{$reservation[0]->res_checkout}}</td>
            </tr>

        </thead>
    </table>

</body>

</html>
