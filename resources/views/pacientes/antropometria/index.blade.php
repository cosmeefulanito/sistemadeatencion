
@extends('layouts.admin')

@section('title', 'Antropometria')

@section('content')

	

<h1>Historial </h1>
<p>en esta seccion va el historial antropometrico del paciente, si no tiene antecedentes, no aparecerá nada</p>
<a href="{{route('antropometria.create')}}" type="button" role="button" class="btn btn-danger">Nueva </a>


@endsection