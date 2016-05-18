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
                    <table class="table table-hover branco">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Data de cadastro</th>
                          <th>Data de Expiração</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach ($planos as $plano)
                        <tr>
                          <td>{{$plano->nome}}</td>
                          <td>{{$plano->velocidade}}</td>
                          <td>{{$plano->created_at}}</td>
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