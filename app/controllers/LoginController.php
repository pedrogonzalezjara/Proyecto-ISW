<?php

class LoginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		 return View::make('usuarios.login');
	}

	public function getRegistro()
	{
		return View::make('usuarios.registro');
	}

	public function getSeleccion()
	{
		return View::make('usuarios.seleccion');
	}
}