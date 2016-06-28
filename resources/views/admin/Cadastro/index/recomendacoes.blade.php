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
						<li><i class="icon_document_alt"></i>Planos</li>



				<a class="pull-right" href="{{URL::to('/admin/cadastro/anuncio/create')}}">Novo</a>
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
@if (isset($anuncios ))


                       @foreach ($anuncios as $anuncio)
                        <tr>
                          <td>{{$anuncio->nome}}</td>
                          <td>{{$anuncio->created_at}}</td>
                          <td>{{$anuncio->data_expiracao}}</td>
                        </tr>
                        @endforeach
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