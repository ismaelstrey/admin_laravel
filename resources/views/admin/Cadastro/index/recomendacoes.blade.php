@extends('admin.index')
@section('content')

  <!--main content start-->
      <section id="main-content">
          <section class=" wrapper">
          <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Recomendações</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{URL::to('/admin/home')}}">Home</a></li>
                                     <li><i class="fa fa-home"></i><a href="{{URL::to('/admin/cadastro')}}">Cadastro</a></li>
                                      <li><i class="icon_document_alt"></i>Recomendações</li>



				<a class="pull-right" href="{{URL::to('/admin/cadastro/recomendacoes/create')}}">Novo</a>
               </div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                  @include('admin.Cadastro.includes.session')
                    <table class="table table-hover branco">
                      <thead>
                        <tr>
                          <th>Titulo</th>
                          <th>Data de cadastro</th>
                          <th>Data de Expiração</th>
                          <th>User ID</th>
                           <th><i class="icon_cogs"></i> Ação</th>
                        </tr>
                      </thead>
                      <tbody>
@if (isset($recomendacoes ))
                       @foreach ($recomendacoes as $recomendacao)
                        <tr>
                          <td>{{$recomendacao->titulo}}</td>
                          <td>{{$recomendacao->created_at}}</td>
                          <td>{{$recomendacao->mensagem}}</td>
                          <td>{{$recomendacao->id_nome}}</td>
                             <td>
                    <div class="btn-group">
  {!! Form::open (['method'=>'DELETE', 'url'=>['admin/cadastro/recomendacoes/'.$recomendacao->id]]) !!}
   <a class="btn btn-success icon_check_alt2" href="{{ route('admin.cadastro.recomendacoes.show', ['id'=>$recomendacao->id]) }}" title="Visualizar {{$recomendacao->nome}}" ></a>
<a class="btn btn-warning icon_check_alt2" href="{{ route('admin.cadastro.recomendacoes.show', ['id'=>$recomendacao->id]).'/edit' }}" title="Editar {{$recomendacao->nome}}" ></a>
            <input type="submit" class="btn btn-danger icon_check_alt2" value= "X"  title="Delete {{$recomendacao->nome}}">
 {!! Form::close ()  !!}
                    </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                          <div class="alert alert-warning">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Atenção!</strong> Nenhum dado cadastrado ...
</div>

         @endif
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