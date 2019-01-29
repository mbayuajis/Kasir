<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    protected $primaryKey = 'no_transaksi';
    protected $table = "transaksi";
	public $incrementing = false;
    protected $fillable = ['id_pegawai'];

    function detailUserr()
    {
    	return $this->hasOne('App\Models\User', 'id_pegawai', 'id_pegawai');
    }
}
