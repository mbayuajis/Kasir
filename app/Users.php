<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
	protected $primaryKey = 'id_pegawai';
	public $incrementing = false;
    protected $table = "users";
    protected $fillable = ['password'];
}
