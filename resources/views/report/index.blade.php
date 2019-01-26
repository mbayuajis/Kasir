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
                                            <th>Tgl. Transaksi</th>
                                            <th>No. Transaksi</th>
                                            <th>Barcode</th>                                          
                                            <th>Nama Barang</th>
                                            <th>Qty</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2019/01/22</td>
                                            <td>20190122</td>
                                            <td>201901001</td>
                                            <td>T-Shirt</td>
                                            <td>2</td>
                                            <td>312,000</td>
                                            <td>312,000</td>
                                        </tr>                                       
                                    </tbody>
                                </table>
                                                          
                            </div>
@endsection