<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prevision extends Model
{
    protected $table = 'prevision';
	public $timestamps = false;

    protected $fillable = ['idprevision','nombre'];
    
}