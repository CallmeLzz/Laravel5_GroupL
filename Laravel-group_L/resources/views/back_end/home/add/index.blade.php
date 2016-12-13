@extends('back_end.masterpage')
@if(isset($banner))
	@section('title', 'Admin Banner Page - Add')

	@section('main-content')
	    @include('back_end.home.add.add_banner')
	@stop

	@section('right-menu')
		@include('back_end.home.layout.right_banner')
	@stop
@elseif(isset($menuID))
	@section('title', 'Admin Menu Page - Add')

	@section('main-content')
	    @include('back_end.home.add.add_menu')
	@stop

	@section('right-menu')
		@include('back_end.home.layout.right_menu')
	@stop
@endif