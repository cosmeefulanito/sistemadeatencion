@extends('layouts.admin')

@section('title', 'Antropometria')

@section('content')


<div class="panel panel-default">
		<div class="panel-heading"><h1 class="panel-title">Hábitos de Alimentación</h1></div>
		<div class="panel-body">
			
			<div class="container">
				<div class="row">
		<div class="col-md-4 col-md-pull-0">



	<div class="well">
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
		</div>
	</div>




			 
@stop

@section('javascript')

<script>

	function Agrega(){
 
    //obtenemos los valores de nuestra caja de texto
    var tiempoComida=document.getElementById("tiemComida").value;
    var horaComida=document.getElementById("horaComida").value;
    var detalleComida=document.getElementById("detComida").value;
 
    //creamos un objeto tr que anexaremos a nuestra tabla llamada tableProductos
    var TR= document.createElement("tr");
 
    //creamos 4 elementos td en donde iran los datos y uno cuarto donde ira un boton para eliminar
    var TD1=document.createElement("td")
    var TD2=document.createElement("td")
    var TD3=document.createElement("td");
    var TD4= document.createElement("td")
 
    //asignamos los valores a nuestros td por medio del atributo innerHTML, el cual tiene el contenido HTML de un Nodo
    TD1.innerHTML=tiempoComida;
    TD2.innerHTML=horaComida;
    TD3.innerHTML=detalleComida;
 
    //A continuación asignamos contenido html a nuestro cuarto td
    //esta es una forma de crear elementos tambien, dando el codigo html a un Nodo
    TD4.innerHTML="<input type='button' value='Eliminar' class='btn btn-danger' onclick='Elimina(this)'>"
 
    //Ahora proseguimos a agregar los hijos TD al Padre TR
    //Esta es otra manera de crear elementos HTML, por medio de el metodo appendChild
    TR.appendChild(TD1);
    TR.appendChild(TD2);
    TR.appendChild(TD3);
    TR.appendChild(TD4);
 
    //Por ultimo asignamos nuestro TR a la tabla con id tablaProductos
    document.getElementById("plan").appendChild(TR)
 
    //limpiamos nuestros inputs para agregar ma datos, y ponemos el foco nuevamente en el input de codigo

    document.getElementById("tiemComida").focus();
}


function Elimina(NodoBoton){
 
    //recibimos el boton como parametro, obtendremos el tr que lo contiene de la siguiente manera
    //Como nuestro boton es hijo de un td, y este td de el tr, debemos invocar dos veces parentNode
    //Esto para llegar a tener el TR
    var TR= NodoBoton.parentNode.parentNode;
 
    //ahora que ya tenemos el padre TR, podemos eliminarlo de la siguiente manera
    //junto a todos sus hijos
 
    document.getElementById("plan").removeChild(TR);
}







</script>




@stop