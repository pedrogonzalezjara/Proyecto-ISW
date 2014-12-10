<?php

class RegistrosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function getCreate()
	{
		return View::make('registros.create');
	}

	public function store()
	{

		$registro = new Estudiantes;
		//$usuario = new Usuarios;

		$registro->rut = Input::get('rut_demo_5');
		$registro->nombres = ucwords(Input::get('nombres'));
		$registro->apellidos = ucwords(Input::get('apellidos'));
		$registro->fecha_nacimiento = Input::get('fecha');
		$registro->genero = Input::get('Genero');
		$registro->direccion = ucwords(Input::get('direccion'));
		$registro->telefono = Input::get('telefono');
		$registro->email = Input::get('email');
		$registro->estado = ucwords(Input::get('estado'));
		$registro->carrera_fk = Input::get('carrera');
		$usuario->rut = Input::get('rut_demo_6');
		$usuario->contrasena = Input::get('contrasena');
		$usuario->rol_fk= "2";
		$registro->save();

		if ($registro->save())
		{
			Session::flash('message','El estudiante ha sido agregado correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! ha ocurrido un error');
			Session::flash('class','danger');
		}
		return Redirect::to('/registros/create');
		
	}
}