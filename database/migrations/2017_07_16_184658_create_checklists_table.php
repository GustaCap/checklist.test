<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklists', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('rack_id')->unsigned();     //Llaves Foranea
            $table->integer('equipo_id')->unsigned();   //Llaves Foranea
            $table->integer('user_id')->unsigned();     //Llaves Foranea
            $table->string('sta_disco');
            $table->string('sta_memoria');
            $table->string('sta_fancouler');
            $table->string('sta_powersuplay');
            $table->string('sta_energia');
            $table->string('sta_espancion_discos');
            $table->string('observaciones');
            $table->foreign('rack_id')->references('id')->on('racks')->onDelete('cascade');     //Relaciones
            $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade'); //Relaciones
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');     //Relaciones
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
        Schema::dropIfExists('checklists');
    }
}
