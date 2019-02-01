<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = "report";
    protected $fillable = ['no_transaksi', 'kode_barang', 'nama_barang', 'qty', 'harga_beli', 'harga_jual', 'nama_kasir'];

    static function indexReport()
    {
    	return Report::all();
    }
}
