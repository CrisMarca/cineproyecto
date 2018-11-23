<!DOCTYPE html>
<html>
<head>
	<title>cine - @yield('title')</title>	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>	

	<div class="page-header"><br>		
		<h3>&nbsp&nbsp&nbsp&nbspCine "Megalodon"</h3>
	</div><br>

	<div class="col-md-12">				
		<ul class="nav nav-tabs">
		  	<li class="nav-item">
		    	<a class="nav-link active" href="#">Inicio</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="{{ route('pelicula.index') }}">Peliculas</a>
		  	</li>
		  	<li class="nav-item">
			    <a class="nav-link" href="{{ route('pelicula.create') }}">Nueva Pelicula</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="{{ route('cartelera.index') }}">Cartelera</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="{{ route('cartelera.create') }}">Nueva Cartelera</a>
		  	</li>	
		  	<li class="nav-item">
		    	<a class="nav-link" href="{{ route('sala.index') }}">Salas</a>
		  	</li>	  	
		  	<li class="nav-item">
		    	<a class="nav-link" href="{{ route('sala.create') }}">Nueva Sala</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="{{ route('cine.index') }}">Cines</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="{{ route('cine.create') }}">Nuevo Cine</a>
		  	</li>
		</ul>	
	</div>		
	<br><br>	
	<div class="container">
		@yield('content')
	</div>
</body>
</html>