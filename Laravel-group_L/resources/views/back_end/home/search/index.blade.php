@extends('back_end.masterpage')
@if(isset($searchBanner))
	@section('title', 'Search Banner Page')

	@section('main-content')
	    @include('back_end.home.search.content_banner')
	@stop

	@section('right-menu')
		@include('back_end.home.layout.right_banner')
	@stop
@elseif(isset($searchMenu))
	@section('title', 'Search Menu Page')

	@section('main-content')
	    @include('back_end.home.search.content_menu')
	@stop

	@section('right-menu')
		@include('back_end.home.layout.right_menu')
	@stop
@endif