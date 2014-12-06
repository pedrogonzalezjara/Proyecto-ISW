@extends('layouts.utem')
@section('contenido')
<p>
  <table>
    <td width=505>
      <h2>Editar Carrera</h2>
    </td>
    </table>
</p>
<div>
<table class="table table-striped table-hover">
  <tbody>
    @if (!empty($carreras))
    <form method="post" action="/carreras/update/{{ $carreras->id }}">
          <td width=100>
            <h5><b>Codigo:</b></h5>         
          </td>
          <td>
            <input value="{{ $carreras->nombre }}" type="text" name="Nombre" placeholder="Nombre" class="form-control" required>
          </td>
          <tr>
            <td width=100>
              <h5><b>Nombre:</b></h5>
           </td>
          <td>
            <input value="{{ $carreras->codigo }}" type="value" name="Codigo" placeholder="Codigo carrera" class="form-control" required>
          </td>            
          </tr>
          <td width=100>
          <h5><b>Escuela</b></h5>
          </td>
          <td>
          </p>
            {{Form::select('Escuela',Escuelas::lists('nombre','id'))}}
          <p>
          </td>       
        @else
      <p>
        No existe información para ésta Carrera.
      </p>
        @endif
      </tbody>
    </table>
        <input type="submit" value="Guardar" class="btn btn-primary">
        <a href="/carreras" class="btn btn-default">Volver</a>
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