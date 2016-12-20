<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});
*/

/********   Rutas de acceso que tendrá el NUTRICIONISTA	   */////


Route::group(['prefix' => 'paciente'],function()
{
	Route::resource('/', 'PacienteController');
	Route::resource('patologia', 'PatologiaController');
	Route::resource('antropometria', 'AntropometriaController');
	Route::resource('recordatorio', 'RecordatorioController');
	Route::resource('distribucion', 'DistribucionController');




//Route::get('patologias/create/{id}','PatologiaController@create');

});

/*Route::group(['prefix' =>'nutricionista'],function()
{
	Route::resource('/', 'NutricionistaController');
});
*/


// paciente/recordatorio/{id}/index
// paciente/recordatorio/{id}/create
// paciente/patologia/{id}/index
// paciente/patologia/{id}/create
// paciente/antropometria/{id}/index
// paciente/antropometria/{id}/create
// paciente/distribucion/{id}/index
// paciente/distribucion/{id}/create
/*
Route::group(['prefix' => 'paciente'], function(){

	Route::group(['prefix' => 'patologia/{id}'], function(){


	});

});


