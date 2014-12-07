@extends('layouts.utem')
@section('contenido')
    <p>
      <table>
      <td width=505>
      <h2>Informacion de la Carrera</h2>
      </td>
      <td>
        <a href="/carreras/edit/{{ $carreras->id }} "class="btn btn-warning btn-sm">Editar</a
      </td>
    </table>
    </p>
    <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($carreras))
          <tr height= 10>
          <td width=100>
            <h5><b>Nombre:</b></h5>         
          </td>
          <td>
            {{$carreras->nombre }}
          </td>
          <tr>
            <td width=100>
              <h5><b>Codigo:</b></h5>
           </td>
          <td>
            {{$carreras->codigo }}
          </td>            
          </tr>
          <tr>
            <td width=100>
              <h5><b>Escuela:</b></h5>
            </td>
            <td>
              {{$escuela->nombre }}
            </td>
        @else
        <p>
          No existe información de esta Escuela.
        </p>
        @endif
      </tbody>
    </table>
        <a href="/carreras" class="btn btn-default">Volver</a>
        @stop
</body>
</html>