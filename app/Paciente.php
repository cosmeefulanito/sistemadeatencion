<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
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




 
 