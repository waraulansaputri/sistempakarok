<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    protected $table = 'gejala';
    public $incrementing=false;
    protected $primaryKey = 'id_gejala';
    protected $fillable = ['nama_gejala'];

}
