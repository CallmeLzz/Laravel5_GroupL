<!DOCTYPE html>
<html>
	<head>
		<title> LOG IN </title>
		<link rel="stylesheet" type="text/css" href="{{ asset('fonts/open-sans.ttf') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/admin/login.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.min.css') }}">

		<script type="text/javascript" src="{{ asset('js/back_end/prefixfree.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/back_end/index.js') }}"></script>
	</head>
	<body>
		<div class="wrapper">
			<!-- <form class="login">
				<p class="title">Log in</p>
				<input type="text" placeholder="Username" autofocus/>
					<i class="fa fa-user"></i>
				<input type="password" placeholder="Password" />
					<i class="fa fa-key"></i>
				<a href="#">Forgot your password?</a>
				<button>
					<i class="spinner"></i>
					<span class="state">Log in</span>
				</button>
			</form> -->
			{!! Form::open(['route' => 'login', 'method' => 'POST', 'class' => 'login']) !!}
				<p class="title">Log in</p>
				{!! Form::text('username', null, array('placeholder' => 'Username', 'autofocus')) !!}
					<i class="fa fa-user"></i>
				{!! Form::text('password', null, array('placeholder' => 'Password')) !!}
					<i class="fa fa-key"></i>
				<a href="#">Forgot your password?</a>
				<i class="spinner"></i>
				<span>
					{!! Form::submit('Log in', array('id' => 'button')) !!}
				</span>
			{!! Form::close() !!}
		</div>
	</body>
</html>