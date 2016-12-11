@extends('front_end.masterpage')

@section('title', 'Home')

@section('style')
	<?php
	    if (!class_exists('lessc')) {
	        include ('./libs/lessc.inc.php');
	    }
	    $less = new lessc;
	    /*======================== Mine ========================*/
	        $less->compileFile('less/masterpage/type_16_weather.less', 
	        	'css/masterpage/type_16_weather.css');
	        $less->compileFile('less/home/type_16_content.less', 'css/home/type_16_content.css');
	        $less->compileFile('less/home/type_16_reservation.less', 'css/home/type_16_reservation.css');
	        $less->compileFile('less/home/type_16_content_0.less', 'css/home/type_16_content_0.css');
	        $less->compileFile('less/home/type_16_content_2.less', 'css/home/type_16_content_2.css');
	    /*======================== endMine ========================*/
	    
	    /*======================== ST ========================*/
	        $less->compileFile('less/home/top-nav.less', 'css/home/top-nav.css');
	        $less->compileFile('less/home/banner.less', 'css/home/banner.css');
	        $less->compileFile('less/home/type-34.less', 'css/home/type-34.css');
	    /*======================== endST ========================*/

	    /*======================== T ========================*/
	        $less->compileFile('less/masterpage/type_45-footer.less', 'css/masterpage/type_45-footer.css');
	    /*======================== endT ========================*/
	?>
	<!-- ======================== Mine ======================== -->
	    <link rel="stylesheet" type="text/css" href="../css/weather-icons.min.css">
	    <link rel="stylesheet" type="text/css" href="../css/js_composer.min.css">
	    <link rel="stylesheet" type="text/css" href="../css/masterpage/type_16_weather.css">
	    <link rel="stylesheet" type="text/css" href="../css/home/type_16_content.css">
	    <link rel="stylesheet" type="text/css" href="../css/home/type_16_reservation.css">
	    <link rel="stylesheet" type="text/css" href="../css/home/type_16_content_0.css">
	    <link rel="stylesheet" type="text/css" href="../css/home/type_16_content_2.css">
	    <link rel="stylesheet" type="text/css" href="../css/owlcarousel/owl.carousel.css">
	<!-- ======================== endMine ======================== -->
	<!-- ======================== ST ======================== -->
	    <link rel="stylesheet" type="text/css" href="../css/home/top-nav.css">
	    <link rel="stylesheet" type="text/css" href="../css/home/banner.css">
	    <link rel="stylesheet" type="text/css" href="../css/home/type-34.css">
	    <link rel="stylesheet" type="text/css" href="../css/owlcarousel/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" href="../css/owlcarousel/owl.theme.default.min.css">
	<!-- ======================== endST ======================== -->
	<!-- ======================== T ======================== -->
	    <link rel="stylesheet" type="text/css" href="../css/masterpage/type_45-footer.css">
	<!-- ======================== T ======================== -->
@stop
@section('script')
	<script src="../js/script.js"></script>
	<!-- ======================== Mine ======================== -->
	    <script type="text/javascript" src="../js/owl.carousel.js"></script>
	<!-- ======================== endMine ======================== -->
	<!-- ======================== ST ======================== -->
	    <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
	    <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
	    <!-- <script type="text/javascript" src="../js/script.js"></script> -->
	    <script type="text/javascript" src="../js/demo-slideshow-2.0.js"></script>
	<!-- ======================== endST ======================== -->
	<!-- ======================== T ======================== -->
	    <script type="text/javascript" src="../js/jquery-2.2.4.min.js"></script>
	    <script type="text/javascript" src="../js/newjavascript.js"></script>
	<!-- ======================== T ======================== -->
@stop
@section('content')
	<!-- @include('front_end.home.partial.banner') -->
	@include('front_end.home.partial.reservation')
	@include('front_end.home.partial.content_0')
	@include('front_end.home.partial.content_1')
	<!-- @include('front_end.home.partial.content_2') -->
@stop