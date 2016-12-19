@extends('front_end.masterpage')

@section('title', 'Detail')

@section('style')
	<?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        /*======================== Mine ========================*/
            $less->compileFile('less/masterpage/type_16_weather.less', 'css/masterpage/type_16_weather.css');
            $less->compileFile('less/detail/book_this_room.less', 'css/detail/book_this_room.css');
        /*======================== endMine ========================*/

        /*======================== ST ========================*/
            $less->compileFile('less/home/top-nav.less', 'css/home/top-nav.css');
            $less->compileFile('less/detail/detail-1.less', 'css/detail/detail-1.css');
            $less->compileFile('less/detail/detail-2.less', 'css/detail/detail-2.css');
        /*======================== endST ========================*/

        /*======================== T ========================*/
            $less->compileFile('less/masterpage/type_45-footer.less', 'css/masterpage/type_45-footer.css');
        /*======================== endT ========================*/
    ?>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- ======================== Mine ======================== -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/weather-icons.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/js_composer.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/masterpage/type_16_weather.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/detail/book_this_room.css') }}">
    <!-- ======================== endMine ======================== -->
    <!-- ======================== ST ======================== -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/home/top-nav.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/home/type-34.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/detail/detail-1.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/detail/detail-2.css') }}">
    <!-- ======================== endST ======================== -->
    <!-- ======================== T ======================== -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/masterpage/type_45-footer.css') }}">
    <!-- ======================== T ======================== -->
@stop

@section('script')
	<!-- ======================== ST ======================== -->
        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <!-- ======================== endST ======================== -->
    <!-- ======================== T ======================== -->
        <script type="text/javascript" src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/newjavascript.js') }}"></script>
    <!-- ======================== T ======================== -->
@stop

@section('content')
    @include('front_end.detail.partial.list_1')
	@include('front_end.detail.partial.detail_1')
	@include('front_end.detail.partial.detail_2')
	@include('front_end.detail.partial.book_this_room')
@stop