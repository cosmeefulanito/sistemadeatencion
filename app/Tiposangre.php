<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiposangre extends Model
{
     protected $table = 'tiposangres';
    protected $fillable = ['nombre'];
}



public function pacientes(){
    	return $this->hasMany('App\Paciente');
    }
