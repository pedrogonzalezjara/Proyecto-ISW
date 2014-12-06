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
    @if (!empty($facultades))
    <form method="post" action="/facultades/update/{{ $facultades->id }}">
  		<tr height= 10>
          <td width=100>
            <h5><b>Nombre:</b></h5>         
          </td>
          <td>
            <input value="{{ $facultades->nombre }}" type="text" name="Nombre" placeholder="Nombre" class="form-control" required>
          </td>
          <tr>
            <td width=100>
              <h5><b>Descripcion:</b></h5>
           </td>
          <td>
            <input value="{{ $facultades->descripcion }}" type="text" name="Descripcion" placeholder="Descripcion" class="form-control" required>
          </td>            
          </tr>         
        @else
      <p>
        No existe información para ésta Facultad.
      </p>
        @endif
      </tbody>
    </table>
        <input type="submit" value="Guardar" class="btn btn-primary">
        <a href="/facultades" class="btn btn-default">Volver</a>
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
