@extends('layouts.master')

@section('content')
<!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1>
                                <b>DATA TRANSAKSI</b>
                            </h1>
                        
                        </div>
                        
                        <div class="body">
                            <form action="/kasir" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <button type="submit" name="tambah" class="btn btn-primary"><i class="material-icons">add_circle_outline</i>Tambah</button>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">                               	
                                    <thead>                                    	
                                        <tr>
                                            <th>Tgl. Transaksi</th> 
                                        	<th>No. Transaksi</th>                                          
                                            <th>Total</th>
                                            <th>Nama Kasir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaksis as $transaksi)
                                        <tr>
                                            <td>{{ $transaksi->created_at }}</td>
                                        	<td>{{ $transaksi->no_transaksi }}</td>
                                            <td>120,000</td>
                                            <td>{{ $transaksi->detailUserr->nama_pegawai }}</td>                                            
                                        </tr>
                                        @endforeach                                               
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection