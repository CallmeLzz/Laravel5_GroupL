<div class="admin-content">
    <div class="main">
    <?php if(isset($message)): ?>
        <label><font color="red"><?php echo $message; ?></font></label>
    <?php endif; ?>
        <table style="width: 100%">
            <form action="<?php echo e(route('addMenu')); ?>">
                <tr>
                    <th>ID</th>
                    <td><input type="text" name="menu_id" value="" autofocus></td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td><input type="text" name="menu_title" value=""></td>
                </tr>

                <tr>
                    <th>Level</th>
                    <td>
                        <select name="menu_level">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Parents</th>
                    <td>
                        <select name="menu_parents">
                            <option value=""></option>
                        <?php if(isset($menu_id)): ?>
                            <?php $__currentLoopData = $menu_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <option value="<?php echo e($value['menu_id']); ?>"><?php echo e($value['menu_id']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        <?php endif; ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th>Operations</th>
                    <td><input type="submit" value="Add"></td>
                </tr>
            </form>
        </table>
    </div>
</div>