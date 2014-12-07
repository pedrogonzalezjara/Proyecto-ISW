@extends('layouts.utem')
@section('contenido')
<p>
  <table>
    <td width=505>
      <h2>Editar Escuela</h2>
    </td>
    </table>
</p>
<div>
<table class="table table-striped table-hover">
  <tbody>
    @if (!empty($escuelas))
    <form method="post" action="/escuelas/update/{{ $escuelas->id }}">
          <td width=100>
            <h5><b>Nombre:</b></h5>         
          </td>
          <td>
            <input value="{{ $escuelas->nombre }}" type="text" name="Nombre" placeholder="Nombre" class="form-control" required>
          </td>
          <tr>
            <td width=100>
              <h5><b>Descripcion:</b></h5>
           </td>
          <td>
            <input value="{{ $escuelas->descripcion }}" type="text" name="Descripcion" placeholder="Descripcion" class="form-control" required>
          </td>            
          </tr>
          <td width=100>
          <h5><b>Departamento</b></h5>
          </td>
          <td>
          </p>
            {{Form::select('departamento',Departamentos::lists('nombre','id'))}}
          <p>
          </td>       
        @else
      <p>
        No existe información para ésta Escuela.
      </p>
        @endif
      </tbody>
    </table>
        <input type="submit" value="Guardar" class="btn btn-primary">
        <a href="/escuelas" class="btn btn-default">Volver</a>
    </form>
</div>
@if(Session::has('message'))
<p>
  <div class="btn btn-info disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
</p>
@endif
@stop
</body>
</html>