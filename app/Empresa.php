<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model {
	protected $table = 'empresa';
	protected $fillable = [
		'nome', 'rua', 'numero', 'cidade', 'telefone', 'celular', 'site', 'img', 'descricao',
	];

}
