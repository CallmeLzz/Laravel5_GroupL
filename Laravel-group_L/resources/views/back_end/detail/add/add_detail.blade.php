<div class="admin-content">
    <div class="main">
    <h3> Detail Page - Add </h3>
    @if(isset($message))
        <label><font color="red"><?php echo $message; ?></font></label>
    @endif
        <table style="width: 100%">
            {!! Form::open(['route' => 'addDetail', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <tr>
                    <th>Title</th>
                    <td>{!! Form::text('title', null, array('autofocus')) !!}</td>
                </tr>
                <tr>
                    <th>Brief Description</th>
                    <td>{!! Form::text('brief_description') !!}</td>
                </tr>
                <tr>
                    <th>Full Description</th>
                    <td>
                        {!! Form::textarea('full_description', null, array('rows' => '4')) !!}
                    </td>
                </tr>
                <tr>
                    <th>Images</th>
                    <td>{!! Form::file('fileToUpload') !!}</td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>
                        {!! Form::select('type', $menu) !!}
                    </td>
                </tr>
                <tr>
                    <th>Operations</th>
                    <td>{!! Form::submit('Add') !!}</td>
                </tr>
            {!! Form::close() !!}
        </table>
    </div>
</div>