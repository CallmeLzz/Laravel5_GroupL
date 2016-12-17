<div class="right-menu">
    {!! Form::open(['route' => 'searchBanner', 'method' => 'GET']) !!}
        <label>Banner Search</label><br>
        {!! Form::text('q', null, array('placeholder' => 'Enter your key...')) !!}
        {!! Form::submit('GO') !!}<br>
        <tr>
            <label>Type: </label>
            <td>
                {!! 
                    Form::select('type', [
                        'id' => 'ID',
                        'title' => 'TITLE',
                        'image' => 'IMAGE',
                        'type' => 'TYPE'
                    ], null, array('style' => 'color: black;'))
                !!}
            </td>
        </tr>
    {!! Form::close() !!}
</div>