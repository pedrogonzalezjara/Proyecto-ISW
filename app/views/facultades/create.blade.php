@extends('layouts.utem')
@section('contenido')
	<p>
      <table>
    	<td width=505>
      <h2>Registro de Facultades</h2>
      </td>
    </table>
    </p>
  		<h4>Nueva facultad</h4>
		<table class="table table-striped table-hover ">
  		<tbody>
  			<form method="post" action="store">
          	<td width=100>
            <h5><b>Nombre:</b></h5>         
          	</td>
          	<td>
           		<input type="text" name="Nombre" class="form-control" required>
          	</td>
          	<tr>
            <td width=100>
              <h5><b>Descripcion:</b></h5>
          	</td>
          	<td>
            	<input type="text" name="Descripcion" placeholder="Informacion Adicional" class="form-control" required>
         	  </td>            
         	  </tr>	
		  </tbody>
		</table>
          <input type="submit" value="Guardar" class="btn btn-primary">
          <a href="/facultades" class="btn btn-default">Volver</a>  
         </form>
	  @if(Session::has('message'))
    <p>
    <div class="btn btn-success disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
  </p>
  @endif
  @stop
</body>
</html>
