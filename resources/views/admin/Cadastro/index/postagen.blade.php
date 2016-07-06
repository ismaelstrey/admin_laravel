@extends('admin.index')
@section('content')

  <!--main content start-->
      <section id="main-content">
          <section class=" wrapper">
          <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Cadastro de postagen</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{URL::to('/admin/home')}}">Home</a></li>
                                    <li><i class="fa fa-home"></i><a href="{{URL::to('/admin/cadastro')}}">Cadastro</a></li>
						<li><i class="icon_document_alt"></i>postagen</li>



				<a class="pull-right" href="{{URL::to('/admin/cadastro/postagen/create')}}">Novo</a>
               </div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                  @include('admin.Cadastro.includes.session')
                    <table class="table table-hover branco">
                      <thead>
                        <tr>
                          <th><i class="icon_profile"></i> Nome</th>
                          <th>Tags</th>
                          <th>Descriçao</th>
                          <th>Imagen</th>
                          <th><i class="icon_cogs"></i> Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach ($postagens as $postagen)
                        <tr>
                          <td>{{$postagen->nome}}</td>
                          <td>{{$postagen->tags}}</td>
                          <td>{{$postagen->descricao}}</td>
                          <td>{{Html::image('/images/uploads/thunb/'.$postagen->imagem)}}</td>
                          <td>
                    <div class="btn-group">
  {!! Form::open (['method'=>'DELETE', 'url'=>['admin/cadastro/postagen/'.$postagen->id]]) !!}
   <a class="btn btn-success icon_check_alt2" href="{{ route('admin.cadastro.postagen.show', ['id'=>$postagen->id]) }}" title="Visualizar {{$postagen->nome}}" ></a>
   <a class="btn btn-warning icon_check_alt2" href="{{ route('admin.cadastro.postagen.show', ['id'=>$postagen->id]).'/edit' }}" title="Editar {{$postagen->nome}}" ></a>
            <input type="submit" class="btn btn-danger icon_check_alt2" value= "X"  title="Delete {{$postagen->nome}}">
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