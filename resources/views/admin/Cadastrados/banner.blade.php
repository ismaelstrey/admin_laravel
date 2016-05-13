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
						<li><i class="icon_document_alt"></i>Cadastro</li>
						<li><i class="fa fa-file-text-o"></i>Banner</li>
				<a class="pull-right" href="{{URL::to('/admin/cadastro/banner/create')}}">Novo</a>
               </div>
			</div>    
              <div class="row">
              @foreach ($banners as $banner)	
			
                  <div class="col-lg-6">
                      <section class="panel">
                          <div class="panel-body">{{$banner->nome}}</div>
                      </section>
                  </div>
                  <div class="col-lg-6">
                      <section class="panel">
                          <div class="panel-body">{{$banner->link}}</div>
                      </section>
                  </div>
                  @endforeach
              </div>             
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

@stop