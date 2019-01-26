@extends('layouts.master')

@section('content')
<div class="row clearfix">		
	<div class="body">
		<form method="POST">
			<div class="col-md-2">
				<input type="text" name="kodet" class="form-control" placeholder="No.Transaksi" />
			</div>			

			<div class="col-md-2">
				<input type="text" name="kodeb" class="form-control" placeholder="Kode Barang" />
			</div>	

			<div class="col-md-2">
				<input type="submit" name="simpan" class="btn btn-primary" value="Tambah"/>
			</div>              
		</form>        
	</div>
</div>
<br><br><br><br>
<div class="row clearfix">    
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <a href="?page=kasir&aksi=kembali" class="btn btn-primary"><i class="material-icons">replay</i>Kembali</a>    
                    </div>
                    
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar Belanjaan
                            </h2>                      
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Barcode</th>                                          
                                            <th>Nama Barang</th>
                                            <th>Harga</th>
                                            <th>Qty</th>
                                            <th>Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>201901001</td>
                                            <td>T-Shirt</td>
                                            <td>156,000</td>
                                            <td>1</td>
                                            <td>156,000</td>
                                            <td>
                                            	<a href="" class="btn btn-success"><i class="material-icons">remove</i></a>
                                            	<a href="" class="btn btn-success"><i class="material-icons">add</i></a>
                                            	<a href="" class="btn btn-danger"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>                                       
                                    </tbody>
                                    <tr>
                                    	<th colspan="5" style="text-align: right;">Total</th>
                                    	<td><input type="text" value="156,000"></td>
                                    </tr>

                                    <tr>
                                    	<th colspan="5" style="text-align: right;">Tunai</th>
                                    	<td><input type="text" name="bayar" id="bayar"></td>
                                    </tr>
                                    <tr>
                                    	<th colspan="5" style="text-align: right;">Kembalian</th>
                                    	<td>
                                    		<input type="text" name="kembalian" id="kembalian">
                                    		<a href="" class="btn btn-primary"><i class="material-icons">save</i>Simpan</a>
                                			<a href="" class="btn btn-success"><i class="material-icons">local_printshop</i>Cetak Struk</a>
                                    	</td>
                                    	 
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection