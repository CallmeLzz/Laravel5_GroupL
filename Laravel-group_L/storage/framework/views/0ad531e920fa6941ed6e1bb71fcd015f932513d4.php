<?php $__env->startSection('title', 'Admin Page'); ?>

<?php $__env->startSection('main-content'); ?>
    <?php echo $__env->make('back_end.page.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('back_end.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>