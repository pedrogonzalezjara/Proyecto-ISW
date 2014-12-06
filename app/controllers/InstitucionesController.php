<?php

class InstitucionesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$instituciones= Instituciones::orderBy('id','DESC')->get();
		 return View::make('curriculum.alumno')->with('instituciones',$instituciones);
	}

	public function getFuncionarios()
	{
		$instituciones= Instituciones::orderBy('id','DESC')->get();
		 return View::make('curriculum.funcionario')->with('instituciones',$instituciones);
	}

	public function getDocentes()
	{
		$instituciones= Instituciones::orderBy('id','DESC')->get();
		 return View::make('curriculum.docente')->with('instituciones',$instituciones);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return View::make('instituciones.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$institucion = new Institucion;

		$institucion->nombre = Input::get('nombre');
		$institucion->desde = Input::get('desde');
		$institucion->hasta = Input::get('hasta');
		$institucion->comentario = Input::get('comentario');
		$institucion->estudiante_fk = input::get('estudiante');
		$institucion->funcionario_fk = input::get('funcionario');
		$institucion->docente_fk = input::get('docente');

		if ($institucion->save())
		{
			Session::flash('message','Establecimiento agregado correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! ha ocurrido un error');
			Session::flash('class','danger');
		}

		return Redirect::to('instituciones/create');
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		$institucion = Instituciones::find($id);
		//$escuelas = Escuelas::find($carrera->escuela_fk);
		return View::make('institucion.show')->with('instituciones',$institucion);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id = null)
	{
		$institucion= Liceos::find($id);


		return View::make('isntituciones.edit')->with('instituciones',$institucion);
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$institucion= Instituciones::find($id);

		$institucion->nombre = Input::get('nombre');
		$institucion->desde = Input::get('desde');
		$institucion->hasta = Input::get('hasta');
		$institucion->comentario = Input::get('comentario');
		$institucion->estudiante_fk = input::get('estudiante');
		$institucion->funcionario_fk = input::get('funcionario');
		$institucion->docente_fk = input::get('docente');

		if ($institucion->save())
		{
			Session::flash('message','Informacion actualizada correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! No se ha podido actualizar');
			Session::flash('class','danger');
		}

		return Redirect::to('instituciones/edit/'.$id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$institucion= Instituciones::find($id);
		if($institucion->delete())
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
