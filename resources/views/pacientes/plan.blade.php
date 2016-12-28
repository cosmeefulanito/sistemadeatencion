@extends('layouts.admin')

@section('title', 'Crear Plan de Alimentacion')


@section ('content')




<div class="panel panel-default">
<div class="panel-heading">Creacion de dieta</div>
<div class="panel-body">

	<div class=row>
		<div class="col-sm-2">
			{{Form::label('nomdiet', 'Nombre Dieta')}}
	        
     	</div>
     	<div class="col-sm-3">
			
	        {{Form::text('peso', null)}}
     	</div>

     
	</div>


	<div class=row>
		<div class="col-sm-2">
			{{Form::label('obj', 'Objetivo')}}	        
     	</div>
     	<div class="col-sm-3">			
	        
	        <select class="form-control">
		    	<option value="" disabled selected>Choose your option</option>
			    <option value="1">Reduccion Grasa Corporal</option>
			    <option value="2">Mantener Peso Saludable</option>
			    <option value="3">Aumentar Masa Muscular</option>
			    <option value="3">Otro...</option>
			</select>

     	</div>

     
	</div>

	<div class=row>

	<div class="col-md-6">
		<a href="#" type="button" class="btn btn-default">Crear</a>
	</div>
		

     
	</div>
</div>
</div>



@stop