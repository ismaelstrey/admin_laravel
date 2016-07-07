<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicos;
use App\Http\Requests;
use Session;

class ServicosController extends Controller
{
            public function __construct()
        {
            $this->middleware('auth');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicos = Servicos::all();
        return view('admin.Cadastro.index.servicos', compact('servicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.Cadastro.create.servicos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicos = $request->all();
        Servicos::create($servicos);
        Session::flash('success', 'Serviços deletado com sucesso!');
        return redirect('/admin/cadastro/servicos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servico = Servicos::find($id);
        return view('admin.Cadastro.show.servicos', compact('servico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servico = Servicos::find($id);
        return view('admin.Cadastro.edit.servicos', compact('servico'));
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
            Servicos::find($id)->update($request->all());
            Session::flash('success', 'Atualização realizado com sucesso!');
            return redirect('/admin/cadastro/servicos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $deletar = Servicos::destroy($id);
        Session::flash('success', 'Servicos deletado com sucesso!');
        return redirect()->back();
    }
}
