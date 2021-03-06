<?php $__env->startSection('content'); ?>
<section id="main-content">
 <section class="wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-file-text-o"></i> Cadastro de Planos</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="<?php echo e(URL::to('/admin')); ?>">Home</a></li>
				<li><i class="fa fa-file-text-o"></i><a href="<?php echo e(URL::to('/admin/cadastro/planos/')); ?>">Plano</a></li>
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
						<?php echo Form::open(['route'=>['admin.cadastro.planos.store']]); ?>

							<?php echo $__env->make('admin.Cadastro.forms.planos', ['reset' => 'Cancelar', 'submit'=>'Cadastrar'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php echo Form::close(); ?>

					</div>
				</section>
			</div>
		</div>
	</div>

</section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>