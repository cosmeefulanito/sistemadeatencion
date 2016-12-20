<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
	protected $table = 'paciente';
	public $timestamps = false;

    protected $fillable = ['idpaciente',
    'estado',
    'tipo_atencion',
    'fecha_registro',
    'antecedentes_sociales',
    'idplan',
    'idtipo_sangre',
    'idprevision'
    

    ];
}


/*'nombre_completo', 
    'rut', 
    'edad', 
    'telefono', 
    'correo',
    'direccion', 
    'fecha_nacimiento', 
    'sexo', 
    'antecedentes_sociales', 
    'foto_perfil'
    */