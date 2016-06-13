<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');           
            $table->string('nome');
            $table->string('descricao');
            $table->string('image');
            $table->string('quantidade');
            $table->decimal('valor',5,2);
            $table->string('largura');
            $table->string('atura');
            $table->string('comprimento');
            $table->string('peso');
            $table->integer('tipo')->unsigned();
            $table->integer('medida')->unsigned();
            $table->foreign('tipo')->references('id')->on('tipos'); 
            $table->foreign('medida')->references('id')->on('medidas');          
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
        
            $table->dropForeign('tipo');
            $table->dropForeign('medida');
            Schema::drop('produtos');
    }
}
