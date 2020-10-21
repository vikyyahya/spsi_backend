@extends('home')

@section('content')

{{-- Notifikasi form validasi --}}
@if ($errors->has('file'))
<span class="invalid-feedback" role="alert">
    <strong>{{$errors->first('file')}}</strong>
</span>
@endif

{{-- notifikasi sukses --}}
@if ($sukses = Session::get('sukses'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <i class="icon fas fa-check"></i> {{ $sukses }}
</div>
@endif

{{-- <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#importExcel">
    <i class="fas fa-file-excel"></i> Import Excel
</button> --}}

<br />



<a href="/adduser" class="btn btn-primary ml-3">
    <i class="fa fa-plus nav-icon"></i>
</a>

<br />
<br />

<div class="card m-3" style="border-top: 2px solid">

    <div class="card-header ">
        <h4>User</h4>
    </div>

    <div class="card-body">
        <table class="table table-striped table-bordered" id="myTable">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Nik</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Plant</th>
                    <th class="text-center">Bagian</th>
                    <th class="text-center">Tempat lahir</th>
                    <th class="text-center">Tanggal lahir</th>
                    <th class="text-center">Jenis kelamin</th>
                    <th class="text-center">Agama</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Status</th>
                    <th class="text-center" width="8%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users ?? '' as $s)
                <tr>
                    <td>{{ ($users->currentpage()-1) * $users->perpage() + $loop->index + 1 }}</td>
                    <td>{{$s->name}}</td>
                    <td>{{$s->email}}</td>
                    <td>{{$s->nik}}</td>
                    <td>{{$s->status}}</td>
                    <td>{{$s->plant ?? '' }}</td>
                    <td>{{$s->bagian}}</td>
                    <td>{{$s->tempat_lahir}}</td>
                    <td>{{$s->tanggal_lahir}}</td>
                    <td>{{$s->jenis_kelamin}}</td>
                    <td>{{$s->agama}}</td>
                    <td>{{$s->alamat}}</td>
                    @if($s->status == 'belum diproses')
                    <td>
                        <p class="text-danger"> {{$s->status}} </p>
                    </td>

                    @elseif($s->status == 'aktif')
                    <td>
                        <p class="text-success"> {{$s->status}} </p>
                    </td>

                    @else
                    <td>
                        <p class="text-warning"> {{$s->status}} </p>
                    </td>

                    @endif
                    <td>
                        <div class="btn-group">

                            <!-- URL::to('/admin/category/detail.id='.$cate-id -->
                            <a href="/print-user/{{$s->id}}" class="btn btn-success  btn-sm" data-toggle="tootip" data-placement="bottom" title="Edit">
                                <i class="fa fa-print nav-icon"></i>
                            </a>
                            <a href="/edituser/{{$s->id}}" class="btn btn-warning  btn-sm" data-toggle="tootip" data-placement="bottom" title="Edit">
                                <i class="fa fa-edit nav-icon"></i>
                            </a>
                            <a onClick="return confirm('Yakin ingin menghapus data?')" href="/user/{{$s->id}}/delete" class="btn btn btn-danger btn-sm">
                                <i class="fa fa-trash nav-icon"></i>
                            </a>

                        </div>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            {{$users->links()}}
        </ul>
    </div>
</div>


@endsection