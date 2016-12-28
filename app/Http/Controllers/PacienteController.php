<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = User::orderby('id','DESC')->paginate(50);

        return view('paciente.index')->with('usuario',$usuario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new User;
        $user->nombre = $request->nombre;
        $user->email =  $request->correo;
        $user->rut =  $request->rut;
        $user->edad =  $request->edad;
        $user->telefono =  $request->telefono;
        $user->direccion =  $request->direccion;
        $user->fecha_nacimiento =  $request->fecha_nacimiento;
        $user->genero =  $request->genero;

        $user->save();

        $paciente = new Paciente;
        $paciente->estado = 'Activo';
        $paciente->tipo_atencion = $request->tipoatencion;
        $paciente->antecedentes_sociales = $request->antec_sociales;
        $paciente->id_usuario = $user->id;

        $paciente->save();

        /*
        $paciente->id_empresa;
        $paciente->id_plan= $request->plan;
        $paciente->id_tiposangre = $request->tiposangre;
        $paciente->id_prevision = $request->prevision;
        */        
     

        return redirect()->route('paciente.index');





    }

    
    
    //metodo para mostrar al paciente

    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //metodo para editar al paciente

    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $paciente = new Paciente;
        $eliminar = $paciente::where('id_usuario', $id)->delete();
       

        $usuario = new User;
        $eliminar = $usuario::where('id', $id)->delete();
        

        return redirect()->route('paciente.index'); 




    }


   

  
}