@extends('layouts.master')

@section('content')
<!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1>
                                <b>REPORT PENJUALAN</b>
                            </h1>
                            
                        </div>
                        
                        <div class="body">
                            <div class="form-group">
                                <a href="page/report/cetakr.php" target="blank" class="btn btn-primary"><i class="material-icons">local_printshop</i>Cetak</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Waktu Transaksi</th>
                                            <th>No. Transaksi</th>
                                            <th>Kode Barang</th>                                          
                                            <th>Nama Barang</th>
                                            <th>Qty</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Nama Kasir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataReports as $dataReport)
                                        <tr>
                                            <td>{{ $dataReport->created_at }}</td>
                                            <td>{{ $dataReport->no_transaksi }}</td>
                                            <td>{{ $dataReport->kode_barang }}</td>
                                            <td>{{ $dataReport->nama_barang }}</td>
                                            <td>{{ $dataReport->qty }}</td>
                                            <td>{{ $dataReport->harga_beli }}</td>
                                            <td>{{ $dataReport->harga_jual }}</td>
                                            <td>{{ $dataReport->nama_kasir }}</td>
                                        </tr>                
                                        @endforeach                       
                                    </tbody>
                                </table>
                                                          
                            </div>
@endsection