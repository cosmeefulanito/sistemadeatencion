<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'nombre', 'email', 'password','rut','edad','telefono','direccion','fecha_nacimiento','genero','idroles'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function rol(){

        return $this->belongsTo('App\Rol');
    }

    public function pacientes(){
        return $this->hasMany('App\Paciente');
    }

   
}
