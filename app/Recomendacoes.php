<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recomendacoes extends Model
{
   protected $table = 'recomendacoes';
    protected $fillable =  ['id_nome','titulo','mensagem'];
    // public $timestamps = false;

    // public function user(){
    //     return $this->hasOne('App\User');
    // }
}
