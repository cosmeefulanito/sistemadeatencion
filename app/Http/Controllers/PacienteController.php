<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Paciente;
use App\Prevision;
use App\Usuario;


class PacienteController extends Controller
{
    
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index', compact('pacientes'));
    }

    // metodo para crear un nuevo Paciente
    public function create()    
    {
   
      return view('pacientes.create');

    }

    

    // metodo para almecenar el paciente
    public function store(Request $request)
    {
       //$paciente = new Paciente;
       $usuario = new Usuario;
       
       $usuario->nombre_completo = $request->nombre;
       $usuario->rut = $request->rut;
       $usuario->edad = $request->edad;
       $usuario->telefono = $request->telefono;
       $usuario->correo = $request->email;
       $usuario->direccion = $request->direccion;
       $usuario->fecha_nac = $request->fecha_nac;
       $usuario->genero = $request->genero;
       //$usuario->id_prevision_salud = $request->prevsalud;
       //$usuario->id_tipo_sangre = $request->tiposangre;
              
       $usuario->save();
       $paciente = new Paciente;
       $paciente->estado = $request->estado;
       $paciente->tipo_atencion = $request->tipo_atencion;
       $paciente->idtipo_sangre = $request->tipo_sangre;
       $paciente->idplan = $request->tipo_plan;
       $paciente->idempresa = $request->tipo_plan;
       $paciente->idprevision = $request->tipo_prevision;
       $paciente->antecedentes_sociales = $request->antecedentes;
       $paciente->save();



       //return redirect()->route('index');
       

       //return dd($request->all());


       
    }

    //metodo para mostrar al paciente
    public function show($id)
    {
        //
    }

    //metodo para editar al paciente
    public function edit($id)
    {
        //
    }

    //metodo para actualizar los datos editados del paciente
    public function update(Request $request, $id)
    {
        //
    }

    //metodo para eliminar al paciente
    public function destroy($id)
    {
        //
    }

    public function entrevista($id)
    {

      $paciente = Paciente::findOrFail($id);
      return view('pacientes.entrevista', ['paciente' => $paciente]);

      
    }

  

}
