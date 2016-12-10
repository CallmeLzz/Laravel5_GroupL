<div class="admin-content">
    <div class="main">
        <table style="width: 100%">
            <?php if(isset($detail)): ?>
                <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <form method="POST" action="<?php echo e(route('editDetail')); ?>" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <tr>
                        <th>ID</th>
                        <td><?php echo e($value['detail_id']); ?></td>
                    </tr>
                    <tr>
                        <td hidden="true"><input type="text" name="id" value="<?php echo e($value['detail_id']); ?>" hidden=""></td>
                        <th>Title</th>
                        <td><input type="text" name="title" value="<?php echo e($value['detail_title']); ?>" autofocus></td>
                    </tr>
                    <tr>
                        <th>Brief Description</th>
                        <td>
                            <textarea name="b_description" style="width: 450px;" rows="4"><?php echo e($value['detail_brief_description']); ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>Full Description</th>
                        <td>
                            <textarea name="f_description" style="width: 450px;" rows="4"><?php echo e($value['detail_full_description']); ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>Images</th>
                        <td><img src="../<?php echo e($value['detail_image']); ?>"></td>
                    </tr>
                    <tr>
                        <th>Change Image</th>
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