<div class="admin-content">
    <div class="main">
    <h3> Detail Page - Update </h3>
        <table style="width: 100%">
            @if(isset($detail))
                @foreach($detail as $value)
                    {!! Form::open(['route' => 'editDetail', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <tr>
                            <th>ID</th>
                            <td>{{ $value['detail_id'] }}</td>
                        </tr>
                        <tr>
                            {!! Form::text('id', $value->detail_id, array('hidden')) !!}
                            <th>Title</th>
                            <td>{!! Form::text('title', $value->detail_title, array('autofocus')) !!}</td>
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
                            <td><img src="{{ asset($value['detail_image']) }}"></td>
                        </tr>
                        <tr>
                            <th>Change Image</th>
                            <td>{!! Form::file('fileToUpload') !!}</td>
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
                            <td>{!! Form::submit('Update') !!}</td>
                        </tr>
                    {!! Form::close() !!}
                @endforeach
            @endif
        </table>
    </div>
</div>