<body>
<?php echo $__env->yieldContent('slide'); ?>

<div id="templatemo_mobile_menu">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="#templatemo_banner_slide"><i class="glyphicon glyphicon-home"></i> &nbsp; Home</a></li>
            <li><a href="#templatemo_about"><i class="glyphicon glyphicon-briefcase"></i> &nbsp; About</a></li>
            <li><a href="#templatemo_events"><i class="glyphicon glyphicon-bullhorn"></i> &nbsp; Events</a></li>
            <li><a href="#templatemo_timeline"><i class="glyphicon glyphicon-calendar"></i> &nbsp; Timeline</a></li>
            <li><a rel="nofollow" href="http://www.google.com" class="external-link"><i class="glyphicon glyphicon-export"></i> &nbsp; External</a></li>
            <li><a href="#templatemo_contact"><i class="glyphicon glyphicon-phone-alt"></i> &nbsp; Contact</a></li>
        </ul>
</div>
<div class="container_wapper">
    <div id="templatemo_banner_menu">
        <div class="container-fluid">
            <div class="col-xs-4 templatemo_logo">
            	<a href="<?php echo e(url('/')); ?>">
                	<img src="<?php echo e(url('images/logo.png')); ?>" id="logo_img" alt="dragonfruit website template" title="Dragonfruit Template" />
                	
                </a>
            </div>
            <div class="col-sm-8 hidden-xs">
                <ul class="nav nav-justified">
                  <?php if( url('/') !== url()->current()): ?>

                    <li><a  rel="nofollow" href="<?php echo e(url('/')); ?>" class="external-link">Home</a></li>
                    <li><a rel="nofollow" href="<?php echo e(url('/')); ?>" class="external-link">Sobre</a></li>
                    <li><a rel="nofollow" href="<?php echo e(url('/')); ?>" class="external-link">Serviços</a></li>
                    <li><a rel="nofollow" href="<?php echo e(url('/')); ?>" class="external-link">Comentários</a></li>
                   <!--  <li><a rel="nofollow" href="http://www.google.com" class="external-link">External</a></li> -->
                    <li><a href="<?php echo e(url('/')); ?>">Contato</a></li>
                    <?php else: ?>                 
                    <li><a href="#templatemo_banner_slide">Home</a></li>
                    <li><a href="#templatemo_about">Sobre</a></li>
                    <li><a href="#templatemo_events">Serviços</a></li>
                    <li><a href="#templatemo_timeline">Comentários</a></li>
                   <!--  <li><a rel="nofollow" href="http://www.google.com" class="external-link">External</a></li> -->
                    <li><a href="#templatemo_contact">Contato</a></li>
                    <?php endif; ?>

                    
                 </ul>
            </div>
            <div class="col-xs-8 visible-xs">
                <a href="#" id="mobile_menu"><span class="glyphicon glyphicon-th-list"></span></a>
            </div>
        </div>
    </div>
</div>