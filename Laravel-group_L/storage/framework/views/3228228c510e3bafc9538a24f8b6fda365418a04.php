<div class="admin-content">
    <div class="main">
    <?php if(isset($message)): ?>
        <label><font color="red"><?php echo $message; ?></font></label>
    <?php endif; ?>
        <table style="width: 100%">
            <form action="<?php echo e(route('addBanner')); ?>" method="POST" enctype="multipart/form-data">
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
                    <th>Images</th>
                    <td><input type="file" name="fileToUpload"></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>
                        <select name="type">
                            <option value="home">Home</option>
                            <option value="category">Category</option>
                            <option value="detail">Detail</option>
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