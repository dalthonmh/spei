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
            $table->increments('id');
            $table->string('nombre');
            $table->boolean('estado');
            $table->unsignedInteger('categoria_id')->nullable();
            $table->unsignedInteger('marca_id')->nullable();
            $table->timestamps();
        });

        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->timestamps();
            // $table->string('url');
        });

        Schema::create('marcas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->timestamps();
            // $table->string('url');
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
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('marcas');
    }
}
