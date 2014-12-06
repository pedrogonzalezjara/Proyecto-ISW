<?php

class FuncionariosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$funcionarios= Funcionarios::orderBy('id','DESC')->get();
		 return View::make('funcionarios.index')->with('funcionarios',$funcionarios);
	}

	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return View::make('funcionarios.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$funcionario = new Funcionarios;

		$funcionario->rut = Input::get('Rut');
		$funcionario->nombres = ucwords(Input::get('Nombres'));
		$funcionario->apellidos = ucwords(Input::get('Apellidos'));
		$funcionario->fecha_nacimiento = Input::get('Fecha');
		$funcionario->genero = Input::get('Genero');
		$funcionario->direccion = ucwords(Input::get('Direccion'));
		$funcionario->telefono = Input::get('Telefono');
		$funcionario->email = Input::get('Email');
		$funcionario->departamento_fk = Input::get('departamento');

		if ($funcionario->save())
		{
			Session::flash('message','El Funcionario ha sido agregado correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! ha ocurrido un error');
			Session::flash('class','danger');
		}
		return Redirect::to('funcionarios/create');
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		$funcionario = Funcionarios::find($id);

		return View::make('funcionarios.show')->with('funcionarios',$funcionario);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id = null)
	{
		$funcionario= Funcionarios::find($id);


		return View::make('funcionarios.edit')->with('funcionarios',$funcionario);
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$funcionario= Funcionarios::find($id);

		$funcionario->rut = Input::get('Rut');
		$funcionario->nombres = ucwords(Input::get('Nombres'));
		$funcionario->apellidos = ucwords(Input::get('Apellidos'));
		$funcionario->fecha_nacimiento = Input::get('Fecha de Nacimiento');
		$funcionario->genero = Input::get('Genero');
		$funcionario->direccion = ucwords(Input::get('Direccion'));
		$funcionario->telefono = Input::get('Telefono');
		$funcionario->email = Input::get('Email');
		$funcionario->departamento_fk = Input::get('departamento');

		if ($funcionario->save())
		{
			Session::flash('message','Informacion actualizada correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('message','Ups! No se ha podido actualizar');
			Session::flash('class','danger');
		}

		return Redirect::to('funcionarios/edit/'.$id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$funcionario= Funcionarios::find($id);
		if($funcionario->delete())
		{
			Session::flash('message','Funcionario eliminado correctamente!');
			Session::flash('class','succes');
		}
		else
		{
			Session::flash('mensage','Ups! ha ocurrido un error');
			Session::flash('class','danger');
		}
		return Redirect::to('funcionarios');
	}
}
