@extends('../layouts.plantilla')

@section("cabecera")
MOSTRAR PELICULAS
@endsection

@section("contenido")
    <h1>{{$pelicula->nombre}}</h1>
@endsection 

@section("pie")
@endsection