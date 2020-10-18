@extends('home')

@section('content')

<div class="row">
    <div class="col-md-12">
        <form action="/updatestruktur" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Struktur</h3>
                </div>

                <div class="card-body">

                    @if($errors->any())
                    <div class="alert alert-danger">
                        {{implode('', $errors->all(':message'))}}
                    </div>
                    @endif

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" value="{{$struktur->nama}}" placeholder="" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" value="{{$struktur->jabatan}}" name="jabatan" placeholder="" class="form-control">
                    </div>



                    <div class="card-footer">

                        <a href="/user" class="btn btn-default">Kembali</a>
                        &nbsp;&nbsp;
                        <input type="submit" value="Simpan" class="pull-right btn btn-primary">

                    </div>

                </div>
            </div>
        </form>

    </div>
</div>



@endsection