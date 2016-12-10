<?php $__env->startSection('title', 'Admin Menu Page - Add'); ?>

<?php $__env->startSection('main-content'); ?>
    <?php echo $__env->make('back_end.category.main.add.add', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back_end.category.main.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>