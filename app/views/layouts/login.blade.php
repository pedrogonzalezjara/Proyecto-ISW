<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
      <title>Proyecto Software</title>
    {{HTML::style('assets/css/flatly.css',array('rel'=>'stylesheet'))}}
    {{HTML::style('assets/css/signin.css')}}
    {{HTML::script('assets/js/tali.js')}}
    {{HTML::script('assets/js/tali2.js')}}
    {{HTML::script('assets/js/tali3.js')}}
  <title>Proyecto Software</title>
      <style>
    body {
      width: 600px;
      margin: 50px auto;
    }
    .badge {
      float: right;
    }
  </style>
  </head>

  <body>
    <div style= "text-align: center";>
    <table>
      <td>
        <h1>Proyecto Ingenieria de Software<h1>
      </td>
      <tr>
      <td>
        <h2>Administración de Curriculum<h2>
        </td>        
      </tr>
    </table>
    @yield('contenido')
  </body>
</html>
