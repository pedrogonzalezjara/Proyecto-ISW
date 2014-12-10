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

		$input= Input::all();
		$registro = new Estudiantes;
		$usuario = new Users;

		$reglas = array(
			'rut' => 'unique:usuarios|unique:funcionarios|unique:administradores',
			'contrasena' => 'min:6',
			'contrasena_confirmation'=> 'same:contrasena');

		$validar = Validator::make($input, $reglas);
		if ($validar->fails()) {
			return Redirect::back()->withErrors($validar)->withinput();
		}
		else
		{

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
			$usuario->rut = Input::get('rut_demo_5');
			$usuario->password = Hash::make($input['contrasena']);
			$usuario->rol_fk= "2";
			$usuario->save();

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
			
		
		}
		return Redirect::to('/registros/create');
	}
}