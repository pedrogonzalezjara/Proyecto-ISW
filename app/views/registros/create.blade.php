@extends('layouts.login')
@section('contenido')
<div class="panel panel-primary">
  	<div class="panel-heading">
  		<h4>Ingrese sus Datos</h4>
  	</div>
  		<div class="panel-body">
  			<form method="post" action="store">
				<p> Rut
					<input type="text" name="rut_demo_5" id="rut_demo_5" placeholder="ingrese su rut" class="form-control" required>
				</p>
				<p> Nombres
					<input type="text" name="nombres" placeholder="ingrese sus nombres" class="form-control" required>
				</p>
				<p>Apellidos
					<input type="text" name="apellidos" placeholder="ingrese sus apellidos" class="form-control" required>
				</p>
				<p>Fecha de Nacimiento
					<input type="text" name="fecha" placeholder="ejemplo: 01/01/1900" class="form-control" required>
				</p>
				<p>			
					 Sexo: {{Form::select('Genero',array(1 => 'Masculino', 2 => 'Femenino'),Input::old('Genero'),array('class' =>'form-control'))}} 
				</p>
				<p>Direccion
					<input type="text" name="direccion" placeholder="Direccion" class="form-control" required>
				</p>
				<p>Telefono
					<input type="value" name="telefono" placeholder="telefono" class="form-control" required>
				</p>
				<p>Correo Electronico
					<input type="text" name="email" placeholder="email" class="form-control" required>
				</p>
				<p>Estado Civil
					<input type="text" name="estado" placeholder="ingrese estado civil" class="form-control" required>
				</p>
				<p>
					Seleccione su carrera
				</p>
				<p>				 
				 	{{Form::select('carrera',Carreras::lists('nombre','id'))}}
				</p>
				<p>
				 <b>Ingrese Contraseña</b>
				</p>
				<p>					
					{{ Form::password('contrasena',array('class' =>'form-control', 'placeholder'=>'Contraseña','required autofocus')) }}
						 <div class="col-sm-10">
						 	@if($errors->has('contrasena'))
						 	<div class="alert alert-danger" role="alert">
						 		@foreach($errors->get('contrasena') as $error )
						 		<b>{{ $error }}</b> </br>
						 		@endforeach
						 		</div>
						 		@endif
						 </div>					
				</p>
				<p>
					<br>
				</p>
				<p>
					<b>Repita su contraseña</b>
				</p>
				<p>
				 {{ Form::password('contrasena_confirmation',array('class' =>'form-control', 'placeholder'=>'repita su contraseña','required autofocus')) }}				 
				 	<div class="col-sm-10">
				 		@if($errors->has('contrasena_confirmation'))
				 		<div class="alert alert-danger" role="alert">
				 			@foreach($errors->get('contrasena_confirmation') as $error )
				 			<b>{{ $error }}</b> </br>
				 			@endforeach
				 		</div>
				 		@endif
				 	</div>
				</p>
							
			</div>
				
			<p>
				<input type="submit" value="Guardar" class="btn btn-success">
				 <a href="/registros" class="btn btn-default">Volver</a>
			</p>
		</form>
	</div>
	  @if(Session::has('message'))
    <div class="btn btn-success disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
  @endif
  {{HTML::script('assets/js/jquery.Rut.js');}}
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


