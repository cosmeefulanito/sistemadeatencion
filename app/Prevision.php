<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prevision extends Model
{
<<<<<<< HEAD
     protected $table = 'previsiones';
     protected $fillable = ['nombre'];
}


public function pacientes(){
    	return $this->hasMany('App\Paciente');
    }
=======
    protected $table = 'prevision';
	public $timestamps = false;

    protected $fillable = ['idprevision','nombre'];
    
}
>>>>>>> 5b5c86165c6c86e88b1d647a34fae95ec78f4132
