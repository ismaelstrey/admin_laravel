<?php $__env->startSection('content'); ?>

  <!--main content start-->
      <section id="main-content">
          <section class=" wrapper">
          <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Cadastro de usuarios</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo e(URL::to('/admin/home')); ?>">Home</a></li>
						<li><i class="icon_document_alt"></i>Planos</li>


				<a class="pull-right" href="<?php echo e(URL::to('/admin/cadastro/usuarios/create')); ?>">Novo</a>
               </div>
			</div>

  <div class="row">
                  <div class="col-lg-12">
                  <?php echo $__env->make('admin.Cadastro.includes.session', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <table class="table table-hover branco">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Imagem</th>
                          <th>Email</th>
                          <th>Data de cadastro</th>
                           <th><i class="icon_cogs"></i> Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php if(isset($usuarios)): ?>
                         <?php foreach($usuarios as $usuario): ?>
                        <tr>
                          <td><?php echo e($usuario->name); ?></td>
                          <td><img src="<?php echo e(url('images/uploads/usuario/thunb/'.$usuario->imagem)); ?>"></td>
                          <td><?php echo e($usuario->email); ?></td>
                          <td><?php echo e($usuario->created_at); ?></td>
                             <td>
                    <div class="btn-group">
  <?php echo Form::open (['method'=>'DELETE', 'url'=>['admin/cadastro/usuarios/'.$usuario->id]]); ?>

   <a class="btn btn-success icon_check_alt2" href="<?php echo e(route('admin.cadastro.usuarios.show', ['id'=>$usuario->id])); ?>" title="Visualizar <?php echo e($usuario->nome); ?>" ></a>
   <a class="btn btn-warning icon_check_alt2" href="<?php echo e(route('admin.cadastro.usuarios.show', ['id'=>$usuario->id]).'/edit'); ?>" title="Editar <?php echo e($usuario->nome); ?>" ></a>
            <input type="submit" class="btn btn-danger icon_check_alt2" value= "X"  title="Delete <?php echo e($usuario->nome); ?>">
 <?php echo Form::close (); ?>

                    </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                      <?php endif; ?>

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