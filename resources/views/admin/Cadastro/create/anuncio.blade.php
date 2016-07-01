@extends('admin.index')
@section('content')
<section id="main-content">
     <section class="wrapper">
     		<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Cadastro de anuncio</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{URL::to('/admin/home')}}">Home</a></li>
						<li><i class="icon_document_alt"></i><a href="{{URL::to('/admin/cadastro')}}">Cadastro</a></li>
						<li><i class="fa fa-file-text-o"></i>Anuncio</li>
						<a class="pull-right" href="javascript:window.history.go(-1)">Voltar</a>
					</ol>
				</div>
			</div>
				<div class="row">
				<div class="col-lg-12">
						<div class="row">
							 <section class="panel">
		                          <div class="panel-body">
		                             {!! Form::open(['route'=>['admin.cadastro.anuncio.store']]) !!}
		                             <?php $data = date("d/m/Y")?>
											<div class="form-group">
											<div class="col-lg-2"></div>

											<div class="col-lg-8">
												<div class="row">
												<div class="col-lg-4">
													{!! Form::label('data_atual', 'Data de Cadastro', ['class'=>'label-control']) !!}
													{!! Form::text('data_atual',$data ,['disabled'=>'disabled','class'=>'form-control']) !!}
												</div>
												<div class="col-lg-4">
													{!! Form::label('data_expiracao', 'Data de Expiração', ['class'=>'label-control']) !!}
													{!! Form::date('data_expiracao',NULL,['class'=>'form-control']) !!}
												</div>
												<div class="col-lg-4">
													{!! Form::label('local', 'Local', ['class'=>'label-control']) !!}
													{!! Form::select('local', ['1'=>'Vip','2'=>'Normal'], NULL, ['class'=>'form-control']) !!}
												</div>
											</div>
											{!! Form::label('nome', 'Nome', ['class'=>'label-control']) !!}
											{!! Form::text('nome', NULL, ['class'=>'form-control']) !!}

											{!! Form::label('link', 'Link', ['class'=>'label-control']) !!}
											{!! Form::text('link', NULL, ['class'=>'form-control']) !!}

											{!! Form::label('anuncio', 'Anuncio', ['class'=>'label-control']) !!}
											{!! Form::textarea('anuncio', NULL, ['class'=>'form-control']) !!}
											<hr>
												{!! Form::submit('Cadastrar', ['class'=>'btn btn-info pull-right']) !!}
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