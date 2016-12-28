<?php

namespace App;
use App\Paciente;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    
	protected $table = 'usuario';
	public $timestamps = false;

    protected $fillable = [
    'rut', 
    'nombre_completo',    
    'edad', 
    'telefono', 
    'correo',
    'direccion', 
    'fecha_nac', 
    'genero', 
    'idpaciente',
    'idnutricionista',
    'idadministrador'

    ];

}
