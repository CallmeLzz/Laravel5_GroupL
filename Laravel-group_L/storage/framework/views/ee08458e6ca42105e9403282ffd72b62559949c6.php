<div class="type_45">
    <div class="container">
    <?php if(isset($type_2)): ?>
        <?php $__currentLoopData = $type_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="word3">
                    <p style="margin-top:30px;"> <?php echo e($value->category_title); ?> 
                        <br>voluntate liceret: sese habere. Quis aute iure reprehenderit in voluptate 
                        <br>velit esse. Ab illo tempore, ab est sed immemorabili. Quam temere in 
                        <br>vitiis legem.</p>
                    <h3>Curabitur blandit tempus ardua</h3>
                    <p> <?php echo e($value->category_content); ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <div class="images">
                        <img src="<?php echo e($value->category_img); ?>" style="width: 50%;" >
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    <?php endif; ?>
    </div>
</div>