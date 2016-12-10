<!DOCTYPE html>
<html>
	<head>
		<title> <?php echo $__env->yieldContent('title'); ?> </title>
		<?php echo $__env->make('front.masterpage.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</head>

	<body>
		<?php echo $__env->make('front.masterpage.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		
		<?php echo $__env->yieldContent('content'); ?>

		<?php echo $__env->make('front.masterpage.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</body>
</html>