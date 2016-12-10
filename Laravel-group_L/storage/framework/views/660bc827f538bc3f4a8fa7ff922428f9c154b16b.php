<?php $__env->startSection('title', 'Admin Category Page'); ?>

<?php $__env->startSection('main-content'); ?>
    <?php echo $__env->make('back_end.category.main.page.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('back_end.category.main.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>