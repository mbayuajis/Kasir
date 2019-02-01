@extends('layouts.master')

@section('content')
<div class="row clearfix">		
	<div class="body col-lg-12">
        <div class="row">
            <div class="col-md-10">
                <span>No. Transaksi: {{ $id }}</span>
            </div> 
        </div>
        <div class="row">
            <form id="formBelanja" linkTambah="/kasir/belanjaan/{{ $id }}" notrans="{{ $id }}" method="post">
                {{ csrf_field() }}
                <div class="form-line col-md-3">
                    <input type="text" name="kode_barang" class="form-control" placeholder="Kode Barang" id="kode_barangI" {{ ($statustrans=='Selesai') ? 'disabled' : '' }} />
                </div>  

                <div class="form-line">
                    <input type="submit" name="simpan" class="btn btn-primary" value="Tambah" id="tambahBelanja" {{ ($statustrans=='Selesai') ? 'disabled' : '' }}/>
                </div>           
            </form>
        </div>  
	</div>
</div>
<div class="row clearfix">    
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="form-group">
                        <a href="/kasir" class="btn btn-primary"><i class="material-icons">replay</i>Kembali</a>    
                    </div>
                    
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar Belanjaan
                            </h2>                      
                        </div>
                        <div class="body">
                            <div class="table-responsive belanjaandaftar">
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
                                                <a action="/kasir/belanjaan/{{ $id }}/" class="btn btn-danger deleteBrgper {{ ($statustrans=='Selesai') ? 'disabled' : '' }}" onclick="destroyBelanjaanper({{ $daftarBelanja->detailBarang->id_barang }})"><i class="material-icons">remove</i></a>
                                                <a action="/kasir/belanjaan/{{ $id }}/" class="btn btn-danger deleteBrg {{ ($statustrans=='Selesai') ? 'disabled' : '' }}" onclick="destroyBelanjaan({{ $daftarBelanja->detailBarang->id_barang }})" id="deleteBrangku"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>      
                                        @endforeach                                 
                                    </tbody>
                                        
                                    <tr>
                                            
                                        <th colspan="5" style="text-align: right;">Total</th>
                                        <td><input type="text" value="{{ $total }}" name="total" id="totalBelanja" disabled></td>
                                    </tr>
                                </table>
                            </div>
                            <form action="/kasir/belanjaan/{{ $id }}/simpan" method="POST" id="simpanBlnj">
                            {{ csrf_field() }}
                            <table>
                            <tr>
                                        <th colspan="5" style="text-align: right;">Tunai</th>
                                        <td><input type="number" name="bayar" id="bayarBelanja" onkeyup="kembalianuBelanja()" {{ ($statustrans=='Selesai') ? 'disabled' : '' }}></td>
                                    </tr>
                                    <tr>
                                        <th colspan="5" style="text-align: right;">Kembalian</th>
                                        <td>
                                            <input type="number" name="kembalian" id="kembalianBelanja" disabled>
                                            <button type="submit" class="btn btn-primary" id="simpanBelanja" {{ ($statustrans=='Selesai') ? 'disabled' : '' }}><i class="material-icons">save</i>Simpan</button>
                                       
                                            <a class="btn btn-success"><i class="material-icons">local_printshop</i>Cetak Struk</a>
                                        </td>
                                    </tr>
                            </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection