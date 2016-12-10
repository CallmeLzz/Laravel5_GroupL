<?php if(isset($detail)): ?>
	<?php $__env->startSection('title', 'Admin Detail Page'); ?>

	<?php $__env->startSection('main-content'); ?>
	    <?php echo $__env->make('back_end.detail.page.content_detail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php $__env->stopSection(); ?>

	<?php $__env->startSection('right-menu'); ?>
		<?php echo $__env->make('back_end.detail.layout.right_detail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php $__env->stopSection(); ?>
<?php else: ?>
<?php endif; ?>
<?php echo $__env->make('back_end.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>