<?php $__env->startSection('content'); ?>

  <!--main content start-->
      <section id="main-content">
          <section class=" wrapper">
          <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Cadastro de Anuncios</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo e(URL::to('/admin/home')); ?>">Home</a></li>
						<li><i class="icon_document_alt"></i>Planos</li>



				<a class="pull-right" href="<?php echo e(URL::to('/admin/cadastro/anuncio/create')); ?>">Novo</a>
               </div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
<?php echo $__env->make('admin.Cadastro.includes.session', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <table class="table table-hover branco">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Data de cadastro</th>
                          <th>Data de Expiração</th>
                           <th><i class="icon_cogs"></i> Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php foreach($anuncios as $anuncio): ?>
                        <tr>
                          <td><?php echo e($anuncio->nome); ?></td>
                          <td><?php echo e($anuncio->created_at); ?></td>
                          <td><?php echo e($anuncio->data_expiracao); ?></td>
   <td>
                    <div class="btn-group">
  <?php echo Form::open (['method'=>'DELETE', 'url'=>['admin/cadastro/anuncio/'.$anuncio->id]]); ?>

   <a class="btn btn-success icon_check_alt2" href="<?php echo e(route('admin.cadastro.anuncio.show', ['id'=>$anuncio->id])); ?>" title="Visualizar <?php echo e($anuncio->nome); ?>" ></a>
    <a class="btn btn-warning icon_check_alt2" href="<?php echo e(route('admin.cadastro.anuncio.show', ['id'=>$anuncio->id]).'/edit'); ?>" title="Editar <?php echo e($anuncio->nome); ?>" ></a>
            <input type="submit" class="btn btn-danger icon_check_alt2" value= "X"  title="Delete <?php echo e($anuncio->nome); ?>">
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