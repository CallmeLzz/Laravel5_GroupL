<div class="right-menu">
	<form action="{{ route('searchBanner') }}">
	    <label>Menu Search</label><br>
	    <input type="text" name="q" placeholder="Enter your key...">
	    <input type="submit" value="GO"><br>
	    <tr>
            <label>Type: </label>
            <td>
                <select name="type" style="color: black;">
                    <option value="id">ID</option>
                    <option value="title">TITLE</option>
                    <option value="level">LEVEL</option>
                    <option value="parents">PARENTS</option>
                </select>
            </td>
        </tr>
	</form>
</div>