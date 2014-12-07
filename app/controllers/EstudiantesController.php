<?php

class EstudiantesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$estudiantes= Estudiantes::orderBy('id','DESC')->get();
		 return View::make('estudiantes.index')->with('estudiantes',$estudiantes);
	}

	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return View::make('estudiantes.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$estudiante = new Estudiantes;

		$estudiante->rut = Input::get('rut_demo_5');
		$estudiante->nombres = ucwords(Input::get('Nombres'));
		$estudiante->apellidos = ucwords(Input::get('Apellidos'));
		$estudiante->fecha_nacimiento = Input::get('fecha');
		$estudiante->genero = Input::get('Genero');
		$estudiante->direccion = ucwords(Input::get('Direccion'));
		$estudiante->telefono = Input::get('Telefono');
		$estudiante->email = Input::get('Email');
		$estudiante->estado = ucwords(Input::get('Estado'));
		$estudiante->carrera_fk = Input::get('carrera');

		if ($estudiante->save())
		{
			Session::flash('message','El estudiante ha sido agregado correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! ha ocurrido un error');
			Session::flash('class','danger');
		}
		return Redirect::to('estudiantes/create');
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		$estudiante = Estudiantes::find($id);
		$carrera = Carreras::find($estudiante->carrera_fk);
		return View::make('estudiantes.show')->with('estudiantes',$estudiante)->with('carrera',$carrera);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id = null)
	{
		$estudiante= Estudiantes::find($id);


		return View::make('estudiantes.edit')->with('estudiantes',$estudiante);
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$estudiante= Estudiantes::find($id);

		$estudiante->rut = Input::get('Rut');
		$estudiante->nombres = Input::get('Nombres');
		$estudiante->apellidos = Input::get('Apellidos');
		$estudiante->fecha_nacimiento = Input::get('Fecha');
		$estudiante->genero = Input::get('Genero');
		$estudiante->direccion = Input::get('Direccion');
		$estudiante->telefono = Input::get('Telefono');
		$estudiante->email = Input::get('Email');
		$estudiante->estado = Input::get('Estado');
		$estudiante->carrera_fk = Input::get('carrera');

		if ($estudiante->save())
		{
			Session::flash('message','Informacion actualizada correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! No se ha podido actualizar');
			Session::flash('class','danger');
		}

		return Redirect::to('estudiantes/edit/'.$id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$estudiante= Estudiantes::find($id);
		if($estudiante->delete())
		{
			Session::flash('message','Estudiante eliminado correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('mensage','Ups! ha ocurrido un error');
			Session::flash('class','danger');
		}
		return Redirect::to('estudiantes');
	}
}
