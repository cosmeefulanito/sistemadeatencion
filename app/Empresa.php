<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';
    protected $fillable = ['giro','rut','telefono','direccion','nombre_encargado']
}


public function pacientes(){
    	return $this->hasMany('App\Paciente');
    }
}

