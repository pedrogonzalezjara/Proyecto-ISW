@extends('layouts.utem')
@section('contenido')
    <p>
      <table>
      <td width=505>
      <h2>Informacion de la Escuela</h2>
      </td>
      <td>
        <a href="/escuelas/edit/{{ $escuelas->id }} "class="btn btn-warning btn-sm">Editar</a
      </td>
    </table>
    </p>
    <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($escuelas))
          <tr height= 10>
          <td width=100>
            <h5><b>Nombre:</b></h5>         
          </td>
          <td>
            {{$escuelas->nombre }}
          </td>
          <tr>
            <td width=100>
              <h5><b>Descripcion:</b></h5>
           </td>
          <td>
            {{$escuelas->descripcion }}
          </td>            
          </tr>
          <tr>
            <td width=100>
              <h5><b>Departamento:</b></h5>
            </td>
            <td>
              {{$departamento->nombre }}
            </td>
        @else
        <p>
          No existe información de este Departamento.
        </p>
        @endif
      </tbody>
    </table>
        <a href="/escuelas" class="btn btn-default">Volver</a>
        @stop
</body>
</html>