@extends('layouts.login')
@section('contenido')
<body>
    {{HTML::script('assets/js/jquery.Rut.js');}}
  {{ Form::open(array('url' =>'login','class'=>'form-signin','name'=>'form1','onSubmit'=>"javascript:return Rut(document.form1.rut.value)")) }}
<h2 class="form-signin-heading">Ingrese a su Cuenta</h2>
  <div class="form-group">
      {{ Form::text('rut',Input::old('rut'),array('class' =>'form-control', 'placeholder'=>'Rut','required autofocus','name'=>'rut') )}}
  </div>
  <div class="form-group">
      {{ Form::password('contrasena',array('class' =>'form-control', 'placeholder'=>'Contraseña','required autofocus'))}}
  </div>    
  
  @if(Session::has('mensaje'))
    <div class="alert alert-danger" role="alert">
    <b>{{Session::get('mensaje')}}</b>
    </div>
  @endif
  @if(Session::has('reset'))
    <div class="alert alert-success" role="success">
    <b>{{Session::get('reset')}}</b>
    </div>
  @endif
  {{ Form::submit('ingresar',array('class' =>'btn btn-lg btn-primary btn-block','value'=>'Validar RUT')) }}

<script type="text/javascript">
  $(document).ready(function(){
  $('#rut_demo_5').Rut({
  on_error: function(){ alert('Rut incorrecto'); },
  format_on: 'keyup'
  });
  $("#content > ul").tabs();
  });
  </script> 

  <div class="form-group">
  <h5 class="form-signin-heading">  <a href="/login/seleccion">Regístrate</a></h5>
 {{ Form::close() }}
 <div class="form-group">
  <h5 class="form-signin-heading">  <a href="/admin">Admin</a></h5>

@stop
