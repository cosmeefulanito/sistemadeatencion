
@extends('layouts.admin')

@section('title', 'Antropometria')
@section('content')

<div class="panel panel-default">
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
                <a href="" type="button" class="btn btn-primary ">Cancelar</a>
                <a href="" type="button" class="btn btn-primary ">Guardar</a>


</div><!-- PANEL BODY -->
</div>

 
@stop