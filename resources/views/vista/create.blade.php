@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')	
	<form class="form-group" method="POST" action="/cine"> 		 	
	

		<div class="form-group">
			<center><h2>Busqueda de peliculas</h2></center><br>
			<label for="">Ingrese el nombre de su pelicula : </label>
			<input type="text" name="name" class="form-control" placeholder="Ingrese su pelicula">
		</div>
		<button class="btn btn-primary">Buscar</button>	
	</form>
@endsection