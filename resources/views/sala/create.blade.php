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
			<label for="">Ingrese el nombre de su pelicula : </label><br>
			<select name="pelicula">
				<option value="" disabled selected>Seleccione el nombre de su pelicula</option>
				@foreach ($peliculas as $pelicula)
					<option value="{{$pelicula -> nombre}}">{{$pelicula -> nombre}}</option>			
				@endforeach
			</select><br><br>
			<label for="">Ingrese el numero de sala: </label><br>
			<select name="sala" >
				<option value="" disabled selected>Seleccione el numero de sala para la pelicula</option>
				<option value="1">Sala 1</option>
				<option value="2">Sala 2</option>
				<option value="3">Sala 3</option>
				<option value="4">Sala 4</option>
			</select><br><br>
			<label for="">Ingrese el numero de asientos : </label><br>
			<select name="asiento">
				<option value="" disabled selected>Seleccione el numero de asiento </option>
				<option value="70">70</option>
				<option value="80">80</option>
			</select><br><br>
			
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>	
	</form><br><br><br><br>

@endsection