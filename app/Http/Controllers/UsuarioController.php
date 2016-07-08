<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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

   if($request->hasFile('imagem')){
                $image = $request->File('imagem');
                $filename  = time().'.'. $image->getClientOriginalExtension();
                $destino = '/images/uploads/usuario/'.$filename;
                $thunb = base_path().'/public/images/uploads/usuario/thunb/'.$filename;
                $path = base_path().'/public'.$destino;
                Image::make($image->getRealPath())->resize(800, 340)->save($path);
                Image::make($image->getRealPath())->resize(100, 50)->save($thunb);
                $usuario['imagem'] = $filename;
           }

        return User::create([
        'name' => $usuario['name'],
        'email' => $usuario['email'],
        'imagem' => $usuario['imagem'],
        'tipo' => $usuario['tipo'],
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
        $usuario = User::find($id);
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

         $usuario = $request->all();
         if($request->hasFile('imagem')){



                $image = $request->File('imagem');
                $filename  = time().'.'. $image->getClientOriginalExtension();
                $destino = '/images/uploads/usuario/'.$filename;
                $thunb = base_path().'/public/images/uploads/usuario/thunb/'.$filename;
                $path = base_path().'/public'.$destino;
                Image::make($image->getRealPath())->resize(800, 340)->save($path);
                Image::make($image->getRealPath())->resize(100, 50)->save($thunb);

                $delete = User::find($id);
                            if (file_exists(base_path().'/public/images/uploads/usuario/'.$delete['imagem'])) {
                            unlink(base_path().'/public/images/uploads/usuario/'.$delete['imagem']);
                            }if(file_exists(base_path().'/public/images/uploads/usuario/thunb/'.$delete['imagem'] )){
                            unlink(base_path().'/public/images/uploads/usuario/thunb/'.$delete['imagem']);
                            }
                $usuario['imagem'] = $filename;
            // dd($request->hasFile('imagem'));
           }
        User::find($id)->update($usuario);
        Session::flash('success', 'Atualização realizado com sucesso!');
       return redirect('/admin/cadastro/usuarios');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);

    $filename = $usuario->imagem;
    if ($filename !== ' ') {

            $destino = '/images/uploads/usuario/'.$filename;
            $thunb = base_path().'/public/images/uploads/usuario/thunb/'.$filename;
            $path = base_path().'/public'.$destino;
            if (file_exists($path)) {
            unlink($path);
            }if(file_exists($thunb)){
            unlink($thunb);
            }
}

         $deletar = User::destroy($id);
        Session::flash('success', 'Usuario  '.$usuario ['name']. 'deletado com sucesso!');
        return redirect()->back();
    }
}
