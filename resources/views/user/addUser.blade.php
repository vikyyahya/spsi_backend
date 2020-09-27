@extends('home')

@section('content')

<div class="row">
	<div class="col-md-12">
		<form action="/createuser" method="POST">

			@csrf

			<div class="card" style="">
				<div class="card-header">
					<h3 class="card-title">Tambah User</h3>
				</div>

				<div class="card-body">

					@if($errors->any())
					<div class="alert alert-danger">
						{{implode('', $errors->all(':message'))}}
					</div>
					@endif

					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="name" value="{{ old('name')}}" placeholder="" class="form-control" required autofocus>
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" placeholder="" class="form-control">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" placeholder="" class="form-control">
					</div>

					<div class="form-group">
						<label>Konfirmasi Password</label>
						<input type="password" name="syncpassword" placeholder="" class="form-control">
					</div>

					<div class="form-group">
						<label>Level</label>
						{{ Form::select('id_level', $level, null, ['placeholder' => 'Pilih user level...', 'required', 'class' => 'form-control']) }}
					</div>

					<div class="form-group">
						<label>Nik</label>
						<input type="text" name="nik" value="{{ old('nama_perusahaan')}}" placeholder="" class="form-control" required autofocus>
					</div>

					<div class="form-group">
						<label>Plant</label>
						<input type="text" name="plant" value="{{ old('produk')}}" placeholder="" class="form-control" autofocus>
					</div>

					<div class="form-group">
						<label>Bagian</label>
						<input type="text" name="bagian" value="{{ old('no_telp')}}" placeholder="" class="form-control" autofocus>
					</div>

					<div class="form-group">
						<label>Tempat Lahir</label>
						<input type="text" name="tempat_lahir" value="{{ old('alamat_perusahaan')}}" placeholder="" class="form-control" required autofocus>
					</div>

					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" name="tanggal_lahir" value="{{ old('npwp')}}" placeholder="" class="form-control" required autofocus>
					</div>

					<div class="form-group">
						<label>Jenis Kelamin</label>
						<input type="text" name="jenis_kelamin" value="{{ old('npwp')}}" placeholder="" class="form-control" required autofocus>
					</div>

					<div class="form-group">
						<label>Agama</label>
						<input type="text" name="agama" value="{{ old('npwp')}}" placeholder="" class="form-control" required autofocus>
					</div>

					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" value="{{ old('npwp')}}" placeholder="" class="form-control" required autofocus>
					</div>

					<div class="card-footer">

						<a href="/user" class="btn btn-default">Back</a>
						&nbsp;&nbsp;
						<input type="submit" value="Save" class="pull-right btn btn-primary">

					</div>

				</div>
			</div>
		</form>

	</div>
</div>



@endsection