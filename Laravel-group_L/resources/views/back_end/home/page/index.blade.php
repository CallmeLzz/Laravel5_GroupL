@extends('back_end.masterpage')
@if(isset($banner))
	@section('title', 'Admin Banner Page')

	@section('main-content')
	    @include('back_end.home.page.content_banner')
	@stop

	@section('right-menu')
		@include('back_end.home.layout.right_banner')
	@stop
@elseif(isset($menu))
	@section('title', 'Admin Menu Page')

	@section('main-content')
	    @include('back_end.home.page.content_menu')
	@stop

	@section('right-menu')
		@include('back_end.home.layout.right_menu')
	@stop
@endif