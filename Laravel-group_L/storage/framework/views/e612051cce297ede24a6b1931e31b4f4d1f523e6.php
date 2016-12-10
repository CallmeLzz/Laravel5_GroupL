<div class="admin-content">
    <div class="main">
    <?php if(isset($message)): ?>
        <label><font color="red"><?php echo $message; ?></font></label>
    <?php endif; ?>
        <table style="width: 100%">
            <form method="POST" action="<?php echo e(route('addCategory')); ?>" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <tr>
                    <th>ID</th>
                    <td><input type="text" name="id" value="" autofocus></td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td><input type="text" name="title" value=""></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input type="text" name="description" value=""></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>
                        <select name="type">
                        <?php if(isset($menu)): ?>
                            <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <option value="<?php echo e($value['menu_title']); ?>"><?php echo e($value['menu_title']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        <?php endif; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Images</th>
                    <td><input type="file" name="fileToUpload"></td>
                </tr>
                <tr>
                    <th>Operations</th>
                    <td><input type="submit" value="Add"></td>
                </tr>
            </form>
        </table>
    </div>
</div>