<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AnuncioCreateTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('anuncio', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nome');
			$table->string('link');
			$table->string('anuncio');
			$table->date('data_expiracao');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('anuncio');
	}
}
