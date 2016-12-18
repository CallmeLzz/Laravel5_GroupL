<div class="admin-content">
    <div class="main">
    <h3> Detail Page - Update Feature </h3>
        <table style="width: 100%">
            @if(isset($feature))
                @foreach($feature as $value)
                    {!! Form::open(['route' => 'editFeature', 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
                        <tr>
                            <th>ID</th>
                            <td>{{ $value['feature_id'] }}</td>
                        </tr>
                        <tr>
                            {!! Form::text('id', $value->feature_id, array('hidden')) !!}
                            <th>Title</th>
                            <td>{!! Form::text('title', $value->feature_title, array('autofocus')) !!}</td>
                        </tr>
                        <tr>
                            <th>Content</th>
                            <td>{!! Form::text('content', $value->feature_content) !!}</td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td>
                                <select name="type">
                                    <option value="{{ $value['feature_type'] }}">{{ $value['feature_type']}}</option>
                                @if(isset($menu_default))
                                    @foreach($menu_default as $temp)
                                        <?php if($temp['menu_title'] != $value['feature_type']): ?>
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