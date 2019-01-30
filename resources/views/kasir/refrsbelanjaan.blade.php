<table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Barang</th>                                          
                                            <th>Nama Barang</th>
                                            <th>Harga</th>
                                            <th>Qty</th>
                                            <th>Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    {{? $no = 0 ?}}
                                    {{? $total = 0 ?}}
                                    <tbody>
                                        @foreach ($daftarBelanjas as $daftarBelanja)
                                        {{? $no++ ?}}
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $daftarBelanja->detailBarang->id_barang }}</td>
                                            <td>{{ $daftarBelanja->detailBarang->nama_barang }}</td>
                                            <td>{{ $daftarBelanja->detailBarang->harga_jual }}</td>
                                            <td>{{ $daftarBelanja->qty }}</td>
                                            <td>{{ $daftarBelanja->qty * $daftarBelanja->detailBarang->harga_jual }}</td>
                                            {{? $total = $total + ($daftarBelanja->qty * $daftarBelanja->detailBarang->harga_jual) ?}}
                                            <td>
                                                <a href="" class="btn btn-danger"><i class="material-icons">remove</i></a>
                                                <a action="/kasir/belanjaan/{{ $id }}/" idBrg="{{ $daftarBelanja->detailBarang->id_barang }}" class="btn btn-danger deleteBrg"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>      
                                        @endforeach                                 
                                    </tbody>
                                    <tr>
                                    	<th colspan="5" style="text-align: right;">Total</th>
                                    	<td><input type="text" value="{{ $total }}" disabled></td>
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