@extends('layouts.app')

@section('title', 'Sala')

@section('content')

    <div class="container">
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>Sala</th> 
                    <th>Nombre</th>   
                    <th>Total de asiento</th>
                    <th>Administrar</th>                
                </tr>
            </thead>

            @foreach($salas as $sala)     

                <tbody>
                    <tr>
                        <td>{{ $sala-> numero_sala}}</td>
                        <td>{{ $sala-> pelicula}}</td>   
                        <td>{{ $sala-> total_asiento}}</td>                                                         
                        <td>
                                    
                            <form action="/sala/{{$sala-> id}}" method="post">
                                {!!method_field('delete')!!}
                                {!!csrf_field()!!}
                                
                                <a href="/sala/{{ $sala -> id}}" class="btn btn-primary">Editar</a>
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