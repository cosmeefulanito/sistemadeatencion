<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
=======

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
>>>>>>> 5b5c86165c6c86e88b1d647a34fae95ec78f4132
    public function show($id)
    {
        //
    }

<<<<<<< HEAD
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
=======
    //metodo para editar al paciente
>>>>>>> 5b5c86165c6c86e88b1d647a34fae95ec78f4132
    public function edit($id)
    {
        //
    }

<<<<<<< HEAD
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
=======
    //metodo para actualizar los datos editados del paciente
>>>>>>> 5b5c86165c6c86e88b1d647a34fae95ec78f4132
    public function update(Request $request, $id)
    {
        //
    }

<<<<<<< HEAD
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
=======
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

  

>>>>>>> 5b5c86165c6c86e88b1d647a34fae95ec78f4132
}
