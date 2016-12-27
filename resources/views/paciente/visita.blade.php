@extends('layouts.master')

@section('title','Nueva Visita')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading"><h1 class="panel-title">Patologías</h1></div>
    <div class="panel-body">

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-pull-0">
    	<div class="well">
    	    <table class="table">
    	      <tbody>
    	        <tr>
    	          <td>Patología</td>
    	          <td>
    		          <select class="form-control" id="patologia">
    		             <option>Diabetes</option>
    		             <option>Lactosa intolerante</option>
    		             <option>EPOC</option>
    		             <option>IAM</option>			
    		             <option>ACV</option>	                     
    		             <option>ECR</option>
    		             <option>Hipertension</option>		                     
    		             <option>Displidemia</option>
    		             <option>Insulina resistente</option>		
    		             <option>Alcohol</option>	                     
    		             <option>Drogas</option>	                     
    		             <option>Tabaco</option>
    		             <option>Sedentarismo</option>		                     
    		   		     </select>
    	   		    </td>	          
    	        </tr>    	       
    	        <tr>
    	          <td>Comentarios</td>
    	          <td><input type="text" class="form-control" name="" id="detComida"></td>
    	        </tr>
    	           <td><a type="button" class="btn btn-primary" onclick="Agrega()">Agregar</a></td>
    	        <tr>
    	        </tr>
    	      </tbody>
    	    </table>
    	  </div>
	  </div>

	<div class="col-md-7">
			 <table class="table" id="plan">
			  <thead>
			  			<tr>
	                        <th>Nombre Patología</th>
	                        <th>Comentarios</th>
	            </tr> 
	      </thead>

	      <tbody></tbody>  
	          
	    	</table>
	    
		</div>
	</div>
</div>

</div>
</div>

<!-- ************************FORMULARIO ANTROPOMETRÍA************************************************ -->

			<div class="panel panel-primary">
		<div class="panel-heading"><h1 class="panel-title">Antropometría</h1></div>
		<div class="panel-body">

        <div class="row">              

                <div class="col-sm-2">
                 <td>Peso</td>
                 <td><input type="text" class="form-control" id="peso"></td>
                </div>

                <div class="col-sm-2">

                 <td>Talla</td>
                 <td><input type="text" class="form-control" id="talla"></td>
                   
                           
                </div>

                <div class="col-sm-2">
                 <td>IMC</td>
                 <td><input type="text" class="form-control" disabled="" id="imc" onChange="operacion()"></td>

                </div>

                 <div class="col-sm-2">

                  <td>Grupo etáreo</td>                  
                  <select class="form-control">
                         <option>Niño</option>
                         <option>Adolescente</option>
                         <option>Adulto</option>
                         <option>Lactante</option>
                         <option>Adulto Mayor</option>
                    </select>
                </div>

                <div class="col-sm-3">
                    <td>Clasificacion</td>
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
            		 <input type="text" class="form-control" placeholder="en centrímetros">
            	</div>

            		
            	
            	<div class="col-sm-3">

            	<label>Circunferencia de Carpo</label>
            	<input type="text" class="form-control" placeholder="en centrímetros">

            	</div>

                <div class="col-sm-3">

                <label>Circunferencia Braquial</label>
                <input type="text" class="form-control" placeholder="en centrímetros">

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
                                <td>Centímetros</td>                
                            </tr>

                            <tr>
                                <td>Tricipital</td>
                                <td><input type="text" class="form-control"></td>
                                <td>Centímetros</td>                                
                            </tr>

                            <tr>
                                <td>Subescapular</td>
                                <td><input type="text" class="form-control"></td>
                                <td>Centímetros</td>                
                            </tr>

                             <tr>
                                <td>Suprailiaco</td>
                                <td><input type="text" class="form-control"></td>
                                <td>Centímetros</td>                               
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
                                <td>Centímetros</td>                                
                            </tr>

                            <tr>
                                <td>Tricipital</td>
                                <td><input type="text" class="form-control"></td>
                                <td>Centímetros</td>                                
                            </tr>

                            <tr>
                                <td>Subescapular</td>
                                <td><input type="text" class="form-control"></td>
                                <td>Centímetros</td>                
                            </tr>

                             <tr>
                                <td>Suprailiaco</td>
                                <td><input type="text" class="form-control"></td>
                                <td>Centímetros</td>                               
                            </tr>

                             <tr>
                                <td>Pliegue Abdominal</td>
                                <td><input type="text" class="form-control"></td>
                                <td>Centímetros</td>                               
                            </tr>

                            <tr>
                                <td>Pliegue Supracrestidio</td>
                                <td><input type="text" class="form-control"></td>
                                <td>Centímetros</td>                               
                            </tr>

                            <tr>
                                <td>Pliegue Muslo</td>
                                <td><input type="text" class="form-control"></td>
                                <td>Centímetros</td>                               
                            </tr>

                            <tr>
                                <td>Pliegue Pantorrilla</td>
                                <td><input type="text" class="form-control"></td>
                                <td>Centímetros</td>                               
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>

                <br><br>

                </div>
              </div>
          
<!-- ***************************************FORMULARIO DE HÁBITOS*************************************** -->

    <div class="panel panel-primary">
    <div class="panel-heading"><h1 class="panel-title">Hábitos de Alimentación</h1></div>
    <div class="panel-body">

  <div class="row">
		<div class="col-md-4 col-md-pull-0">

      <div class="">
    	    <table class="table">
    	      
    	      <tbody>
    	        <tr>
    	          <td>Tiempo de Comida</td>
    	          <td>
    	          <select class="form-control" id="tiemComida">
    	             <option>Desayuno</option>
    	             <option>Colacion Am</option>	                     
    	             <option>Almuerzo</option>	                     
    	             <option>Once</option>	                     
    	             <option>Cena</option>	                     
    	             <option>Colacion Pm</option>	                     
    	   		  </select></td>
    	          
    	        </tr>
    	        <tr>
    	          <td>Hora</td>
    	          <td>
    	          	 <select class="form-control" id="horaComida">
    	             <option>08:00 - 08:30</option>
    	             <option>8:30 - 09:00</option>	                     
    	             <option>09:00 - 09:30</option>	                     
    	             <option>09:30 - 10:00</option>	                     
    	             <option>10:00 - 10:30</option>	                     
    	             <option>10:30 - 11:00</option>	                     
    	   		  </select>
    	          	
    	          </td>
    	          
    	        </tr>
    	        <tr>
    	          <td>Detalle Comida</td>
    	          <td><input type="text" class="form-control" name="" id="detComida"></td>
    	          
    	        </tr>
    	              <td>
    	              	 
    	              </td>
    	              <td> <a type="button" class="btn btn-primary" onclick="Agrega()">Agregar</a></td>
    	        <tr>
    	        </tr>
    	      </tbody>
    	    </table>
    	  </div>
	</div>

	<div class="col-md-7">
		 <table class="table" id="plan">
		  <thead>
		  			<tr>
                        <th>Tiempo de Comida</th>
                        <th>Hora</th>
                        <th>Detalle</th>
                        <th>Accion</th>
                    </tr> 
          </thead>
      
      <tbody>

      </tbody>      
    </table>

    <a href="" type="button" class="btn btn-primary">Guardar</a>
	</div>
</div>
</div>
</div>
<!-- **************************************** FORMULARIO DE DIAGNÓSTICO ****************************** -->





<div class="panel panel-danger">
<div class="panel-heading">Cálculo de Requerimientos</div>
<div class="panel-body">
<br>
<div class="row">
              <div class="col-md-2 col-md-push-1">

                <div class="input-group">
                  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                  <span class="input-group-addon">Kcal</span>
                </div>

              </div>
              <div class="col-md-2 col-md-push-1">
                 <div class="input-group">
                  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                  <span class="input-group-addon">Kg</span>
                </div>
              </div>
              <div class="col-md-2 col-md-push-1">
              <select class="form-control" id="exampleSelect1">
                     <option>Peso Real</option>
                     <option>Peso Ideal</option>
                     <option>Peso Ideal Renal</option>  
               </select></div>
              <div class="col-md-3 col-md-push-1">

                 <div class="input-group">
                  <input type="text" class="form-control" disabled aria-label="Amount (to the nearest dollar)">
                  <span class="input-group-addon">Kcal/dia</span>
                </div>

              </div>

</div>

<br><br>
<!-- Tabla (sin bordes, o sea .table-bordered) -->
            <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">Gramos/Kg</th>
                        <th>Total gramos/dia</th>
                        <th>%VCT</th>
                    </tr> 
                  </thead>
                  <tbody>
                          <tr>
                            <td align="center"><span class="align-middle">Proteínas</span></td>
                            <td>
                              <div class="col-md-3">
                                <input type="text" class="form-control">
                              </div>
                              <div class="col-md-5">
                                  <div class="form-group">   
                                    <select class="form-control">
                                       <option>Peso Normal</option>
                                     <option>Peso Ajustado</option>
                                     <option>Peso</option>  
                                    </select>
                                 </div>
                              </div>
                            </td>
                            <td>
                              <div class="col-xs-3"><input type="text" class="form-control"></div>
                              <div class="col-xs-3"><input type="text" class="form-control"></div>
                            </td>
                            <td><input type="text" class="form-control"></td>
                          </tr>

                          <tr>
                            <td align="center"><span class="align-middle">CHO</span></td>
                            <td>
                              <div class="col-xs-3"><input type="text" class="form-control"></div>
                            </td>
                            <td>
                              <div class="col-xs-3"><input type="text" class="form-control"></div>
                              <div class="col-xs-3"><input type="text" class="form-control"></div>
                            </td>
                            <td><input type="text" class="form-control"></td>
                          </tr>

                            <tr>
                            <td align="center">Lípidos
                              
                            </td>
                            <td><div class="col-xs-3"><input type="text" class="form-control"></div></td>
                            <td>
                              <div class="col-xs-3"><input type="text" class="form-control"></div>
                              <div class="col-xs-3"><input type="text" class="form-control"></div>
                            </td>
                            <td><input type="text" class="form-control"></td>
                          </tr>
                      </tbody>

                </table>
              


</div><!-- PANEL BODY -->
</div>

 


<!-- ************************ TABLA PARA CREAR EL PLAN DE ALIMENTACIÓN ****************************** -->


<div class="PanelCollection">              
<div class="panel panel-success" id="panel">
    <div class="panel-heading collapseable" data-toggle="collapse" data-target="##QuestionForm">
        <h3 class="panel-title">PLAN DE ALIMENTACIÓN</h3>                        
    </div>
    <input type="hidden" name="Sme_Product_Number_1" value="" id="Sme_Product_Number_1">
    <div id="QuestionForm" class="panel-collapse collapse in">
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-12 control-label">
                    
                    <h2 class="test">Detalle de minuta de alimentación</h2>
                </label>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th width="350px">TIEMPO DE COMIDA / DÍA</th>
                    <th>Lunes</th>
                    <th>Martes</th>
                    <th>Miercoles </th>
                    <th>Jueves<th>
                    <th>Viernes</th>
                    <th>Sábado</th>
                    <th>Domingo</th>
                </tr>
                <tr>
                    <td>Desayuno<span style="color:red">*</span>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" data-other="Q2_tan" name="Q1_tan1" id="Q1_tan" onChange="javascript : smelterWindow(this);">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO" >selected>NO</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" data-other="Q2_tin" name="Q1_tin1" id="Q1_tin" onChange="javascript : smelterWindow(this);">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO" >selected>NO</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" data-other="Q2_gold" name="Q1_gold1" id="Q1_gold" onChange="javascript : smelterWindow(this);">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO">selected>NO</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" data-other="Q2_tung" name="Q1_tung1" id="Q1_tung" onChange="javascript : smelterWindow(this);">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO">selected>NO</option>
                            </select>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Colación AM<span style="color:red">*</span>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" data-other="Q1_tan" name="Q2_tan1" id="Q2_tan" onChange="javascript : smelterWindow(this);">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO" >selected>NO</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" data-other="Q1_tin" name="Q2_tin1" id="Q2_tin" onChange="javascript : smelterWindow(this);">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO" >selected>NO</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" data-other="Q1_gold" name="Q2_gold1" id="Q2_gold" onChange="javascript : smelterWindow(this);">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO">selected>NO</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" data-other="Q1_tung" name="Q2_tung1" id="Q2_tung" onChange="javascript : smelterWindow(this);">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO">selected>NO</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Almuerzo<span style="color:red">*</span>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" name="Q3_tan1" id="Q3_tan">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO" >selected>NO</option>
                                <option value="UNKNOWN">selected>UNKNOWN</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" name="Q3_tin1" id="Q3_tin">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO" >selected>NO</option>
                                <option value="UNKNOWN">selected>UNKNOWN</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" name="Q3_gold1" id="Q3_gold">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO">selected>NO</option>
                                <option value="UNKNOWN" known">selected>UNKNOWN</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" name="Q3_tung1" id="Q3_tung">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO">selected>NO</option>
                                <option value="UNKNOWN" known">selected>UNKNOWN</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Once<span style="color:red">*</span>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" name="Q4_tan1" id="Q4_tan">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO" >selected>NO</option>
                                <option value="UNKNOWN">selected>UNKNOWN</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" name="Q4_tin1" id="Q4_tin">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO" >selected>NO</option>
                                <option value="UNKNOWN">selected>UNKNOWN</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" name="Q4_gold1" id="Q4_gold">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO">selected>NO</option>
                                <option value="UNKNOWN" known">selected>UNKNOWN</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" name="Q4_tung1" id="Q4_tung">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO">selected>NO</option>
                                <option value="UNKNOWN" known">selected>UNKNOWN</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Cena<span style="color:red">*</span>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" name="Q5_tan1" id="Q5_tan">
                                <option value="">SELECT</option>
                                <option value="YES,100%s" ,100%s">selected>YES,100%</option>
                                <option value="No,but greater then 75%" but greater then 75%">selected>No,but greater then 75%</option>
                                <option value="No,but greater then 50%" but greater then 50%">selected>No,but greater then 50%</option>
                                <option value="No,but greater then 25%" but greater then 25%">selected>No,but greater then 25%</option>
                                <option value="No,but less then 25%" but less then 25%">selected>No,but less then 25%</option>
                                <option value="None" e">selected>None</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" name="Q5_tin1" id="Q5_tin">
                                <option value="">SELECT</option>
                                <option value="YES,100%" ,100%">selected>YES,100%</option>
                                <option value="No,but greater then 75%" but greater then 75%">selected>No,but greater then 75%</option>
                                <option value="No,but greater then 50%" but greater then 50%">selected>No,but greater then 50%</option>
                                <option value="No,but greater then 25%" but greater then 25%">selected>No,but greater then 25%</option>
                                <option value="No,but less then 25%" but less then 25%">selected>No,but less then 25%</option>
                                <option value="NONE" E">selected>None</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" name="Q5_gold1" id="Q5_gold">
                                <option value="">SELECT</option>
                                <option value="YES,100%" S,100%">selected>YES,100%</option>
                                <option value="No,but greater then 75%" ,but greater then 75%">selected>No,but greater then 75%</option>
                                <option value="No,but greater then 50%" ,but greater then 50%">selected>No,but greater then 50%</option>
                                <option value="No,but greater then 25%" ,but greater then 25%">selected>No,but greater then 25%</option>
                                <option value="No,but less then 25%" ,but less then 25%">selected>No,but less then 25%</option>
                                <option value="None" ne">selected>None</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" name="Q5_tung1" id="Q5_tung">
                                <option value="">SELECT</option>
                                <option value="YES,100%" S,100%">selected>YES,100%</option>
                                <option value="No,but greater then 75%" ,but greater then 75%">selected>No,but greater then 75%</option>
                                <option value="No,but greater then 50%" ,but greater then 50%">selected>No,but greater then 50%</option>
                                <option value="No,but greater then 25%" ,but greater then 25%">selected>No,but greater then 25%</option>
                                <option value="No,but less then 25%" ,but less then 25%">selected>No,but less then 25%</option>
                                <option value="None" ne">selected>None</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Colación PM<span style="color:red">*</span>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" name="Q6_tan1" id="Q6_tan">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO" >selected>NO</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" name="Q6_tin1" id="Q6_tin">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO" >selected>NO</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" name="Q6_gold1" id="Q6_gold">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO">selected>NO</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group controls">
                            <select class="form-control required" name="Q6_tung1" id="Q6_tung">
                                <option value="">SELECT</option>
                                <option value="YES">selected>YES</option>
                                <option value="NO">selected>NO</option>
                            </select>
                        </div>
                    </td>
                </tr>
               
            </table>
        </div>
    </div>
</div>



						



	@endsection

	@section('javascript')

    <script>

    $(document).on('ready', function(){


    

     var num1= parseInt(jQuery('#peso').val(),10); 
     var num2= parseInt(jQuery('#talla').val(),10); 
     operacion(num1,num2); 

 



    });


    function operacion(a,b){
     
     var total = (a/(b*b));
     
}

    
 





    </script>




@stop