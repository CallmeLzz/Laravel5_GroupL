@extends('back_end.masterpage')
@if(isset($banner))
	@section('title', 'Admin Banner Page - Update')

	@section('main-content')
	    @include('back_end.home.edit.edit_banner')
	@stop

	@section('right-menu')
		@include('back_end.home.layout.right_banner')
	@stop
@elseif(isset($menu))
	@section('title', 'Admin Menu Page - Update')

	@section('main-content')
	    @include('back_end.home.edit.edit_menu')
	@stop

	@section('right-menu')
		@include('back_end.home.layout.right_menu')
	@stop
@endif