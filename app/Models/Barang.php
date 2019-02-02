<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";
	protected $primaryKey = 'id_barang';
    protected $fillable = ['nama_barang', 'stock', 'harga_beli', 'harga_jual'];

    function belanjaan()
    {
    	return $this->hasMany('App\Models\Belanjaan', 'kode_barang', 'id_barang');
    }
}
