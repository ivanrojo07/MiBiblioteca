<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('autores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres')->notnull();
            $table->string('apellidoPrimero')->notnull();
            $table->string('apellidoSegundo');
            $table->string('pais');
            
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
    }
}
