<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nome');
        $table->string('rua');
        $table->integer('numero');
        $table->string('cidade');
        $table->string('telefone');
        $table->string('celular');
        $table->string('site');
        $table->string('img');
        $table->longText('descricao');
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
        Schema::drop('empresa');
    }
}
