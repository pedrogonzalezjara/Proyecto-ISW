@extends('layouts.utem')
@section('contenido')
	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Editar funcionario</h4>
  		</div>

  		<div class="panel-body">
        @if (!empty($funcionarios))
    			<form method="post" action="/funcionarios/update/{{ $funcionarios->id }}">
            <p>
            <input value="{{ $funcionarios->rut }}" type="text" name="Rut" placeholder="Descripcion" class="form-control" required>
          </p>
          <p>
            <input value="{{ $funcionarios->nombres }}" type="text" name="Nombres" placeholder="Nombre" class="form-control" required>
          </p>
          <p>
            <input value="{{ $funcionarios->apellidos }}" type="text" name="Apellidos" placeholder="Descripcion" class="form-control" required>
          </p>
          <p>
            <input value="{{ $funcionarios->fecha_nacimiento }}" type="text" name="Fecha" placeholder="Descripcion" class="form-control" required>
          </p>
          <p>
            <input value="{{ $funcionarios->genero }}" type="value" name="Genero" placeholder="Descripcion" class="form-control" required>
          </p>
          <p>
            <input value="{{ $funcionarios->direccion }}" type="text" name="Direccion" placeholder="Descripcion" class="form-control" required>
          </p>
            <input value="{{ $funcionarios->telefono }}" type="text" name="Telefono" placeholder="Descripcion" class="form-control" required>
          </p>
            <input value="{{ $funcionarios->email }}" type="text" name="Email" placeholder="Descripcion" class="form-control" required>
          <p>         
              {{Form::select('departamento',Departamentos::lists('nombre','id'))}}
          </p>
          <input type="submit" value="Guardar Cambios" class="btn btn-success">
          @else
          <p>
            No existe información para este funcionario.
          </p>
          @endif
        <a href="/funcionarios" class="btn btn-default">Volver</a>
      </form>
		</div>
	</div>
  @if(Session::has('message'))
    <div class="btn btn-info disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
  @endif
  @stop
</body>
</html>