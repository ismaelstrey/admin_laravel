<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postagen;
use App\Http\Requests;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Session;


class PostagensController extends Controller
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
        $postagens = Postagen::all();
        return view('admin.Cadastro.index.postagen', compact('postagens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Cadastro.create.postagen');
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
         if($request->hasFile('imagem')){
                $image = $request->File('imagem');
                $filename  = time().'.'. $image->getClientOriginalExtension();
                $destino = '/images/uploads/'.$filename;
                $thunb = base_path().'/public/images/uploads/thunb/'.$filename;
                $path = base_path().'/public'.$destino;
                Image::make($image->getRealPath())->resize(800, 340)->save($path);
                Image::make($image->getRealPath())->resize(100, 50)->save($thunb);
                $dados['imagem'] = $filename;
           }
        Postagen::create($dados);
        Session::flash('success', 'Postagen  '.$dados['nome'].' criada com sucesso!');
        return redirect('/admin/cadastro/postagen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postagen = Postagen::find($id);
        return view('admin.Cadastro.show.postagen', compact('postagen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $postagen = Postagen::find($id);
        return view('admin.Cadastro.edit.postagen', compact('postagen'));
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
       Postagen::find($id)->update($request->all());
        Session::flash('success', 'Atualização realizado com sucesso!');
        return redirect('/admin/cadastro/postagen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $postagen = Postagen::find($id);
        $filename = $postagen->imagem;
        $destino = '/images/uploads/'.$filename;
        $thunb = base_path().'/public/images/uploads/thunb/'.$filename;
        $path = base_path().'/public'.$destino;
        if (file_exists($path)) {
          unlink($path);
        }if(file_exists($thunb)){
            unlink($thunb);
        }
       Postagen::destroy($id);
       Session::flash('success', 'Postagen  '.$postagen['nome'].' deletada com sucesso!');
       return redirect()->back();


    }
}
