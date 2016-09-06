<?php $__env->startSection('content'); ?>


  <?php echo Form::open(['url'=> '/login','class'=>'login-form','role'=>'form']); ?>

        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
            <span class="input-group-addon"><i class="icon_profile"></i></span>
            <?php echo Form::email('email', old('email'), ['class'=>'form-control','placeholder'=>'Seu Email','autofocus']); ?>

            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <?php echo Form::password('password', ['class'=>'form-control', 'placeholder'=>'Senha']); ?>


            </div>
            <label class="checkbox">
            <?php echo Form::checkbox('remember', NULL, NULL, NULL); ?>

                <input type="checkbox" name="remember"> Lembrar senha
                <span class="pull-right"> <a href="<?php echo e(url('/password/reset')); ?>"> Recuperar senha?</a></span><br>
                <span class="pull-right"> <a href="<?php echo e(url('/register')); ?>"> <strong>Cadastrar !</strong> </a></span>
            </label>

            <?php echo Form::reset("Login", ['class' => 'btn btn-primary btn-lg btn-block']); ?>

            <?php echo Form::submit("Signup", ['class' => 'btn btn-info btn-lg btn-block']); ?>

        </div>
 <?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>