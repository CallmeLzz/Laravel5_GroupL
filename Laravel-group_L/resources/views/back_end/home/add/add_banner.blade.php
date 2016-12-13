<div class="admin-content">
    <div class="main">
    <h3> Home Page - Add Banner </h3>
    @if(isset($message))
        <label><font color="red"><?php echo $message; ?></font></label>
    @endif
        <table style="width: 100%">
            {!! Form::open(['route' => 'addBanner', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <tr> 
                    <th> {!! Form::label('Title') !!} </th>
                    <td> {!! Form::text('title', null, array('autofocus' => 'autofocus')) !!} </td>
                </tr>
                <tr>
                    <th> {!! Form::label('Images') !!} </th>
                    <td> {!! Form::file('fileToUpload') !!}</td>
                </tr>
                <tr>
                    <th> {!! Form::label('Type') !!} </th>
                    <td> 
                        {!! 
                            Form::select('type', [
                                'home' => 'Home', 
                                'category' => 'Category', 
                                'detail' => 'Detail'
                                ]) 
                        !!}
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