<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('core::EJCTemplate.includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
		<header>
	        <?php echo $__env->make('core::EJCTemplate.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	        <?php echo $__env->make('core::EJCTemplate.includes.bannersection', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</header>

        <div class="container-fluid">
                <?php echo $__env->yieldContent('content'); ?>
        </div>

    <?php echo $__env->make('core::EJCTemplate.includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	  <?php echo $__env->yieldContent('scripts'); ?>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/mScrollTop/material-scrolltop.css')); ?>" type="text/css" rel="stylesheet" />
<link href="<?php echo e(URL::asset('assets/css/animate.css')); ?>" type="text/css" rel="stylesheet" />
<script type='text/javascript' src='<?php echo e(URL::asset('assets/js/wow.min.js')); ?>' ></script>
<link href="<?php echo e(URL::asset('assets/font-awesome-4.6.3/css/font-awesome.min.css')); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">

</body>
</html>