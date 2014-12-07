@extends('layouts.utem')
@section('contenido')
	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Editar estudiantes</h4>
  		</div>

  		<div class="panel-body">
        @if (!empty($estudiantes))
    			<form method="post" action="/estudiantes/update/{{ $estudiantes->id }}">
            <p>
            <input value="{{ $estudiantes->rut }}" type="text" name="Rut" placeholder="Descripcion" class="form-control" required>
          </p>
          <p>
            <input value="{{ $estudiantes->nombres }}" type="text" name="Nombres" placeholder="Nombre" class="form-control" required>
          </p>
          <p>
            <input value="{{ $estudiantes->apellidos }}" type="text" name="Apellidos" placeholder="Descripcion" class="form-control" required>
          </p>
          <p>
            <input value="{{ $estudiantes->fecha_nacimiento }}" type="text" name="Fecha" placeholder="Descripcion" class="form-control" required>
          </p>
          <p>
            <input value="{{ $estudiantes->genero }}" type="value" name="Genero" placeholder="Descripcion" class="form-control" required>
          </p>
          <p>
            <input value="{{ $estudiantes->direccion }}" type="text" name="Direccion" placeholder="Descripcion" class="form-control" required>
          </p>
            <input value="{{ $estudiantes->telefono }}" type="text" name="Telefono" placeholder="Descripcion" class="form-control" required>
          </p>
            <input value="{{ $estudiantes->email }}" type="text" name="Email" placeholder="Descripcion" class="form-control" required>
          </p>
            <input value="{{ $estudiantes->estado }}" type="text" name="Estado" placeholder="Descripcion" class="form-control" required>
          </p>
          <p>         
              {{Form::select('carrera',Carreras::lists('nombre','id'))}}
          </p>
          <input type="submit" value="Guardar Cambios" class="btn btn-success">
          @else
          <p>
            No existe información para este Estudiante.
          </p>
          @endif
        <a href="/estudiantes" class="btn btn-default">Volver</a>
      </form>
		</div>
	</div>
  @if(Session::has('message'))
    <div class="btn btn-info disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
  @endif
  @stop
</body>
</html>