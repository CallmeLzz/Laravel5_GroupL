<div class="admin-content">
    <div class="main">
    <h3> Category Page </h3>
        <label> CATEGORY </label>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Desciption</th>
                <th>Type</th>
                <th>Images</th>
                <th>Operations</th>
            </tr>
        <?php if(isset($cate)): ?>
            <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <tr>
                <td><?php echo e($value['category_id']); ?></td>
                <td><?php echo e($value['category_title']); ?></td>
                <td><?php echo e(substr($value['category_description'], 0, 80)); ?>...</td>
                <td><?php echo e($value['category_type']); ?></td>
                <td><img class="img_zoom" src="../<?php echo e($value['category_image']); ?>"></td>
                <td>
                    <a href="<?php echo e(route('editCategoryView')); ?>?id=<?php echo e($value['category_id']); ?>" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                    <button class="btn btn-danger pull left submitDelete" source="<?php echo e(route('deleteCategory')); ?>?id=<?php echo e($value['category_id']); ?>">Delete</button>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        <?php endif; ?>
        </table>
    </div>
</div>