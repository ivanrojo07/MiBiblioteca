<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo')->notnull();
            $table->integer('id_autor')->unsigned();
            $table->integer('id_editorial')->unsigned();
            $table->integer('id_tema')->unsigned();
            $table->integer('user_id')->unsigned();

            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('id_autor')->references('id')->on('autores');
            $table->foreign('id_editorial')->references('id')->on('editoriales');
            $table->foreign('id_tema')->references('id')->on('temas');

            
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
        //
        Schema::dropIfExists('libros');
    }
}
