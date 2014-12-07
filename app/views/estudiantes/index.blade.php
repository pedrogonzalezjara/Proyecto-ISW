@extends('layouts.utem')
@section('contenido')
    <p>
      <table>
      <td width=505>
      <h2>Estudiantes</h2>
      </td>
      <td>
        <a href="/estudiantes/create" class="btn btn-warning btn-sm">Agregar Estudiante</a>
      </td>
    </table>
    </p>
  <table class="table table-striped table-hover ">
  <tbody>
    @foreach($estudiantes as $estudiante)
      <tr>
      <td width=500>{{ $estudiante->nombres }} {{$estudiante->apellidos}}</td>         
      <td>
          <a href="/estudiantes/show/{{ $estudiante->id }}"><span class="label label-info">Ver</span></a>
          <a href="/estudiantes/edit/{{ $estudiante->id }}"><span class="label label-success">Editar</span></a>
          <a href="{{url('/estudiantes/destroy',$estudiante->id)}}"><span class="label label-danger">Eliminar</span></a>
      </td>
      </tr>
    @endforeach
  </tbody>
</table>
      @if(Session::has('message'))
        <div class="btn btn-info disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
      @endif
      <table>
    <td width= 505>
      <a href="/admin" class="btn btn-danger btn-xs">Cerrar</a>
    </td>
  </table>
  @stop

