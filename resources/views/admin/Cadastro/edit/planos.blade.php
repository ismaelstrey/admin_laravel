@extends('admin.index')
@section('content')
<section id="main-content">
     <section class="wrapper">
     		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-file-text-o"></i> Cadastro de Planos</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="{{URL::to('/admin')}}">Home</a></li>
					<li><i class="fa fa-file-text-o"></i><a href="{{URL::to('/admin/cadastro/planos/')}}">Plano</a></li>
					<li><i class="icon_document_alt"></i>Novo</li>
					<a class="pull-right" href="javascript:window.history.go(-1)">Voltar</a>
				</ol>
			</div>
			</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							 <section class="panel">
		                          <div class="panel-body">
{!! Form::model($plano, ['method' => 'PATCH','route' => ['admin.cadastro.planos.update', $plano->id]])!!}
@include('admin.Cadastro.edit.planos', ['some' => 'data'])
{!! Form::close() !!}

		                          </div>
		                      </section>
						</div>
					</div>
				</div>
	</section>
</section>
@stop