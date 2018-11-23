@extends('layouts.app')

@section('title', 'Inicio Create')

@section('content')	

@include('pelicula.messages')

	<div class="text text-right btn-lg btn-block">
            <a href="/pelicula">Volver</a>
    </div>	

	<form class="form-group" enctype="multipart/form-data" method="POST" action="/sala/{{$salas -> id}}">
	{{ csrf_field() }}
	{!!@method_field('PUT')!!}
		<div class="form-group">
			<center><h2>Edicion de Sala</h2></center><br>
			<label for="">Ingrese el nuevo nombre de la pelicula : </label>			
			<input type="text" name="pelicula" class="form-control" value="{{$salas -> pelicula}}">
			<label for="">Ingrese el nuevo numero de sala: </label>			
			<input type="text" name="sala" class="form-control" value="{{$salas -> numero_sala}}">
			<label for="">Ingrese el nuevo numero de asiento de la sala : </label>			
			<input type="text" name="asiento" class="form-control" value="{{$salas -> total_asiento}}">
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>	
	</form><br><br><br><br>

@endsection