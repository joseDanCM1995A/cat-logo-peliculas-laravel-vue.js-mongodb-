@extends('../layouts.plantilla')

@section("cabecera")
<div class="peliculas">
    <p> PELICULAS</p>
 </div>
    <p><a class="crearpeli" href="{{'/peliculas/create'}}">Crear</a></p><br> 
@endsection

@section("contenido")
   
        @foreach ($peliculas as $pelicula)
            <div class="main">
                <div class="pelicula">
                    <p class="imagen"><img class="imgn" src="images/{{$pelicula->imgn}}" ></p>
                    <hr>
                    <p class="titulopelicula"><h1 class="titulo"><a href="{{route('peliculas.edit',$pelicula->id)}}">{{$pelicula->nombre}}</a></h1></p>
                    <p class="fechaestreno"> {{$pelicula->fechaestreno}}</p>
                    <p class="director"> {{$pelicula->director}}</p>
                   <div class="actores">
                        <ul>
                            <li>{{$pelicula->actor1}}</li>
                            <li>{{$pelicula->actor2}}</li>
                            <li>{{$pelicula->actor3}}</li>
                        </ul>
                   </div>
                    <p class="pais">{{$pelicula->pais}}</p>                    
                    <p class="duracion">{{$pelicula->duracion}} mins.</p>
                    <p class="clasi">{{$pelicula->clasificacion}}</p>
                    <div class="res"><p class="reseña">{{$pelicula->reseña}} </p>  </div> 
                    <div class="cali"><p>{{$pelicula->calificacion}} </p></div>
                    
                    
              </div>      
            </div>
        @endforeach


      
@endsection 

@section("pie")
@endsection