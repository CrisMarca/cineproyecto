@extends('layouts.app')

@section('title', 'Editar')

@section('content')	

@include('pelicula.messages')

	<div class="text text-right">
			<a href="/pelicula/{{$peliculas -> id}}">Volver</a>
	</div>
	<form class="form-group" enctype="multipart/form-data" method="POST" 
	action="/pelicula/{{$peliculas-> id}}">

	{!!method_field('PUT')!!}
	{!!csrf_field()!!}


		<div class="form-group">
			<center><h2>Edicion de peliculas</h2></center><br>
			<label for="">Ingrese el nombre de su pelicula : </label>			
			<input type="text" value="{{$peliculas-> nombre}}" name="pelicula" class="form-control">
			<label for="">Ingrese la clasificacion de su pelicula : </label>			
			<input type="text" name="clasificacion" class="form-control" value="{{$peliculas-> clasificacion}}">
			<label for="">Ingrese el año de su pelicula : </label>			
			<input type="text" value="{{$peliculas-> año}}" name="año" class="form-control" >
			<label for="">Ingrese el genero de su pelicula : </label>			
			<input type="text" name="genero" class="form-control" value="{{$peliculas-> genero}}">
			<label for="">Ingrese el director de su pelicula : </label>			
			<input type="text" value="{{$peliculas-> director}}" name="director" class="form-control" >
			<label for="">Ingrese una descripcion corta de su pelicula : </label>			
			<input type="text-area" value="{{$peliculas-> descripcion}}" name="descripcion" class="form-control"><br>
			<div class="form-group">
				<label for="">Imagen de su pelicula</label> 
				<input type="file" name="archivo"  >
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>	
	</form>
	
	<br><br><br><br>
	

@endsection