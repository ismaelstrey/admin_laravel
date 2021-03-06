<?php $__env->startSection('content'); ?>
  <!--main content start-->
      <section id="main-content">
          <section class=" wrapper">
          <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Cadastro de Servicos</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo e(URL::to('/admin/home')); ?>">Home</a></li>
						<li><i class="icon_document_alt"></i>Servicos</li>
				<a class="pull-right" href="<?php echo e(URL::to('/admin/cadastro/servicos/create')); ?>">Novo</a>
               </div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                  <?php echo $__env->make('admin.Cadastro.includes.session', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <table class="table table-hover branco">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Tags</th>
                          <th>Descriçao</th>
                           <th><i class="icon_cogs"></i> Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php foreach($servicos as $servico): ?>
                        <tr>
                          <td><?php echo e($servico->nome); ?></td>
                          <td><?php echo e($servico->tags); ?></td>
                          <td><?php echo e($servico->descricao); ?></td>
                             <td>
                    <div class="btn-group">
  <?php echo Form::open (['method'=>'DELETE', 'url'=>['admin/cadastro/servicos/'.$servico->id]]); ?>

   <a class="btn btn-success icon_check_alt2" href="<?php echo e(route('admin.cadastro.servicos.show', ['id'=>$servico->id])); ?>" title="Visualizar <?php echo e($servico->nome); ?>" ></a>
   <a class="btn btn-warning icon_check_alt2" href="<?php echo e(route('admin.cadastro.servicos.show', ['id'=>$servico->id]).'/edit'); ?>" title="Editar <?php echo e($servico->nome); ?>" ></a>
            <input type="submit" class="btn btn-danger icon_check_alt2" value= "X"  title="Delete <?php echo e($servico->nome); ?>">
 <?php echo Form::close (); ?>

                    </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
              </div>
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>