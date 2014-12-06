@extends('layouts.utem')
@section('contenido')
    <p>
      <table>
      <td width=505>
      <h2>Funcionarios</h2>
      </td>
      <td>
        <a href="/funcionarios/create" class="btn btn-warning btn-sm">Agregar Funcionario</a>
      </td>
    </table>
    </p>
  <table class="table table-striped table-hover ">
  <tbody>
    @foreach($funcionarios as $funcionario)
      <tr>
      <td width=500>{{ $funcionario->nombres }} {{$funcionario->apellidos}}</td>         
      <td>
          <a href="/funcionarios/show/{{ $funcionario->id }}"><span class="label label-info">Ver</span></a>
          <a href="/funcionarios/edit/{{ $funcionario->id }}"><span class="label label-success">Editar</span></a>
          <a href="{{url('/funcionarios/destroy',$funcionario->id)}}"><span class="label label-danger">Eliminar</span></a>
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
</body>
</html>
