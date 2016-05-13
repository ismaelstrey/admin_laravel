@extends('admin.index')
@section('content')
<section id="main-content">
     <section class="wrapper">
     		<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Cadastro da Empresa</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{URL::to('/admin/home')}}">Home</a></li>
						<li><i class="icon_document_alt"></i>Cadastro</li>
						<li><i class="fa fa-file-text-o"></i>Banner</li>
						<a class="pull-right" href="javascript:window.history.go(-1)">Voltar</a>

					</ol>
				</div>
			</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">						
							 <section class="panel">
		                          <div class="panel-body">
                 {!! Form::open(['route'=>['admin.cadastro.banner.store']]) !!}
						<div class="form-group">	
						<div class="col-lg-2"></div>	
														
							<div class="col-lg-8">
							<label for="nome">Nome</label>
							<input class="form-control m-bot15" type="text" name="nome" placeholder="Nome">
							<label for="rua">Rua</label>
							<input class="form-control m-bot15" type="text" name="rua" placeholder="Rua">
							<label for="rua">Numero</label>
							<input class="form-control m-bot15" type="text" name="numero" placeholder="Numero">
							<label for="cidade">Cidade</label>
							<input class="form-control m-bot15" type="text" name="cidade" placeholder="Cidade">
							<label for="telefone">Telefone</label>
							<input class="form-control m-bot15" type="text" name="telefone" placeholder="Telefone">
							<label for="celular">Celular</label>
							<input class="form-control m-bot15" type="text" name="celular" placeholder="Celular">
							<label for="site">Site</label>
							<input class="form-control m-bot15" type="text" name="site" placeholder="Site">
							<label for="logo">Imagem</label>
							{!! Form::file('logo', ['class'=>'form-control input-sm m-bot15']) !!}
							
							<label for="descricao">Descrição</label>
							<textarea name="descricao" class="form-control ckeditor" rows="6"></textarea>
							<hr>	
							{!! Form::submit(' Cadastrar ', ['class'=>'btn btn-success pull-right']) !!}
							{!! Form::reset(' Cancelar ', ['class'=>'btn btn-danger pull-right']) !!}
							
                         </div>
                         <div class="col-lg-2"></div>
                      </div>
                  {!! Form::close() !!}
		                          </div>
		                      </section>
						</div> 
					</div>
				</div> 
	</section>
</section>
@stop