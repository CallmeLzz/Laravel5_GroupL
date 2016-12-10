<div class="admin-content">
    <div class="main">
        <table style="width: 100%">
            <?php if(isset($banner)): ?>
                <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <form method="POST" action="<?php echo e(route('editBanner')); ?>" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <td hidden="true"><input type="text" name="id" value="<?php echo e($value['banner_id']); ?>" hidden=""></td>
                    <tr>
                        <th>Title</th>
                        <td><input type="text" name="title" value="<?php echo e($value['banner_title']); ?>" autofocus></td>
                    </tr>
                    <tr>
                        <th>Images</th>
                        <td><img src="../<?php echo e($value['banner_img']); ?>"></td>
                    </tr>
                    <tr>
                        <th>Change Images</th>
                        <td><input type="file" name="fileToUpload"></td>
                        
                    </tr>
                    <tr>
                        <th>Operations</th>
                        <td><input type="submit" value="Update"></td>
                    </tr>
                </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            <?php endif; ?>
        </table>
    </div>
</div>