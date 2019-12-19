<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

class peliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas=Pelicula::all();
        return view("peliculas.index", compact("peliculas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("peliculas.create");
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelicula= new Pelicula();
        $pelicula->nombre=$request->nombre;
        $pelicula->fechaestreno=$request->fechaestreno;
        $pelicula->director=$request->director;
        $pelicula->actor1=$request->actor1;
        $pelicula->actor2=$request->actor2;
        $pelicula->actor3=$request->actor3;
        $pelicula->pais=$request->pais;
        $pelicula->duracion=$request->duracion;
        $pelicula->clasificacion=$request->clasificacion;
        $pelicula->calificacion=$request->calificacion;
        $pelicula->reseña=$request->reseña;

        if($img=$request->file('imgn')){
            $nombre=$img->getClientOriginalName();
            $img->move('images',$nombre);
            $entrada['imgn']=$nombre;
            $pelicula->imgn=$nombre;
        }
        $pelicula->save();
        return redirect("peliculas");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelicula=Pelicula::findOrFail($id);
        return view("peliculas.show", compact("pelicula"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelicula=Pelicula::findOrFail($id);
        return view("peliculas.edit", compact("pelicula"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pelicula=Pelicula::findOrFail($id);
        $pelicula->update($request->all());
        return redirect("/peliculas");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelicula=Pelicula::findOrFail($id);
        $pelicula->delete();
        return redirect("/peliculas");
    }
}
