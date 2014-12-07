<?php

class AlumnoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex($id =null)
	{
		$colegio = Colegios::all();
		$estudiante = Estudiantes::find($id);
		 return View::make('curriculum.alumno')->with('colegios',$colegio)->with('estudiantes',$estudiante);
	}

}