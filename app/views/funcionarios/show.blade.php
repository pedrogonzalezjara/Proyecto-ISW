@extends('layouts.utem')
@section('contenido')
	<div class="panel panel-info">
  		<div class="panel-heading">
  			<h4>Información del Funcionario</h4>
  		</div>

  		<div class="panel-body">
        
        <div class="panel-body">
          @if (!empty($funcionarios))
           <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Nombre</h3>
              </div>
              <div class="panel-body">
                       {{$funcionarios->nombres}}
              </div>
           </div>
        <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Descripcion</h3>
              </div>
              <div class="panel-body">
                       {{$funcionarios->descripcion}}
              </div>
        </div>
        @else
        <p>
          No existe información de este Estudiante.
        </p>
        @endif       
        <a href="/funcionarios" class="btn btn-default">Volver</a>
		    </div>
	    </div>
      @stop
</body>
</html>