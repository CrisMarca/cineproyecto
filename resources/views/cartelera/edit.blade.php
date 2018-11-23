@extends('layouts.app')

@section('title', 'Inicio Create')

@section('content')	

	<form class="form-group" enctype="multipart/form-data" method="POST" action="/cartelera/{{ $carteleras -> id}}">
	{!! csrf_field() !!}
	{!! method_field('PUT')!!}
		<div class="form-group">
			<center><h2>Edicion de Cartelera</h2></center><br>
			<label for="">Ingrese el nuevo nombre de su pelicula : </label>			
			<input type="text" name="pelicula" class="form-control" value="{{$carteleras -> pelicula }}">
			<label for="">Ingrese la nueva fecha de su pelicula : </label>			
			<input type="text" name="fecha" class="form-control" value="{{$carteleras -> fecha}}">		
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>	
	</form><br><br><br><br>

@endsection