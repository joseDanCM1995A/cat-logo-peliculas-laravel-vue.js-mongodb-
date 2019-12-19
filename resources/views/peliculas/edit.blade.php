@extends('../layouts.plantilla2')

@section("cabecera2")
<div class="registrar">
       <p> EDITAR PELICULAS</p>
</div>
@endsection

@section("contenido2")
    <div class="crear">
        <form method="post" action="/peliculas/{{$pelicula->id}}" enctype="multipart/form-data">
            <div class="crear2">
                    <img src="/images/pelicon.png" class="imagenCabecera"><br>
                <p>Nombre: </p>               
                    <input class="campo" type="text" name="nombre" value="{{$pelicula->nombre}}" required><br>
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                <p>Estreno:</p>
                    <input class="fecha campo" type="date" name="fechaestreno"  value="{{$pelicula->fechaestreno}}" required><br>
                <p> Director: </p>
                    <input class="campo" type="text" name="director"  value="{{$pelicula->duracion}}" required><br>
                <p>Actor(1):</p>
                    <input class="campo" type="text" name="actor1"  value="{{$pelicula->actor1}}" required><br>
                <p>Actor(2): </p>
                    <input class="campo" type="text" name="actor2"  value="{{$pelicula->actor2}}" ><br>   
                <p>Actor(3):</p> 
                    <input class="campo" type="text" name="actor3"  value="{{$pelicula->actor3}}"><br>
                    
                <p>Pais: </p>
                    <input class="campo" type="text" name="pais"  value="{{$pelicula->pais}}" required><br>
                <p>Duracion (min): </p>
                     <input class="campo" type="number" name="duracion"  value="{{$pelicula->duracion}}" required><br>
               
               <p> Clasificacion: </p>
                    <input class="campo"  type="text" name="clasificacion"  value="{{$pelicula->clasificacion}}" required><br>

                <p>Calificacion: </p>
                    <input class="campo" type="number" name="calificacion"  value="{{$pelicula->calificacion}}" required><br>

               
  
                <p class="centrar-contenido">
                    <input class="boton success" type="submit" name="enviar" value="Enviar" style="text-align:center">
                </p>
            </div>
        </form>
        <div>
            <form method="post" action="/peliculas/{{$pelicula->id}}" style="text-align:center">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <input class="boton eli" type="submit" name="eliminar" value="eliminar">
            </form>
        </div>
    </div>
@endsection 

@section("pie2")
@endsection