<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@section("title")
			Betting
		@show
	</title>
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


	{{-- Comentario de blade

		
		Los links de abajo son sacados de 
		http://getbootstrap.com/getting-started/#download

		Son el CDN de bootstrap

	--}}

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<style>
		html {
		  position: relative;
		  min-height: 100%;
		}
		body {
		  /* Margin bottom by footer height */
		  margin-bottom: 60px;
		}
		.footer {
		  position: absolute;
		  bottom: 0;
		  width: 100%;
		  /* Set the fixed height of the footer here */
		  height: 60px;
		  background-color: #f5f5f5;
		}


		/* Custom page CSS
		-------------------------------------------------- */
		/* Not required for template or sticky footer method. */

		body > .container {
		  padding: 60px 15px 0;
		}
		.container .text-muted {
		  margin: 20px 0;
		}

		.footer > .container {
		  padding-right: 15px;
		  padding-left: 15px;
		}

		code {
		  font-size: 80%;
		}
	</style>
	@yield("css")



</head>
<body>
	
	{{-- Agregado dentro de una seccion para vistas que no usen header puedan borrarla --}}
	@section("header")
	    <!--  barra de menú fija-->
	    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
	      <div class="container">

	        <div class="navbar-header">

	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">menu movil</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>

	          <a class="navbar-brand" href="#">Betting</a>
	        </div>
	      </div>
	    </div>
	@show
	
	{{-- Yield para el contenido, en donde se cargara el contenido de la plantilla --}}
	@yield("contenido")



	{{-- Agregado dentro de una seccion para vistas que no usen footer puedan borrarla --}}
	@section("footer")
	    <div class="footer">
	      <div class="container">
	        <p class="text-muted"> Betting, opensource</p>
	      </div>
	    </div>
	@show

	
	{{--  Javascript, cargado al final para optimizar carga --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	{{-- Yield para agregar javascript opcional desde otras vistas --}}
	@yield("javascript")


</body>
</html>