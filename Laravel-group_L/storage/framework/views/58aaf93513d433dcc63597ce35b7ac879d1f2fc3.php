<div class="right-menu">
	<form action="<?php echo e(route('searchMenu')); ?>">
	    <label>Category Search</label><br>
	    <input type="text" name="key" placeholder="Enter your key...">
	    <input type="submit" value="GO"><br>
	    <tr>
            <label>Type: </label>
            <td>
                <select name="type" style="color: black;">
                    <option value="id">ID</option>
                    <option value="title">TITLE</option>
                    <option value="description">DESCRIPTION</option>
                    <option value="type">TYPE</option>
                    <option value="image">IMAGE</option>
                </select>
            </td>
        </tr>
	</form>
</div>