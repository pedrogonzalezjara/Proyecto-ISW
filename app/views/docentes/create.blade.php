@extends('layouts.utem')
@section('contenido')
	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Nuevo Docente</h4>
  		</div>

  		<div class="panel-body">
  			<form method="post" action="store">
				<p>
					<input type="text" name="rut_demo_5" id="rut_demo_5" placeholder="ingrese su rut" class="form-control" required>
				</p>
				<p>
					<input type="text" name="Nombres" placeholder="ingrese sus nombres" class="form-control" required>
				</p>
				<p>
					<input type="text" name="Apellidos" placeholder="ingrese sus apellidos" class="form-control" required>
				</p>
				<p>
					<input type="text" name="Fecha" placeholder="ingrese su fecha de nacimiento" class="form-control" required>
				</p>
				<p>			
					 Sexo: {{Form::select('Genero',array(1 => 'Masculino', 2 => 'Femenino'),Input::old('Genero'),array('class' =>'form-control'))}} 
				</p>
				<p>
					<input type="text" name="Direccion" placeholder="Direccion" class="form-control" required>
				</p>
				<p>
					<input type="text" name="Telefono" placeholder="telefono" class="form-control" required>
				</p>
				<p>
					<input type="text" name="Email" placeholder="email" class="form-control" required>
				</p>
				<p>
					Seleccione su departamento
				</p>				 
				 	{{Form::select('departamento',Departamentos::lists('nombre','id'))}}
         		<p>
					<input type="submit" value="Guardar" class="btn btn-success">
					<a href="/docentes" class="btn btn-default">Volver</a>
				</p>
			</form>
		</div>
	</div>
	<p>
	  @if(Session::has('message'))
    	<div class="btn btn-success disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
 	 @endif
 	</p>
 	 <?php echo HTML::script('assets/js/jquery.Rut.js'); ?>
  	<script type="text/javascript">
	$(document).ready(function(){
	$('#rut_demo_5').Rut({
	on_error: function(){ alert('Rut incorrecto'); },
	format_on: 'keyup'
	});
	$("#content > ul").tabs();
	});
	</script>
  @stop