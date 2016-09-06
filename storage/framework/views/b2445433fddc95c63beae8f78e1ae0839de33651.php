
<div class="col-lg-12">

    <div class="form-group<?php echo e($errors->has('nome') ? ' has-error' : ''); ?>">
        <?php echo Form::label('nome', 'Nome'); ?>

        <?php echo Form::text('nome', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('nome')); ?></small>
    </div>

    <div class="form-group<?php echo e($errors->has('velocidade') ? ' has-error' : ''); ?>">
        <?php echo Form::label('velocidade', 'Velocidade'); ?>

        <?php echo Form::number('velocidade', null, ['class' => 'form-control', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('velocidade')); ?></small>
    </div>

       <div class="form-group<?php echo e($errors->has('img') ? ' has-error' : ''); ?>">
        <?php echo Form::label('img', 'Imagen'); ?>

        <?php echo Form::file('img', ['class'=>'form-control input-sm m-bot15']); ?>

        <small class="text-danger"><?php echo e($errors->first('img')); ?></small>
    </div>

    <div class="form-group<?php echo e($errors->has('descricao') ? ' has-error' : ''); ?>">
        <?php echo Form::label('descricao', 'Descrição'); ?>

        <?php echo Form::textarea('descricao', null, ['class' => 'form-control ckeditor', 'required' => 'required']); ?>

        <small class="text-danger"><?php echo e($errors->first('descricao')); ?></small>
    </div>


    <div class="btn-group pull-right">
        <?php echo Form::reset($reset, ['class' => 'btn btn-warning']); ?>

        <?php echo Form::submit($submit, ['class' => 'btn btn-success']); ?>

    </div>
</div>