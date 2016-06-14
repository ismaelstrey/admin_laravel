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



				<a class="pull-right" href="{{URL::to('/admin/cadastro/postagen/create')}}">Novo</a>
               </div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
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
                      
                        <tr>
                          <td>{{$postagen->nome}}</td>
                          <td>{{$postagen->tags}}</td>
                          <td>{{$postagen->descricao}}</td>
                          <td>{{Html::image('/images/Uploads/thunb/'.$postagen->imagem)}}</td>
                          <td>{{Html::image('/images/Uploads/'.$postagen->imagem)}}</td>
                          <td> 
                      
                    <div class="btn-group">  


                      
  <a class="btn btn-success" href="{{ route('admin.cadastro.postagen.show', ['id'=>$postagen->id]) }}" title="Visualizar {{$postagen->nome}}" ><i class="icon_check_alt2"></i></a>
  <a class="btn btn-danger" href="{{ route('admin.cadastro.postagen.destroy', ['id'=>$postagen->id]) }}" title="Deletar {{$postagen->nome}}" ><i class="icon_close_alt2"></i></a>
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