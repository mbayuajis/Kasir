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
                                                <a action="/kasir/belanjaan/{{ $id }}/" class="btn btn-danger deleteBrgper" onclick="destroyBelanjaanper({{ $daftarBelanja->detailBarang->id_barang }})"><i class="material-icons">remove</i></a>
                                                <a action="/kasir/belanjaan/{{ $id }}/" class="btn btn-danger deleteBrg" onclick="destroyBelanjaan({{ $daftarBelanja->detailBarang->id_barang }})" id="deleteBrangku"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>      
                                        @endforeach                                 
                                    </tbody>
                                    <tr>
                                        <th colspan="5" style="text-align: right;">Total</th>
                                        <td><input type="text" value="{{ $total }}" name="total" id="totalBelanja" disabled></td>
                                    </tr>
                                </table>