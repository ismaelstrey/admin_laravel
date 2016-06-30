@extends('admin.index')
@section('content')
<section id="main-content">
     <section class="wrapper">
     		<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Cadastro de Usuarios</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{URL::to('/admin/home')}}">Home</a></li>
						<li><i class="icon_document_alt"></i>Cadastro</li>
						<li><i class="fa fa-file-text-o"></i>Usuarios</li>
					</ol>
				</div>
			</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">						
							 <section class="panel">
		                          <div class="panel-body">
		                              <form class="form-horizontal " method="get">
											<div class="form-group">	
											<div class="col-lg-2"></div>								
											<div class="col-lg-8">
											<label for="nome">Nome</label>
											<input class="form-control m-bot15" type="text" name="nome" placeholder="Nome">
											<label for="email">Email</label>
											<input class="form-control m-bot15" type="text" name="email" placeholder="Email">
											<label for="senha">Senha</label>
											<input class="form-control m-bot15" type="password" name="senha" placeholder="********">
											<label for="tipo">Tipo</label>
											<select class="form-control m-bot15" name="tipo">
                                              <option value="0">Admin</option>
                                              <option value="1">Técnico</option>
                                              <option value="2">Vendedor</option>
                                          </select>
											<hr>	
											{!! Form::submit(' Cadastrar ', ['class'=>'btn btn-success pull-right']) !!}
											{!! Form::reset(' Cancelar ', ['class'=>'btn btn-danger pull-right']) !!}
												
			                                 </div>
			                                <div class="col-lg-2"></div>
		                                  </div>
		                              </form>
		                          </div>
		                      </section>
						</div> 
					</div>
				</div> 
	</section>
</section>
@stop