@extends('layouts.admin')

@section('title', 'Nuevo Paciente')


@section('content')



{{ Form::open(array('route' => 'store', 'method' => 'POST')) }}
	<div class="row">
			<div class="col-md-6">

				<div class="form-group">
				{{Form::label('nombre', 'Nombre Completo')}}
				{{Form::text('nombre_completo',null, array('class'=>'form-control', 'required'))}}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
				{{Form::label('nombre', 'RUT')}}
				{{Form::text('rut',null, array('class'=>'form-control', 'required'))}}
				</div>
			</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
				{{Form::label('edad', 'Edad')}}
				{{Form::text('edad',null, array('class'=>'form-control', 'required'))}}
				</div>
				</div>
				<div class="col-md-5">
					<div class="form-group">
				{{Form::label('email', 'Correo') }}
				{{Form::email('email',null,   array('class'=>'form-control', 'required'))}}
				</div>

				</div>
				<div class="col-md-5">
					<div class="form-group">
				{{Form::label('telefono', 'Telefono') }}
				{{Form::text('telefono','',   array('class'=>'form-control', 'required'))}}
				</div>
				</div>

			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
				{{Form::label('direccion', 'Direccion')}}
				{{Form::text('direccion',null, array('class'=>'form-control', 'required')) }}
				</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
				{{Form::label('fnac', 'Fecha de Nacimiento')}}
				{{ Form::text('fecha_nac','', array('class'=>'form-control', 'required', 'id' => 'datepicker')) }}
				</div>		
				</div>
				<div class="col-md-4">
					<div class="form-group">
						{{Form::label('genero', 'Genero')}}
						{{Form::select('genero',['Masculino', 'Femenino'],null, array('class'=>'form-control', 'required'))}}
				</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
				{{Form::label('prevsalud', 'Previsión')}}
				{{Form::select('tipo_prevision',['Fonasa', 'Isapre','Particular', 'Sin informacion'],null, array('class'=>'form-control', 'required'))}}



				</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
				{{Form::label('tiposangre', 'Tipo de Sangre')}}
				{{Form::select('tipo_sangre',['Sin informacion','A+', 'A-','B+','B-','AB+', 'AB-','O+','O-'], null,array('class'=>'form-control', 'required'))}}
				</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
				{{Form::label('plan', 'tipo de Plan')}}
				{{Form::select('tipo_plan',['Plan Particular', 'Plan Empresa', 'Plan Familia'], null,array('class'=>'form-control', 'required'))}}
				</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
				{{Form::label('atencion', 'tipo de atencion')}}
				{{Form::select('tipo_atencion',['Domicilio', 'Trabajo', 'Consulta'], null,array('class'=>'form-control', 'required'))}}
				</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
				{{Form::label('antec_sociales', 'Antecedentes Sociales')}}
				{{Form::textarea('antecedentes',null, array('class'=>'form-control', 'required' ,'rows' => '3'))}}
				</div>
				</div>
				
			</div>

				
{{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}

{{ Form::close() }}

			@endsection

@section('javascript')

	<script type="text/javascript">
		 $(document).ready(function() {
		 $( "#datepicker" ).datepicker();		 
		 $( "rut" ).datepicker();

		  });
	</script>


@stop


			