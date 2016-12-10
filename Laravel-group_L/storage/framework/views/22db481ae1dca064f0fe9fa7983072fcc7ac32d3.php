<div class="admin-content">
    <div class="main">
        <table style="width: 100%">
            <?php if(isset($cate)): ?>
                <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <form method="POST" action="<?php echo e(route('editCategory')); ?>" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <tr>
                        <th>ID</th>
                        <td><?php echo e($value['category_id']); ?></td>
                    </tr>
                    <tr>
                        <td hidden="true"><input type="text" name="category_id" value="<?php echo e($value['category_id']); ?>" hidden=""></td>
                        <th>Title</th>
                        <td><input type="text" name="title" value="<?php echo e($value['category_title']); ?>" autofocus></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>
                            <textarea name="description" style="width: 450px;" rows="4"><?php echo e(trim($value['category_description'])); ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>
                            <select name="type">
                                <option value="<?php echo e($value['category_type']); ?>"><?php echo e($value['category_type']); ?></option>
                            <?php if(isset($menu)): ?>
                                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temp): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <?php if($temp['menu_title'] != $value['category_type']): ?>
                                        <option value="<?php echo e($temp['menu_title']); ?>"><?php echo e($temp['menu_title']); ?></option>
                                    <?php endif ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            <?php endif; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Images</th>
                        <td><img src="../<?php echo e($value['category_image']); ?>"></td>
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