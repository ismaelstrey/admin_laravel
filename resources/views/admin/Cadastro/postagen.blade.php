@extends('admin.index')
@section('content')
<section id="main-content">
     <section class="wrapper">
     		<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Cadastro de Postagens</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{URL::to('/admin/home')}}">Home</a></li>
						<li><i class="icon_document_alt"></i>Cadastro</li>
						<li><i class="fa fa-file-text-o"></i>Postagen</li>
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
																			
											<div class="col-lg-12">
											<label for="nome">Título</label>
											<input class="form-control m-bot15" type="text" name="nome" placeholder="Nome">
											<label for="link">Descrição</label>
											<input class="form-control m-bot15" type="text" name="descricao" placeholder="Descrição">
											<label for="link">Tags</label>
											<input class="form-control m-bot15" type="text" name="tags" placeholder="Tags">		
											<label for="descricao">Postagen</label>
											<textarea name="postagen" class="form-control ckeditor" rows="10"></textarea>
											<hr>	
											{!! Form::submit(' Cadastrar ', ['class'=>'btn btn-success pull-right']) !!}
											{!! Form::reset(' Cancelar ', ['class'=>'btn btn-danger pull-right']) !!}
												
			                                 </div>
			                                
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