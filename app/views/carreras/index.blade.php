@extends('layouts.utem')
@section('contenido')
    <p>
      <table>
      <td width=505>
      <h2>Registro de Carreras</h2>
      </td> 
      <td>
        <a href="/carreras/create" class="btn btn-warning btn-sm">Agregar Carrera</a>
      </td>
    </table>
    </p>
 <table class="table table-striped table-hover ">
  <tbody>
    @foreach($carreras as $carrera)
      <tr>
      <td width=500>{{ $carrera->nombre }}</td>              
      <td>
          <a href="/carreras/show/{{ $carrera->id }}"><span class="label label-info">Ver</span></a>
          <a href="/carreras/edit/{{ $carrera->id }}"><span class="label label-success">Editar</span></a>
          <a href="{{url('/carreras/destroy',$carrera->id)}}"><span class="label label-danger">Eliminar</span></a>
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
