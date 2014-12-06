<?php

class EscuelasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$escuelas= Escuelas::all();
		return View::make('escuelas.index')->with('escuelas',$escuelas);
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return View::make('escuelas.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$escuela = new Escuelas;

		$escuela->nombre = Input::get('Nombre');
		$escuela->descripcion = Input::get('Descripcion');
		$escuela->departamento_fk = input::get('departamento');

		if ($escuela->save())
		{
			Session::flash('message','Escuela ha sido agregada correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! ha ocurrido un error');
			Session::flash('class','danger');
		}

		return Redirect::to('escuelas/create');
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		$escuela = Escuelas::find($id);
		$departamentos = Departamentos::find($escuela->departamento_fk);
		return View::make('escuelas.show')->with('escuelas',$escuela)->with('departamento',$departamentos);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id = null)
	{
		$escuela= Escuelas::find($id);
		return View::make('escuelas.edit')->with('escuelas',$escuela);		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$escuela= Escuelas::find($id);

		$escuela->nombre = Input::get('Nombre');
		$escuela->descripcion = Input::get('Descripcion');
		$escuela->departamento_fk = input::get('departamento');


		if ($escuela->save())
		{
			Session::flash('message','Informacion actualizada correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! No se ha podido actualizar');
			Session::flash('class','danger');
		}

		return Redirect::to('escuelas/edit/'.$id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$escuela= Escuelas::find($id);
		if($escuela->delete())
		{
			Session::flash('message','Escuela eliminada correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('mensage','Ups! ha ocurrido un error');
			Session::flash('class','danger');
		}
		return Redirect::to('escuelas');
	}
}
