<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model {
	protected $table = 'anuncio';
	protected $fillable = ['nome', 'link', 'anuncio', 'data_expiracao'];
}
