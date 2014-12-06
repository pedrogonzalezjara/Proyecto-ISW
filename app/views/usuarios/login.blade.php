@extends('layouts.login')
@section('contenido')
<body>
  <link media="all" type="text/css" rel="stylesheet" href="assets/css/signin.css">
      <form method="POST" action="#" accept-charset="UTF-8" class="form-signin" name="form1" onSubmit="javascript:return Rut(document.form1.rut.value)"><input name="_token" type="hidden" value="NtlcW8vZGASyeO6jenKOykSfsPPwWHVWD74QZ0xz"><h2 class="form-signin-heading">Ingrese a su Cuenta</h2>

  <div class="form-group">
      <input class="form-control" placeholder="Rut" required autofocus="required autofocus" name="rut" type="text"></div>

  <div class="form-group">
      <input class="form-control" placeholder="Contrase&ntilde;a" required autofocus="required autofocus" name="contrasena" type="password" value=""></div>

      
  <input class="btn btn-lg btn-primary btn-block" value="Ingresar" type="submit">        

  <div class="form-group">
      <h4 class="form-signin-heading">  <a href="https://tesis.informatica.utem.cl/~pgonzalez/proyecto_laravel/password/remind">Olvidaste tu contrase&ntilde;a?</a></h4>
      <h5 class="form-signin-heading">  <a href="/login/seleccion">Regístrate</a></h5>
  </div> 
  </form>      
</body>
</html>
@stop
</html>