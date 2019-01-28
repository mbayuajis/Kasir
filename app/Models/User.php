<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $primaryKey = 'public.id_pegawai';
    protected $fillable = ['nama_pegawai', 'username', 'password', 'foto', 'alamat'];
}