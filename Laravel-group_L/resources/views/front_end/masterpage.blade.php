<!DOCTYPE html>
<html>
	<head>
		<title> @yield('title') </title>
		@include('front_end.layout.head')
		@yield('style')
		@yield('script')
	</head>

	<body>
		@include('front_end.layout.weather')
		@include('front_end.layout.header')
		
		@yield('content')

		@include('front_end.layout.footer')
	</body>
</html>