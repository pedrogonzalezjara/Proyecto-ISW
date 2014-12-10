@extends('layouts.utem')
@section('contenido')
<p>
	<table>
    <td width=505>
    <h2>Registro de Escuelas</h2>
    </td>
    </table>
</p>
  	<h4>Nueva Escuela</h4>
	<table class="table table-striped table-hover ">
  		<tbody>
  			<form method="post" action="store">
          	<td width=100>
            <h5><b>Nombre:</b></h5>         
          	</td>
          	<td>
           		<input type="text" name="Nombre" placeholder="Nomre de la escuela" class="form-control" required>
          	</td>
          	<tr>
            <td width=100>
              <h5><b>Descripcion:</b></h5>
          	</td>
          	<td>
            	<input type="text" name="Descripcion" placeholder="Informacion Adicional" class="form-control" required>
         	  </td>            
         	  </tr>
         	  <tr>
            	<td width=100>
             	 <h5><b>Departamento:</b></h5>
          		</td>
          			<td>
          				<p>
			    			{{Form::select('departamento',Departamentos::lists('nombre','id'))}}
						</p>            	
         	  		</td>            
         	  </tr>	
		  </tbody>
		</table>
          <input type="submit" value="Guardar" class="btn btn-primary">
          <a href="/escuelas" class="btn btn-default">Volver</a>  
         </form>
         <p>
	         @if(Session::has('message'))
            <div class="btn btn-success disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
          @endif
          </p>
  @stop
