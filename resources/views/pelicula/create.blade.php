@extends('layouts.app')

@section('title', 'Inicio Create')

@section('content')	

@include('pelicula.messages')

	<div class="text text-right btn-lg btn-block">
            <a href="/pelicula">Volver</a>
    </div>	

	<form class="form-group" enctype="multipart/form-data" method="POST" action="/pelicula">
	{{ csrf_field() }}
		<div class="form-group">
			<center><h2>Registro de peliculas</h2></center><br>
			<label for="">Ingrese el nombre de su pelicula : </label>			
			<input type="text" name="pelicula" class="form-control" placeholder="Ingrese el nombre de su pelicula"><br>
			<label for="">Ingrese la clasificacion de su pelicula : </label><br>			
			<select name="clasificacion">
				<option value="" disabled selected>Seleccione la clasificacion de su pelicula</option>
				<option value="Apta para todo el publico">A</option>
				<option value="No apto para menores de 13 años">+13</option>
				<option value="No apto para menores de 16 años">+16</option>
				<option value="No apto para menores de 18 años">+18</option>				
			</select><br><br>
			<label for="">Ingrese el año de su pelicula : </label>			
			<input type="text" name="año" class="form-control" placeholder="Ingrese el año de su pelicula"><br>
			<label for="">Ingrese el genero de su pelicula : </label><br>			
			<select name="genero">
				<option value="" disabled selected>Seleccione el genero de su pelicula</option>
				<option value="Accion">Accion</option>
				<option value="Drama">Drama</option>
				<option value="Ciencia Ficcion">Ciencia Ficcion</option>
				<option value="Terror">Terror</option>
				<option value="Comedia">Comedia</option>
				<option value="Aventura">Aventura</option>
				<option value="Animacion">Animacion</option>
				<option value="Romance">Romance</option>
				<option value="Historia">Historia</option>
				<option value="Musical">Musical</option>
			</select><br><br>
			<label for="">Ingrese el director de su pelicula : </label>			
			<input type="text" name="director" class="form-control" placeholder="Ingrese el director de su pelicula"><br>
			<label for="">Ingrese una descripcion corta de su pelicula : </label>			
			<textarea name="descripcion" class="form-control" placeholder="Ingrese una descripcion corta de su pelicula"></textarea><br>
			<div class="form-group">
				<label for="">Imagen de su pelicula</label> 
				<input type="file" name="archivo" class="form-control" >
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>	
	</form><br><br><br><br>

@endsection