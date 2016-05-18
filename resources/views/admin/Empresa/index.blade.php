@extends('admin.index')
@section('content')

  <!--main content start-->
      <section id="main-content">
          <section class=" wrapper">  
          <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Dados Da Empresa</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{URL::to('/admin')}}">Home</a></li>
						<li><i class="icon_document_alt"></i>Admin</li>
						<li><i class="fa fa-file-text-o"></i>Empresa</li>
				<a class="pull-right" href="{{URL::to('/admin/empresa/create')}}">Novo</a>
               </div>
			</div>    
              <div class="row">
              			
                  <div class="col-lg-12">
                      <section class="panel">
                          <div class="panel-body">
                          <table class="table table-hover">
                          	<thead>
                          		<tr>
                          			<th>Nome</th>
                          			<th>Site</th>
                          			<th>Telefone</th>
                          			<th>Cidade</th>
                          		</tr>
                          	</thead>
                          	<tbody>
                          	@foreach ($empresas as $empresa)
                          		<tr>                          			
                          			<td>{{$empresa->nome}}</td>
                          			<td>{{$empresa->site}}</td>
                          			<td>{{$empresa->telefone}}</td>
                          			<td>{{$empresa->cidade}}</td>                      			
                          			
                          		</tr>
                          		@endforeach
                          	</tbody>
                          </table>
                          </div>
                      </section>
                  </div>
                
                 
              </div>             
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

@stop