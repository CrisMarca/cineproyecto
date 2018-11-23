@extends('layouts.app')

@section('title', 'Edicion cine')

@section('content')	



	<div class="text text-right btn-lg btn-block">
            <a href="/pelicula">Volver</a>
    </div>	

	<form class="form-group" enctype="multipart/form-data" method="POST" action="/cine/{{$cines -> id}}">
	{{ csrf_field() }}
	{{method_field('PUT')}}
		<div class="form-group">
			<center><h2>Edicion de Cine</h2></center><br>
			<label for="">Ingrese el nombre del cine : </label>			
			<input type="text" value="{{$cines-> nombre}}" name="nombre" class="form-control" >

			<label for="">Ingrese el telefono del cine: </label>			
			<input type="text" value="{{ $cines -> telefono}}" name="telefono" class="form-control" >

			<label for="">Ingrese la direccion del cine : </label>			
			<input type="text" value="{{ $cines -> direccion}}" name="direccion" class="form-control" >			
			
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>	
	</form><br><br><br><br>

@endsection