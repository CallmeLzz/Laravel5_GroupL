<div class="admin-content">
    <div class="main">
    <h3> Detail Page - Update </h3>
        <table style="width: 100%">
            @if(isset($detail))
                @foreach($detail as $value)
                <form method="POST" action="{{ route('editDetail') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <tr>
                        <th>ID</th>
                        <td>{{ $value['detail_id'] }}</td>
                    </tr>
                    <tr>
                        <td hidden="true"><input type="text" name="id" value="{{ $value['detail_id'] }}" hidden=""></td>
                        <th>Title</th>
                        <td><input type="text" name="title" value="{{ $value['detail_title'] }}" autofocus></td>
                    </tr>
                    <tr>
                        <th>Brief Description</th>
                        <td>
                            <textarea name="b_description" style="width: 450px;" rows="4">{{ $value['detail_brief_description'] }}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>Full Description</th>
                        <td>
                            <textarea name="f_description" style="width: 450px;" rows="4">{{ $value['detail_full_description'] }}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>Images</th>
                        <td><img src="../{{ $value['detail_image'] }}"></td>
                    </tr>
                    <tr>
                        <th>Change Image</th>
                        <td><input type="file" name="fileToUpload"></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>
                            <select name="type">
                                <option value="{{ $value['detail_type'] }}">{{ $value['detail_type']}}</option>
                            @if(isset($menu))
                                @foreach($menu as $temp)
                                    <?php if($temp['menu_title'] != $value['detail_type']): ?>
                                        <option value="{{ $temp['menu_title'] }}">{{ $temp['menu_title']}}</option>
                                    <?php endif ?>
                                @endforeach
                            @endif
                            </select>
                        </td>
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