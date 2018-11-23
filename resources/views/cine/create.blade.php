@extends('layouts.app')

@section('title', 'Inicio Create')

@section('content')	

@include('pelicula.messages')

	<div class="text text-right btn-lg btn-block">
            <a href="/pelicula">Volver</a>
    </div>	

	<form class="form-group" enctype="multipart/form-data" method="POST" action="/cine">
	{{ csrf_field() }}
	
		<div class="form-group">
			<center><h2>Registro de Cine</h2></center><br>
			<label for="">Ingrese el nombre del cine : </label>			
			<input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre del cine">
			<label for="">Ingrese el telefono del cine: </label>			
			<input type="text" name="telefono" class="form-control" placeholder="Ingrese el telefono del cine">
			<label for="">Ingrese la direccion del cine : </label>			
			<input type="text" name="direccion" class="form-control" placeholder="Ingrese la direccion del cine">
			
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>	
	</form><br><br><br><br>

@endsection