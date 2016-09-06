<?php $__env->startSection('content'); ?>
  


  <?php echo Form::open(['url'=> '/register','role'=>'form', 'class'=>'cadastro-form']); ?>   
        <div class="login-wrap">
        <img src="images/logo.png" id="logo_img" class="center" alt="dragonfruit website template" title="Cadastro de usuario Speed sul " />
        <h2 align="center">Faça seu cadastro</h2>
            

            <div class="input-group">
                 <span class="input-group-addon"><i class="icon_profile"></i></span>              
                 <?php echo Form::text('name', old('name'), ['class'=>'form-control','placeholder'=>'Seu Nome','autofocus']); ?>

<?php if($errors->has('name')): ?>
    <span class="help-block">
        <strong><?php echo e($errors->first('name')); ?></strong>
    </span>
<?php endif; ?>
            </div>

            <div class="input-group">
                <span class="input-group-addon"><i class="icon_mail"></i></span>              
                <?php echo Form::email('email', old('email'), ['class'=>'form-control','placeholder'=>'Seu Email']); ?>

<?php if($errors->has('email')): ?>
    <span class="help-block">
        <strong><?php echo e($errors->first('email')); ?></strong>
    </span>
<?php endif; ?>
            </div>

           

            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <?php echo Form::password('password', ['class'=>'form-control', 'placeholder'=>'Senha']); ?>

            </div>
<?php if($errors->has('password')): ?>
    <span class="help-block">
        <strong><?php echo e($errors->first('password')); ?></strong>
    </span>
<?php endif; ?>

             <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <?php echo Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Repita Senha']); ?>

            </div>
<?php if($errors->has('password_confirmation')): ?>
    <span class="help-block">
        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
    </span>
<?php endif; ?>

          
            <?php echo Form::submit("Cadastrar", ['class' => 'btn btn-info btn-lg btn-block']); ?>

            <?php echo Form::reset("Cancelar", ['class' => 'btn btn-danger btn-lg btn-block']); ?>

         
        </div>
      <?php echo Form::close(); ?>   

   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>