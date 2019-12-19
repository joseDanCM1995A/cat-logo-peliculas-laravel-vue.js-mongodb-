<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string("nombre");
            $table->date("fechaestreno");
            $table->string("director");
            $table->string("actor1");
            $table->string("actor2");
            $table->string("actor3");
            $table->string("pais");
            $table->integer("duracion");
            $table->string("clasificacion");
            $table->integer("calificacion");
            $table->string("reseña");
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
