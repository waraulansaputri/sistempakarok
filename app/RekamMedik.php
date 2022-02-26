<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class RekamMedik extends Authenticable
{
	protected $guard = 'rekammedik';
    protected $table = 'rekam_medik';
    protected $primaryKey = 'id_rekam_medik';
    public $timestamps = false;
    protected $fillable = ['nama', 'no_hp', 'alamat', 'username', 'tanggal_konsultasi'];
    protected $hidden = ['password'];

}
