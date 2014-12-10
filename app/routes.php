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

//rutas de carreras
Route::post('/carreras/store','CarrerasController@store');
Route::post('/carreras/update/{id}','CarrerasController@update');
Route::get('/carreras/destroy/{id}','CarrerasController@destroy');
Route:: controller('carreras','CarrerasController');
//rutas de estudiantes
Route::post('/estudiantes/store','EstudiantesController@store');
Route::post('/estudianttes/update/{id}','EstudiantesController@update');
Route::get('/estudiantes/destroy/{id}','EstudiantesController@destroy');
Route::controller('estudiantes','EstudiantesController');
//rutas de funcionarios
Route::post('/funcionarios/store','FuncionariosController@store');
Route::post('/funcionarios/update/{id}','FuncionariosController@update');
Route::get('/funcionarios/destroy/{id}','FuncionariosController@destroy');
Route::controller('funcionarios','FuncionariosController');

//rutas de docentes
Route::post('/docentes/store','DocentesController@store');
Route::post('/docentes/update/{id}','DocentesController@update');
Route::get('/docentes/destroy/{id}','DocentesController@destroy');
Route::controller('docentes','DocentesController');
//rutas de colegios
Route::post('/colegios/store','ColegiosController@store');
Route::post('/colegios/update/{id}','ColegiosController@update');
Route::get('/colegios/destroy/{id}','ColegiosController@destroy');
Route::controller('colegios','ColegiosController');
//rutas de liceos
Route::post('/liceos/store','LiceosController@store');
Route::post('/liceos/update/{id}','LiceosController@update');
Route::get('/liceos/destroy/{id}','LiceosController@destroy');
Route::controller('liceos','LiceosController');
//rutas de instituciones
Route::post('/instituciones/store','InstitucionesController@store');
Route::post('/instituciones/update/{id}','InstitucionesController@update');
Route::get('/instituciones/destroy/{id}','InstitucionesController@destroy');
Route::controller('instituciones','InstitucionesController');
//rutas de login


Route::controller('seleccion/registro','LoginController');
Route::controller('login/seleccion','LoginController');

Route::get('login', 'LoginController@getLogin');
Route::post('login','LoginController@postLogin');
Route::group(array('before' => 'auth'), function() {
	Route::get('inicio', 'LoginController@getPerfil');
	Route::get('inicio2', 'LoginController@getAdmin');
	Route::get('logout', 'LoginController@getLogout');
});

//rutas de administrador
Route::controller('admin','AdminController');
Route::controller('alumno','AlumnoController');


Route::post('/registros/store','RegistrosController@store');
Route::controller('registros','RegistrosController');



Route::get('/', function()
{
	return View::make('hello');
});