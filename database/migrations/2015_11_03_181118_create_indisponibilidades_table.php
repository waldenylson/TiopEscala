<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndisponibilidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('indisponibilidades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('militar_id');
            $table->string('situacao');
            $table->date('inicio');
            $table->date('termino');
            $table->integer('dias');
            $table->timestamps();

            $table->foreign('militar_id')->references('id')->on('militares');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('indisponibilidades');
    }
}
