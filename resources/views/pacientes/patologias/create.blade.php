
@extends('layouts.admin')

@section('title', 'Patologías')


@section('content')

<div class="container">
			<div class="row">		
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
					 <tbody>						
						<div class="table-container">
							<table class="table table-filter">
								
								<!-- ******** DIABETES *********-->
								<tr>
									<td>
										<div class="form-group">
											<input type="checkbox" name="diabetes" id="check" onchange="javascript:showContent()">
										</div>
									</td>

									<td>
									<label for="checkbox1">Diabetes</label>
									<div class="form-group" id="contenido", style="display:none;" name="" >
									<select class="form-control">
					                     <option>Tipo I</option>
					                     <option>Tipo II</option>	                     
				               		</select>
			               			<input type="textarea" class="form-control">					
									 </div>
									</td>									
								</tr>
								<!-- ******** ECR *********-->
								<tr>
									<td>
										<div class="form-group">
											<input type="checkbox" id="check1" onchange="javascript:showContent()">										
										</div>
									</td>
									<td>
										<label>ECR</label>
										<div class="form-group", id="contenido1" style="display:none;">
											
											<select class="form-control">
						                     <option>Tipo I</option>
						                     <option>Tipo II</option>	                     
						                     <option>Tipo III</option>	                     
						                     <option>Tipo VI</option>	                     
						                     <option>Tipo V</option>	                     
					               			</select>

					               			<select class="form-control">
						                     <option>Hemodiatisis</option>
						                     <option>Peritoneodiatisis</option>        
					               			</select>
										<input type="textarea" class="form-control">
											
										</div>
									</td>

									<td>										
									</td>

								</tr>

									<!-- ******** HIPERTENSION *********-->
								<tr>
									<td>
										<div>
											<input type="checkbox" id="check2" onchange="javascript:showContent()">											
										</div>
									</td>
									<td>
										<label>Hipertension</label>
										<div class="form-group", id="contenido2" style="display:none;">
										<input type="textarea" class="form-control">
										</div>

									
									</td>
									<td>
										
									</td>
								</tr>
									<!-- ******** DISPLIDEMIA *********-->
								<tr>
									<td>
										<div>
											<input type="checkbox" id="check3" onchange="javascript:showContent()">											</div>
									</td>
									<td>
									<label>Displidemia</label>
									<div class="form-group", id="contenido3" style="display:none;">
										<input type="textarea" class="form-control">
										</div>
									</td>
									<td>
										
									</td>
								</tr>

									<!-- ******** INSULINA RESISTENTE *********-->
								<tr>
									<td>										
											<input type="checkbox" id="check4" onchange="javascript:showContent()">
									</td>
									<td>
										<label>Insulina Resistente</label>
										<div class="form-group", id="contenido4" style="display:none;">
										<input type="textarea" class="form-control">
										</div>
										
									</td>
									<td>
										
									</td>
								</tr>

								<tr>
								<td>
										<input type="checkbox" id="check5" onchange="javascript:showContent()">
								</td>
								<td>
									<label>Drogas</label>
									<div class="form-group", id="contenido5" style="display:none;">
									<input type="textarea" class="form-control">
									</div>
								</td>
								<td></td>
							</tr>

							<tr>
								<td>
									<input type="checkbox" id="check6" onchange="javascript:showContent()">
								</td>
								<td>
									<label>Lactosa Intolerante</label>
									<div class="form-group", id="contenido6" style="display:none;">
										<input type="textarea" class="form-control">
									</div>
								</td>

								<td></td>
							</tr>

							<tr>
							<td>
								<input type="checkbox" id="check7" onchange="javascript:showContent()">
							</td>
							<td>
								<label>EPOC</label>
								<div class="form-group", id="contenido7" style="display:none;">
									<input type="textarea" class="form-control">
								</div>
							</td>										
							<td></td>
						</tr>

						<tr>
							<td>
									<input type="checkbox" id="check8" onchange="javascript:showContent()">
							
							</td>
							<td>
								<label>IAM</label>
								<div class="form-group", id="contenido8" style="display:none;">
								<input type="textarea" class="form-control">

							</td>
							<td></td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" id="check9" onchange="javascript:showContent()">
							</td>
							<td>
								<label for="checkbox3">ACV</label>
								<div class="form-group", id="contenido9" style="display:none;">
							<input type="textarea" class="form-control">
							</td>
							<td></td>
						</tr>

						<tr>
							<td>
								<input type="checkbox" id="check10" onchange="javascript:showContent()">
							</td>
							<td>
								<label>Tabaco</label>
								<div class="form-group", id="contenido10" style="display:none;">
						<input type="textarea" class="form-control">

							</td>
							<td></td>
						</tr>

						<tr>
							<td>
								<input type="checkbox" id="check11" onchange="javascript:showContent()">
							</td>
							<td>
								<label>Alcohol</label>
								<div class="form-group", id="contenido11" style="display:none;">
					<input type="textarea" class="form-control">
							</td>
							<td></td>
						</tr>

						<tr>
							<td>
								<input type="checkbox" id="check12" onchange="javascript:showContent()">
							</td>
							<td>
								<label for="checkbox3">Actividad Física / Sedentarismo</label>
								<div class="form-group", id="contenido12" style="display:none;">
					<input type="textarea" class="form-control">
							</td>

							<td></td>
						</tr>
								
								</div> <!-- CONTAINER -->
								</tbody>

							</table>
						</div>
						<a href="#" type="button" class="btn btn-primary">Guardar</a>
					</div>
				</div>
			
			</div>
		
		
	</div>
    	
	
	

@endsection

@section('javascript')

<script>
	function showContent() {

		check = document.getElementById("check");
        element = document.getElementById("contenido");
        

        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }

        check1 = document.getElementById("check1");
        element1 = document.getElementById("contenido1");

        if (check1.checked) {
            element1.style.display='block';
        }
        else {
            element1.style.display='none';
        }

        check2 = document.getElementById("check2");
        element2 = document.getElementById("contenido2");

        if (check2.checked) {
            element2.style.display='block';
        }
        else {
            element2.style.display='none';
        }

        check3 = document.getElementById("check3");
        element3 = document.getElementById("contenido3");

        if (check3.checked) {
            element3.style.display='block';
        }
        else {
            element3.style.display='none';
        }
      

        check4 = document.getElementById("check4");
        element4 = document.getElementById("contenido4");

        if (check4.checked) {
            element4.style.display='block';
        }
        else {
            element4.style.display='none';
        }

        check5 = document.getElementById("check5");
        element5 = document.getElementById("contenido5");

        if (check5.checked) {
            element5.style.display='block';
        }
        else {
            element5.style.display='none';
        }

        check6 = document.getElementById("check6");
        element6 = document.getElementById("contenido6");

        if (check6.checked) {
            element6.style.display='block';
        }
        else {
            element6.style.display='none';
        }

        check7 = document.getElementById("check7");
        element7 = document.getElementById("contenido7");

        if (check7.checked) {
            element7.style.display='block';
        }
        else {
            element7.style.display='none';
        }


        check8 = document.getElementById("check8");
        element8 = document.getElementById("contenido8");

        if (check8.checked) {
            element8.style.display='block';
        }
        else {
            element8.style.display='none';
        }


        check9 = document.getElementById("check9");
        element9 = document.getElementById("contenido9");

        if (check9.checked) {
            element9.style.display='block';
        }
        else {
            element9.style.display='none';
        }


        check10 = document.getElementById("check10");
        element10 = document.getElementById("contenido10");

        if (check4.checked) {
            element10.style.display='block';
        }
        else {
            element10.style.display='none';
        }


        check11 = document.getElementById("check11");
        element11 = document.getElementById("contenido11");

        if (check11.checked) {
            element11.style.display='block';
        }
        else {
            element11.style.display='none';
        }


        check12 = document.getElementById("check12");
        element12 = document.getElementById("contenido12");

        if (check12.checked) {
            element12.style.display='block';
        }
        else {
            element12.style.display='none';
        }




      
      
      



    }
</script>

@stop
