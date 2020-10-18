@extends('home')

@section('content')

<div class="row">
    <div class="col-md-12">
        <form action="/createkegiatan" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Kegiatan</h3>
                </div>

                <div class="card-body">

                    @if($errors->any())
                    <div class="alert alert-danger">
                        {{implode('', $errors->all(':message'))}}
                    </div>
                    @endif

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ old('name')}}" placeholder="" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" placeholder="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Gambar</label>

                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="file">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>

                        </div>

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