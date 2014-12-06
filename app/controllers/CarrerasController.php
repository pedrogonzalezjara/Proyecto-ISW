<?php

class CarrerasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$carreras= Carreras::orderBy('id','DESC')->get();
		 return View::make('carreras.index')->with('carreras',$carreras);
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return View::make('carreras.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$carrera = new Carreras;

		$carrera->nombre = Input::get('Nombre');
		$carrera->codigo = Input::get('Codigo');
		$carrera->escuela_fk = input::get('escuela');

		if ($carrera->save())
		{
			Session::flash('message','La Carrera ha sido agregada correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! ha ocurrido un error');
			Session::flash('class','danger');
		}

		return Redirect::to('carreras/create');
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		$carrera = Carreras::find($id);
		$escuelas = Escuelas::find($carrera->escuela_fk);
		return View::make('carreras.show')->with('carreras',$carrera)->with('escuela',$escuelas);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id = null)
	{
		$carrera= Carreras::find($id);


		return View::make('carreras.edit')->with('carreras',$carrera);
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$carrera= Carreras::find($id);

		$carrera->nombre = Input::get('Nombre');
		$carrera->codigo = Input::get('Codigo');
		$carrera->escuela_fk = input::get('Escuela');

		if ($carrera->save())
		{
			Session::flash('message','Informacion actualizada correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! No se ha podido actualizar');
			Session::flash('class','danger');
		}

		return Redirect::to('carreras/edit/'.$id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$carrera= Carreras::find($id);
		if($carrera->delete())
		{
			Session::flash('message','Carrera eliminada correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('mensage','Ups! ha ocurrido un error');
			Session::flash('class','danger');
		}
		return Redirect::to('carreras');
	}
}
