@extends('plantilla.plantilla')

  {{-- Uso de bucles y lectura de variables en blade--}}

  @section('title')
    Lista
  @endsection



  {{-- CSS básico usado desde plantillas blade, insertado directo
  por fines practicos para presentacion --}}
  @section("css")
    <style>
    .partido{
      margin-top: 10px;
        margin-bottom: 10px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
      }
      .partido:hover{
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
      }
  </style>
  @endsection




  @section("contenido")
    <div class="container">

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h1 class="text-center">Partidos</h1>
        </div>
      </div>


      {{-- Ejemplo de bucle foreach recorriendo arreglo --}}
      @foreach ($partidos as $partido)

          <section class="row partido">
            <div class=" col-sm-2 col-md-offset-1">
              <img src="{{$partido["img_local"]}}" class="img-responsive" alt="">
            </div>
            <div class=" col-sm-6 text-center">

              <h3>
                {{$partido["local"]}} VS {{$partido["visita"]}}
              </h3>

              <p>
                fecha: {{$partido["fecha"]}}
              </p>

              <p>
                hora: {{$partido["hora"]}}
              </p>

            </div>
            <div class=" col-sm-2">
              <img src="{{$partido["img_visita"]}}" class="img-responsive" alt="">
            </div>
          </section>

      @endforeach


      
    </div>

  @endsection