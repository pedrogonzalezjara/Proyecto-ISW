<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Proyecto Software</title>
  {{HTML::style('assets/css/flatly.css',array('rel'=>'stylesheet'))}}
  {{HTML::script('assets/js/tali.js')}}
  {{HTML::script('assets/js/tali2.js')}}
  {{HTML::script('assets/js/tali3.js')}}
  <style>
    body {
      width: 800px;
      margin: 50px auto;
    }
    .badge {
      float: right;
    }
  </style>
</head>
<body>
  <div class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Nombre</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Vista Previa</a></li>
      <li><a href="#">Link</a></li>
    </ul>
    <form class="navbar-form navbar-left">
      <input type="text" class="form-control col-lg-8" placeholder="Busqueda">
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Link</a></li>
      <li class="dropdown open">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Cuenta <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Cerrar Sesion</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
<div>	
	<table>
		<td width=600>
			<h3>Datos Personales</h3>
		</td>
	</table>
	<table class="table table-striped table-hover " >
		@if (!empty($estudiantes))
	<td>
		<b>Nombre Completo:</b>
	</td>
	<td>
		{{$estudiantes->nombre}}
	</td>
	<tr>
		<td>
		<b>saasdsadsds:</b>
	</td>
	<td>
		17.746.323-k
	</td>
	</tr>
	<tr>
		<td>
		<b>Fecha de Nacimiento:</b>
	</td>
	<td>
		05/10/1990
	</td>
	</tr>
	<tr>
		<td>
		<b>Sexo:</b>
	</td>
	<td>
		Masculino
	</td>
	</tr>
	<tr>
		<td>
		<b>Estado Civil:</b>
	</td>
	<td>
		Soltero
	</td>
	</tr>
	<tr>
		<td>
		<b>Direccion:</b>
	</td>
	<td>
		Rosas #2223, Santiago Centro
	</td>
	</tr>
	<tr>
		<td>
		<b>Telefono:</b>
	</td>
	<td>
		95270122
	</td>
	</tr>
	<tr>
		<td>
		<b>Correo Electronico:</b>
	</td>
	<td>
		tali-tali@openmailbox.org
	</td>
	</tr>
	<td>
			<a href="/estudiantes/edit" class="btn btn-success btn-sm">Editar Datos</a>
		</td>
</table>
<table>
	<td width=600>
		<h3>Antecedentes Academicos</h3>
	</td>
	<td>
		<a href="/colegios/create" class="btn btn-warning btn-sm">Agregar Colegio</a>
	</td>
</table>
<table class="table table-striped table-hover " >
	<tbody>
    @foreach($colegios as $colegio)
      <tr>
      <td width=500>{{ $colegio->nombre}}</td>              
      <td>
          <a href="/colegio/show/{{ $colegio->id }}"><span class="label label-info">Ver</span></a>
          <a href="/colegio/edit/{{ $colegio->id }}"><span class="label label-success">Editar</span></a>
          <a href="{{url('/colegio/destroy',$colegio->id)}}"><span class="label label-danger">Eliminar</span></a>
      </td>
      </tr>
    @endforeach
  </tbody>
</div>
</body>
</html>