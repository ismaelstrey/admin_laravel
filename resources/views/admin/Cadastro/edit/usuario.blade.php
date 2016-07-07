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
					{!! Form::model($usuario, ['method' => 'PATCH','route' => ['admin.cadastro.usuario.update', $usuario->id]])   !!}
					@include('admin.Cadastro.forms.usuario',, ['reset' => 'Cancelar', 'submit'=>'Atualizar'])
					{!! Form::close() !!}
		                              </form>
		                          </div>
		                      </section>
						</div>
					</div>
				</div>
	</section>
</section>
@stop