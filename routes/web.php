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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});



Route::resource('nutricionista','NutricionistaController');
Route::resource('paciente','PacienteController');

Route::get('paciente/{id}/destroy',[
	'uses' => 'PacienteController@destroy',
	'as' => 'paciente.destroy'

	]);

Route::get('nuevavisita', function(){
	return view('paciente.visita');
})->name('visita');
=======
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


>>>>>>> 5b5c86165c6c86e88b1d647a34fae95ec78f4132
