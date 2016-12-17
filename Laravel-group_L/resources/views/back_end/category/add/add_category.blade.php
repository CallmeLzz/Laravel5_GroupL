<div class="admin-content">
    <div class="main">
    <h3> Category Page - Add </h3>
    @if(isset($message))
        <label><font color="red"><?php echo $message; ?></font></label>
    @endif
        <table style="width: 100%">
            {!! Form::open(['route' => 'addCategory', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <tr>
                    <th>Title</th>
                    <td>{!! Form::text('title', null, array('autofocus')) !!}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{!! Form::text('description') !!}</td>
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
                    <td>{!! Form::file('fileToUpload') !!}</td>
                </tr>
                <tr>
                    <th>Operations</th>
                    <td>{!! Form::submit('Add') !!}</td>
                </tr>
            {!! Form::close() !!}
        </table>
    </div>
</div>