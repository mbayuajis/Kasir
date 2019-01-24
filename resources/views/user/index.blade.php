@extends('layouts.master')

@section('content')
<!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1>
                                <b>DATA USER</b>
                            </h1>
                        
                        </div>
                        <script src="jquery-3.1.1.min.js"></script>
                        
                        <div class="body">
                            <div class="form-group">
                                <a class="btn btn-primary" data-toggle="modal" data-target="#mybar3"><i class="material-icons">add_circle_outline</i>Tambah Data</a>        
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID Pegawai</th>
                                            <th>Nama Pegawai</th>                                          
                                            <th>Alamat</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)

                                        <tr>
                                            <td>{{ $user->id_pegawai }}</td>
                                            <td>{{ $user->nama_pegawai }}</td>
                                            <td>{{ $user->alamat }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->password }}</td>
                                            <td><img src="storage/avatars/{{ $user->id_pegawai }}.png" width="50" height="50"></td>
                                            <td>
                                                <a href="" class="btn btn-success" data-toggle="modal" data-target="#mybar4"><i class="material-icons">mode_edit</i></a>
                                                <a href="" class="btn btn-danger"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>    

                                        @endforeach                                   
                                    </tbody>
                                </table>                            
                            </div>

<!-- Modal Tambah User -->
<div class="modal fade" id="mybar3">
<div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" align="center">Tambah User</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="/user/store" method="POST" class="col" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="form-group">
                <div class="form-line">
                <label for="id">ID Pegawai</label>
                <input type="text" name="id_pegawai" placeholder="Masukkan ID Pegawai" class="form-control" id="id" value="{{ old('id_pegawai') }}">
                @if ($errors->has('id_pegawai'))
                    <div class="alert alert-danger">
                        {{ $errors->first('id_pegawai') }}
                    </div>
                @endif
                </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                <label for="nama">Nama Pegawai</label>
                <input type="text" name="nama_pegawai" placeholder="Masukkan Nama Pegawai" class="form-control" id="nama" required value="{{ old('nama_pegawai') }}">
                @if ($errors->has('nama_pegawai'))
                    <div class="alert alert-danger">
                        {{ $errors->first('nama_pegawai') }}
                    </div>
                @endif
            </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" placeholder="Masukkan Alamat" class="form-control" id="alamat" required>{{ old('alamat') }}</textarea>
                @if ($errors->has('alamat'))
                    <div class="alert alert-danger">
                        {{ $errors->first('alamat') }}
                    </div>
                @endif
            </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                <label for="us">Username</label>
                <input type="text" name="username" placeholder="Masukkan Username" class="form-control" id="us" required value="{{ old('username') }}">
                @if ($errors->has('username'))
                    <div class="alert alert-danger">
                        {{ $errors->first('username') }}
                    </div>
                @endif
            </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                <label for="ps">Password</label>
                <input type="password" name="password" placeholder="Masukkan Password" class="form-control" id="ps" required>
                @if ($errors->has('password'))
                    <div class="alert alert-danger">
                        {{ $errors->first('password') }}
                    </div>
                @endif
            </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                <label for="foto">Foto</label>
                <input type="file" name="foto" class="form-control" id="foto" value="">
                @if ($errors->has('foto'))
                    <div class="alert alert-danger">
                        {{ $errors->first('foto') }}
                    </div>
                @endif
            </div>
            </div>
                <input type="submit" name="Simpan" value="Simpan" class="btn btn-success">
    </form>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal Edit User -->                        
<div class="modal fade" id="mybar4">
<div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" align="center">Edit User</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="#" method="POST" class="col">            
              <div class="form-group">
                <div class="form-line">
                <label for="id">ID Pegawai</label>
                <input type="text" name="idpegawa" placeholder="Masukkan ID Pegawai" class="form-control" id="id">
                </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                <label for="nama">Nama Pegawai</label>
                <input type="text" name="namabarang" placeholder="Masukkan Nama Pegawai" class="form-control" id="nama">
            </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" placeholder="Masukkan Alamat" class="form-control" id="alamat"></textarea>
            </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                <label for="us">Username</label>
                <input type="text" name="us" placeholder="Masukkan Username" class="form-control" id="us">
            </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                <label for="ps">Password</label>
                <input type="password" name="ps" placeholder="Masukkan Password" class="form-control" id="ps">
            </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                <label for="foto">Foto</label>
                <input type="file" name="foto" class="form-control" id="foto">
            </div>
            </div>
                <input type="submit" name="Simpan" value="Simpan" class="btn btn-success">
    </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection