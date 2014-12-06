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
@yield('contenido')
</body>
</html>