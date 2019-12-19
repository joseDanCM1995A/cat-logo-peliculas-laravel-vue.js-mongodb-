@extends('../layouts.plantilla2')

@section("cabecera2")
<div class="registrar">
       <p> REGISTRAR PELICULAS</p>
</div>
@endsection

@section("contenido2")
    <div class="crear">
        <form method="post" action="/peliculas" enctype="multipart/form-data">
            <div class="crear2">
                    <img src="/images/pelicon.png" class="imagenCabecera"><br>
                <p>Nombre: </p>               
                    <input class="campo" type="text" name="nombre" required><br>
                    {{csrf_field()}}
                <p>Estreno:</p>
                    <input class="fecha campo" type="date" name="fechaestreno" required><br>
                <p> Director: </p>
                    <input class="campo" type="text" name="director" required><br>
                <p>Actor(1):</p>
                    <input class="campo" type="text" name="actor1" required><br>
                <p>Actor(2): </p>
                    <input class="campo" type="text" name="actor2" ><br>   
                <p>Actor(3):</p> 
                    <input class="campo" type="text" name="actor3"><br>
                    
                <p>Pais: </p>
                    <input class="campo" type="text" name="pais" required><br>
                <p>Duracion (min): </p>
                     <input class="campo" type="number" name="duracion" required><br>
               
               <p> Clasificacion: </p>
                    <input class="campo"  type="text" name="clasificacion" required><br>

                <p>Calificacion: </p>
                    <input class="campo" type="number" name="calificacion" required><br>

                <p>Reseña: </p>

                    <textarea class="reseña campo" name="reseña" cols="30" rows="10" required></textarea> <br>
  
                <p class="centrar-contenido">
                    <input type="file" name="imgn" class="examinar"><br>
                    <input class="boton" type="submit" name="enviar" value="Enviar">
                </p>
                
            </div>
        </form>
    </div>
@endsection 

@section("pie2")
@endsection