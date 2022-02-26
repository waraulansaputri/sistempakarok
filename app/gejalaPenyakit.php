<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gejalaPenyakit extends Model
{
    protected $table = 'gejala_penyakit';
    protected $fillable = ['id_gejala', 'id_penyakit'];

    public function gejala(){
    	return $this->belongsTo('App\Gejala','id_gejala');
    }

    public function penyakit(){
    	return $this->belongsTo('App\Penyakit','id_penyakit');
    }
}
