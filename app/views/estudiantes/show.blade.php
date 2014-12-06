@extends('layouts.utem')
@section('contenido')
	<div class="panel panel-info">
  		<div class="panel-heading">
  			<h4>Información del Estudiante</h4>
  		</div>

  		<div class="panel-body">
        
        <div class="panel-body">
          @if (!empty($estudiantes))
           <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Nombre</h3>
              </div>
              <div class="panel-body">
                       {{$estudiantes->nombres }}
              </div>
           </div>
        <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Descripcion</h3>
              </div>
              <div class="panel-body">
                       {{$estudiantes->descripcion }}
              </div>
        </div>
        @else
        <p>
          No existe información de este Estudiante.
        </p>
        @endif
       
        <a href="/estudiantes" class="btn btn-default">Volver</a>
		    </div>
	    </div>
      @stop
</body>
</html>