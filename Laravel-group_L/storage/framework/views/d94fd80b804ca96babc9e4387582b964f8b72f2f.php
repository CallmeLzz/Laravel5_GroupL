<div class="admin-content">
    <div class="main">
        <h3> Banner Page </h3>
        <label> BANNER </label>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Images</th>
                <th>Images Source</th>
                <th>Operations</th>
            </tr>
        <?php if(isset($banner)): ?>
            <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <tr>
                <td><?php echo e($value['banner_id']); ?></td>
                <td><?php echo e($value['banner_title']); ?></td>
                <td><img class="img_zoom" src="../<?php echo e($value['banner_img']); ?>"></td>
                <td><?php echo e($value['banner_img']); ?></td>
                <td>
                    <a href="<?php echo e(route('editBannerView')); ?>?id=<?php echo e($value['banner_id']); ?>" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                    <form action="<?php echo e(route('deleteBanner')); ?>">
                        <button class="btn btn-danger pull left" name="id" value="<?php echo e($value['banner_id']); ?>">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        <?php endif; ?>
        </table>
    </div>
</div>