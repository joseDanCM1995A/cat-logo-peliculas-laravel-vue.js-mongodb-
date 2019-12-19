<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Pelicula extends Eloquent
{
    protected $db = "proyecto";
    protected $collection ="peliculas";
    protected $fillable = ["nombre","fechaestreno","director","actor1","actor2","actor3","pais","duracion","clasificacion","calificacion","reseña","imgn"];
}
