<div class="col-lg-12">
    <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
        <?php echo Form::label('name', 'Nome'); ?>

        <?php echo Form::text('name', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('name')); ?></small>
    </div>
    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
        <?php echo Form::label('email', 'Email'); ?>

        <?php echo Form::email('email', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('email')); ?></small>
    </div>
    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
        <?php echo Form::label('password', 'Senha'); ?>

        <?php echo Form::password('password', ['class' => 'form-control', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('password')); ?></small>
    </div>
    <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
        <?php echo Form::label('password_confirmation', 'Confirmação da senha'); ?>

        <?php echo Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('password_confirmation')); ?></small>
    </div>
      <div class="form-group<?php echo e($errors->has('imagem') ? ' has-error' : ''); ?>">
        <?php echo Form::label('imagem', 'Imagem'); ?>

        <?php echo Form::file('imagem', ['class' => 'form-control',]); ?>

        <small class="text-danger"><?php echo e($errors->first('imagem')); ?></small>
    </div>

      <div class="form-group<?php echo e($errors->has('tipo') ? ' has-error' : ''); ?>">
        <?php echo Form::label('tipo', 'Tipo'); ?>

        <?php echo Form::select('tipo', ['0'=>'Administrador', '1'=>'Técnico', '2'=>'Vendedor', '3' => 'Cliente'], NULL, ['class'=>'form-control m-bot15']); ?>

        <small class="text-danger"><?php echo e($errors->first('tipo')); ?></small>
    </div>


    <div class="btn-group pull-right">
        <?php echo Form::reset($reset, ['class' => 'btn btn-warning']); ?>

        <?php echo Form::submit($submit, ['class' => 'btn btn-success']); ?>

    </div>
</div>