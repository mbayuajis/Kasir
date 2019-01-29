@extends('layouts.master')

@section('content')
<!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1>
                                <b>DATA BARANG</b>
                            </h1>
                        
                        </div>
                        
                        <div class="body">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mybar"><i class="material-icons" >add_circle_outline</i>Tambah Data</button>
                                <a href="page/barang/cetakb.php" target="blank" class="btn btn-primary"><i class="material-icons">local_printshop</i>Cetak</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Stock Barang</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($barangs as $barang)
                                        <tr>
                                            <td>{{ $barang->id_barang }}</td>
                                            <td>{{ $barang->nama_barang }}</td>
                                            <td>{{ $barang->stock }}</td>
                                            <td>{{ $barang->harga_beli }}</td>
                                            <td>{{ $barang->harga_jual }}</td>
                                            <td>
                                            	<a linkBarang="/barang/{{ $barang->id_barang }}/edit" id="linkB" class="btn btn-success editBarang"><i class="material-icons">mode_edit</i></a>
                                                <form action="/barang/{{ $barang->id_barang }}" method="POST" style="display: inline-block;">
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
                        </div>
                    </div>
                </div>
            </div>
<!-- Modal Tambah Barang -->
<div class="modal fade" id="mybar" tabindex="-1" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h3 class="modal-title" align="center">Tambah Barang</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="/barang" method="POST">
            {{ csrf_field() }}            
            {{-- <div class="input-group">
                <div class="form-line">
                <label for="kode">Barcode</label>
                <input type="text" name="idbarang" placeholder="Masukkan Barcode" class="form-line" id="kode">
            </div> --}}
            {{-- </div> --}}
            <div class="input-group">
                <div class="form-line">
                <label for="nama">Nama Barang</label>
                <input type="text" name="nama_barang" placeholder="Masukkan Nama Barang" class="form-line form-control" id="nama">
            </div>
            </div>
            <div class="input-group">
                <div class="form-line">
                <label for="stock">Stock</label>
                <input type="number" name="stock" placeholder="Masukkan Stock" class="form-line form-control" id="stock">
            </div>
            </div>
            <div class="input-group">
                <div class="form-line">
                <label for="hb">Harga Beli</label>
                <input type="number" name="harga_beli" placeholder="Masukkan Harga Beli" class="form-line form-control" id="hb">
            </div>
            </div>
            <div class="input-group">
                <div class="form-line">
                <label for="hj">Harga Jual</label>
                <input type="number" name="harga_jual" placeholder="Masukkan Harga Jual" class="form-line form-control" id="hj">
            </div>
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
        <h4 class="modal-title" align="center">Edit Barang</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="" id="formEdit" method="POST" class="col">            
            {{ csrf_field() }}
               {{-- <div class="input-group">
                <div class="form-line">
                <label for="kode">Barcode</label>
                <input type="text" name="idbarang" placeholder="Masukkan Barcode" class="form-line" id="kode">
            </div>
            </div> --}}
            <div class="input-group">
                <div class="form-line">
                <label for="nama">Nama Barang</label>
                <input type="text" name="nama_barangE" placeholder="Masukkan Nama Barang" class="form-line form-control" id="nama_barangE">
            </div>
            </div>
            <div class="input-group">
                <div class="form-line">
                <label for="stock">Stock</label>
                    <span class="input-group-addon" id="stockN">Jumlah</span>
                <input type="number" name="stockE" placeholder="Masukkan Stock" class="form-control" id="stockE">
            </div>
            </div>
            <div class="input-group">
                <div class="form-line">
                <label for="hb">Harga Beli</label>
                <input type="number" name="harga_beliE" placeholder="Masukkan Harga Beli" class="form-line form-control" id="harga_beliE">
            </div>
            </div>
            <div class="input-group">
                <div class="form-line">
                <label for="hj">Harga Jual</label>
                <input type="number" name="harga_jualE" placeholder="Masukkan Harga Jual" class="form-line form-control" id="harga_jualE">
            </div>
            </div>
            <input type="hidden" name="_method" value="PUT">
                <input type="submit" name="Simpan" value="Simpan" class="btn btn-success">
    </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection