
@extends('layouts.admin')

@section('title', 'Distribucion')

@section('content')

	

<h1>Historial </h1>
<p>en esta seccion va el historial de distribucion del paciente, si no tiene antecedentes, no aparecerá nada</p>
<a href="{{route('distribucion.create')}}" type="button" role="button" class="btn btn-danger">Nueva </a>


@endsection