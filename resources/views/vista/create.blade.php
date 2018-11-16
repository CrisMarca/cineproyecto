@extends('layouts.app')

@section('title', 'Inicio Create')

@section('content')	
	<form class="form-group" role="form" method="POST" action="/inicio2">
	{{ csrf_field() }}


		<div class="form-group">
			<center><h2>Registro de peliculas</h2></center><br>
			<label for="">Ingrese el nombre de su pelicula : </label>			
			<input type="text" name="pelicula" class="form-control" placeholder="Ingrese su pelicula">
			<label for="">Ingrese la clasificacion de su pelicula : </label>			
			<input type="text" name="clasificacion" class="form-control" placeholder="Ingrese su pelicula">
			<label for="">Ingrese el año de su pelicula : </label>			
			<input type="text" name="año" class="form-control" placeholder="Ingrese su pelicula">
			<label for="">Ingrese el genero de su pelicula : </label>			
			<input type="text" name="genero" class="form-control" placeholder="Ingrese su pelicula">
			<label for="">Ingrese el director de su pelicula : </label>			
			<input type="text" name="director" class="form-control" placeholder="Ingrese su pelicula">
			<label for="">Ingrese una descripcion de su pelicula : </label>			
			<input type="text" name="descripcion" class="form-control" placeholder="Ingrese su pelicula">
		</div>
		<button type="submit" class="btn btn-primary">Buscar</button>	
	</form>
@endsection