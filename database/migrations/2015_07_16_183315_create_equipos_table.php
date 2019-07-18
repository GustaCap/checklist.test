<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre');
            $table->string('tipo');
            $table->string('marca');
            $table->string('responsable');
            $table->integer('rack_id')->unsigned(); //llave foranea
            $table->foreign('rack_id')->references('id')->on('racks')->onDelete('cascade');     //Relaciones
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
        Schema::dropIfExists('equipos');
    }
}
