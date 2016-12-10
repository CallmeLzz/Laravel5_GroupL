<?php $__env->startSection('title', 'Search Page'); ?>

<?php $__env->startSection('main-content'); ?>
    <?php echo $__env->make('front.admin.search.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.admin.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>