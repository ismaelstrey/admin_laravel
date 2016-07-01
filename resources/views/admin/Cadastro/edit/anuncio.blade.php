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
{{-- {!! Form::open(['route'=>['admin.cadastro.anuncio.store']]) !!} --}}
{!! Form::model($anuncio, [
		'method' => 'PATCH',
		'route' => [
		'admin.cadastro.anuncio.update'
		, $anuncio->id
		]])
    !!}
@include('admin.Cadastro.forms.anuncio', ['some' => 'data'])
{!! Form::close() !!}
		                          </div>
		                      </section>
						</div>
					</div>
				</div>
	</section>
</section>
@stop