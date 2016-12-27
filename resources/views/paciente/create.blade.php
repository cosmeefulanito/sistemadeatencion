@extends('layouts.master')

@section('title', 'Nuevo Paciente')


@section('content')



{{ Form::open(array('route' =>'paciente.store', 'method' => 'POST')) }}
{{Form::token()}}

	<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="">Nombre Completo</label>
					<input type="text" name="nombre" class="form-control" placeholder="Nombre...">
				</div>
			</div>


			<div class="col-md-6">
				<div class="form-group">
					<label for="">Rut</label>
					<input type="text" name="rut" id="rut" class="form-control" placeholder="Rut ...">				
				</div>
			</div>
	</div>

	<div class="row">

			
			<div class="col-md-4">
				<div class="form-group">
					<label for="">Edad</label>
					<input type="text" name="edad" class="form-control">
				</div>
			</div>

	
			<div class="col-md-4">
				<div class="form-group">
					<label for="">Correo</label>
					<input type="text" name="correo" class="form-control">
				</div>
			</div>

			<div class="col-md-4">
				<div class="form-group">
					<label for="">Teléfono</label>
					<input type="text" name="telefono" class="form-control">				
				</div>
			</div>

	</div>

	<div class="row">

			<div class="col-md-4">
				<div class="form-group">
					<label for="">Direccion</label>
					<input type="text" name="direccion" class="form-control">				
				</div>
			</div>


			<div class="col-md-4">
				<div class="form-group">
					<label for="">Fecha de nacimiento</label>
					<input type="text" name="fecha_nacimiento" class="form-control" id="fecha">				
				</div>
			</div>


			<div class="col-md-4">
				<div class="form-group">
					<label for="">Género</label>
					<select name="genero" class="form-control">
						<option value="0">Masculino</option>
						<option value="1">Femenino</option>
					</select>			
				</div>
			</div>

	</div>

	<div class="row">

				<div class="col-md-4">
					<div class="form-group">
						<label for="">Prevision</label>
						<select name="prevision" class="form-control">
							<option value="0">Fonasa</option>
							<option value="1">Isapre</option>
							<option value="2">Particular</option>
							<option value="3">Sin informacion</option>
						</select>			
					</div>
				</div>


				<div class="col-md-4">
					<div class="form-group">
						<label for="">Tipo de sangre</label>
							<select name="tiposangre" class="form-control">
								<option value="0">A+</option>
								<option value="1">A-</option>
								<option value="2">AB+</option>
								<option value="3">AB-</option>
								<option value="4">B+</option>
								<option value="5">B-</option>
								<option value="6">sin informacion</option>
							</select>
					</div>
				</div>


				<div class="col-md-4">
					<div class="form-group">
						<label for="">Plan</label>
						<select name="plan" class="form-control">
							<option value="0">Particular</option>
							<option value="1">Empresa</option>
							<option value="2">Familia</option>							
						</select>	

					
					</div>
				</div>
	</div>

	<div class="row">
				<div class="col-md-4">
					<div class="form-group">
					<label for="">Tipo de atención</label>
						<select name="tipoatencion" class="form-control">
							<option value="0">Domicilio</option>
							<option value="1">Trabajo</option>
							<option value="2">Consulta</option>
							
						</select>	
				
					</div>
				</div>

				<div class="col-md-8">
					<div class="form-group">
					<label for="antecedentes_sociales">Antecedentes sociales</label>
					 <textarea name="antec_sociales" class="form-control" rows="5" cols="20"></textarea>
					</div>
				</div>
				
	</div>
<div class="row">
			<div class="col-md-8">
					<div class="form-group">
						<button type="reset" name="" class="btn btn-danger">Cancelar</button>
						<button type="submit" name="" class="btn btn-primary">Guardar</button>
					</div>
				</div>

</div>	


{{ Form::close() }}

			@endsection

@section('javascript')

	<script type="text/javascript">


		 $(document).ready(function(){

		 	$("input#rut").rut().on('rutInvalido', function(e) {
			alert("El rut " + $(this).val() + " es inválido");
			});

		 	$("input#rut").rut().on('rutValido', function(e, rut, dv) {
   
			});

			$("#fecha").datepicker();







		 	


		 });






	</script>


@endsection


			