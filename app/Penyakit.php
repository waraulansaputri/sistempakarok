<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $table = 'penyakit';
    protected $primaryKey = 'id_penyakit';
    public $incrementing=false;
    protected $fillable = ['id_penyakit','nama_penyakit','solusi'];


    
    public function gejalaPenyakit(){
    	return $this->hasMany('App\GejalaPenyakit','id_penyakit');
    }

    public function gejala(){
    	return $this->hasMany('App\Gejala','id_penyakit');
    }
}
