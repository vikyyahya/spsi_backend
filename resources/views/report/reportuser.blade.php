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

        div.a {
            text-align: center;
        }

        div.b {
            text-align: left;
        }

        div.c {
            text-align: right;
        }

        div.d {
            text-align: justify;
        }

        .column {
            float: left;
            width: 33.33%;
            padding: 10px;
            height: 100px;
            /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
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

    <br>
    <br>
    <p>
        Dengan ini menyatakan bersedia menjadi anggota serikat SPSI, bersedia membayar Rp. 7000 untuk keperluan check of system (COS) dan bersedia mematuhi aturan yang berlaku.
    </p>

    </br>
    <div class="c">
        <p>Tangerang, {{ now()->day.'-'.now()->month.'-'.now()->year }}</p>
        <br>
    </div>
    <div class="row ">
        <div class="column">
            <p> Mengetahui</p>
            <br>
            <br>
            <br>
            (.................)

        </div>
        <div class="column">
            <p> Menyetujui</p>
            <br>
            <br>
            <br>
            (.................)

        </div>
        <div class="column">
            <p> Pemohon</p>
            <br>
            <br>
            <br>
            (.................)

        </div>
    </div>




</body>

</html>