<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $primaryKey = 'public.id_pegawai';
    protected $fillable = ['nama_pegawai', 'username', 'password', 'no_telp', 'jabatan', 'foto', 'alamat'];

    function detailKasir()
    {
    	return $this->hasMany('App\Models\Kasir', 'id_pegawai', 'id_pegawai');
    }
}
