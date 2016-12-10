<div class="right-menu">
	<form action="<?php echo e(route('searchBanner')); ?>">
	    <label>Banner Search</label><br>
	    <input type="text" name="q" placeholder="Enter your key...">
	    <input type="submit" value="GO"><br>
	    <tr>
            <label>Type: </label>
            <td>
                <select name="type" style="color: black;">
                    <option value="id">ID</option>
                    <option value="title">TITLE</option>
                    <option value="image">IMAGE</option>
                    <option value="type">TYPE</option>
                </select>
            </td>
        </tr>
	</form>
</div>