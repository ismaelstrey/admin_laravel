<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postagen extends Model
{
    protected $table = 'postagen';
    protected $fillable = ['nome','descricao','tags','postagen','imagem'];
}
