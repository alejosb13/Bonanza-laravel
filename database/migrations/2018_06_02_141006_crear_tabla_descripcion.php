<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDescripcion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dregistros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion',200);
            $table->integer('numero')->unique();
            $table->unsignedInteger('id_tipo');
            $table->foreign('id_tipo')->references('id')->on('tipos');
            $table->integer('peso');
            $table->integer('pesoa');
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
        Schema::dropIfExists('dregistros');
    }
}
