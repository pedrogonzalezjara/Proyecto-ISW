@extends('layouts.utem')
@section('contenido')
    <p>
      <table>
      <td width=505>
      <h2>Registro de Departamentos</h2>
      </td> 
      <td>
        <a href="/departamentos/create" class="btn btn-warning btn-sm">Agregar Departamentos</a>
      </td>
    </table>
    </p>
  <table class="table table-striped table-hover ">
  <tbody>
    @foreach($departamentos as $departamento)
      <tr>
      <td width=500>{{ $departamento->nombre }}</td>              
      <td>
          <a href="/departamentos/show/{{ $departamento->id }}"><span class="label label-info">Ver</span></a>
          <a href="/departamentos/edit/{{ $departamento->id }}"><span class="label label-success">Editar</span></a>
          <a href="{{url('/departamentos/destroy',$departamento->id)}}"><span class="label label-danger">Eliminar</span></a>
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
