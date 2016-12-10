<?php $__env->startSection('title', 'Admin Banner Page - Add'); ?>

<?php $__env->startSection('main-content'); ?>
    <?php echo $__env->make('back_end.home.banner.add.add', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back_end.home.banner.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>