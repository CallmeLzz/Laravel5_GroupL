<!DOCTYPE html>
<html>
<head>
    <?php echo $__env->make('front.admin.layout.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <title> <?php echo $__env->yieldContent('title'); ?> </title>

</head>

<body>

    <?php echo $__env->make('front.admin.layout.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="col-md-3 block-left">
        <?php echo $__env->make('front.admin.layout.left_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    <div class="col-md-6">
        <?php echo $__env->yieldContent('main-content'); ?>
    </div>

    <div class="col-md-3 block-right">
        <?php echo $__env->make('front.admin.layout.right_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

</body>
</html>