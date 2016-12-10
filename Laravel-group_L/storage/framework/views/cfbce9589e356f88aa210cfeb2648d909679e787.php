<div class="admin-content">
    <div class="main">
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Level</th>
                <th>Operations</th>
            </tr>
            <?php if(isset($menu)): ?>
                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <form action="update">
                    <tr>
                        <td><?php echo e($value['menu_id']); ?></td>
                        <td hidden="true"><input type="text" name="menu_id" value="<?php echo e($value['menu_id']); ?>" hidden=""></td>
                        <td><input type="text" name="menu_title" value="<?php echo e($value['menu_title']); ?>" autofocus></td>
                        <td><input type="text" name="menu_level" value="<?php echo e($value['menu_level']); ?>"></td>
                        <td><input type="submit" value="Update"></td>
                    </tr>
                </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            <?php endif; ?>
        </table>
    </div>
</div>