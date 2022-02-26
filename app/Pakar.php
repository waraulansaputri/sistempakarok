<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pakar extends Model
{
    protected $table = 'pakar';
    protected $primaryKey = 'id_pakar';
    public $timestamps = false;
    protected $fillable = ['nama', 'no_hp', 'alamat', 'foto'];

}
