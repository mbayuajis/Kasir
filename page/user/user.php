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
                            <a class="btn btn-primary" data-toggle="modal" data-target="#mybar3"><i class="material-icons">add_circle_outline</i>Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID Pegawai</th>
                                            <th>Nama Pegawai</th>                                          
                                            <th>Alamat</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>201902003</td>
                                            <td>Anjas Madani Tahir</td>
                                            <td>Yogyakarta</td>
                                            <td>anjasmadani</td>
                                            <td>123457</td>
                                            <td>
                                            	<a href="" class="btn btn-success" data-toggle="modal" data-target="#mybar4"><i class="material-icons">mode_edit</i></a>
                                            	<a href="" class="btn btn-danger"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>                                       
                                    </tbody>
                                </table>                            
                            </div>

<!-- Modal Tambah User -->
<div class="modal fade" id="mybar3">
<div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah User</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="#" method="POST" class="col">            
              <div class="form-group">
                <label for="id">ID Pegawai</label>
                <input type="text" name="idpegawa" placeholder="Masukkan ID Pegawai" class="form-control" id="id">
            </div>
            <div class="form-group">
                <label for="nama">Nama Pegawai</label>
                <input type="text" name="namabarang" placeholder="Masukkan Nama Pegawai" class="form-control" id="nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" placeholder="Masukkan Alamat" class="form-control" id="alamat"></textarea>
            </div>
            <div class="form-group">
                <label for="us">Username</label>
                <input type="text" name="us" placeholder="Masukkan Username" class="form-control" id="us">
            </div>
            <div class="form-group">
                <label for="ps">Password</label>
                <input type="password" name="ps" placeholder="Masukkan Password" class="form-control" id="ps">
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
        <h4 class="modal-title">Edit User</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="#" method="POST" class="col">            
              <div class="form-group">
                <label for="id">ID Pegawai</label>
                <input type="text" name="idpegawa" placeholder="Masukkan ID Pegawai" class="form-control" id="id">
            </div>
            <div class="form-group">
                <label for="nama">Nama Pegawai</label>
                <input type="text" name="namabarang" placeholder="Masukkan Nama Pegawai" class="form-control" id="nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" placeholder="Masukkan Alamat" class="form-control" id="alamat"></textarea>
            </div>
            <div class="form-group">
                <label for="us">Username</label>
                <input type="text" name="us" placeholder="Masukkan Username" class="form-control" id="us">
            </div>
            <div class="form-group">
                <label for="ps">Password</label>
                <input type="password" name="ps" placeholder="Masukkan Password" class="form-control" id="ps">
            </div>
                <input type="submit" name="Simpan" value="Simpan" class="btn btn-success">
    </form>
      </div>
    </div>
  </div>
</div>
</div>
