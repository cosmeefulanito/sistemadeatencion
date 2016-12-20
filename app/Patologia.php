<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patologia extends Model
{
    protected $table = 'patologias';
    protected $primaryKey = 'id';    
    protected $fillable = [
    'nombre', 
    'descripcion'
    ];
}
