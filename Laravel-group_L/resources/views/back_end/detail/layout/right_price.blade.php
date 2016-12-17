<div class="right-menu">
    {!! Form::open(['route' => 'searchPrice', 'method' => 'GET']) !!}
        <label>Price Search</label><br>
        {!! Form::text('q', null, array('placeholder' => 'Enter your key...')) !!}
        {!! Form::submit('GO') !!}<br>
        <tr>
            <label>Type: </label>
            <td>
                {!! 
                    Form::select('type', [
                        'id' => 'ID',
                        'rate' => 'RATE',
                        'type' => 'TYPE',
                        'detail' => 'DETAIL'
                    ], null, array('style' => 'color: black;'))
                !!}
            </td>
        </tr>
    {!! Form::close() !!}
</div>