@extends('layouts.admin')

@section('title', 'Entrevista')

@section('content')


<a href="{{route('patologia.create',['id'=>$paciente->id])}}" class="btn btn-primary">Crear Ficha Patológica</a>
<a href="{{route('antropometria.create',$paciente->id)}}" class="btn btn-primary">Crear Ficha Antropometrica</a>
<a href="{{route('recordatorio.create',$paciente->id)}}" class="btn btn-primary">Crear Recordatorio 24 hrs</a>
<a href="{{route('distribucion.create',$paciente->id)}}" class="btn btn-primary">Distribucion</a>


@endsection