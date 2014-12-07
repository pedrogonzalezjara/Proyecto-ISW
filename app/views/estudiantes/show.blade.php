@extends('layouts.utem')
@section('contenido')
 <p>
      <table>
      <td width=505>
      <h2>Informacion Docente</h2>
      </td>
      <td>
        <a href="/estudiantes/edit/{{ $estudiantes->id }} "class="btn btn-warning btn-sm">Editar</a>
      </td>
    </table>
    </p>
    <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($estudiantes))
          <tr height= 10>
          <td width=100>
            <h5><b>Rut:</b></h5>         
          </td>
          <td>
            {{$estudiantes->rut}}
          </td>
          <tr>
            <td width=100>
              <h5><b>Nombres:</b></h5>
           </td>
          <td>
            {{$estudiantes->nombres}}
          </td>            
          </tr>
          <tr>
            <td width=100>
              <h5><b>Apellidos:</b></h5>
           </td>
          <td>
            {{$estudiantes->apellidos}}
          </td>            
          </tr>
          <tr>
            <td width=100>
              <h5><b>Fecha de Nacimiento:</b></h5>
           </td>
          <td>
            {{$estudiantes->fecha_nacimiento}}
          </td>            
          </tr>
          <tr>
            <td width=100>
              <h5><b>Genero:</b></h5>
           </td>
          <td>
            <?php if($estudiantes->genero==1)
            {
              echo "Masculino";
            }
            else
            {
              echo "Femenino";
            }
            ?>
          </td>            
          </tr>
          <tr>
            <td width=100>
              <h5><b>Estado Civil:</b></h5>
           </td>
          <td>
            {{$estudiantes->estado}}
          </td>            
          </tr>
          <tr>
            <td width=100>
              <h5><b>Direccion:</b></h5>
           </td>
          <td>
            {{$estudiantes->direccion}}
          </td>            
          </tr>
          <tr>
            <td width=100>
              <h5><b>Teléfono:</b></h5>
           </td>
          <td>
            {{$estudiantes->telefono}}
          </td>            
          </tr>
          <tr>
            <td width=100>
              <h5><b>Correo Electronico:</b></h5>
           </td>
          <td>
            {{$estudiantes->email}}
          </td>            
          </tr>
          <tr>
            <td width=100>
              <h5><b>Carrera:</b></h5>
           </td>
          <td>
            {{$carrera->nombre}}
          </td>            
          </tr>
        @else
        <p>
          No existe información de esta facultad.
        </p>
        @endif
      </tbody>
    </table>
        <a href="/estudiantes" class="btn btn-default">Volver</a>
        @stop
</body>
</html>

