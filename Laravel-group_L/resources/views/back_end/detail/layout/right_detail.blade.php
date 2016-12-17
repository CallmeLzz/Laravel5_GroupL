<div class="right-menu">
    {!! Form::open(['route' => 'searchDetail', 'method' => 'GET']) !!}
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
    {!! Form::close() !!}
</div>