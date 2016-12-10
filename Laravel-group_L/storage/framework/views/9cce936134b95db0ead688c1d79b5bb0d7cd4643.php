<div class="admin-content">
    <div class="main">
    <?php if(isset($message)): ?>
        <label><font color="red"><?php echo $message; ?></font></label>
    <?php endif; ?>
        <table style="width: 100%">
            <form method="POST" action="<?php echo e(route('addDetail')); ?>" enctype="multipart/form-data">
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
                    <th>Brief Description</th>
                    <td><input type="text" name="brief_description" value=""></td>
                </tr>
                <tr>
                    <th>Full Description</th>
                    <td>
                        <textarea name="full_description" style="width: 450px;" rows="4"></textarea>
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