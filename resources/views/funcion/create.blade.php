@extends('layouts.app')

@section('title', 'Funcion')

@section('content')	

@include('pelicula.messages')

	<form class="form-group" enctype="multipart/form-data" method="POST" action="/funcion">
	{{ csrf_field() }}
		<div class="form-group">
			<center><h2>Registro de una Funcion</h2></center><br>
			<label for="">Ingrese la hora de inicio de su funcion : </label>			
			<input type="time" name="inicio" class="form-control">
			<label for="">Ingrese la hora de fin de su funcion : </label>			
			<input type="time" name="fin" class="form-control">
			
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>	
	</form><br><br><br><br>

@endsection