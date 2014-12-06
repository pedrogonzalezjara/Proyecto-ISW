<?php

class FacultadesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $layout = 'layouts.utem';
	public function getIndex()
	{
		$facultades= Facultades::orderBy('id','DESC')->get();
		 return $this->layout->content = View::make('facultades.index')->with('facultades',$facultades);
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return View::make('facultades.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$facultad = new Facultades;

		$facultad->nombre = Input::get('Nombre');
		$facultad->descripcion = Input::get('Descripcion');

		if ($facultad->save())
		{
			Session::flash('message','La Facultad ha sido agregada correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! ha ocurrido un error');
			Session::flash('class','danger');
		}

		return Redirect::to('facultades/create');
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		$facultad = Facultades::find($id);

		return View::make('facultades.show')->with('facultades',$facultad);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id = null)
	{
		$facultad= Facultades::find($id);


		return View::make('facultades.edit')->with('facultades',$facultad);
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$facultad= Facultades::find($id);

		$facultad->nombre = Input::get('Nombre');
		$facultad->descripcion = Input::get('Descripcion');

		if ($facultad->save())
		{
			Session::flash('message','Informacion actualizada correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! No se ha podido actualizar');
			Session::flash('class','danger');
		}

		return Redirect::to('facultades/edit/'.$id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$facultad= Facultades::find($id);
		if($facultad->delete())
		{
			Session::flash('message','Facultad eliminada correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('mensage','Ups! ha ocurrido un error');
			Session::flash('class','danger');
		}
		return Redirect::to('facultades');
	}
}
