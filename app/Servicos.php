<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicos extends Model
{
   protected $table = 'servico';
   protected $fillable = ['nome','descricao','tags','servico','icone'];
}
