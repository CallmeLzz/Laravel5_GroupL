@extends('back_end.masterpage')
@if(isset($detail))
	@section('title', 'Admin Detail Page')

	@section('main-content')
	    @include('back_end.detail.page.content_detail')
	@stop

	@section('right-menu')
		@include('back_end.detail.layout.right_detail')
	@stop
@elseif(isset($price))
	@section('title', 'Admin Detail Page - Price')

	@section('main-content')
	    @include('back_end.detail.page.content_price')
	@stop

	@section('right-menu')
		@include('back_end.detail.layout.right_price')
	@stop
@elseif(isset($feature))
	@section('title', 'Admin Detail Page - Feature')

	@section('main-content')
	    @include('back_end.detail.page.content_feature')
	@stop
@endif