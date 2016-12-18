<div class="right-menu">
    {!! Form::open(['route' => 'searchDetail', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <label>Detail Search</label><br>
        {!! Form::text('q', null, array('placeholder' => 'Enter your key...')) !!}
        {!! Form::submit('GO') !!}<br>
        <tr>
            <label>Type: </label>
            <td>
                {!! 
                    Form::select('type', [
                        'id' => 'ID',
                        'title' => 'TITLE',
                        'brief_description' => 'BRIEF DESCRIPTION',
                        'full_description' => 'FULL DESCRIPTION',
                        'image' => 'IMAGE',
                        'type' => 'TYPE',
                    ], null, array('style' => 'color: black;'))
                !!}
            </td>
        </tr>
        <tr>
            <td>{!! Form::file('fileToUpload', array('id' => 'fileupload')) !!}</td>
        </tr>
    {!! Form::close() !!}
</div>