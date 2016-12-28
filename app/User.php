<?php

namespace App;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'nombre', 'email', 'password','rut','edad','telefono','direccion','fecha_nacimiento','genero','idroles'
=======
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
>>>>>>> 5b5c86165c6c86e88b1d647a34fae95ec78f4132
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
<<<<<<< HEAD


    public function rol(){

        return $this->belongsTo('App\Rol');
    }

    public function pacientes(){
        return $this->hasMany('App\Paciente');
    }

   
=======
>>>>>>> 5b5c86165c6c86e88b1d647a34fae95ec78f4132
}
