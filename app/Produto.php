<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
   protected $table('produtos');
   protected $fillable('nome','descricao','image','tipo','medida','quantidade','valor','largura','atura','comprimento','peso');
}
