<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//Rutas de Facultades
Route::post('/facultades/store','FacultadesController@store');
Route::post('/facultades/update/{id}','FacultadesController@update');
Route::get('/facultades/destroy/{id}','FacultadesController@destroy');
Route:: controller('facultades','FacultadesController');

//Rutas de Departamentos
Route::post('/departamentos/store','DepartamentosController@store');
Route::post('/departamentos/update/{id}','DepartamentosController@update');
Route::get('/departamentos/destroy/{id}','DepartamentosController@destroy');
Route:: controller('departamentos','DepartamentosController');

//Rutas de Facultades
Route::post('/escuelas/store','EscuelasController@store');
Route::post('/escuelas/update/{id}','EscuelasController@update');
Route::get('/escuelas/destroy/{id}','EscuelasController@destroy');
Route:: controller('escuelas','EscuelasController');


Route::post('/carreras/store','CarrerasController@store');
Route::post('/carreras/update/{id}','CarrerasController@update');
Route::get('/carreras/destroy/{id}','CarrerasController@destroy');
Route:: controller('carreras','CarrerasController');

Route::post('/estudiantes/store','EstudiantesController@store');
Route::post('/estudiantes/update/{id}','EstudiantesController@update');
Route::get('/estudiantes/destroy/{id}','EstudiantesController@destroy');
Route::controller('estudiantes','EstudiantesController');

Route::post('/funcionarios/store','FuncionariosController@store');
Route::post('/funcionarios/update/{id}','FuncionariosController@update');
Route::get('/funcionarios/destroy/{id}','FuncionariosController@destroy');
Route::controller('funcionarios','FuncionariosController');


Route::post('/docentes/store','DocentesController@store');
Route::post('/docentes/update/{id}','DocentesController@update');
Route::get('/docentes/destroy/{id}','DocentesController@destroy');
Route::controller('docentes','DocentesController');

Route::post('/colegios/store','ColegiosController@store');
Route::post('/colegios/update/{id}','ColegiosController@update');
Route::get('/colegios/destroy/{id}','ColegiosController@destroy');
Route::controller('colegios','ColegiosController');

Route::post('/liceos/store','LiceosController@store');
Route::post('/liceos/update/{id}','LiceosController@update');
Route::get('/liceos/destroy/{id}','LiceosController@destroy');
Route::controller('liceos','LiceosController');

Route::post('/instituciones/store','InstitucionesController@store');
Route::post('/instituciones/update/{id}','InstitucionesController@update');
Route::get('/instituciones/destroy/{id}','InstitucionesController@destroy');
Route::controller('instituciones','InstitucionesController');

Route::controller('login','LoginController');
Route::controller('seleccion/registro','LoginController');
Route::controller('login/seleccion','LoginController');


Route::controller('admin','AdminController');
Route::controller('alumno','AlumnoController');

Route::post('/registro_alumno/store','RegistrosController@store');
Route::controller('registro_alumno','RegistrosController');


Route::get('/', function()
{
	return View::make('hello');
});