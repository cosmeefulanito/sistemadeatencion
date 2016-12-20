@extends('layouts.admin')

@section('title', 'Recordatorio 24Hrs')

@section('content')

<h1>Index recordatorio 24 Hrs</h1>
<p>Historial de recordatorio del paciente</p>

<a href="{{route('recordatorio.create')}}" class="btn btn-warning">Crear recordatorio</a>

@endsection