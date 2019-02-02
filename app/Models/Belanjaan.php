<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Belanjaan extends Model
{
    protected $table = "barang_transaksi";
    protected $fillable = ['kode_barang', 'no_transaksi'];
    public $timestamps = false;

    function detailBarang()
    {
    	return $this->belongsTo('App\Models\Barang', 'kode_barang', 'id_barang');
    }

    function detailTransaksi()
    {
    	return $this->belongsTo('App\Models\Kasir', 'no_transaksi', 'no_transaksi');
    }

}
