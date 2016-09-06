<?php echo $__env->make('layout.elegant.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.elegant.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('sobre'); ?>
<?php echo $__env->yieldContent('event'); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('layout.elegant.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>