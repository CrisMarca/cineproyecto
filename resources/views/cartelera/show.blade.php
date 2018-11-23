@extends('layouts.app')

@section('title', 'Menu')

@section('content')

	<div class="container">
		<table class="table table-bordered table-dark">
  			<thead>
    			<tr>
      				<th>Nombre</th>
      				<th>Estreno</th>    
      				<th>Administrar</th>  				
    			</tr>
  			</thead>

  			@foreach($carteleras as $cartelera)		

				<tbody>
	    			<tr>
		      			<td>{{ $cartelera-> pelicula}}</td>
		      			<td>{{ $cartelera-> fecha}}</td>	      			
		      			<td>
		      				     	
		      				<form action="/cartelera/{{$cartelera-> id}}" method="post">
								{!!method_field('delete')!!}
								{!!csrf_field()!!}
								
								<a href="/cartelera/{{ $cartelera -> id}}" class="btn btn-primary">Editar</a>
								<button  class="btn btn-danger" type="submit">Eliminar</button>
							</form>
		      			</td>
				    </tr>
	  			</tbody>

			@endforeach

		</table>
	</div>
	<br><br><br><br>
@endsection