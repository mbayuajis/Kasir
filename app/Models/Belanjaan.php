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
    	return $this->hasOne('App\Models\Barang', 'id_barang', 'kode_barang');
    }
}
