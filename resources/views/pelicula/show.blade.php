@extends('layouts.app')

@section('title', 'Menu')

@section('content')
	<div class="text text-right btn-lg btn-block">
            <a href="/pelicula">Volver</a>
    </div>	
	<div class="card text-center">
		<div class="card-body">
    		<h5 class="card-title text-primary">{{ $peliculas -> nombre}}</h5>
    		<img style="height: 450px;width: 300px" class="card-img-top img-thumbnail" src="/images/{{$peliculas -> avatar}}" alt=""><br><br>
    		<p class="card-text">Año : {{ $peliculas -> año}}</p>
    		<p class="card-text">Genero : {{ $peliculas -> genero}}</p>
    		<p class="card-text">Clasificacion : {{ $peliculas -> clasificacion}}</p>
    		<p class="card-text">Director : {{ $peliculas -> director}}</p>
    		<p class="text-center">{{ $peliculas -> descripcion}}</p><br>

    		<br>
    		<form action="/pelicula/{{$peliculas-> id}}" method="post">
				{!!method_field('delete')!!}
				{!!csrf_field()!!}<br>
                <a href="/pelicula/{{ $peliculas -> id}}/edit/" class="btn btn-primary btn-lg btn-block">Editar</a>
				<button  class="btn btn-danger btn-lg btn-block" type="submit">Eliminar</button>
			</form>
  		</div>  		
	</div>

	<br><br><br><br>
@endsection