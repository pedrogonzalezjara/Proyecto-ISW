<?php

class DepartamentosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$departamentos= Departamentos::all();
		 return View::make('departamentos.index')->with('departamentos',$departamentos);
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return View::make('departamentos.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$departamento = new Departamentos;

		$departamento->nombre = Input::get('Nombre');
		$departamento->descripcion = Input::get('Descripcion');
		$departamento->facultad_fk = input::get('facultad');

		if ($departamento->save())
		{
			Session::flash('message','EL Departamento ha sido agregado correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! ha ocurrido un error');
			Session::flash('class','danger');
		}

		return Redirect::to('departamentos/create');
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		$departamento = Departamentos::find($id);
		$facultades = Facultades::find($departamento->facultad_fk);
		return View::make('departamentos.show')->with('departamentos',$departamento)->with('facultad',$facultades);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id = null)
	{
		$departamento= Departamentos::find($id);


		return View::make('departamentos.edit')->with('departamentos',$departamento);
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$departamento= Departamentos::find($id);

		$departamento->nombre = Input::get('Nombre');
		$departamento->descripcion = Input::get('Descripcion');
		$departamento->facultad_fk = input::get('facultad');
		
		if ($departamento->save())
		{
			Session::flash('message','Informacion actualizada correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! No se ha podido actualizar');
			Session::flash('class','danger');
		}

		return Redirect::to('departamentos/edit/'.$id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$departamento= Departamentos::find($id);
		if($departamento->delete())
		{
			Session::flash('message','Departamento eliminado correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('mensage','Ups! ha ocurrido un error');
			Session::flash('class','danger');
		}
		return Redirect::to('departamentos');
	}
}
