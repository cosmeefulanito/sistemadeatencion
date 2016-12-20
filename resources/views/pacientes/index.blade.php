

@extends('layouts.admin')

@section('title', 'Nutricionistas')

@section('content')

<h2>Administración Pacientes</h2>

<hr>
  <div>
      <div class="row">
      @foreach($pacientes as $paciente)
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="http://placehold.it/500x250/EEE">
              <div class="caption">
                <h4>{{$paciente->nombre_completo}}</h4>
                
               <a href="#" class="btn btn-default btn-xs" role="button">Antecedentes</a>
               <a href="{{ route('patologia.index')  }}" class="btn btn-primary btn-xs" role="button">Patologia</a>
                <a href="{{ route('antropometria.index')  }}" class="btn btn-primary btn-xs" role="button">Antropometria</a>
                <a href="{{ route('recordatorio.index')  }}" class="btn btn-primary btn-xs" role="button">Recordatorio</a>
                <a href="{{ route('distribucion.index')}}" class="btn btn-primary btn-xs" role="button">Distribucion</a>
                <a href="#" class="btn btn-success btn-xs">Crear Plan</a>
            </div>
            
          </div>
        </div>
        @endforeach
  </div><!--/row-->


@endsection

