<div class="admin-content">
    <div class="main">
    <h3> Category Page - Update </h3>
        <table style="width: 100%">
            @if(isset($cate))
                @foreach($cate as $value)
                    {!! Form::open(['route' => 'editCategory', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <tr>
                            <th>ID</th>
                            <td>{{ $value['category_id'] }}</td>
                        </tr>
                        <tr>
                            {!! Form::text('category_id', $value->category_id, array('hidden')) !!}
                            <th>Title</th>
                            <td>{!! Form::text('title', $value->category_title, array('autofocus')) !!}</td>
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
                            <td><img src="{{ asset($value['category_image']) }}"></td>
                        </tr>
                        <tr>
                            <th>Change Image</th>
                            <td>{!! Form::file('fileToUpload') !!}</td>
                        </tr>
                        <tr>
                            <th>Operations</th>
                            <td>{!! Form::submit('Update') !!}</td>
                        </tr>
                    {!! Form::close() !!}
                @endforeach
            @endif
        </table>
    </div>
</div>