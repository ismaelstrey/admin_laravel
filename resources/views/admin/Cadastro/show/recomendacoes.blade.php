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



				<a class="pull-right" href="{{URL::to('/admin/cadastro/recomendacoes/create')}}">Novo</a>
               </div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                    <table class="table table-hover branco">
                      <thead>
                        <tr>
                          <th><i class="icon_profile"></i> Titulo</th>
                          <th>Criação</th>
                          <th>Atualização</th>
                          <th>Imagen</th>
                          <th><i class="icon_cogs"></i> Mensagem</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>{{$recomendacao->titulo}}</td>
                          <td>{{$recomendacao->created_at}}</td>
                          <td>{{$recomendacao->updated_at}}</td>
                          <td>{{$recomendacao->mensagem}}</td>


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