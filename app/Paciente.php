<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
<<<<<<< HEAD
    protected $table = 'pacientes';
    protected $fillable = ['estado','tipo_atencion','antecedentes_sociales','id_usuario','id_empresa',
    'id_plan','id_tiposangre','id_prevision'];



    public function empresa(){

        return $this->belongsTo('App\Empresa');
    }


    public function plan(){

        return $this->belongsTo('App\Plan');
    }

 public function tiposangre(){

        return $this->belongsTo('App\Tiposangre');
    }

public function prevision(){

        return $this->belongsTo('App\Prevision');
    }

 public function user(){

        return $this->belongsTo('App\User');
    }


}




 
 
=======
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
>>>>>>> 5b5c86165c6c86e88b1d647a34fae95ec78f4132
