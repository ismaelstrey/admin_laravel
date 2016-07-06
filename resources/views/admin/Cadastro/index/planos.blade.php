@extends('admin.index')
@section('content')

  <!--main content start-->
      <section id="main-content">
          <section class=" wrapper">
          <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Cadastro de Planos</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{URL::to('/admin/home')}}">Home</a></li>
						<li><i class="icon_document_alt"></i>Planos</li>


				<a class="pull-right" href="{{URL::to('/admin/cadastro/planos/create')}}">Novo</a>
               </div>
			</div>

  <div class="row">
                  <div class="col-lg-12">
                  @include('admin.Cadastro.includes.session')
                    <table class="table table-hover branco">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Data de cadastro</th>
                          <th>Data de Expiração</th>
                           <th><i class="icon_cogs"></i> Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach ($planos as $plano)
                        <tr>
                          <td>{{$plano->nome}}</td>
                          <td>{{$plano->velocidade}}</td>
                          <td>{{$plano->created_at}}</td>
                             <td>
                    <div class="btn-group">
  {!! Form::open (['method'=>'DELETE', 'url'=>['admin/cadastro/planos/'.$plano->id]]) !!}
   <a class="btn btn-success icon_check_alt2" href="{{ route('admin.cadastro.planos.show', ['id'=>$plano->id]) }}" title="Visualizar {{$plano->nome}}" ></a>
   <a class="btn btn-warning icon_check_alt2" href="{{ route('admin.cadastro.planos.show', ['id'=>$plano->id]).'/edit' }}" title="Editar {{$plano->nome}}" ></a>
            <input type="submit" class="btn btn-danger icon_check_alt2" value= "X"  title="Delete {{$plano->nome}}">
 {!! Form::close ()  !!}
                    </div>
                            </td>
                        </tr>
                        @endforeach
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