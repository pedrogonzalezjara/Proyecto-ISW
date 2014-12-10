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

	public function getLogin() {
		return View::make('usuarios.login');
	}
	 public function postLogin() {
		$input = Input::all();
		$user_data = array('rut' => Input::get('rut'),'contrasena' => Input::get('contrasena'));
		if (Auth::attempt($user_data)) {
			if (Auth::user()->rol_fk == 2)
				return Redirect::to('/');
		else {
			if (Auth::user()->rol_fk == 1)
				return Redirect::to('/');
			else
				return Redirect::to('/home/ingreso')->with('mensaje', 'Rut o Contraseña Incorrectos. ')->withInput();
			}
		}else
			return Redirect::to('/home/ingreso')->with('mensaje', 'Rut o Contraseña Incorrectos. ')->withInput();
	}

	 public function getPerfil() {
		$rut = Auth::user()->rut;
		$perfil = Funcionarios::where('rut', '=', $rut)->get();
		$datos = Registros::where('rut', '=', $rut)->orderBy('fecha', 'desc')->paginate(5);
		return View::make('/usuario/perfil', compact(array("datos", "perfil", "rut")));
	}
}