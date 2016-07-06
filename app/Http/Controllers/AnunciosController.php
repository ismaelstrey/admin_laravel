<?php

namespace App\Http\Controllers;
use App\Anuncio;
use Illuminate\Http\Request;
use Session;

class AnunciosController extends Controller {
	    public function __construct()
    {
        $this->middleware('auth');
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$anuncios = Anuncio::all();
		return view('admin.Cadastro.index.anuncio', compact('anuncios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.Cadastro.create.anuncio');
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$dados = $request->all();
		Anuncio::create($dados);
		Session::flash('success', 'Anuncio '.$dados['nome'].' criado com sucesso!');
		return redirect('/admin/cadastro/anuncio');
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$anuncio = Anuncio::find($id);
		return view('admin.Cadastro.show.anuncio', compact('anuncio'));
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$anuncio = Anuncio::find($id);
		return view('admin.Cadastro.edit.anuncio', compact('anuncio'));
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		Anuncio::find($id)->update($request->all());
		Session::flash('success', 'Atualização realizado com sucesso!');
		return redirect('/admin/cadastro/anuncio');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$deletar = Anuncio::destroy($id);
		Session::flash('success', 'Anuncio deletado com sucesso!');
		return redirect()->back();
            }
}

