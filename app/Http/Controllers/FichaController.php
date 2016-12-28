<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FichaController extends Controller
{
    public function antropometria()
    {



    }

    public function crearPatologia($id)
    {
    	$paciente = Paciente::findOrfail($id);
    	return view('pacientes.patologias.create')->with('paciente');

    }

    public function distribucion()
    {

    }

    public function recordatorio()
    {

    }
}
