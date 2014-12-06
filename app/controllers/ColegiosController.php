<?php

class ColegiosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$colegios= Colegios::orderBy('id','DESC')->get();
		 return View::make('curriculum.alumno')->with('colegios',$colegios);
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return View::make('colegios.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$colegio = new Colegios;

		$colegio->nombre = Input::get('nombre');
		$colegio->desde = Input::get('desde');
		$colegio->hasta = Input::get('hasta');
		$colegio->comentario = Input::get('comentario');
		$colegio->estudiante_fk = input::get('estudiante');
		$colegio->funcionario_fk = input::get('funcionario');
		$colegio->docente_fk = input::get('docente');

		if ($colegio->save())
		{
			Session::flash('message','Colegio agregado correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! ha ocurrido un error');
			Session::flash('class','danger');
		}

		return Redirect::to('colegios/create');
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		$colegio = Colegios::find($id);
		//$escuelas = Escuelas::find($carrera->escuela_fk);
		return View::make('colegios.show')->with('colegios',$colegio);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id = null)
	{
		$colegio= Colegios::find($id);


		return View::make('colegios.edit')->with('colegios',$colegio);
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$colegio= Colegios::find($id);

		$colegio->nombre = Input::get('nombre');
		$colegio->desde = Input::get('desde');
		$colegio->hasta = Input::get('hasta');
		$colegio->comentario = Input::get('comentario');
		$colegio->estudiante_fk = input::get('estudiante');
		$colegio->funcionario_fk = input::get('funcionario');
		$colegio->docente_fk = input::get('docente');

		if ($colegio->save())
		{
			Session::flash('message','Informacion actualizada correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! No se ha podido actualizar');
			Session::flash('class','danger');
		}

		return Redirect::to('colegios/edit/'.$id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$colegio= Colegios::find($id);
		if($colegio->delete())
		{
			Session::flash('message','Carrera eliminada correctamente!');
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
