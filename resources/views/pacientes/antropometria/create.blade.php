

@extends('layouts.admin')

@section('title', 'Antropometria')



@section('content')


    <div class="page-container">
    <div class="container">
      <div class="row row-offcanvas row-offcanvas-left">
        
        <!-- sidebar -->
       
        <!-- main area -->
        <div class="col-xs-12 col-sm-9">


    <div class="panel panel-default">
        <div class="panel-heading"><h1 class="panel-title">Antropometría</h1></div>
        <div class="panel-body">
            <div class="row">              

                <div class="col-sm-2">
                    
                    {{Form::label('ins', 'Peso')}}
                    {{Form::text('peso', null, ['class' => 'form-control', 'id'=>'peso'])}}

                </div>

                <div class="col-sm-2">                    
                           
                            {{Form::label('talla', 'Talla')}}
                    		{{Form::text('talla', null,['class' => 'form-control', 'id'=>'altura'])}}

                </div>

                <div class="col-sm-2">
                	{{Form::label('imc', 'IMC')}} 
                    {{Form::text('talla', '',['class' => 'form-control', 'disabled'])}}


                </div>

                 <div class="col-sm-2">
                    
                    {{Form::label('ecr', 'Grupo Etario')}}                    
                    {{Form::select('ecr', ['Niño', 'Adolescente', 'Adulto','Lactante', 'Adulto Mayor'],null, array('class' =>'form-control'))}}     

                </div>

                <div class="col-sm-3">
                    <label>Clasificacion</label>
                    <select class="form-control">
                         <option>Rango Normal</option>
                         <option>Pre-Obeso</option>
                         <option>Obesidad Grado 1</option>
                         <option>Obesidad Grado 2</option>
                         <option>Obesidad Grado 3</option>
                    </select>
                </div>



            </div>





            <div class="row">
            <br>

            	
            	<div class="col-sm-3">
            		<label>Circunferencia de Cintura</label>
            		 <input type="text" class="form-control">
            	</div>
            		
            	
            	<div class="col-sm-3">

            	<label>Circunferencia de Carpo</label>
            	<input type="text" class="form-control">

            	</div>

                <div class="col-sm-3">

                <label>Circunferencia Braquial</label>
                <input type="text" class="form-control">

                </div>
            	

            		
            </div>

            <br>


            <div class="row">
                <div class="col-md-5">
                    

                    <table class="table table-bordered">

                        <thead>
                            <caption>Medición de Pliegue</caption>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bicipital</td>
                                <td><input type="text" class="form-control"></td>                
                            </tr>

                            <tr>
                                <td>Tricipital</td>
                                <td><input type="text" class="form-control"></td>                
                            </tr>

                            <tr>
                                <td>Subescapular</td>
                                <td><input type="text" class="form-control"></td>
                            </tr>

                             <tr>
                                <td>Suprailiaco</td>
                                <td><input type="text" class="form-control"></td>               
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="col-md-7">


                 <table class="table table-bordered">

                        <thead>
                            <caption>Método Compartimental</caption>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bicipital</td>
                                <td><input type="text" class="form-control"></td>                
                            </tr>

                            <tr>
                                <td>Tricipital</td>
                                <td><input type="text" class="form-control"></td>                
                            </tr>

                            <tr>
                                <td>Subescapular</td>
                                <td><input type="text" class="form-control"></td>
                            </tr>

                             <tr>
                                <td>Suprailiaco</td>
                                <td><input type="text" class="form-control"></td>               
                            </tr>

                             <tr>
                                <td>Pliegue Abdominal</td>
                                <td><input type="text" class="form-control"></td>               
                            </tr>

                            <tr>
                                <td>Pliegue Supracrestidio</td>
                                <td><input type="text" class="form-control"></td>               
                            </tr>

                            <tr>
                                <td>Pliegue Muslo</td>
                                <td><input type="text" class="form-control"></td>               
                            </tr>

                            <tr>
                                <td>Pliegue Pantorrilla</td>
                                <td><input type="text" class="form-control"></td>               
                            </tr>


                           


                        </tbody>
                    </table>
                </div>


                </div>

                <br><br>
          <a href="#" type="button" class="btn btn-primary">Cancelar</a>
          <a href="#" type="button" class="btn btn-primary">Guardar</a>

        </div>


    </div>


       


         


          
        </div><!-- /.col-xs-12 main -->

    </div><!--/.row-->


  </div><!--/.container-->
    
</div><!--/.page-container-->



@stop

@section('javascript')

<script>

    function calculoImc(peso,talla,imc){

        t = talla*talla;
        inputtext.value = imc
        imc = peso/t;
    }
    
</script>


@stop