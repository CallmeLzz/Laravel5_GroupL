@extends('front_end.masterpage')

@section('title', 'Category')

@section('style')
	<?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        /*======================== Mine ========================*/
            $less->compileFile('less/masterpage/type_16_weather.less', 
            	'css/masterpage/type_16_weather.css');
            $less->compileFile('less/category/type_16_junior_suite.less', 
            	'css/category/type_16_junior_suite.css');
            $less->compileFile('less/category/type_16_cate_0.less', 
            	'css/category/type_16_cate_0.css');
            $less->compileFile('less/category/type_16_make_reservation.less', 
            	'css/category/type_16_make_reservation.css');
        /*======================== endMine ========================*/
        /*======================== ST ========================*/
            $less->compileFile('less/home/top-nav.less', 'css/home/top-nav.css');
        /*======================== endST ========================*/
        /*======================== T ========================*/
            $less->compileFile('less/masterpage/type_45-footer.less', 'css/masterpage/type_45-footer.css');
            $less->compileFile('less/category/list_1.less', 'css/category/list_1.css');
            $less->compileFile('less/category/list_2.less', 'css/category/list_2.css');
            $less->compileFile('less/category/list_3.less', 'css/category/list_3.css');
        /*======================== endT ========================*/
    ?>

    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/weather-icons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/js_composer.min.css')}}">
    <!-- ======================== Mine ======================== -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/weather-icons.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/js_composer.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/masterpage/type_16_weather.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/category/type_16_junior_suite.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/category/type_16_cate_0.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/category/type_16_make_reservation.css')}}">
    <!-- ======================== endMine ======================== -->
    <!-- ======================== ST ======================== -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/home/top-nav.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/home/type-34.css')}}">
    <!-- ======================== endST ======================== -->
    <!-- ======================== T ======================== -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/masterpage/type_45-footer.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/category/list_1.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/category/list_2.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/category/list_3.css')}} ">
    <!-- ======================== T ======================== -->
@stop

@section('script')
	<!-- ======================== ST ======================== -->
        <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
    <!-- ======================== endST ======================== -->
    <!-- ======================== T ======================== -->
        <script type="text/javascript" src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/newjavascript.js')}}"></script>
    <!-- ======================== T ======================== -->
@stop

@section('content')
	@include('front_end.category.partial.list_1')
	@include('front_end.category.partial.list_2')
	@include('front_end.category.partial.round_cove')
	@include('front_end.category.partial.cate_0')
	@include('front_end.category.partial.junior_suite')
	@include('front_end.category.partial.make_reservation')
@stop