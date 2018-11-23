@extends('layouts.app')

@section('title', 'Inicio Create')

@section('content')	

	<form class="form-group" enctype="multipart/form-data" method="POST" action="/cartelera">
	{{ csrf_field() }}
		<div class="form-group">
			<center><h2>Registro de Cartelera</h2></center><br>
			<label for="">Ingrese el nombre de su pelicula : </label><br>		
			<select name="pelicula">
				@foreach ($peliculas as $pelicula)
					<option value="{{$pelicula -> nombre}}">{{$pelicula -> nombre}}</option>			
				@endforeach
			</select><br><br>
			<label for="">Ingrese la fecha de su pelicula : </label>			
			<input type="date" name="fecha" class="form-control" placeholder="Ingrese la fecha de su pelicula">	
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>	
	</form><br><br><br><br>

@endsection