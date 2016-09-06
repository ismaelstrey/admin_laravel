

<div class="col-lg-12">

    <div class="form-group<?php echo e($errors->has('nome') ? ' has-error' : ''); ?>">
        <?php echo Form::label('nome', 'Nome'); ?>

        <?php echo Form::text('nome', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('nome')); ?></small>
    </div>
 <div class="form-group<?php echo e($errors->has('nome') ? ' has-error' : ''); ?>">
        <?php echo Form::label('imagem', 'Imagem'); ?>

        <?php echo Form::file('imagem', ['class' => 'form-control',]); ?>


        <small class="text-danger"><?php echo e($errors->first('nome')); ?></small>
    </div>
    <div class="form-group<?php echo e($errors->has('descricao') ? ' has-error' : ''); ?>">
        <?php echo Form::label('descricao', 'Descrição'); ?>

        <?php echo Form::text('descricao', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('descricao')); ?></small>
    </div>

    <div class="form-group<?php echo e($errors->has('tags') ? ' has-error' : ''); ?>">
        <?php echo Form::label('tags', 'Tags'); ?>

        <?php echo Form::text('tags', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('tags')); ?></small>
    </div>

    <div class="form-group<?php echo e($errors->has('postagen') ? ' has-error' : ''); ?>">
        <?php echo Form::label('postagen', 'Postagen'); ?>

        <?php echo Form::textarea('postagen', null, ['class' => 'form-control ckeditor', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('postagen')); ?></small>
    </div>

    <div class="btn-group pull-right">
        <?php echo Form::reset($reset, ['class' => 'btn btn-warning']); ?>

        <?php echo Form::submit($submit, ['class' => 'btn btn-success']); ?>

    </div>
</div>