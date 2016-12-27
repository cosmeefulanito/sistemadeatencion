<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'planes';
    protected $fillable = ['nombre','descripcion','valor'];
}


 public function pacientes(){
    	return $this->hasMany('App\Paciente');
    }

