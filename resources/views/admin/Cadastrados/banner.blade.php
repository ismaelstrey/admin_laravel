@extends('admin.index')
@section('content')

  <!--main content start-->
      <section id="main-content">
          <section class=" wrapper">
          <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Cadastro de Banner</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{URL::to('/admin/home')}}">Home</a></li>
						<li><i class="icon_document_alt"></i>Banner</li>

				<a class="pull-right" href="{{URL::to('/admin/cadastro/banner/create')}}">Novo</a>
               </div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                    <table class="table table-hover">
                      <thead class="preto">
                        <tr>
                          <th>Nome</th>
                          <th>Link</th>
                          <th>Data de cadastro</th>
                        </tr>
                      </thead>
                      <tbody class="branco">
                       @foreach ($banners as $banner)
                        <tr>
                          <td>{{$banner->nome}}</td>
                          <td>{{$banner->link}}</td>
                          <td>{{$banner->created_at}}</td>
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