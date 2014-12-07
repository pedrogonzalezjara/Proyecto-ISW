<?php

class LiceosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$liceos= Liceos::orderBy('id','DESC')->get();
		 return View::make('curriculum.alumno')->with('liceos',$liceos);
	}

	public function getFuncionarios()
	{
		$liceos= Liceos::orderBy('id','DESC')->get();
		 return View::make('curriculum.funcionario')->with('liceos',$liceos);
	}

	public function getDocentes()
	{
		$liceos= Liceos::orderBy('id','DESC')->get();
		 return View::make('curriculum.docente')->with('liceos',$liceos);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return View::make('liceos.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$liceo = new Colegios;

		$liceo->nombre = Input::get('nombre');
		$liceo->desde = Input::get('desde');
		$liceo->hasta = Input::get('hasta');
		$liceo->comentario = Input::get('comentario');
		$liceo->estudiante_fk = input::get('estudiante');
		$liceo->funcionario_fk = input::get('funcionario');
		$liceo->docente_fk = input::get('docente');

		if ($liceo->save())
		{
			Session::flash('message','Establecimiento agregado correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! ha ocurrido un error');
			Session::flash('class','danger');
		}

		return Redirect::to('liceos/create');
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		$liceo = Liceos::find($id);
		//$escuelas = Escuelas::find($carrera->escuela_fk);
		return View::make('liceos.show')->with('liceos',$liceo);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id = null)
	{
		$liceo= Liceos::find($id);


		return View::make('liceos.edit')->with('liceos',$liceo);
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$liceo= Colegios::find($id);

		$liceo->nombre = Input::get('nombre');
		$liceo->desde = Input::get('desde');
		$liceo->hasta = Input::get('hasta');
		$liceo->comentario = Input::get('comentario');
		$liceo->estudiante_fk = input::get('estudiante');
		$liceo->funcionario_fk = input::get('funcionario');
		$liceo->docente_fk = input::get('docente');

		if ($liceo->save())
		{
			Session::flash('message','Informacion actualizada correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! No se ha podido actualizar');
			Session::flash('class','danger');
		}

		return Redirect::to('liceos/edit/'.$id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$liceo= Liceos::find($id);
		if($liceo->delete())
		{
			Session::flash('message','Establecimiento eliminado correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('mensage','Ups! ha ocurrido un error');
			Session::flash('class','danger');
		}
		return Redirect::to('alumno');
	}
}
