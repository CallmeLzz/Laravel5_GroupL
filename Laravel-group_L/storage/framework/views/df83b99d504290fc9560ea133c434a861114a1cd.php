<div class="admin-content">
    <div class="main">
    <h3> Detail Page </h3>
        <label> DETAIL </label>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Brief Desciption</th>
                <th>Full Desciption</th>
                <th>Images</th>
                <th>Operations</th>
            </tr>
        <?php if(isset($detail)): ?>
            <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <tr>
                <td><?php echo e($value['detail_id']); ?></td>
                <td><?php echo e($value['detail_title']); ?></td>
                <td><?php echo e(substr($value['detail_brief_description'], 0, 80)); ?>...</td>
                <td><?php echo e(substr($value['detail_full_description'], 0, 80)); ?>...</td>
                <td><img class="img_zoom" src="../<?php echo e($value['detail_image']); ?>"></td>
                <td>
                    <a href="<?php echo e(route('editDetailView')); ?>?id=<?php echo e($value['detail_id']); ?>" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                    <button class="btn btn-danger pull left submitDelete" source="<?php echo e(route('deleteDetail')); ?>?id=<?php echo e($value['detail_id']); ?>">Delete</button>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        <?php endif; ?>
        </table>
    </div>
</div>