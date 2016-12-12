<div class="admin-content">
    <div class="main">
        <h1> Admin Page </h1>
        <h3> Welcome to Admin Page </h3>
        {!! Form::open(array('url' => 'admin/page', 'method' => 'GET')) !!}
        	{!! Form::label('username: ') !!} {!! Form::text('username') !!}
        	{!! Form::label('password: ') !!} {!! Form::text('password') !!}
        	{!! Form::submit('Show') !!}
        {!! Form::close() !!}
    </div>
</div>