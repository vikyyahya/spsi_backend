<!DOCTYPE html>
<html>

<head>
    <title>Data User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 12pt;
        }

        .equalDivide tr td {
            width: 25%;
        }
    </style>

    <center>
        <h5>DATA ANGGOTA SPSI</h5>
        </br>
        <h5>PT PANARUB INDUSTRI</h5>

    </center>


    <table class="equalDivide" class="equalDivide" cellpadding="8" cellspacing="0" width="70%" border="0" id="myTable">
        <tr>
            <td>Nama</td>
            <td>: {{$user->name}}</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>: {{$user->nik}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: {{$user->email}}</td>
        </tr>
        <tr>
            <td>Plant</td>
            <td>: {{$user->plant}}</td>
        </tr>
        <tr>
            <td>Bagian</td>
            <td>: {{$user->bagian}}</td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>: {{$user->tempat_lahir}}</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>: {{$user->tanggal_lahir}}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: {{$user->jenis_kelamin}}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: {{$user->agama}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{$user->alamat}}</td>
        </tr>
    </table>


</body>

</html>