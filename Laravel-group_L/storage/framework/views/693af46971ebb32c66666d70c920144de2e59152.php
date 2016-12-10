<div class="admin-content">
    <div class="main">
        <!-- <div>
            <a href="addView" class="btn btn-danger pull left" style="margin-right:3px;">Add</a>
        </div> -->
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Level</th>
                <th>Operations</th>
            </tr>
            <?php if(isset($searchResult)): ?>
                <?php if(is_string($searchResult)): ?>
                    <label><font color="red"><?php echo $searchResult; ?></font></label>
                <?php else: ?>
                    <?php $__currentLoopData = $searchResult; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <tr>
                        <td><?php echo e($value['menu_id']); ?></td>
                        <td><?php echo e($value['menu_title']); ?></td>
                        <td><?php echo e($value['menu_level']); ?></td>
                        <td>
                            <a href="edit?id=<?php echo e($value['menu_id']); ?>" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                            <a href="delete?id=<?php echo e($value['menu_id']); ?>" class="btn btn-danger pull left" style="margin-right:3px;">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                <?php endif; ?>
            <?php endif; ?>
        </table>
    </div>
</div>