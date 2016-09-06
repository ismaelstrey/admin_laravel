
<div class="col-lg-12">
    <div class="form-group<?php echo e($errors->has('nome') ? ' has-error' : ''); ?>">
        <?php echo Form::label('nome', 'Título'); ?>

        <?php echo Form::text('nome', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('nome')); ?></small>
    </div>
    <div class="form-group<?php echo e($errors->has('descricao') ? ' has-error' : ''); ?>">
        <?php echo Form::label('descricao', 'Título'); ?>

        <?php echo Form::text('descricao', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('descricao')); ?></small>
    </div>
    <div class="form-group<?php echo e($errors->has('tags') ? ' has-error' : ''); ?>">
        <?php echo Form::label('tags', 'Título'); ?>

        <?php echo Form::text('tags', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('tags')); ?></small>
    </div>
    <div class="form-group<?php echo e($errors->has('icone') ? ' has-error' : ''); ?>">
        <?php echo Form::label('icone', 'Título'); ?>

        <a href="<?php echo e(url('http://fontawesome.io/icons/')); ?>"> Icones</a>
        <?php echo Form::text('icone', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('icone')); ?></small>
    </div>
    <div class="form-group<?php echo e($errors->has('servico') ? ' has-error' : ''); ?>">
        <?php echo Form::label('servico', 'Serviço'); ?>

        <?php echo Form::textarea('servico', null, ['class' => 'form-control ckeditor', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('servico')); ?></small>
    </div>
    <div class="btn-group pull-right">
        <?php echo Form::reset($reset, ['class' => 'btn btn-warning']); ?>

        <?php echo Form::submit($submit, ['class' => 'btn btn-success']); ?>

    </div>
</div>