@extends('home')

@section('content')

<div class="row">
    <div class="col-md-12">
        <form action="/updateberita/{{$berita->id}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ubah Informasi</h3>
                </div>

                <div class="card-body">

                    @if($errors->any())
                    <div class="alert alert-danger">
                        {{implode('', $errors->all(':message'))}}
                    </div>
                    @endif

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{$berita->title}}" placeholder="" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" value="{{$berita->deskripsi}}" placeholder="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <div class="col-2">
                            <img src="{{asset ('uploads/'. $berita->image)}}" alt="I" class="image mb-1" style="width: 30rem;">
                        </div>
                        <input type="file" name="file" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="card-footer">

                        <a href="/berita" class="btn btn-default">Kembali</a>
                        &nbsp;&nbsp;
                        <input type="submit" value="Simpan" class="pull-right btn btn-primary">

                    </div>

                </div>
            </div>
        </form>

    </div>
</div>



@endsection