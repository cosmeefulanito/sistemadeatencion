@extends('layouts.master')

@section('title', 'Pacientes')


@section('content')


<div class="row">

@foreach($usuario as $user)
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="https://1.bp.blogspot.com/-aFQ-W_KTFWQ/V6BdtpSUy6I/AAAAAAAAAH4/xD_U-BYItSsNvk1UGfROqLBzzU1h32oXQCLcB/s320/4-diwali-greeting-cards-by-ajay-acharya.jpg" alt="Bootstrap Thumbnail: Beautiful Bootstrap Thumbnail like Material Design Cards">
      <div class="caption">
        <h4>{{$user->nombre}}</h4>
        <p class="card-description">{{$user->rut}}</p>
        <p><a href="{{route('visita')}} " class="btn btn-primary" role="button">Nueva Visita</a></p>
        <p><a href="#" class="btn btn-primary" role="button">Ficha</a></p>

        <div>
          <a type="button" class="btn btn-default" href="{{route('paciente.destroy',$user->id)}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
          </a>
          <a type="button" class="btn btn-default" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
          </a>
        </div>
       
      </div>

    </div>
   
  </div>
@endforeach
    
   
</div>




  @endsection

 
