@extends('layouts.utem')
@section('contenido')
<p>
  <table>
    <td width=505>
      <h2>Editar Facultad</h2>
    </td>
    </table>
</p>
<div>
<table class="table table-striped table-hover">
  <tbody>
    @if (!empty($departamentos))
    <form method="post" action="/departamentos/update/{{ $departamentos->id }}">
          <td width=100>
            <h5><b>Nombre:</b></h5>         
          </td>
          <td>
            <input value="{{ $departamentos->nombre }}" type="text" name="Nombre" placeholder="Nombre" class="form-control" required>
          </td>
          <tr>
            <td width=100>
              <h5><b>Descripcion:</b></h5>
           </td>
          <td>
            <input value="{{ $departamentos->descripcion }}" type="text" name="Descripcion" placeholder="Descripcion" class="form-control" required>
          </td>            
          </tr>
          <td width=100>
          <h5><b>Facultad</b></h5>
          </td>
          <td>
          </p>
            {{Form::select('facultad',Facultades::lists('nombre','id'))}}
          <p>
          </td>       
        @else
      <p>
        No existe información para ésta Facultad.
      </p>
        @endif
      </tbody>
    </table>
        <input type="submit" value="Guardar" class="btn btn-primary">
        <a href="/departamentos" class="btn btn-default">Volver</a>
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