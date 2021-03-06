<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planos;
use App\Http\Requests;
use Session;

class PlanosController extends Controller
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
        $planos = Planos::all();
        return view('admin.Cadastro.index.planos',compact('planos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.Cadastro.create.planos');
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
        Planos::create($dados);
        Session::flash('success', 'Plano criado com sucesso!');
        return redirect('/admin/cadastro/planos');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plano = Planos::find($id);
        return view('admin.Cadastro.show.planos', compact('plano'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plano = Planos::find($id);
        return view('admin.Cadastro.edit.planos', compact('plano'));
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
        Planos::find($id)->update($request->all());
        Session::flash('success', 'Atualização realizado com sucesso!');
        return redirect('/admin/cadastro/planos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $deletar = Planos::destroy($id);
        Session::flash('success', 'Planos deletado com sucesso!');
        return redirect()->back();
    }
}
