
<div class="col-lg-12">

    <div class="form-group<?php echo e($errors->has('nome') ? ' has-error' : ''); ?>">
        <?php echo Form::label('nome', 'Nome'); ?>

        <?php echo Form::text('nome', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('nome')); ?></small>
    </div>

    <div class="form-group<?php echo e($errors->has('link') ? ' has-error' : ''); ?>">
        <?php echo Form::label('link', 'Link'); ?>

        <?php echo Form::text('link', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('link')); ?></small>
    </div>

    <div class="form-group<?php echo e($errors->has('img') ? ' has-error' : ''); ?>">
        <?php echo Form::label('img', 'Imagen'); ?>

        <?php echo Form::file('img', ['class' => 'form-control',]); ?>

        <small class="text-danger"><?php echo e($errors->first('nome')); ?></small>
    </div>

    <div class="form-group<?php echo e($errors->has('descricao') ? ' has-error' : ''); ?>">
        <?php echo Form::label('descricao', 'Descrição'); ?>

        <?php echo Form::textarea('descricao', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('descricao')); ?></small>
    </div>


    <div class="btn-group pull-right">
        <?php echo Form::reset($reset, ['class' => 'btn btn-warning']); ?>

        <?php echo Form::submit($submit, ['class' => 'btn btn-success']); ?>

    </div>
</div>