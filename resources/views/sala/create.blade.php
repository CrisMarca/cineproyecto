@extends('layouts.app')

@section('title', 'Inicio Create')

@section('content')	

@include('pelicula.messages')

	<div class="text text-right btn-lg btn-block">
            <a href="/pelicula">Volver</a>
    </div>	

	<form class="form-group" enctype="multipart/form-data" method="POST" action="/sala">
	{{ csrf_field() }}
	
		<div class="form-group">
			<center><h2>Registro de Sala</h2></center><br>
			<label for="">Ingrese el nombre de su pelicula : </label>			
			<input type="text" name="pelicula" class="form-control" placeholder="Ingrese el nombre de su pelicula">
			<label for="">Ingrese el numero de sala: </label>			
			<select name="sala" id="">
				<option value="1">sala1</option>
				<option value="2">sala2</option>
				<option value="3">sala3</option>
				<option value="4">sala4</option>
			</select>
			<label for="">Ingrese el numero de asientos : </label>			
			<input type="text" name="asiento" class="form-control" placeholder="Ingrese el numero de asiento">
			
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>	
	</form><br><br><br><br>

@endsection