@extends('layouts.utem')
@section('contenido')
    <p>
      <table>
      <td width=505>
      <h2>Informacion Facultad</h2>
      </td>
      <td>
        <a href="/facultades/edit/{{ $facultades->id }} "class="btn btn-warning btn-sm">Editar</a>
      </td>
    </table>
    </p>
    <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($facultades))
          <tr height= 10>
          <td width=100>
            <h5><b>Nombre:</b></h5>         
          </td>
          <td>
            Facultad de {{$facultades->nombre }}
          </td>
          <tr>
            <td width=100>
              <h5><b>Descripcion:</b></h5>
           </td>
          <td>
            {{$facultades->descripcion }}
          </td>            
          </tr>                       
        @else
        <p>
          No existe información de esta facultad.
        </p>
        @endif
      </tbody>
    </table>
        <a href="/facultades" class="btn btn-default">Volver</a>
        @stop
</body>
</html>