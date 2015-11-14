<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMilitaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('militares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('graduacao_id');
            $table->string('nome_grerra');
            $table->integer('qvermelho');
            $table->integer('qpreto');
            $table->integer('qroxo');
            $table->timestamps();

            $table->foreign('graduacao_id')->references('id')->on('graduacoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('militares');
    }
}
