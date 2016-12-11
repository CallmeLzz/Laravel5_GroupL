<div class="admin-content">
    <div class="main">
    <h3> Category Page - Add </h3>
    @if(isset($message))
        <label><font color="red"><?php echo $message; ?></font></label>
    @endif
        <table style="width: 100%">
            <form method="POST" action="{{ route('addCategory') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <tr>
                    <th>Title</th>
                    <td><input type="text" name="title" value="" autofocus></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input type="text" name="description" value=""></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>
                        <select name="type">
                        @if(isset($menu))
                            @foreach($menu as $value)
                                <option value="{{ $value['menu_title']}}">{{ $value['menu_title']}}</option>
                            @endforeach
                        @endif
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