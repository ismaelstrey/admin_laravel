<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PaginasController extends Controller
{
    public function index (){

	return view('front.empresa.recomendacoes');
    }
}
