<?php $__env->startSection('title', 'Admin Banner Page - Update'); ?>

<?php $__env->startSection('main-content'); ?>
    <?php echo $__env->make('back_end.home.edit.edit_banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('back_end.home.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>