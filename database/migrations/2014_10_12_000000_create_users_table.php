<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('rol_id')->unsigned(); //Llaves Foranea
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('dpto');
            $table->string('email_bcv')->unique();
            $table->string('password');
            $table->foreign('rol_id')->references('id')->on('roles')->onDelete('cascade'); //Relaciones
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
        Schema::dropIfExists('users');
    }
}
