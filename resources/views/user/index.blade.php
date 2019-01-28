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
                                            <th>Jabatan</th>
                                            <th>No. Telepon</th>
                                            <th>Username</th>
                                            {{-- <th>Password</th> --}}
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
                                            <td>Jabatan</td>
                                            <td>No. telp</td>
                                            <td>{{ $user->username }}</td>
                                            {{-- <td>{{ $user->password }}</td> --}}
                                            <td>{{ Html::image('storage/avatars/'.$user->id_pegawai.'.png', $user->id_pegawai.' Avatar', array('width' => '50', 'height' => '50')) }}</td>
                                            <td>
                                                <a href="/user/{{ $user->id_pegawai }}/edit" class="btn btn-success"><i class="material-icons">mode_edit</i></a>
                                                <form action="/user/{{ $user->id_pegawai }}" method="POST" style="display: inline-block;">
                                                    {{ csrf_field() }}
                                                    <button type="submit" name="submit" class="btn btn-danger">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                </form>
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
        <h4 class="modal-title" align="center">{{ (!empty($edituser)) ? "Edit" : "Tambah" }} User</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="/user{{ (!empty($edituser)) ? "/".$edituser->id_pegawai : "" }}" method="POST" class="col" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="form-line">
                <label for="nama">Nama Pegawai</label>
                <input type="text" name="nama_pegawai" placeholder="Masukkan Nama Pegawai" class="form-control" id="nama" value="{{ (!empty($edituser)) ? $edituser->nama_pegawai : old('nama_pegawai') }}">
                @if ($errors->has('nama_pegawai'))
                    @foreach ($errors->get('nama_pegawai') as $message)
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @endforeach
                @endif
            </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" placeholder="Masukkan Alamat" class="form-control" id="alamat">{{ (!empty($edituser)) ? $edituser->alamat : old('alamat') }}</textarea>
                @if ($errors->has('alamat'))
                    @foreach ($errors->get('alamat') as $message)
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @endforeach
                @endif
            </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                <label for="us">Username</label>
                <input type="text" name="username" placeholder="Masukkan Username" class="form-control" id="us" value="{{ (!empty($edituser)) ? $edituser->username : old('username') }}">
                @if ($errors->has('username'))
                    @foreach ($errors->get('username') as $message)
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @endforeach
                @endif
            </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                <label for="ps">Password</label>
                <input type="password" name="password" placeholder="Masukkan Password" class="form-control" id="ps" value="{{ (!empty($edituser)) ? $edituser->password : "" }}" {{ (!empty($edituser)) ? "disabled" : "" }}>
                @if ($errors->has('password'))
                    @foreach ($errors->get('password') as $message)
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @endforeach
                @endif
            </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                <label for="foto">Foto</label>
                <input type="file" name="foto" class="form-control" id="foto" value="">
                @if ($errors->has('foto'))
                    @foreach ($errors->get('foto') as $message)
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @endforeach
                @endif
            </div>
            </div>
            {!! (!empty($edituser)) ? '<input type="hidden" name="_method" value="PUT">' : "" !!}
                <input type="submit" name="Simpan" value="Simpan" class="btn btn-success">
    </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection