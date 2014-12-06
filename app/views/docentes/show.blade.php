@extends('layouts.utem')
@section('contenido')
	<div class="panel panel-info">
  		<div class="panel-heading">
  			<h4>Información del Docente</h4>
  		</div>
  		<div class="panel-body">        
        <div class="panel-body">
          @if (!empty($docentes))
           <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Nombre</h3>
              </div>
              <div class="panel-body">
                       {{$docentes->nombres}}
              </div>
           </div>
        <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Descripcion</h3>
              </div>
              <div class="panel-body">
                {{$docentes->departamento}}
              </div>
        </div>
        @else
        <p>
          No existe información de este Docentes.
        </p>
        @endif       
        <a href="/docentes" class="btn btn-default">Volver</a>
		    </div>
	    </div>
      @stop
</body>
</html>