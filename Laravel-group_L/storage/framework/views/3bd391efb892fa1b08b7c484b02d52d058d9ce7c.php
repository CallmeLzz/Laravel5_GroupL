<div class="admin-content">
    <div class="main">
        <!-- <button id="show">Show Dialog</button> -->
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
            <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <tr>
                <td><?php echo e($value['menu_id']); ?></td>
                <td><?php echo e($value['menu_title']); ?></td>
                <td><?php echo e($value['menu_level']); ?></td>
                <td>
                    <a href="edit?id=<?php echo e($value['menu_id']); ?>" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                    <button class="btn btn-danger pull left submitDelete" source="delete?id=<?php echo e($value['menu_id']); ?>">Delete</button>
                    <!-- <dialog id="window">
                        <h3>Delete confirm !!</h3>  
                        <p>Do you want to delete <?php echo e($value['menu_title']); ?></p>  
                        <button id="ok" source="delete?id=<?php echo e($value['menu_id']); ?>"> OK </button>
                        <button id="cancel"> Cancel </button>
                    </dialog>  -->
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </table>
    </div>
</div>