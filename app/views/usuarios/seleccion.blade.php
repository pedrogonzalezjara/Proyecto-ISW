@extends('layouts.login')
@section('contenido')
<h1>Elige como registrarte<h1>
	<a href="/registro_alumno" class="btn btn-primary btn-lg">Estudiante</a>
	<a href="/login/seleccion/registro_funcionarios" class="btn btn-primary btn-lg">Funcionario</a>
	<a href="/login/seleccion/registro_academicos" class="btn btn-primary btn-lg">Académico</a>
@stop