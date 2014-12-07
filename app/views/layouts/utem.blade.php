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
      width: 700px;
      margin: 50px auto;
    }
    .badge {
      float: right;
    }
  </style>
</head>
<body>
  <h1>MENU ADMINISTRADOR</h1>
  <ul class="nav nav-pills">
  <li class="active"><a href="/facultades">Facultades</a></li>
  <li class="active"><a href="/departamentos">Departamentos</a></li>
  <li class="active"><a href="/escuelas">Escuelas</a></li>
  <li class="active"><a href="/carreras">Carreras</a></li>
  <li class="dropdown">
            <a href="#"  data-toggle="dropdown" class="default dropdown-toggle">Personal <b class="caret "></b></a>
            <ul class="dropdown-menu ">
                <li><a href="/estudiantes">Alumnos</a></li>
                <li><a href="/funcionarios">Funcionarios</a></li>
                <li><a href="/docentes">Docentes</a></li>
            </ul>
        </li>
    </ul>
</ul>
@yield('contenido')
</div>
</body>
</html>

