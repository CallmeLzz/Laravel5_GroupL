<div class="type-45">
    <div id="page-heading">
    <?php if(isset($type_1)): ?>
        <?php $__currentLoopData = $type_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <div style="background: url(<?php echo e($value->category_img); ?>);background-size: cover;
             background-position: center top;
             width:100%; padding:100px; ">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text">
                        <h1 style="font-weight: 400;
                            /* margin: 15px; */
                            margin-top: 105px;
                            padding: 0px;
                            color: white;
                            "><a href="detail"><?php echo e($value->category_title); ?></a></h1>
                        <p style="color: rgba(97, 104, 115, 0.63);
                           font-size: 20px;
                           margin-top: -2px;
                           ">Starting at $<?php echo e($value->price_rate); ?></p>
                    </div>
                </div>
            </div>
        </div> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    <?php endif; ?>
    </div>
</div>