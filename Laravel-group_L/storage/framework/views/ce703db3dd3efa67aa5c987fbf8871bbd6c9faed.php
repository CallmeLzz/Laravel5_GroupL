<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('script'); ?>
	<script src="js/script.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('front.home.type_34.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('front.home.type_16.content_0', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('front.home.type_16.content_1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>