@extends('layouts.utem')
@section('contenido')
    <p>
      <table>
      <td width=505>
      <h2>Registro de Escuelas</h2>
      </td> 
      <td>
        <a href="/escuelas/create" class="btn btn-warning btn-sm">Agregar Escuela</a>
      </td>
    </table>
    </p>
  <table class="table table-striped table-hover ">
  <tbody>
    @foreach($escuelas as $escuela)
      <tr>
      <td width=500>{{ $escuela->nombre }}</td>              
      <td>
        <a href="/escuelas/show/{{ $escuela->id }}"><span class="label label-info">Ver</span></a>
          <a href="/escuelas/edit/{{ $escuela->id }}"><span class="label label-success">Editar</span></a>
          <a href="{{url('/escuelas/destroy',$escuela->id)}}"><span class="label label-danger">Eliminar</span></a>
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
