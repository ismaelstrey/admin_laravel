
<?php echo $__env->make('admin.Includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <body>
  <!-- container section start -->
  <section id="container" class="">
      <?php echo $__env->make('admin.Includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!--sidebar start-->
     <?php echo $__env->make('admin.Includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

     <?php echo $__env->yieldContent('content'); ?>
  </section>
<?php echo $__env->make('admin.Includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  </body>
</html>
