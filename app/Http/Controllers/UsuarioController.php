<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Session;

class UsuarioController extends Controller
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
        $usuarios = User::all();
      return view('admin.Cadastro.index.usuario',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.Cadastro.create.usuario');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = $request->all();
        return User::create([
        'name' => $usuario['name'],
        'email' => $usuario['email'],
        'imagem' => $usuario['imagem'],
        'password' => bcrypt($usuario['password']),
        ]);
         Session::flash('success', 'Usuario Criado com sucesso com sucesso!');
        return redirect('/admin/cadastro/usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::find($id);
      return view('admin.Cadastro.show.usuario',compact('usuario'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('admin.Cadastro.edit.usuario', compact('usuario'));
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
        Usuario::find($id)->update($request->all());
        Session::flash('success', 'Atualização realizado com sucesso!');
        return redirect('/admin/cadastro/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $deletar = Usuario::destroy($id);
        Session::flash('success', 'Usuario deletado com sucesso!');
        return redirect()->back();
    }
}
