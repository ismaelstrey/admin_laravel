@extends('admin.index')
@section('content')

  <!--main content start-->
      <section id="main-content">
          <section class=" wrapper">
          <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Cadastro de usuarios</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{URL::to('/admin/home')}}">Home</a></li>
						<li><i class="icon_document_alt"></i>Planos</li>


				<a class="pull-right" href="{{URL::to('/admin/cadastro/usuarios/create')}}">Novo</a>
               </div>
			</div>

  <div class="row">
                  <div class="col-lg-12">
                    <table class="table table-hover branco">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Imagem</th>
                          <th>Email</th>
                          <th>Data de cadastro</th>
                           <th><i class="icon_cogs"></i> Ação</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>{{$usuario->name}}</td>
                          <td>{{$usuario->imagem}}</td>
                          <td>{{$usuario->email}}</td>
                          <td>{{$usuario->created_at}}</td>
                             <td>
                    <div class="btn-group">
  {!! Form::open (['method'=>'DELETE', 'url'=>['admin/cadastro/usuarios/'.$usuario->id]]) !!}
   <a class="btn btn-success icon_check_alt2" href="{{ route('admin.cadastro.usuarios.show', ['id'=>$usuario->id]) }}" title="Visualizar {{$usuario->nome}}" ></a>
            <input type="submit" class="btn btn-danger icon_check_alt2" value= "X"  title="Delete {{$usuario->nome}}">
 {!! Form::close ()  !!}
                    </div>
                            </td>
                        </tr>


                      </tbody>
                    </table>
                  </div>
              </div>



          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

@stop