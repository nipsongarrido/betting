@extends('plantilla.plantilla')

  {{-- ejemplo de formulario de login extraido de http://getbootstrap.com/examples/signin/  --}}

  @section('title')
    Login
  @endsection


  @section("css")

    {{-- Carga de Assets mediante clase HTML --}}
    {{ HTML::style('css/login.css'); }}

  @endsection




  @section("contenido")
    <div class="container">

      {{-- Uso de formularios y de URL::to --}}

      <form class="form-signin" role="form" action="{{URL::to('/login')}}" method="POST">
        <h2 class="form-signin-heading">Ingrese al sitio</h2>
        <input type="email" class="form-control" placeholder="Correo Electronico" name="email" required autofocus>
        <br>
        <input type="password" class="form-control" placeholder="Clave" name="clave" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      </form>

    </div> 

  @endsection