<div class="type-34">
    <div id="myProgress">
        <div id="myBar"></div>
    </div>
    <div class="banner owl-carousel owl-theme">
    <?php if(isset($banner)): ?>
        <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <div class="item">
            <img src="<?php echo e($value->banner_img); ?>">
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    <?php endif; ?>
    </div>
</div>