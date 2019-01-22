<!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1>
                                <b>DATA BARANG</b>
                            </h1>
                        
                        </div>
                        <script src="jquery-3.1.1.min.js"></script>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mybar"><i class="material-icons" >add_circle_outline</i>Tambah Data</button>
                        <a href="page/barang/cetakb.php" target="blank" class="btn btn-primary"><i class="material-icons">local_printshop</i>Cetak</a>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Barcode</th>
                                            <th>Nama Barang</th>
                                            <th>Stock Barang</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>201901001</td>
                                            <td>T-Shirt</td>
                                            <td>50</td>
                                            <td>120,000</td>
                                            <td>156,000</td>
                                            <td>
                                            	<a href="" class="btn btn-success" data-toggle="modal" data-target="#mybar2"><i class="material-icons">mode_edit</i></a>
                                            	<a href="" class="btn btn-danger"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>201901002</td>
                                            <td>Nike Air Jordan</td>
                                            <td>3</td>
                                            <td>5,000,000</td>
                                            <td>7,000,000</td>
                                            <td>
                                            	<a href="" class="btn btn-success" data-toggle="modal" data-target="#mybar2"><i class="material-icons">mode_edit</i></a>
                                            	<a href="" class="btn btn-danger"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>201901003</td>
                                            <td>Yezzy</td>
                                            <td>5</td>
                                            <td>1,000,000</td>
                                            <td>1,500,000</td>
                                            <td>
                                            	<a href="" class="btn btn-success" data-toggle="modal" data-target="#mybar2"><i class="material-icons">mode_edit</i></a>
                                            	<a href="" class="btn btn-danger"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>                                       
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- Modal Tambah Barang -->
<div class="modal fade" id="mybar">
<div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah Barang</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="#" method="POST">            
            <div class="input-group">
                <label for="kode">Barcode</label>
                <input type="text" name="idbarang" placeholder="Masukkan Barcode" class="form-line" id="kode">
            </div>
            <div class="input-group">
                <label for="nama">Nama Barang</label>
                <input type="text" name="namabarang" placeholder="Masukkan Nama Barang" class="form-line" id="nama">
            </div>
            <div class="input-group">
                <label for="stock">Stock</label>
                <input type="text" name="stock" placeholder="Masukkan Stock" class="form-line" id="stock">
            </div>
            <div class="input-group">
                <label for="hb">Harga Beli</label>
                <input type="text" name="hb" placeholder="Masukkan Harga Beli" class="form-line" id="hb">
            </div>
            <div class="input-group">
                <label for="hj">Harga Jual</label>
                <input type="text" name="hj" placeholder="Masukkan Harga Jual" class="form-line" id="hj">
            </div>
                <input type="submit" name="Simpan" value="Simpan" class="btn btn-success">
    </form>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal Edit Barang -->                        
<div class="modal fade" id="mybar2">
<div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Barang</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="#" method="POST" class="col">            
             <div class="input-group">
                <label for="kode">Barcode</label>
                <input type="text" name="idbarang" placeholder="Masukkan Barcode" class="form-line" id="kode">
            </div>
            <div class="input-group">
                <label for="nama">Nama Barang</label>
                <input type="text" name="namabarang" placeholder="Masukkan Nama Barang" class="form-line" id="nama">
            </div>
            <div class="input-group">
                <label for="stock">Stock</label>
                <input type="text" name="stock" placeholder="Masukkan Stock" class="form-line" id="stock">
            </div>
            <div class="input-group">
                <label for="hb">Harga Beli</label>
                <input type="text" name="hb" placeholder="Masukkan Harga Beli" class="form-line" id="hb">
            </div>
            <div class="input-group">
                <label for="hj">Harga Jual</label>
                <input type="text" name="hj" placeholder="Masukkan Harga Jual" class="form-line" id="hj">
            </div>
                <input type="submit" name="Simpan" value="Simpan" class="btn btn-success">
    </form>
      </div>
    </div>
  </div>
</div>
</div>