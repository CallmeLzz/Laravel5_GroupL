<div class="right-menu">
    {!! Form::open(['route' => 'searchMenu', 'method' => 'GET']) !!}
        <label>Menu Search</label><br>
        {!! Form::text('q', null, array('placeholder' => 'Enter your key...')) !!}
        {!! Form::submit('GO') !!}<br>
        <tr>
            <label>Type: </label>
            <td>
                {!! 
                    Form::select('type', [
                        'id' => 'ID',
                        'title' => 'TITLE',
                        'level' => 'LEVEL',
                        'parents' => 'PARENTS'
                    ], null, array('style' => 'color: black;'))
                !!}
            </td>
        </tr>
    {!! Form::close() !!}
</div>