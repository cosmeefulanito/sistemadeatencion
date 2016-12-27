@extends('layouts.master')

@section('title', 'Nuevo Nutricionista')


@section('content')



{{ Form::open(array('route' => 'nutricionista.store', 'method'=>'POST')) }}

	<div class="row">
			<div class="col-md-6">

				<div class="form-group">
				{{Form::label('nombre', 'Nombre Completo')}}
				{{Form::text('nombre',null, array('class'=>'form-control', 'required'))}}
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
				{{Form::email('email','',   array('class'=>'form-control', 'required'))}}
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
				<div class="col-md-3">
					<div class="form-group">
				{{Form::label('direccion', 'Direccion')}}
				{{Form::text('direccion',null, array('class'=>'form-control', 'required')) }}
				</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
				{{Form::label('fnac', 'Fecha de Nacimiento')}}
				{{ Form::text('fecha_nac','', array('class'=>'form-control', 'required', 'id' => 'datepicker')) }}
				</div>		
				</div>
				<div class="col-md-3">
					<div class="form-group">
						{{Form::label('genero', 'Genero')}}
						{{Form::select('genero',['Masculino', 'Femenino'],null, array('class'=>'form-control', 'required'))}}
				</div>
				</div>

				<div class="col-md-3">
					<div class="form-group">
						{{Form::label('rol', 'Rol')}}
						{{Form::select('rol',['Administrador', 'Miembro'],null, array('class'=>'form-control', 'required'))}}
				</div>
				</div>


		</div>

		<div class="row">

				<div class="col-md-4">
				<h2>Datos Bancarios</h2>
					<div class="form-group">
						{{Form::label('banco', 'Banco')}}
						{{Form::select('bancos_id',['Bco Chile', 'Bco Bci', 'Bco Santander'], null,array('class'=>'form-control', 'required'))}}
					</div>
				</div>				
		</div>

		<div class="row">
				<div class="col-md-4">
					<div class="form-group">
					{{Form::label('tipocta', 'Tipo Cuenta')}}
					{{Form::select('tipo_cuentas_id',['Cuenta corriente', 'Cuenta rut', 'Cuenta ahorro'], null,array('class'=>'form-control', 'required'))}}
				</div>
				</div>				
		</div>

				<div class="row">
				<div class="col-md-4">
					<div class="form-group">
					{{Form::label('numcta', 'Numero de cta')}}
					{{Form::text('cuentas_id',null,array('class'=>'form-control', 'required'))}}
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