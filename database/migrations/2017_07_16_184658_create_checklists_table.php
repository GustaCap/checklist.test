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
            $table->string('disco');
            $table->string('memoria');
            $table->string('fancooler');
            $table->string('powersupply');
            $table->string('energia');
            $table->string('expansion');
            $table->string('controladora');
            $table->string('sw_fibra');
            $table->string('observaciones');
            $table->string('token');
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
