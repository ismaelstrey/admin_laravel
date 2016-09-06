<?php $data = date("d/m/Y")?>
<div class="form-group">
<div class="col-lg-2"></div>

<div class="col-lg-8">
<div class="row">
<div class="col-lg-4">
<?php echo Form::label('data_atual', 'Data de Cadastro', ['class'=>'label-control']); ?>

<?php echo Form::text('data_atual',$data ,['disabled'=>'disabled','class'=>'form-control']); ?>

</div>
<div class="col-lg-4">
<?php echo Form::label('data_expiracao', 'Data de Expiração', ['class'=>'label-control']); ?>

<?php echo Form::date('data_expiracao',NULL,['class'=>'form-control']); ?>

</div>
<div class="col-lg-4">
<?php echo Form::label('local', 'Local', ['class'=>'label-control']); ?>

<?php echo Form::select('local', ['1'=>'Vip','2'=>'Normal'], NULL, ['class'=>'form-control']); ?>

</div>
</div>
<?php echo Form::label('nome', 'Nome', ['class'=>'label-control']); ?>

<?php echo Form::text('nome', NULL, ['class'=>'form-control']); ?>


<?php echo Form::label('link', 'Link', ['class'=>'label-control']); ?>

<?php echo Form::text('link', NULL, ['class'=>'form-control']); ?>


<?php echo Form::label('anuncio', 'Anuncio', ['class'=>'label-control']); ?>

<?php echo Form::textarea('anuncio', NULL, ['class'=>'form-control']); ?>

<hr>
<?php echo Form::reset($reset, ['class' => 'btn btn-warning']); ?>

        <?php echo Form::submit($submit, ['class' => 'btn btn-success']); ?>

</div>
<div class="col-lg-2"></div>
</div>