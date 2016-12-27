<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prevision extends Model
{
     protected $table = 'previsiones';
     protected $fillable = ['nombre'];
}


public function pacientes(){
    	return $this->hasMany('App\Paciente');
    }
