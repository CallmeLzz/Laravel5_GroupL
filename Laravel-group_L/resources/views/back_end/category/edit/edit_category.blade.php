<div class="admin-content">
    <div class="main">
        <table style="width: 100%">
            @if(isset($cate))
                @foreach($cate as $value)
                <form method="POST" action="{{ route('editCategory') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <tr>
                        <th>ID</th>
                        <td>{{ $value['category_id'] }}</td>
                    </tr>
                    <tr>
                        <td hidden="true"><input type="text" name="category_id" value="{{ $value['category_id'] }}" hidden=""></td>
                        <th>Title</th>
                        <td><input type="text" name="title" value="{{ $value['category_title'] }}" autofocus></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>
                            <textarea name="description" style="width: 450px;" rows="4">{{ trim($value['category_description']) }}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>
                            <select name="type">
                                <option value="{{ $value['category_type'] }}">{{ $value['category_type']}}</option>
                            @if(isset($menu))
                                @foreach($menu as $temp)
                                    <?php if($temp['menu_title'] != $value['category_type']): ?>
                                        <option value="{{ $temp['menu_title'] }}">{{ $temp['menu_title']}}</option>
                                    <?php endif ?>
                                @endforeach
                            @endif
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Images</th>
                        <td><img src="../{{ $value['category_image'] }}"></td>
                    </tr>
                    <tr>
                        <th>Change Image</th>
                        <td><input type="file" name="fileToUpload"></td>
                    </tr>
                    <tr>
                        <th>Operations</th>
                        <td><input type="submit" value="Update"></td>
                    </tr>
                </form>
                @endforeach
            @endif
        </table>
    </div>
</div>