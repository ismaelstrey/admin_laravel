<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Servicos;
use App\Postagen;
use Session;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index(){
    	$dados['banner'] = Banner::all();
        $dados['servicos'] = Servicos::all();
       // $dados['postagens'] = Postagen::all();
        dd($dados);
        //return view('front.index',compact('dados'));
    }
}
