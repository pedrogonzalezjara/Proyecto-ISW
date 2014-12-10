@extends('layouts.curriculum')
@section('contenido')
<table>
  <td width=500>
    <h2><b>Ingrese los datos de la Institucion<b></h2>
  </td>
</table>
<table class="table table-striped table-hover ">
      <tbody>
        <form method="post" action="store">
         <table>
          <td width=100>
            Nombre:
          </td>
          <td width=600>
             <input type="text" name="nombre" placeholder="Nombre de la Institucion" class="form-control" required>
          </td>
         </table>
         <p>
         </p>
         <table>
          <td width=100>
            Desde:
          </td>
          <td width=250>
             <input type="value" name="desde" placeholder="Año de ingreso ej:2008" class="form-control" required>
          </td>
          <td width=100 style="text-align: center">
            Hasta:
          </td>
          <td width=250>
             <input type="value" name="hasta" placeholder="Año de salida o egreso" class="form-control" required>
          </td>
         </table>
         <p>
         </p>
         <table>
          <td width=100>
            Comentario:
          </td>
          <td width=600>
             <input type="text" name="comentario" class="form-control" required>
          </td>
         </table>
      </tbody>
    </table>
    <p>
    </p>
      <input type="submit" value="Guardar" class="btn btn-primary">
      <a href="/alumno" class="btn btn-default">Volver</a>  
       </form>
    @if(Session::has('message'))
    <p>
    <div class="btn btn-success disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
  </p>
  @endif
  @stop
</body>
</html>
