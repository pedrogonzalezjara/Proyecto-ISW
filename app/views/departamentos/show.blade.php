@extends('layouts.utem')
@section('contenido')
    <p>
      <table>
      <td width=505>
      <h2>Informacion Departamento</h2>
      </td>
      <td>
        <a href="/departamentos/edit/{{ $departamentos->id }} "class="btn btn-warning btn-sm">Editar</a
      </td>
    </table>
    </p>
    <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($departamentos))
          <tr height= 10>
          <td width=100>
            <h5><b>Nombre:</b></h5>         
          </td>
          <td>
            Facultad de {{$departamentos->nombre }}
          </td>
          <tr>
            <td width=100>
              <h5><b>Descripcion:</b></h5>
           </td>
          <td>
            {{$departamentos->descripcion }}
          </td>            
          </tr>
          <tr>
            <td width=100>
              <h5><b>Facultad:</b></h5>
            </td>
            <td>
              {{$facultad->nombre }}
            </td>
        @else
        <p>
          No existe información de este Departamento.
        </p>
        @endif
      </tbody>
    </table>
        <a href="/departamentos" class="btn btn-default">Volver</a>
        @stop
</body>
</html>