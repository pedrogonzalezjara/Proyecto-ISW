@extends('layouts.utem')
@section('contenido')    
    <p>
      <table>
    	<td width=505>
      <h2>Registro de Facultades</h2>
      </td>
      <td>
        <a href="/facultades/create" class="btn btn-warning btn-sm">Agregar Facultad</a>
      </td>
    </table>
    </p>
  <table class="table table-striped table-hover ">
  <tbody>
    @foreach($facultades as $facultad)
      <tr>
      <td width=500>{{ $facultad->nombre }}</td>              
      <td>
          <a href="/facultades/show/{{ $facultad->id }}"><span class="label label-info">Ver</span></a>
          <a href="/facultades/edit/{{ $facultad->id }}"><span class="label label-success">Editar</span></a>
          <a href="{{url('/facultades/destroy',$facultad->id)}}"><span class="label label-danger">Eliminar</span></a>
      </td>
      </tr>
    @endforeach
  </tbody>
</table>
<p>
    @if(Session::has('message'))
        <div class="btn btn-info disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
     @endif
</p>
<table>
   <td width= 505>
      <a href="/admin" class="btn btn-danger btn-xs">Cerrar</a>
   </td>
</table>
@stop
</body>
</html>

