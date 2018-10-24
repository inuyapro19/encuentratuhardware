<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_cat');
            $table->string('descripcion');
            $table->unsignedInteger('categoria_id')->nullable();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->timestamps();
        });

        Schema::create('productos', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nombre_prod');
            $table->string('descripcion');
            $table->unsignedInteger('precio');
            $table->unsignedInteger('categoria_id');
            $table->unsignedInteger('user_id');

            $table->enum('estado',['on','off'])->default('on');

            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('categorias');
    }
}
