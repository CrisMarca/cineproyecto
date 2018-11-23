@extends('layouts.app')

@section('title', 'Menu')

@section('content')

	<div class="row">
		

		@foreach($peliculas as $pelicula)		
			<div class="col-sm">
				<div class="card text-center" style="width: 18rem; margin-top: 10px">
					<img style="height: 450px;width: 300px" class="card-img-top img-thumbnail" src="/images/{{$pelicula -> avatar}}" alt="">
					<div class="card-body">
						<h5 class="card-title">{{ $pelicula -> nombre}}</h5>
						<p class="card-text">
							{{ $pelicula -> descripcion}}<br><br>
							<a href="/pelicula/{{ $pelicula -> id }}" class="btn btn-primary">Detalles...</a>
						</p>
					</div>		
				</div>
			</div>
		@endforeach
	</div>
	<br><br><br><br>
@endsection