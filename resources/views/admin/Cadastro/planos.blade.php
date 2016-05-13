@extends('admin.index')
@section('content')
<section id="main-content">
     <section class="wrapper">
     		<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Cadastro de Planos</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{URL::to('/admin/home')}}">Home</a></li>
						<li><i class="icon_document_alt"></i>Cadastro</li>
						<li><i class="fa fa-file-text-o"></i>Plano</li>
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
												<label for="link">Veloçidade</label>
												<input class="form-control m-bot15" type="number" name="velocidade" placeholder="Velocidade">
												<label for="img">Imagem</label>
												{!! Form::file('img', ['class'=>'form-control input-sm m-bot15']) !!}
												
												<label for="descricao">Descrição</label>
												<textarea name="descricao" class="form-control ckeditor" rows="6"></textarea>
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