<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recomendacoes;
use App\Http\Requests;
use Session;

class AdminRecomendacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recomendacoes = Recomendacoes::all();
        return view('admin.Cadastro.index.recomendacoes', compact('recomendacoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Cadastro.create.recomendacoes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        Recomendacoes::create($dados);
        Session::flash('success', 'Recomendação criado com sucesso!');
       return redirect('/admin/cadastro/recomendacoes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recomendacao = Recomendacoes::find($id);
        return view('admin.Cadastro.show.recomendacoes', compact('recomendacao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Recomendacoes::find($id)->update($request->all());
        Session::flash('success', 'Atualização realizado com sucesso!');
        return redirect('/admin/cadastro/recomendacoes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $deletar = Recomendacoes::destroy($id);
       return redirect('/admin/cadastro/recomendacoes');
    }
}
