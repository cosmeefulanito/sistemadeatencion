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