@extends('admin.index')
@section('content')
<section id="main-content">
     <section class="wrapper">
     		<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Cadastro de serviços</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{URL::to('/admin/home')}}">Home</a></li>
						<li><i class="icon_document_alt"></i>Cadastro</li>
						<li><i class="fa fa-file-text-o"></i>Serviços</li>
					</ol>
				</div>
			</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							 <section class="panel">
		                          <div class="panel-body">
{!! Form::model($servico, ['method' => 'PATCH','route' => ['admin.cadastro.servicos.update', $servico->id]])   !!}
@include('admin.Cadastro.forms.servico', ['reset' => 'Cancelar', 'submit'=>'Atualizar'])
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