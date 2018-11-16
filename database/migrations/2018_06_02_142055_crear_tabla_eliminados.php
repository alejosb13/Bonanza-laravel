<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEliminados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eliminados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion',200);
            $table->integer('numero');
            $table->unsignedInteger('tipo');
            $table->foreign('tipo')->references('id')->on('tipos');
            $table->unsignedInteger('usuario');
            $table->foreign('usuario')->references('id')->on('usuarios');
            $table->string('status',30);
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
        Schema::dropIfExists('eliminados');
    }
}
