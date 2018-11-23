@extends('layouts.app')

@section('title', 'Cine')

@section('content')

    <div class="container">
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>Nombre</th> 
                    <th>telefono</th>   
                    <th>Direccion</th>
                    <th>Administrar</th>                
                </tr>
            </thead>

            @foreach($cines as $cine)     

                <tbody>
                    <tr>
                        <td>{{ $cine-> nombre}}</td>
                        <td>{{ $cine-> telefono}}</td>   
                        <td>{{ $cine-> direccion}}</td>                                                         
                        <td>
                                    
                            <form action="/cine/{{$cine-> id}}" method="post">
                                {!!method_field('delete')!!}
                                {!!csrf_field()!!}
                                
                                <a href="/cine/{{ $cine -> id}}" class="btn btn-primary">Editar</a>
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