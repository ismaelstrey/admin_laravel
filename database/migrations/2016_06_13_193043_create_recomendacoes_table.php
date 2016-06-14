<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecomendacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recomendacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->longText('menssagem');
            $table->integer('id_nome')->unsigned();
            $table->foreign('id_nome')->references('id')->on('users');
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
        $table->dropForeign('id_nome');
        Schema::drop('recomendacoes');
    }
}
