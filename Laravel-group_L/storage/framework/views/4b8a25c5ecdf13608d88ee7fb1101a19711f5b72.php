<?php if(isset($cate) && isset($menu)): ?>
	<?php $__env->startSection('title', 'Admin Category Page - Update'); ?>

	<?php $__env->startSection('main-content'); ?>
	    <?php echo $__env->make('back_end.category.edit.edit_category', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php $__env->stopSection(); ?>

	<?php $__env->startSection('right-menu'); ?>
		<?php echo $__env->make('back_end.category.layout.right_category', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php $__env->stopSection(); ?>
<?php else: ?>
<?php endif; ?>

<?php echo $__env->make('back_end.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>